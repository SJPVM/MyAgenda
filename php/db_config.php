<?php
// db_config.php

$servername = "localhost";
$username = "Samhdez";
$password = "pavo";
$dbname = "NotificacionesDB";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
