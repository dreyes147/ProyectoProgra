<?php 
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Fallo en la conexion: " . $conn->connect_error);
} 
else{
//echo "Conectado Satisfactoriamente";
}
?>