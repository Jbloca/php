<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "campusvi_report";

$db = mysqli_connect($servername, $username, $password, $database);

if (!$db) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
