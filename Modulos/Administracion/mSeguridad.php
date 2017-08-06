<?php
$id = @$_POST['txtId'];
$idPersona = @$_POST['txtIdPersona'];
$contrasena = @$_POST['txtContrasena'];
$IdPermiso = @$_POST['txtIdPermiso'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "administracion";
$conn = new mysqli($servername, $username, $password, $db);

  $boton = @$_POST["boton"];
switch ($boton) {
    case "Ingresar":
        $consulta = "insert into seguridad (contrasena, persona_idpersona, idpermisos) values ('$contrasena', '$idPersona', '$IdPermiso')";
        $respuesta = mysqli_query($conn, $consulta);
        if ($respuesta) {
            $registros = mysqli_affected_rows($conn);
        }
    break;
    case "Modificar":
        $consulta = "update seguridad set contrasena = '$contrasena', persona_idpersona = '$idPersona', idpermisos = '$IdPermiso' where idSeguridad = '$id'";
        $respuesta = mysqli_query($conn, $consulta);
        if ($respuesta) {
            $registros = mysqli_affected_rows($conn);
        }
    break;
    case "Eliminar":
         $consulta = "delete from seguridad where idSeguridad = '$id'";
        $respuesta = mysqli_query($conn, $consulta);
        if ($respuesta) {
            $registros = mysqli_affected_rows($conn);
        }
    break;
    case "Consultar":   
        $consulta = "select idSeguridad, contrasena, persona_idpersona, idpermisos from seguridad where idSeguridad= '". $id ."'" ;
        $respuesta = mysqli_query($conn,$consulta);
        if ($respuesta) {                    
            $registros = mysqli_affected_rows($conn);
            if ($registros > 0) {
                $datos = mysqli_fetch_array($respuesta);
                $id = $datos['idSeguridad'];
                $contrasena = $datos['contrasena'];
                $persona_idpersona = $datos['persona_idpersona'];
                $IdPermiso = $datos['idpermisos'];
            }else{
                echo "error con registros";
            }
        }else{

            echo "Error con conexion";
        }
    break;
     default:
    break;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<script type="text/javascript" src="./../../js/jquery-3.2.0.min.js"></script>

 <script type="text/javascript" src="./../../js/bootstrap.js"></script>

 <script type="text/javascript" src="./../../js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="./../../js/sweetalert2.min.js"></script>
 <link rel="stylesheet" type="text/css" href="./../../css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="./../../css/EstilosDRS.css">
 <link rel="stylesheet" type="text/css" href="./../../css/jquery-ui.min.css">
 <link rel="stylesheet" type="text/css" href="./../../css/sweetalert2.min.css">

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
         mostrar(cityName);
    }

function mostrar(e){
    switch(e){
        case "Ingresar":
            $("#Ingresar").show();
            setTimeout(mostrar,1000);
        break;
        case "Modificar":
            $("#Modificar").show();
            setTimeout(mostrar,1000);
        break;
        case "Eliminar":
            $("#Eliminar").show();
            setTimeout(mostrar,1000);
        break;

    }
}
mostrar();

    function Procesar(){
                var Resultado;

 
                    Persona = {txtNombre: $("#txtNombre").val()};


                $.ajax({
                    url:'funciones.php',
                    type:'POST',
                    data: {Parametro: Persona},
                    dataType: 'json',
                    success: function(d){
                        
                   
                        $("#txtNombre").val(d.idpersona)
                    },
                    error: function(d){
                        console.log(d.responseText);
                        
                    }
                });
                    
            }

</script>


<body>
<div id="Header">
    <p style="color: white; margin-left: 37%; font-size: 2em;  font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">Mantenimiento de Seguridad</p>
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
                <form class="form-signin" action="" method="POST">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="hidden" name="metodo" value="SelectPersona"></input>
                      <div class="row inner-wrapper-row" style="margin-left: -1%;">
                        <div class="col-md-4"> 
                            <label id="lblDescripcion2">Id Persona:</label>
                            <input type="text" id="txtPermiso2" class="form-control" placeholder="Id Persona" name="txtIdPersona" value="<?php echo $idPersona ?>"  autofocus>
                        </div>
                    </div> 

                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblDescripcion2">contraseña:</label>
                            <input type="text" id="txtPermiso2" class="form-control" placeholder="contraseña" name="txtContrasena" value="<?php echo $contrasena ?>"  autofocus>
                        </div>
                    </div> 
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblDescripcion2">Id Permiso:</label>
                            <input type="text" id="txtPermiso2" class="form-control" placeholder="Id Permiso" name="txtIdPermiso" value="<?php echo $IdPermiso ?>"  autofocus>
                        </div>
                    </div> </br>    

                    <div class="row inner-wrapper-row">
                        <div class="col-md-2"> 
                           <button class="btn btn-lg btn-primary" id="boton" name="boton" value="Ingresar" type="submit">Ingresar</button>
                        </div>
                        <div class="col-md-2"> 
                           <button class="btn-lg btn-danger" style="display: inline-block; float: left;" onclick=" Procesar()">Cancelar</button>
                        </div>
                    </div>
                    
                </form><!-- /form -->
            </div><!-- /card-container -->
        </div><!-- /container -->

    </div>

    <div id="Modificar" class="tabcontent">
        <div class="container" style="margin-left: 37% ">

            <div class="card card-container">

                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" action="" method="POST">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="hidden" name="metodo" value="metAcceso"></input>
                    
                    <div class="inner-wrapper-row" style="margin-left: -1%;">
                        <div class="col-md-2"> 
                            <label id="lblId">Id:</label>
                            <input type="text" id="txtId" class="form-control" placeholder="Id" name="txtId" value="<?php echo $id ?>" required autofocus>
                        </div>
                    </div> 

                    <div class="row inner-wrapper-row">
                        <div class="col-md-2"> 
                             <button class="btn btn-lg btn-primary" onclick="mostrar('Modificar')" type="submit" id="boton" name="boton" value="Consultar" style="width: 80%; display: inline-block;  margin-top: 10%; margin-left: 20%;">Consultar</button>
                        </div>
                    </div> 

                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblDescripcion2">Id Persona:</label>
                            <input type="text" id="txtIdPersona2" class="form-control" placeholder="Id Persona" name="txtIdPersona" value="<?php echo $idPersona ?>"  autofocus>
                        </div>
                    </div> 

                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblDescripcion2">contraseña:</label>
                            <input type="text" id="txtContrasena2" class="form-control" placeholder="contraseña" name="txtContrasena" value="<?php echo $contrasena ?>"  autofocus>
                        </div>
                    </div> 
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblDescripcion2">Id Permiso:</label>
                            <input type="text" id="txtIdPermiso2" class="form-control" placeholder="Id Permiso" name="txtIdPermiso" value="<?php echo $IdPermiso ?>"  autofocus>
                        </div>
                    </div> </br>     
                   
                    <div class="row inner-wrapper-row">
                        <div class="col-md-2"> 
                           <button class="btn btn-lg btn-primary" id="boton" name="boton" value="Modificar" type="submit">Modificar</button>
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
                <form class="form-signin" action="" method="POST">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="hidden" name="metodo" value="metAcceso"></input>
                    
                   <div class="inner-wrapper-row" style="margin-left: -1%;">
                        <div class="col-md-2"> 
                            <label id="lblId">Id:</label>
                            <input type="text" id="txtId3" class="form-control" placeholder="Id" name="txtId" value="<?php echo $id ?>" required autofocus>
                        </div>
                    </div> 

                    <div class="row inner-wrapper-row">
                        <div class="col-md-2"> 
                             <button class="btn btn-lg btn-primary" onclick="mostrar('Modificar')" type="submit" id="boton" name="boton" value="Consultar" style="width: 80%; display: inline-block;  margin-top: 10%; margin-left: 20%;">Consultar</button>
                        </div>
                    </div> 

                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblDescripcion2">Id Persona:</label>
                            <input type="text" id="txtIdPersona3" class="form-control" placeholder="Id Persona" name="txtIdPersona" value="<?php echo $idPersona ?>"  autofocus>
                        </div>
                    </div> 

                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblDescripcion2">contraseña:</label>
                            <input type="text" id="txtContrasena3" class="form-control" placeholder="contraseña" name="txtContrasena" value="<?php echo $contrasena?>"  autofocus>
                        </div>
                    </div> 
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblDescripcion2">Id Permiso:</label>
                            <input type="text" id="txtIdPermiso3" class="form-control" placeholder="Id Permiso" name="txtIdPermiso" value="<?php echo $IdPermiso ?>"  autofocus>
                        </div>
                    </div> </br>    
                    
                    <div class="row inner-wrapper-row">
                        <div class="col-md-2"> 
                           <button class="btn btn-lg btn-primary" id="boton" name="boton" type="submit" value="Eliminar">Eliminar</button>
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