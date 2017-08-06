<?php 
include_once("conexionDBL.php");

?>



<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "administracion");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if (isset($_POST['modificar']))
{


   $dateFechaFinMod   = $_POST['dateFinMod'];
    $dateFechaIniMod   = $_POST['dateInicioMod'];
    $intHorasMod       = $_POST['horas'];
    $strNombreMod      = $_POST['cmbNombreMod'];
    $intEncargadoMod   = $_POST['dropRecursoMod'];

$proyectoModf   = (string) @$_POST['cmbNombreMod'];
$nombremod = trim($proyectoModf);


    
/*$sql = "UPDATE proyecto SET fechaDeFinalizacion = '".$dateFechaFinMod."', fechaDeInicio = ['".$dateFechaIniMod."'] nombre = '".trim($strNombreMod)."' persona_idpersona = ".$intEncargadoMod." WHERE nombre ='".$nombremod."'";*/

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

}

$conn->close();
?>

<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "administracion");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if (isset($_POST['eliminar']))
{


$proyectoModf   = (string) @$_POST['cmbNombreMod'];
$nombremod = trim($proyectoModf);


    $sql = "DELETE * from proyecto WHERE nombre ='".$nombremod."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

}

$conn->close();
?>



<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "administracion");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



if (isset($_POST['btnInsertar']))
{

    $dateFechaFin   = $_POST['fechaFin'];
    $dateFechaIni   = $_POST['fechaIni'];
    $intHoras       = $_POST['horas'];
    $strNombre      = $_POST['nombre'];
    $intEncargado   = $_POST['encargado'];
 
 $sql = "INSERT INTO proyecto (fechaDeFinalizacion, fechaDeInicio, horas, nombre, persona_idpersona) VALUES ('".$dateFechaFin."', '".$dateFechaIni."', '".$intHoras."', '".$strNombre."',".$intEncargado.")";
if(mysqli_query($link, $sql)){
    echo "Datos insertados correctamente";
} else{
    echo "Error: No se ha podido establecer la consulta" . mysqli_error($link);
}

 }

 
// Close connection
mysqli_close($link);
?>


<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "administracion");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$cajaFechaIni = @$_POST['dateInicioMod'];
$cajaFechaFin = @$_POST['dateFinMod'];
$cmbEncargado = @$_POST['textPersonaMod'];
$cajaNombreMod = @$_POST['TxtNombreMod'];
$cajaHorasMod = @$_POST['textHorasMod'];
$conexion = new mysqli("localhost","root","","administracion");

if (isset($_POST['buscarMod']))
{

$proyectoBuscarModf   = (string) @$_POST['cmbNombreMod'];
$nombre = trim($proyectoBuscarModf);
echo strlen($nombre);

$consulta = "SELECT * FROM proyecto where nombre='".$nombre."'";
            $respuesta = mysqli_query($conexion, $consulta);
            if ($respuesta) {
                //echo"si conecto";
                $registros = mysqli_affected_rows($conexion);
                if ($registros > 0) {
                    //echo"si encontre";
                    $datos = mysqli_fetch_array($respuesta);
                    $cajaFechaIni = $datos['fechaDeInicio'];
                    $cajaFechaFin = $datos['fechaDeFinalizacion'];
                    $cmbEncargado = $datos['persona_idpersona'];
                    $cajaNombreMod = $datos['nombre'];
                    $cajaHorasMod = $datos['horas'];
                } else {
                    echo "Error en consulta de registros";
                }
            }
        
            
}
 
// Close connection
mysqli_close($link);
?>



<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "administracion");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$cajaFechaIniEli = @$_POST['dateInicioEli'];
$cajaFechaFinEli = @$_POST['dateFinEli'];
$cmbEncargadoEli = @$_POST['textPersonaEli'];
$cajaNombreModEli = @$_POST['TxtNombreEli'];
$cajaHorasModEli = @$_POST['textHorasEli'];
$conexion1 = new mysqli("localhost","root","","administracion");

