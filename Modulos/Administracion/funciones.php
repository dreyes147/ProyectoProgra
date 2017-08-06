<?php
$pass = $_POST['txtNombre'];
$servername = "localhost";
$username = "root";
$password = "";
$db = "administracion";
$conn = new mysqli($servername, $username, $password, $db);

	
		$consulta=mysqli_query($conn, "select idpersona, nombre, apellido1, apellido2 from persona where idpersona= '". $pass ."'" );
		if (mysqli_num_rows($consulta)>0){
			echo json_encode($consulta);
		}
	


 
	
			
	

?>