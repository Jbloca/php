<?php
session_start();

function verificarSesion() {
    $tiempoExpiracion = 3600; // 1 hora de inactividad
    $tiempoRegeneracion = 300; // 5 minutos para regenerar ID de sesión

    // Verificar si el usuario está autenticado
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    // Verificar tiempo de inactividad
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $tiempoExpiracion) {
        cerrarSesion(); // Cerrar sesión si ha expirado
    } else {
        $_SESSION['last_activity'] = time(); // Actualizar el tiempo de actividad
    }

    // Regenerar el ID de sesión periódicamente
    if (!isset($_SESSION['session_created'])) {
        $_SESSION['session_created'] = time();
    } elseif (time() - $_SESSION['session_created'] > $tiempoRegeneracion) {
        session_regenerate_id(true);
        $_SESSION['session_created'] = time();
    }
}

function cerrarSesion() {
    $_SESSION = [];
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    }
    session_destroy();


    // Eliminar la cookie del token CSRF
    setcookie('csrf_token', '', time() - 3600, '/', '', true, true);

    if (isset($_SERVER['HTTP_COOKIE'])) {
        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
        foreach ($cookies as $cookie) {
            $parts = explode('=', $cookie);
            $name = trim($parts[0]);
            setcookie($name, '', time() - 3600, '/');
            setcookie($name, '', time() - 3600, '/', '', true, true);
        }
    }
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    header("Expires: 0");
    header("Location: login.php");
    exit();
}
?>