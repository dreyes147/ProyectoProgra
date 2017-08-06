<?php
$id = @$_POST['txtIdentificacion'];
$nom = @$_POST['txtNombre'];
$ape1 = @$_POST['txtPrimerApellido'];
$ape2 = @$_POST['txtSegundoApellido'];
$FecNacimiento = @$_POST['dtpFechaNacimiento'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "administracion";
$conn = new mysqli($servername, $username, $password, $db);

  $boton = @$_POST["boton"];
switch ($boton) {
    case "Ingresar":
        $consulta = "insert into persona (idpersona, nombre, apellido1, apellido2, fechaNacimiento) values ('$id','$nom','$ape1','$ape2','$FecNacimiento')";
        $respuesta = mysqli_query($conn, $consulta);
        if ($respuesta) {
            $registros = mysqli_affected_rows($conn);
        }
    break;
    case "Modificar":
        $consulta = "update persona set nombre = '$nom' , apellido1 = '$ape1', apellido2 = '$ape2', fechaNacimiento = '$FecNacimiento' where idpersona = '$id'";
        $respuesta = mysqli_query($conn, $consulta);
        if ($respuesta) {
            $registros = mysqli_affected_rows($conn);
        }
    break;
    case "Eliminar":
         $consulta = "delete from persona where idpersona = '".$id."'";
        $respuesta = mysqli_query($conn, $consulta);
        if ($respuesta) {
            $registros = mysqli_affected_rows($conn);
        }
    break;
    case "Consultar":   
        $consulta = "select idpersona, nombre, apellido1, apellido2, fechaNacimiento from persona where idpersona= '". $id ."'" ;
        $respuesta = mysqli_query($conn,$consulta);
        if ($respuesta) {                    
            $registros = mysqli_affected_rows($conn);
            if ($registros > 0) {
                $datos = mysqli_fetch_array($respuesta);
                $id = $datos['idpersona'];
                $nom = $datos['nombre'];
                $ape1 = $datos['apellido1'];
                $ape2 = $datos['apellido2'];
                $FecNacimiento = $datos['fechaNacimiento'];
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
                <form class="form-signin" action="" method="POST">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="hidden" name="metodo" value="SelectPersona"></input>
                     <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblIdentificacion">Identificacion Persona:</label>
                            <input type="text" id="txtIdentificacion" class="form-control" placeholder="Identificacion" name="txtIdentificacion" required autofocus>
                        </div>
                    </div>   

                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblNombre">Nombre Persona:</label>
                            <input type="text" id="txtNombre" class="form-control" placeholder="Nombre Persona" name="txtNombre" autofocus >
                        </div>
                    </div>    
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblPrimerApellido">Primer Apellido:</label>
                            <input type="text" id="txtPrimerApellido" class="form-control" placeholder="Primer Apellido" name="txtPrimerApellido"  autofocus >
                        </div>
                    </div>
                    
                   <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblSegundoApellido">Segundo Apellido:</label>
                            <input type="text" id="txtSegundoApellido" class="form-control" placeholder="Segundo Apellido" name="txtSegundoApellido"  autofocus ></br>
                        </div>
                    </div>
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblFechaNacimientos">Fecha Nacimiento:</label>
                            <input type="date" id="dtpFechaNacimiento" class="date" value="" name="dtpFechaNacimiento"  autofocus>    
                        </div></br></br>
                    </div>

                    <div class="row inner-wrapper-row">
                        <div class="col-md-2"> 
                           <button class="btn btn-lg btn-primary" id="boton" name="boton" onclick="mostrar('Ingresar')" value="Ingresar" type="submit">Ingresar</button>
                        </div>
                        <div class="col-md-2"> 
                           <button class="btn-lg btn-danger" id="boton" name="can" style="display: inline-block; float: left;" >Cancelar</button>
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
                <form class="form-signin" action="" method="POST">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="hidden" name="metodo" value="metAcceso"></input>
                    
                    <div class=" inner-wrapper-row" style="margin-left: -1%;">
                        <div class="col-md-2"> 
                            <label id="lblIdentificacion2">Identificacion Persona:</label>
                            <input type="text" id="txtIdentificacion2" class="form-control" style="width: 80%;" placeholder="Identificacion" name="txtIdentificacion" required autofocus value="<?php echo $id ?>">
                        </div>
                    </div> 
                    <div class="row inner-wrapper-row">
                        <div class="col-md-2"> 
                             <button class="btn btn-lg btn-primary" onclick="mostrar('Modificar')" type="submit" id="boton" name="boton" value="Consultar" style="width: 80%; display: inline-block;  margin-top: 10%; margin-left: 20%;">Consultar</button>
                        </div>
                    </div> 
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblNombre2">Nombre Persona:</label>
                            <input type="text" id="txtNombre2" class="form-control" placeholder="Nombre Persona" name="txtNombre" value="<?php echo $nom ?>"  autofocus>
                        </div>
                    </div>    
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblPrimerApellido2">Primer Apellido:</label>
                            <input type="text" id="txtPrimerApellido2" class="form-control" placeholder="Primer Apellido" name="txtPrimerApellido" autofocus value="<?php echo $ape1 ?>">
                        </div>
                    </div>
                    
                   <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblSegundoApellido2">Segundo Apellido:</label>
                            <input type="text" id="txtSegundoApellido2" class="form-control" placeholder="Segundo Apellido" name="txtSegundoApellido" autofocus value="<?php echo $ape2 ?>"></br>
                        </div>
                    </div>
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblFechaNacimientos2">Fecha Nacimiento:</label>
                            <input type="date" id="dtpFechaNacimiento2" class="date"  name="dtpFechaNacimiento"  autofocus value="<?php echo $FecNacimiento ?>">    
                        </div></br></br>  
                    </div>

                    <div class="row inner-wrapper-row">
                        <div class="col-md-2"> 
                           <button class="btn btn-lg btn-primary" id="boton" name="boton" value="Modificar" onclick="mostrar('Modificar')" type="submit">Modificar</button>
                        </div>
                        <div class="col-md-2"> 
                           <button class="btn-lg btn-danger" id="boton" name="boton" style="display: inline-block; float: left; margin-left:35%; ">Cancelar</button>
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
                            <label id="lblIdentificacion3">Identificacion Persona:</label>
                            <input type="text" id="txtIdentificacion3" class="form-control" placeholder="Identificacion" name="txtIdentificacion" required autofocus value="<?php echo $id ?>">
                        </div>
                    </div> 
                    <div class="row inner-wrapper-row">
                        <div class="col-md-2"> 
                             <button class="btn btn-lg btn-primary" type="submit" id="boton" name="boton" style="width: 80%; display: inline-block;  margin-top: 10%; margin-left: 20%;" onclick="mostrar('Eliminar')">Consultar Id</button>
                        </div>
                    </div> 

                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblNombre3">Nombre Persona:</label>
                            <input type="text" id="txtNombre3" class="form-control" placeholder="Nombre Persona" name="txtNombre"  autofocus value="<?php echo $nom ?>">
                        </div>
                    </div>    
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblPrimerApellido3">Primer Apellido:</label>
                            <input type="text" id="txtPrimerApellido3" class="form-control" placeholder="Primer Apellido" name="txtPrimerApellido"  autofocus value="<?php echo $ape1 ?>">
                        </div>
                    </div>
                    
                   <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblSegundoApellido3">Segundo Apellido:</label>
                            <input type="text" id="txtSegundoApellido3" class="form-control" placeholder="Segundo Apellido" name="txtSegundoApellido"  autofocus value="<?php echo $ape2 ?>"></br>
                        </div>
                    </div>
                    <div class="row inner-wrapper-row">
                        <div class="col-md-4"> 
                            <label id="lblFechaNacimientos3">Fecha Nacimiento:</label>
                            <input type="date" id="dtpFechaNacimiento3" class="date" value="" name="dtpFechaNacimiento"  autofocus value="<?php echo $FecNacimiento ?>">    
                        </div></br></br>
                    </div>

                    <div class="row inner-wrapper-row">
                        <div class="col-md-2"> 
                           <button class="btn btn-lg btn-primary" id="boton" name="boton" value="Eliminar" onclick="mostrar('Eliminar')" type="submit">Eliminar</button>
                        </div>
                        <div class="col-md-2"> 
                           <button class="btn-lg btn-danger" style="display: inline-block; float: left; margin-left:35%;">Cancelar</button>
                        </div>
                    </div>

                    </br>
                    
                </form><!-- /form -->
            </div><!-- /card-container -->
        </div><!-- /container -->
    </div>



</body>


</html>