<?php
$user = @$_POST['Username'];
$pass = @$_POST['Password'];
$servername = "localhost";
$username = "root";
$password = "";
$db = "administracion";
$conn = new mysqli($servername, $username, $password, $db);
if (isset($_POST['Username']) & isset($_POST['Password'])){
	$consulta=mysqli_query($conn, "select persona_idpersona, contrasena from seguridad where persona_idpersona='". $user ."' and contrasena='". $pass ."'");
	if (mysqli_num_rows($consulta)>0){
		session_start();
		$_SESSION['usuario']=$user;
		setcookie("usuario",'Mi cookie de sesion',time()+3600);
		?>
        <script type="text/javascript">
		  window.location="recursos.php";
		  </script>
          <?php
		} else {
			?>
			<script type="text/javascript">
           alert("User or password incorrect");
		   window.location="index.php";
		    </script>
       <?php   
			}
	}
?>
