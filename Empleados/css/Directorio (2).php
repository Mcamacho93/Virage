<?php 
session_start();
include ("conexion.php")
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<title>Virage</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
	<link type="text/css" href="css/le-frog/jquery-ui-1.8.1.custom.css" rel="Stylesheet" />  
	<link type="text/css" rel="stylesheet" href="css/css.css">
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<?php include ("conexion.php");?>	
</head>
<body onload="startTime()" >

<!--Header-->
	<?php
		if (empty($_SESSION["Usuario"])) 
			{ ?> 
				<script type="text/javascript">
					alert('Inicie sesi��n para continuar')
					self.location="../Web/login.php"
				</script>
			<?php }
	?>
	<header>
		<div class="container">	
			<div class="three columns">
				<a href=""><img src="images/logo.png"></a>
			</div>	
			<div class="eight columns menu">	
				<ul>
					<a href=""><li>NOTICIAS</li></a>
					<a href="ReportesEmpleados.php"><li>REPORTES EN L�0�1NEA</li></a>				
					<a href="Viajes.php"><li>VIAJES</li></a>
					<a href="Directorio.php"><li>DIRECTORIO</li></a>
				</ul>
			</div>
			<?php
		if(isset($_SESSION['Usuario'])) 
		{
		 	 if (!empty($_SESSION['Usuario'])) 
		  	{
		     	echo "<br>	
					  <div class='five columns cliente'>
					  <h5>".$_SESSION['Nombre']."  ".$_SESSION['Apellido_Paterno']."  ".$_SESSION['Apellido_Materno']."<br>".$_SESSION['Empresa']."</h5>
				      <a href=' logout.php'>Cerrar Sesi��n</a>			
					</div>";
		  	}
		}
		else{
		?><br>	
			<div class="five columns cliente">
				<h5>Nombre Completo de Cliente</h5>	
				<a href="">Cerrar Sesi��n</a>			
			</div>
		</div>
		<?php } ?>
	</header>

	<div class="container titulo">
	<h1>DIRECTORIO</h1>
	<hr>
	</div>
	<div class="container">
		<div class="izquierda">
			<a href="CrearUsuario.php"><input type="button" class="botoncafe" value="Crear Usuario"></a>		
			<input placeholder="Buscar" class="buscar" name="buscar" id="buscar"></input>
		</div>
	</div>

	<div class="container">
	<br><br>
<!--Tablas-->
	<table class="tablas" id="Directorio">
		<tr class="none" id="borde">

		  <th></th>
		  <th><h2>USUARIO</h2></th>
		  <th><h2>EMPRESA</h2></th>		
		  <th><h2>TEL&Eacute;FONO</h2></th>
		  <th><h2>CORREO ELECTR&Oacute;NICO</h2></th>
		  <th><h2>TIPO DE USUARIO</h2></th>
		  <th></th>
		</tr>


<?php 

	$select="select IDUsuario, Nombre, Empresa, Telefono, Correo, TipoDeUsuario from usuarios";
	$resultados = $conexion->query($select);

	while($columna=$resultados->fetch_array(MYSQLI_ASSOC)){
		echo "<tr>
				<td><img src='images/gift.png'></td>
				<td>".$columna['Nombre']."</td>
				<td>".$columna['Empresa']."</td>
				<td>".$columna['Telefono']."</td>
				<td>".$columna['Correo']."</td>
				<td>".$columna['TipoDeUsuario']."</td>
				<td><a href='Perfil.php?n=$columna[IDUsuario]'>Editar<img src='images/flecha.png'></a></td>
			  <tr>";
	}

	
?>
