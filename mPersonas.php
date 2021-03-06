<!--<?php 
//include_once("conexion.php");

?>-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script type="text/javascript" src="./js/jquery-3.2.0.min.js"></script>

 <script type="text/javascript" src="./js/bootstrap.js"></script>

 <script type="text/javascript" src="./js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="./js/sweetalert2.min.js"></script>
 <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="./css/EstilosDRS.css">
 <link rel="stylesheet" type="text/css" href="./css/jquery-ui.min.css">
 <link rel="stylesheet" type="text/css" href="./css/sweetalert2.min.css">

 <script>

	function openCity(evt, cityName) {
	    // Declare all variables
	    var i, tabcontent, tablinks;

	    // Get all elements with class="tabcontent" and hide them
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }

	    // Get all elements with class="tablinks" and remove the class "active"
	    tablinks = document.getElementsByClassName("tablinks");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].className = tablinks[i].className.replace(" active", "");
	    }

	    // Show the current tab, and add an "active" class to the button that opened the tab
	    document.getElementById(cityName).style.display = "block";
	    evt.currentTarget.className += " active";
	}

</script>


<body>
<div id="Header">
	<p style="color: white; margin-left: 37%; font-size: 2em;  font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">Mantenimiento de Personas</p>
</div>


<div class="tab">
  <button class="tablinks btn" onclick="openCity(event, 'Ingresar')" style="color: white;"> Ingresar</button>
  <button class="tablinks btn" onclick="openCity(event, 'Modificar')" style="color: white;">Modificar</button>
  <button class="tablinks btn" onclick="openCity(event, 'Eliminar')" style="color: white;">Eliminar</button>
</div>

    <div id="Ingresar" class="tabcontent" >

      <div class="container" style="margin-left: 37% ">

            <div class="card card-container">

                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" action="funciones.php" method="POST">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="hidden" name="metodo" value="metAcceso"></input>
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblNombre">Nombre Persona:</label>
                            <input type="text" id="TxtUsuario" class="form-control" placeholder="Nombre Persona" name="txtNombre" required autofocus>
                        </div>
                    </div>    
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblPrimerApellido">Primer Apellido:</label>
                            <input type="text" id="TxtUsuario" class="form-control" placeholder="Primer Apellido" name="txtPrimerApellido" required autofocus>
                        </div>
                    </div>
                    
                   <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblSegundoApellido">Segundo Apellido:</label>
                            <input type="text" id="TxtUsuario" class="form-control" placeholder="Segundo Apellido" name="txtSegundoApellido" required autofocus></br>
                        </div>
                    </div>
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblFechaNacimientos">Fecha Nacimiento:</label>
                            <input type="date" id="dtpFechaNacimiento" class="date" value="" name="dtpFechaNacimiento" required autofocus>    
                        </div></br></br>
                    </div>

                    <div class="row inner-wrapper-row">
                        <div class="col-md-2"> 
                           <button class="btn btn-lg btn-primary" type="submit">Ingresar</button>
                        </div>
                        <div class="col-md-2"> 
                           <button class="btn-lg btn-danger" style="display: inline-block; float: left;">Cancelar</button>
                        </div>
                    </div>

                    </br>
                    
                </form><!-- /form -->
            </div><!-- /card-container -->
        </div><!-- /container -->

    </div>

    <div id="Modificar" class="tabcontent">
     <div class="container" style="margin-left: 37% ">

            <div class="card card-container">

                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" action="funciones.php" method="POST">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="hidden" name="metodo" value="metAcceso"></input>
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblNombre2">Nombre Persona:</label>
                            <input type="text" id="TxtUsuario2" class="form-control" placeholder="Nombre Persona" name="txtNombre" required autofocus>
                        </div>
                    </div>    
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblPrimerApellido2">Primer Apellido:</label>
                            <input type="text" id="TxtUsuario2" class="form-control" placeholder="Primer Apellido" name="txtPrimerApellido" required autofocus>
                        </div>
                    </div>
                    
                   <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblSegundoApellido2">Segundo Apellido:</label>
                            <input type="text" id="TxtUsuario2" class="form-control" placeholder="Segundo Apellido" name="txtSegundoApellido" required autofocus></br>
                        </div>
                    </div>
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblFechaNacimientos2">Fecha Nacimiento:</label>
                            <input type="date" id="dtpFechaNacimiento2" class="date" value="" name="dtpFechaNacimiento" required autofocus>    
                        </div></br></br>
                    </div>

                    <div class="row inner-wrapper-row">
                        <div class="col-md-2"> 
                           <button class="btn btn-lg btn-primary" type="submit">Ingresar</button>
                        </div>
                        <div class="col-md-2"> 
                           <button class="btn-lg btn-danger" style="display: inline-block; float: left;">Cancelar</button>
                        </div>
                    </div>

                    </br>
                    
                </form><!-- /form -->
            </div><!-- /card-container -->
        </div><!-- /container -->
    </div>

    <div id="Eliminar" class="tabcontent">
      <div class="container" style="margin-left: 37% ">

            <div class="card card-container">

                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" action="funciones.php" method="POST">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="hidden" name="metodo" value="metAcceso"></input>
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblNombre3">Nombre Persona:</label>
                            <input type="text" id="TxtUsuario3" class="form-control" placeholder="Nombre Persona" name="txtNombre" required autofocus>
                        </div>
                    </div>    
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblPrimerApellido3">Primer Apellido:</label>
                            <input type="text" id="TxtUsuario3" class="form-control" placeholder="Primer Apellido" name="txtPrimerApellido" required autofocus>
                        </div>
                    </div>
                    
                   <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblSegundoApellido3">Segundo Apellido:</label>
                            <input type="text" id="TxtUsuario3" class="form-control" placeholder="Segundo Apellido" name="txtSegundoApellido" required autofocus></br>
                        </div>
                    </div>
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblFechaNacimientos3">Fecha Nacimiento:</label>
                            <input type="date" id="dtpFechaNacimiento3" class="date" value="" name="dtpFechaNacimiento" required autofocus>    
                        </div></br></br>
                    </div>

                    <div class="row inner-wrapper-row">
                        <div class="col-md-2"> 
                           <button class="btn btn-lg btn-primary" type="submit">Ingresar</button>
                        </div>
                        <div class="col-md-2"> 
                           <button class="btn-lg btn-danger" style="display: inline-block; float: left;">Cancelar</button>
                        </div>
                    </div>

                    </br>
                    
                </form><!-- /form -->
            </div><!-- /card-container -->
        </div><!-- /container -->
    </div>



</body>


</html>