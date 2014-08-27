<?php 
session_start();
include ("conexion.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Virage</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
	<link type="text/css" href="css/le-frog/jquery-ui-1.8.1.custom.css" rel="Stylesheet" />  
	<link type="text/css" rel="stylesheet" href="css/css.css">
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<?php include ("conexion.php");?>	

</head>
<body onload="startTime()" >

<!--Header-->
	<?php
		if (empty($_SESSION["Usuario"])) 
			{ ?> 
				<script type="text/javascript">
					alert('Inicie sesión para continuar')
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
					<a href="ReportesEmpleados.php"><li>REPORTES EN LÍNEA</li></a>					
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
					  <h5>".$_SESSION['Nombre']."</h5>	
				      <a href=' logout.php'>Cerrar Sesión</a>			
					</div>";
		  	}
		}
		else{
		?><br>	
			<div class="five columns cliente">
				<h5>Nombre Completo de Cliente</h5>	
				<a href="">Cerrar Sesión</a>			
			</div>
		</div>
		<?php } ?>
	</header>
	<?php
		$cons = "select * from usuarios where IDUsuario = ".$_GET['n']."";
		$select = $conexion->query($cons);
		$URL = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	?>	

	<form id="UsuarioNuevo" name="UsuarioNuevo" method="post"  enctype="multipart/form-data">
<div class="container">
	<br>
	<?php while ($columna = $select->fetch_array(MYSQLI_ASSOC)) { ?>
	<label class="Campos">USUARIO:</label>

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Usuario" class="InputCrear" value="<?php echo $columna['Usuario'] ?>">

	<br>
	<label class="Campos">CONTRASEÑA:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Contrasena" class="InputCrear" value="<?php echo $columna['Contrasena'] ?>">
	<br>
	<label class="Campos">NOMBRE:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Nombre" class="InputCrear" value="<?php echo $columna['Nombre'] ?>">
	<br>
	<label class="Campos">EMPRESA:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Empresa" class="InputCrear" value="<?php echo $columna['Empresa'] ?>">
	<br>
	<label class="Campos">EDAD:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Edad" class="InputCrear" value="<?php echo $columna['Edad'] ?>">
	<br>
	<label class="Campos">SEXO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Sexo" class="InputCrear" value="<?php echo $columna['Sexo'] ?>">
	<br>
	<label class="Campos">TEL&Eacute;FONO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Telefono" class="InputCrear" value="<?php echo $columna['Telefono'] ?>">
	<br>
	<label class="Campos">CORREO ELECTR&Oacute;NICO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Correo" class="InputCrear" value="<?php echo $columna['Correo'] ?>">
	<br>
	<label class="Campos">CUMPLEAÑOS:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Cumpleanos" class="InputCrear" value="<?php echo $columna['FechaDeNacimiento'] ?>">
	<br> 
	<label class="Campos">CALLE Y N&Uacute;M:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Calle" class="InputCrear" value="<?php echo $columna['Calle_Numero'] ?>">
	<br>
	<label class="Campos">CIUDAD Y ESTADO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Ciudad" class="InputCrear" value="<?php echo $columna['Ciudad_Estado'] ?>">
	<br>
	<label class="Campos">PA&Iacute;S:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Pais" class="InputCrear" value="<?php echo $columna['Pais'] ?>">	
	<br>
	<label class="Campos">IMAGEN DE PERFIL ACTUAL:</label>
	<BR>
	<img src="<?php echo $columna['Logo']; ?>" width="200px" height="200px">
	<br>
	<label class="Campos">NOTAS:</label>
	<br>
	<textarea class="notas" name="Notas"><?php echo $columna['Notas'] ?></textarea>
	<br>
	<input type="submit" name="Registrar" value="Actualizar" class="blanco">
	<input type="submit" name="Borrar" value="Eliminar Usuario" class="blanco">
	</div>
</form>	

<?php } 

/*
$Todo = $_POST['Usuario']."<br>".$_POST['Contrasena']."<br>".$_POST['Nombre']."<br>".$_POST['Empresa']."<br>".$_POST['Edad']."<br>".
		$_POST['Sexo']."<br>".$_POST['Telefono']."<br>".$_POST['Calle']."<br>".$_POST['Ciudad']."<br>".$_POST['Pais']."<br>".
			$_POST['Cumpleanos']."<br>".$_POST['Correo']."<br>".$_POST['Notas']."<br>".$_GET['n']."<br>";
echo $Todo;	
*/

if(isset($_POST['Registrar'])){
	$Usuario = $_POST['Usuario'];
	$Contrasena = $_POST['Contrasena'];
	$Nombre = $_POST['Nombre'];
	$Empresa = $_POST['Empresa'];
	$Edad = $_POST['Edad'];
	$Sexo = $_POST['Sexo'];
	$Telefono = $_POST['Telefono'];
	$Calle = $_POST['Calle'];
	$Ciudad = $_POST['Ciudad'];
	$Pais = $_POST['Pais'];
	$Cumpleanos = $_POST['Cumpleanos'];
	$Correo = $_POST['Correo'];
	$Notas = $_POST['Notas'];

	$Modificar = "Update usuarios set Usuario = '".$Usuario."', Contrasena = '".$Contrasena."', Nombre = '".$Nombre."', Empresa = '".$Empresa."',
				Edad = ".$Edad.", Sexo = '".$Sexo."', Telefono = ".$Telefono.", Calle_Numero = '".$Calle."', Ciudad_Estado = '".$Ciudad."',
				Pais = '".$Pais."', FechaDeNacimiento = '".$Cumpleanos."', Correo = '".$Correo."' where IDUsuario = ".$_GET['n']."";

	if($conexion->query($Modificar)){
		echo "<script>alert('Perfil Actualizado')
				self.location = '".$URL."'
			</script>";
	}
	else{
		echo "<script>alert('NO')</script>";
		echo ("Error: ". $conexion->error."<br>".$Modificar."<br><br>");


		//echo "<script>alert('Ha ocurrido un error, vuelve a intentarlo')
		//		self.location = '".$URL."'
		//</script>";
	}
			
	}


if(isset($_POST['Borrar'])){
	$borrar = "delete from usuarios where IDUsuario = ".$_GET['n']."";
	if($conexion->query($borrar)){
		echo "<script>alert('Usuario Eliminado')
				self.location = 'Directorio.php'
			</script>";
	}
	else{
		echo "<script>alert('Ha ocurrido un error, vuelve a intentarlo')
				self.location = '".$URL."'
		</script>";
	}
}

?>
</body>
</html>