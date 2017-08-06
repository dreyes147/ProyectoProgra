<?php
include_once("conexion.php");
$mensaje = 0;
$nom = "";
$tele = "";
$corre = "";
$naci = "";
$dire = "";
$boton = @$_POST["boton"];
switch ($boton) {
    case "VER CONTACTO":
        break;
    case "ELIMINAR CONTACTO" :
        break;
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Agenda de contactos</title>
     <style>
	 body{
		 background-color:rgb(29,36,69);
		 font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
		 }
	 .miniTitulos{
	color:#FFFFFF;
	font-size:16px;
	font-weight: bold;
	font-style:italic;
	 }
	.tabla{
	padding-top: 2px;
	padding-left: 20px;
	margin: 20px 20px 20px 20px;
	width:1050px;height:370px;-webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;background-color:#990000;
	}
	.tablaCentral{
		width:80%;
		}
	.tablaDerecha{
		float:right;
		width: 50%;
		margin-top: 6%;
		}	
	.tablaIzquierda{
		float: left;
		margin-top: 1%;
		width:50%;
		}	
	 </style>
        <script src="js/jquery-3.2.0.min.js"></script>
        <script src="js/tabla.js"></script>
    </head>

    <body>
    <center>
    
       <b><i> <p style="color:rgba(255,255,255,1.00); font-size:2em;">ASIGNACI&Oacute;N DE RECURSOS</p></i></b>
        <div id="tabla" class="tablaCentral">
        <form name="form1" class="tabla" method="post" action="">
		
        
        <div class="tablaIzquierda">
        <p class="miniTitulos">Identificaci&oacute;n	:</p>
		<input type="text" id="identificacion" name="identificacion">
        <br />
        <br />
        <p class="miniTitulos">Tipo de Recurso:</p>
		<input type="text" id="cargo" name="cargo">
        <br />
        <br />
        <p class="miniTitulos">Tarea Asignada:</p>
        <input type="area" id="tarea" name="tarea">
        
        </div>
        <div class="tablaDerecha">
        
<input type="button" value="Ver Proyectos actuales" class="botonProyectos">
		
		</div>
        	
		</form>
        
        </div>
</font>
<div align="right">
    <a href="http://localhost/proyecto_progra3/cerrar.php" target="_parent"><input name="boton" type="submit" class="myButton4" id="boton" value="Salir de la agenda"></a>
</div>
</body>
</html>