if (isset($_POST['buscarEli']))
{

$proyectoBuscarEli   = (string) @$_POST['cmbNombreEli'];
$nombreEli = trim($proyectoBuscarEli);

$consulta1 = "SELECT * FROM proyecto where nombre='".$nombreEli."'";
            $respuesta1 = mysqli_query($conexion1, $consulta1);
            if ($respuesta1) {
                //echo"si conecto";
                $registros1 = mysqli_affected_rows($conexion1);
                if ($registros1 > 0) {
                    //echo"si encontre";
                    $datos1 = mysqli_fetch_array($respuesta1);
                    $cajaFechaIniEli = $datos1['fechaDeInicio'];
                    $cajaFechaFinEli = $datos1['fechaDeFinalizacion'];
                    $cmbEncargadoEli = $datos1['persona_idpersona'];
                    $cajaNombreModEli = $datos1['nombre'];
                    $cajaHorasModEli = $datos1['horas'];
                } else {
                    echo "Error en consulta de registros";
                }
            }
        
            
}
 
// Close connection
mysqli_close($link);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script type="text/javascript" src="./js/jquery3.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="prototipo/css" href="EstilosDBL.css">
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

       <form action="<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">

            <p id="profile-name" class="profile-name-card"></p>
                <span id="reauth-email" class="reauth-email"></span>
                <input type="hidden" name="metodo" value="metAcceso"></input>
                Nombre de proyecto:
                <input type="text" id="TxtUsuario" class="form-control" placeholder="Nombre" name="nombre" required autofocus>
                </br>
                Inicio:
                <input type="date" name="fechaIni">
                </br>
                Finalización:
                <input type="date" name="fechaFin">
                </br>
                Horas:
                <input type="text" id="TxtHoras" class="form-control" placeholder="Horas" name="horas" required autofocus>
                </br>
                
                <div class="selectPersona">Recurso:
               
                 <?php

                /*
                 * Código de conexión a una base de datos mediante sintaxis de mysqli
                 */


                $conexion = new mysqli("localhost","root","","administracion");

                if ( $conexion->connect_error ) 
                { 
                    die('Error de Conexión'. $conexion->connect_error);
                }
                else
                {
                    //echo 'Conexion OK';
                }

                $query = 'SELECT * FROM persona';

                $result = $conexion->query($query);

                ?>
                <select name="encargado">    
                    <?php    
                    while ( $row = $result->fetch_array() )    
                    {
                        ?>
                    
                        <option value=" <?php echo $row['idpersona'] ?> ">
                        <?php echo $row['idpersona'] ?>
                        </option>
                        
                        <?php
                    }    
                    ?>        
                </select>
                <?php
                ?>
                </div>
                </br>
                <button type ="submit" name="btnInsertar" value="send to database"> Guardar datos </button>
       </form>
    </div><!-- /container -->

</div>


<div id="Modificar" class="tabcontent">
<form action="" method="POST" name="formularioModificar">
    <div class="container">

        <div class="card card-container">

            <p id="profile-name" class="profile-name-card"></p>


                Seleccione el proyecto que desea modificar:

                  <div class="selectProyecto">
               
                 <?php

                /*
                 * Código de conexión a una base de datos mediante sintaxis de mysqli
                 */


                $conexion = new mysqli("localhost","root","","administracion");

                if ( $conexion->connect_error ) 
                { 
                    die('Error de Conexión'. $conexion->connect_error);
                }
                else
                {
                    //echo 'Conexion OK';
                }

                $query = 'SELECT * FROM proyecto';

                $result = $conexion->query($query);

                ?>
                <select name="cmbNombreMod">    
                    <?php    
                    while ( $row = $result->fetch_array() )    
                    {
                        ?>
                    
                        <option value=" <?php echo $row['nombre'] ?> " >
                        <?php echo $row['nombre']; ?>
                        </option>
                        
                        <?php
                    }    
                    ?>        
                </select>
                <?php
                ?>
                </br>
                <input class="btn btn-lg btn-primary btn-block btn-signin" name="buscarMod" type="submit" value="Buscar">
                </div>

                </br>

                Nombre de proyecto:
                <input type="text" id="TxtNombreMod" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $cajaNombreMod ?>">
                </br>

                Inicio:
                <input type="date" name="dateInicioMod" value="<?php echo $cajaFechaIni ?>">
                </br>
                Finalización:
                <input type="date" name="dateFinMod" value="<?php echo $cajaFechaFin ?>">
                </br>
                Horas:
                <input type="text" name="textHorasMod" value="<?php echo $cajaHorasMod ?>">
               </br>
                Recurso:
                <input type="text" name="textPersonaMod" value="<?php echo $cmbEncargado ?>">
                 <?php

                /*
                 * Código de conexión a una base de datos mediante sintaxis de mysqli
                 */


                $conexion = new mysqli("localhost","root","","administracion");

                if ( $conexion->connect_error ) 
                { 
                    die('Error de Conexión'. $conexion->connect_error);
                }
                else
                {
                    //echo 'Conexion OK';
                }

                $query = 'SELECT * FROM persona';

                $result = $conexion->query($query);

                ?>
                <select name="dropRecursoMod">    
                    <?php    
                    while ( $row = $result->fetch_array() )    
                    {
                        ?>
                    
                        <option value=" <?php echo $row['idpersona'] ?> ">
                        <?php echo $row['idpersona'] ?>
                        </option>
                        
                        <?php
                    }    
                    ?>        
                </select>
                <?php
                ?>

                </br>


                <button class="btn btn-lg btn-primary btn-block btn-signin" name="modificar" type="submit">Modificar datos</button>

        </div><!-- /card-container -->
    </div><!-- /container -->
    </form>
