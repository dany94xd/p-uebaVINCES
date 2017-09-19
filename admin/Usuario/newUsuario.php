<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Tabla Usuario </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="../../css/tablas.css" rel="stylesheet" >
	</head>
<body>
<header>

</header>
<?php
if (isset($_SESSION['MiSession'])){
    ?>

<section>
</section>
<section>

</section>
<aside>
<?php

 echo "<nav class='navbar navbar-default'>";
    echo "<div class='container-fluid'>";
    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Usuario</a></div>";
    echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='../readsupremo.php'>Menú</a></li>";
			echo "<li><a href='newUsuario.php'>Nuevo</a></li>";
		echo "</ul>";
    echo " <ul class='nav navbar-nav navbar-right'>";
    echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['MiSession'] . ")</a></li>";
    echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
    echo "</ul>";
    echo "</div>";
    echo "</nav>";

?>

<form method= "post" class="form-horizontal" action= "saveUsuario.php" >
   
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Usuario:</label>
         <div class="col-xs-10">
             <input name = "usuario" type="text" id= "usuario" class="form-control" placeholder="usuario" autofocus required/>
         </div>
     </div>
  <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Contraseña:</label>
         <div class="col-xs-10">
             <input name = "contrasenia" type="text" id= "contrasenia" class="form-control"
 placeholder="Contraseña"  required/>
         </div>
     </div>
     
<div class='form-group'>
      

<label for='inputName' class='control-label col-xs-2'>Tipo de Usuario:</label>
        <div class='col-xs-10'>
             <select name='tipousuario'  id= 'tipousuario' class='form-control' required>
		<option selected></option>
<?php
include_once("../TipoUsuario/TipoUsuarioCollector.php");
$TipoUsuarioCollectorObj = new TipoUsuarioCollector(); 
foreach ($TipoUsuarioCollectorObj->showTipoUsuarios() as $c){
echo "<option value='".$c->getIdTipoUsuario()."'>".$c->getTipo()."</option>"; 
}
?>
	     </select>
        </div>
     </div>

     <div class="form-group">
     <div> <a href="readUsuario.php">Cancelar</a></div>
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary">Grabar</button>
         </div>
     </div>
</form>


</aside>
<?php
}

    
    else {
       echo "permiso denegado";
       echo"<a href='../index.php'>inicia sesion</a>";
    }
 ?>

</body>
</html>
