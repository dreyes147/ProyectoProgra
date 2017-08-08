

<!DOCTYPE html>
<html>
<head>
	<title></title>

		<style type="text/css">


*{
    font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}

.tank{
    position:relative;
     margin:50px;
}

.tank .middle{
    width:120px;
    height:70px;
    background-color:#444;
    position:relative;
}

.tank .middle2{
    width:120px;
    height:60px;
    background-color:#7FFF00;
    position:relative;
}

.tank .middle3{
    width:120px;
    height:60px;
    background-color:#ff0000;
    position:relative;
}

.tank .middle4{
    width:120px;
    height:60px;
    background-color:#FFFF00;
    position:relative;
}

.tank .middle5{
    width:120px;
    height:40px;
    background-color:#0000FF;
    position:relative;
}



.tank .top{
    width: 120px;
    height: 50px;
    background-color:#666;
    -moz-border-radius: 60px / 25px;
    -webkit-border-radius: 60px / 25px;
    border-radius: 60px / 25px;
    position:absolute;
    top:-25px;
}




.tank .bottom{
    width: 120px;
    height: 50px;
    background-color:#0000FF;
    -moz-border-radius: 60px / 25px;
    -webkit-border-radius: 60px / 25px;
    border-radius: 60px / 25px;
    position:absolute;
    top:265px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.75)
}

*{
    font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}

div.tab {
    overflow: hidden;
    background-color: #1f187c;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: #1f187c;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #070254;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #070254;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;

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


#Header{
    width: 100%;
    background-color: #030116;
    height: 80px;
    padding-top: 2%;
}



</style>

</head>
<body>


<div class="tank">
    <div class="bottom"></div>
    
                <?php

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
                <div class="middle"><br/><br/>
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
                </select></div>
                <?php
                ?>


                                <?php

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
                <div class="middle2"><br/>
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
                </select></div>
                <?php
                ?>

                                <?php

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
                <div class="middle3"><br/>
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
                </select></div>
                <?php
                ?>

                                <?php

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
                <div class="middle4"><br/>
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
                </select></div>
                <?php
                ?>

                                <?php

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
                <div class="middle5"><br/>
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
                </select></div>
                <?php
                ?>


 


    <div class="top"></div>  
    </br>
</div>




</body>
</html>