</div>

<div id="Eliminar" class="tabcontent">
 
<form action="" method="POST" name="formularioEliminar">
    <div class="container">

        <div class="card card-container">

            <p id="profile-name" class="profile-name-card"></p>


                Seleccione el proyecto que desea eliminar:

                  <div class="selectProyecto">
               
                 <?php

                /*
                 * Código de conexión a una base de datos mediante sintaxis de mysqli
                 */


                $conexion = new mysqli("localhost","root","","administracion");

                if ( $conexion->connect_error ) 
                { 
                    die('Error de Conexión'. $conexion->connect_error);
                }
                else
                {
                    //echo 'Conexion OK';
                }

                $query = 'SELECT * FROM proyecto';

                $result = $conexion->query($query);

                ?>
                <select name="cmbNombreEli">    
                    <?php    
                    while ( $row = $result->fetch_array() )    
                    {
                        ?>
                    
                        <option value=" <?php echo $row['nombre'] ?> " >
                        <?php echo $row['nombre']; ?>
                        </option>
                        
                        <?php
                    }    
                    ?>        
                </select>
                <?php
                ?>
                </br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" name="buscarEli" type="submit"> Eliminar datos</button>
                </div>

                </br>

                Nombre de proyecto:
                <input type="text" id="TxtNombreEli" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $cajaNombreModEli ?>">
                </br>

                Inicio:
                <input type="date" name="dateInicioEli" value="<?php echo $cajaFechaIniEli ?>">
                </br>
                Finalización:
                <input type="date" name="dateFinEli" value="<?php echo $cajaFechaFinEli ?>">
                </br>
                Horas:
                <input type="text" name="textHorasEli" value="<?php echo $cajaHorasModEli ?>">
               </br>
                Recurso:
                <input type="text" name="textPersonaEli" value="<?php echo $cmbEncargadoEli ?>">
                 <?php

                /*
                 * Código de conexión a una base de datos mediante sintaxis de mysqli
                 */


                $conexion = new mysqli("localhost","root","","administracion");

                if ( $conexion->connect_error ) 
                { 
                    die('Error de Conexión'. $conexion->connect_error);
                }
                else
                {
                    //echo 'Conexion OK';
                }

                $query = 'SELECT * FROM persona';

                $result = $conexion->query($query);

                ?>
                <select name="dropRecursoMod">    
                    <?php    
                    while ( $row = $result->fetch_array() )    
                    {
                        ?>
                    
                        <option value=" <?php echo $row['idpersona'] ?> ">
                        <?php echo $row['idpersona'] ?>
                        </option>
                        
                        <?php
                    }    
                    ?>        
                </select>
                <?php
                ?>

                </br>


                <button class="btn btn-lg btn-primary btn-block btn-signin" name="eliminar" type="submit">Eliminar datos</button>

        </div><!-- /card-container -->
    </div><!-- /container -->
    </form>


</div>


</body>
</html>