<?php
$servername = "sql303.infinityfree.com"; // Reemplaza esto con el nombre del servidor proporcionado
$username = "if0_36858889"; 
$password = "ufetista2024"; 
$dbname = "posuftdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa";
}
?>
