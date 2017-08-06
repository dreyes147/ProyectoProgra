<?php
include_once("conexion.php");
session_start();
if(isset($_SESSION['usuario'])){
	header("location: index.php");
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log in</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<script src="js/jquery-3.2.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/sweetalert2.min.js"></script>
<script src="js/codigo.js"></script>
</head>

<body  style="background-color:rgb(29,36,69);">
<div class="login-form container" id="sesion">
     <p id="titulo">Iniciar Sesión</p>
     <form name="form1" method="post" action="validacion.php">
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Usuario" id="Username" name="Username">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Contraseña" id="Password" name="Password">
       <i class="fa fa-lock"></i>
     </div>
     <input type="submit" id="ingresar" name="boton" class="btn-signIn"value="Ingresar" />
     </form>
     <br />
     <br />
   	 <input type="button" id="lista" value="Opciones"/>
   <div id="botones">
   <br />
   <a href="#"><button  class="listas">Olvido su contraseña?</button></a>
   <br />
   <a href="#"><button  class="listas">Olvido su usuario?</button></a>
   <br />
   <a href="#"><button  class="listas">Registrarse</button></a>
   </div>
    </div>
</body>
</html>
