<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");

header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: strict-origin-when-cross-origin");

require_once 'csrf_functions.php';

require_once 'connection.php';


session_start();
session_regenerate_id(true);

// Configurar la zona horaria si es necesario
date_default_timezone_set('America/Lima'); // Ajusta esto a tu zona horaria

// Constants for failed login attempts
define('MAX_FAILED_ATTEMPTS', 5);
define('LOCKOUT_TIME', 15 * 60); // 15 minutes in seconds



function validateHash($hiddenHash)
{
  list($timestamp, $randomString, $receivedHash) = explode('|', $hiddenHash);

  // Verificar si el hash ha expirado (5 minutos de validez)
  if (time() - ($timestamp / 1000) > 300) {
    return false;
  }

  $secretKey = "TuClaveSecretaAquí"; // Debe coincidir con la clave en el cliente
  $dataToHash = "{$timestamp}|{$randomString}|{$secretKey}";
  $calculatedHash = hash('sha256', $dataToHash);

  return hash_equals($calculatedHash, $receivedHash);
}

// Function to log failed login attempts
function logFailedAttempt($ip_address)
{
  global $db;
  $current_time = date('Y-m-d H:i:s'); // Get current time in MySQL datetime format

  // Check if there's an existing record for this IP
  $stmt = $db->prepare("SELECT attempts, last_attempt FROM failed_logins WHERE ip_address = ?");
  $stmt->bind_param("s", $ip_address);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($row = $result->fetch_assoc()) {
    // Update existing record
    $attempts = $row['attempts'] + 1;
    $stmt = $db->prepare("UPDATE failed_logins SET attempts = ?, last_attempt = ? WHERE ip_address = ?");
    $stmt->bind_param("iss", $attempts, $current_time, $ip_address);
  } else {
    // Insert new record
    $attempts = 1;
    $stmt = $db->prepare("INSERT INTO failed_logins (ip_address, attempts, last_attempt) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $ip_address, $attempts, $current_time);
  }

  if ($stmt->execute()) {
    error_log("Attempt logged successfully for IP: $ip_address at time: $current_time");
  } else {
    error_log("Failed to log attempt for IP: $ip_address. Error: " . $stmt->error);
  }
}

// Function to check if IP is blocked
function isIPBlocked($ip_address)
{
  global $db;
  $stmt = $db->prepare("SELECT attempts, last_attempt FROM failed_logins WHERE ip_address = ?");
  $stmt->bind_param("s", $ip_address);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($row = $result->fetch_assoc()) {
    if ($row['attempts'] >= MAX_FAILED_ATTEMPTS) {
      $last_attempt = new DateTime($row['last_attempt']);
      $now = new DateTime();
      $time_passed = $now->getTimestamp() - $last_attempt->getTimestamp();
      if ($time_passed < LOCKOUT_TIME) {
        return true; // IP is blocked
      } else {
        // Reset attempts after lockout time
        $stmt = $db->prepare("UPDATE failed_logins SET attempts = 0 WHERE ip_address = ?");
        $stmt->bind_param("s", $ip_address);
        $stmt->execute();
      }
    }
  }
  return false; // IP is not blocked
}

// Function to reset failed attempts on successful login
function resetFailedAttempts($ip_address)
{
  global $db;
  $stmt = $db->prepare("DELETE FROM failed_logins WHERE ip_address = ?");
  $stmt->bind_param("s", $ip_address);
  $stmt->execute();
}

// Initialize error message variable
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $ip_address = $_SERVER['REMOTE_ADDR'];

  if (!validateCSRFToken($_POST['csrf_token'])) {
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Location: login.php");
    exit();
  }

  // Check if IP is blocked due to too many failed attempts
  if (isIPBlocked($ip_address)) {
    $error_message = "Demasiados intentos fallidos. Por favor, intente más tarde.";
  } else {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $password = $_POST['password'];


    if (empty($nombre) || empty($password)) {
      $error_message = "Por favor, complete todos los campos.";
    } else {
      // Use prepared statements to prevent SQL injection
      $sql = "SELECT id, nombre, email, password FROM usuarios WHERE nombre = ?";
      $stmt = mysqli_prepare($db, $sql);
      mysqli_stmt_bind_param($stmt, "s", $nombre);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if ($result && $row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
          // Successful login
          setcookie('user_id', $row['id'], time() + 3600, '/');
          $_SESSION['user_id'] = $row['id'];
          $_SESSION['last_activity'] = time();
          resetFailedAttempts($ip_address);
          header('Location: index.php');
          exit();
        } else {
          logFailedAttempt($ip_address);
          $error_message = "Credenciales inválidas. Por favor, inténtelo de nuevo.";
        }
      } else {
        logFailedAttempt($ip_address);
        $error_message = "Credenciales inválidas. Por favor, inténtelo de nuevo.";
      }
    }
  }
}

?>




<!doctype html>
<html lang="en" data-bs-theme="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

  <!-- Favicon -->
  <link rel="shortcut icon" href="./assets/favicon/faviconRe.ico" type="image/x-icon">

  <!-- Map CSS -->
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css">

  <!-- Libs CSS -->
  <link rel="stylesheet" href="./assets/css/libs.bundle.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="./assets/css/theme.bundle.css">


  <!-- Title -->
  <title>Dashboard</title>

</head>

</head>

<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

  <!-- CONTENT
    ================================================== -->
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5 align-self-center">

        <!-- Heading -->
        <h1 class="display-4 text-center mb-3">
          Iniciar Sesión
        </h1>

        <!-- Subheading -->
        <p class="text-body-secondary text-center mb-5">
          Libre acceso al Dashboard
        </p>


        <?php
        if (!empty($error_message)) {
          echo "<div class='error-message' role='alert'>";
          echo "<strong>Error:</strong> " . htmlspecialchars($error_message);
          echo "</div>";
        }
        ?>

        <!-- Form -->
        <form method="POST" action="login.php">

          <!-- Email address -->
          <div class="form-group">
            <!-- Label -->
            <label class="form-label">
              Usuario
            </label>
            <!-- Input -->
            <input type="text" name="nombre" class="form-control" placeholder="Usuario">
          </div>

          <!-- Password -->
          <div class="form-group">
            <div class="row">
              <div class="col">
                <!-- Label -->
                <label class="form-label">
                  Contraseña
                </label>
              </div>
              <div class="col-auto">

              </div>
            </div> <!-- / .row -->

            <!-- Input group -->
            <div class="input-group input-group-merge">
              <!-- Input -->
              <input class="form-control" name="password" type="password" placeholder="Ingresa tu contraseña">
            </div>
          </div>

          <!-- Submit -->


          <input type="hidden" id="csrf-token" name="csrf_token">

          <button type="submit" class="btn btn-lg w-100 btn-primary mb-3">
            Iniciar Sesión
          </button>

          <!-- Link -->

        </form>

      </div>
      <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">

        <!-- Image -->
        <div class="bg-cover h-100 min-vh-100 mt-n1 me-n3" style="background-image: url(assets/img/covers/auth-side-cover1.jpg);"></div>

      </div>
    </div> <!-- / .row -->
  </div>

  <!-- JAVASCRIPT -->
  <!-- Map JS -->


  <script>
    function setCSRFToken() {
      document.getElementById('csrf-token').value = '<?php echo generateCSRFToken(); ?>';
    }

    window.onload = setCSRFToken;
  </script>

  <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

  <!-- Vendor JS -->
  <script src="./assets/js/vendor.bundle.js"></script>

  <!-- Theme JS -->
  <script src="./assets/js/theme.bundle.js"></script>

</body>

</html>