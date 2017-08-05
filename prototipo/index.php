<?php 
include_once("conexion.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script type="text/javascript" src="./js/jquery3.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
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

	<style type="text/css">


    /* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

.tabcontent {
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s; /* Fading effect takes 1 second */
}

@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

	</style>




</head>


<body>

<a>Proyectos</a>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Ingresar')">Ingresar</button>
  <button class="tablinks" onclick="openCity(event, 'Modificar')">Modificar</button>
  <button class="tablinks" onclick="openCity(event, 'Eliminar')">Eliminar</button>
</div>


<div id="Ingresar" class="tabcontent">

  <div class="container">

        <div class="card card-container">

            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="funciones.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="hidden" name="metodo" value="metAcceso"></input>
                Nombre de proyecto:
                <input type="text" id="TxtUsuario" class="form-control" placeholder="Nombre" name="TxtUsu" required autofocus>
                </br>
                Inicio:
                <input type="date" name="dateInicio">
                </br>
                Finalización:
                <input type="date" name="dateFin">
                </br>
                Recurso:
                <select name="estado">
                <!--<?php echo $combobit; ?>-->
                </select>
                </br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Ingresar</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->

</div>

<div id="Modificar" class="tabcontent">
  <div class="container">

        <div class="card card-container">

            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="funciones.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="hidden" name="metodo" value="metAcceso"></input>
                Nombre de proyecto:
                <input type="text" id="TxtUsuario" class="form-control" placeholder="Nombre" name="TxtUsu" required autofocus>
                </br>
                Inicio:
                <input type="date" name="dateInicioMod">
                </br>
                Finalización:
                <input type="date" name="dateFinMod">
                </br>
                Recurso:
                <select name="dropRecursoMod">
                <!--<?php echo $combobit; ?>-->
                </select>
                </br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Modificar</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</div>

<div id="Eliminar" class="tabcontent">
  <div class="container">

        <div class="card card-container">

            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="funciones.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="hidden" name="metodo" value="metAcceso"></input>
                Nombre de proyecto:
                <select name="dropProyectoEliminar">
                <!--<?php echo $combobit; ?>-->
                </select>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Buscar</button>
                </br>
                Inicio:
                <input type="date" name="dateInicio">
                </br>
                Finalización:
                <input type="date" name="dateFin">
                </br>
                Recurso:
                <select name="estado">
                <!--<?php echo $combobit; ?>-->
                </select>
                </br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Eliminar</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</div>

  





</body>
</html>