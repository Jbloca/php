<?php

// Archivo: logout.php
require_once 'csrf_functions.php';
require_once 'utils.php';

// Validar el token CSRF
if (isset($_GET['csrf_token']) && validateCSRFToken($_GET['csrf_token'])) {
    cerrarSesion(); // Cerrar la sesión del usuario
}
