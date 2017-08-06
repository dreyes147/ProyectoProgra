<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "administracion";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Fallo en la conexion: " . $conn->connect_error);
<<<<<<< HEAD
} else{
echo "Conectado Satisfactoriamente";
}
=======
} else {
	//echo "Conexion Satisfactoria";
	}
>>>>>>> 2f1cf98aa1f7ebd20c718b299399ca4a2534e65d
?>