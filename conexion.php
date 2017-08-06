<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "administracion";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Fallo en la conexion: " . $conn->connect_error);
} else {
	//echo "Conexion Satisfactoria";
	}
?>