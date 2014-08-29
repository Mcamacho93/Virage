<?php 
session_start();
include ("conexion.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Virage</title>
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
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
					  <h5>".$_SESSION['Nombre']."  ".$_SESSION['Apellido_Paterno']."  ".$_SESSION['Apellido_Materno']."<br>".$_SESSION['Empresa']."</h5>
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
	<label class="Campos">APELLIDO PATERNO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="APaterno" class="InputCrear" value="<?php echo $columna['Apellido_Paterno'] ?>" maxlenght="30" required>
	<br>
	<label class="Campos">APELLIDO MATERNO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="AMaterno" class="InputCrear" value="<?php echo $columna['Apellido_Materno'] ?>" maxlenght="30" required>
	<br>
	<label class="Campos">EMPRESA:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Empresa" class="InputCrear" value="<?php echo $columna['Empresa'] ?>" maxlenght="60" required>
	<br>
	<label class="Campos">EDAD:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="number" name="Edad" class="InputCrear" value="<?php echo $columna['Edad'] ?>" maxlenght="3" required>
	<br>
	<label class="Campos" id="labs">SEXO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Sexo" id="Sexo" class="InputCrear" value="<?php echo $columna['Sexo'] ?>" maxlenght="10" required>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<br>
	<label class="Campos">TEL&Eacute;FONO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="number" name="Telefono" class="InputCrear" value="<?php echo $columna['Telefono'] ?>" maxlenght="11" required>
	<br>
	<label class="Campos">CORREO ELECTR&Oacute;NICO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Correo" class="InputCrear" value="<?php echo $columna['Correo'] ?>" maxlenght="50" required>
	<br>
	<label class="Campos">FECHA DE NACIMIENTO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="FC" class="InputCrear" value="<?php echo $columna['FechaDeNacimiento'] ?>">
	<br> 
	<label class="Campos">CALLE:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Calle" class="InputCrear" value="<?php echo $columna['Calle'] ?>" maxlenght="50" required>
	<br>
	<label class="Campos">N&Uacute;M:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="number" name="Numero" class="InputCrear" value="<?php echo $columna['Numero'] ?>" maxlenght="10" required>
	<br>
	<label class="Campos">COLONIA:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Colonia" class="InputCrear" value="<?php echo $columna['Colonia'] ?>" maxlenght="40" required>
	<br>
	<label class="Campos">DELEGACION:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Delegacion" class="InputCrear" value="<?php echo $columna['Delegacion'] ?>" maxlenght="30" required>
	<br>
	<label class="Campos">CODIGO POSTAL:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="number" name="CodigoPostal" class="InputCrear" value="<?php echo $columna['CodigoPostal'] ?>" maxlenght="10" required>
	<br>
	<label class="Campos">CIUDAD:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Ciudad" class="InputCrear" value="<?php echo $columna['Ciudad'] ?>" maxlenght="50" required>
	<br>
	<label class="Campos">ESTADO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Estado" class="InputCrear" value="<?php echo $columna['Estado'] ?>" maxlenght="30" required>
	<br>
	<label class="Campos">PA&Iacute;S:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Pais" class="InputCrear" value="<?php echo $columna['Pais'] ?>" maxlenght="30" required>	
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
	$Apellido_Paterno = $_POST['APaterno'];
	$Apellido_Materno = $_POST['AMaterno'];
	$Empresa = $_POST['Empresa'];
	$Edad = $_POST['Edad'];
	$Sexo = $_POST['Sexo'];
	$Telefono = $_POST['Telefono'];
	$Calle = $_POST['Calle'];
	$Numero = $_POST['Numero'];
	$Colonia = $_POST['Colonia'];
	$Delegacion = $_POST['Delegacion'];
	$CodigoPostal = $_POST['CodigoPostal'];
	$Ciudad = $_POST['Ciudad'];
	$Pais = $_POST['Pais'];
	$FC = $_POST['FC'];
	$Correo = $_POST['Correo'];
	$Notas = $_POST['Notas'];

	$Modificar = "Update usuarios set Usuario = '".$Usuario."', Contrasena = '".$Contrasena."', Nombre = '".$Nombre."', Apellido_Paterno = '".$Apellido_Paterno."',
				Apellido_Materno = '".$Apellido_Materno."', Empresa = '".$Empresa."', Edad = ".$Edad.", Sexo = '".$Sexo."', Telefono = ".$Telefono.", 
				Calle = '".$Calle."', Numero = ".$Numero.", Colonia = '".$Colonia."', Delegacion = '".$Delegacion."', CodigoPostal = ".$CodigoPostal.",
				Ciudad = '".$Ciudad."',Pais = '".$Pais."', FechaDeNacimiento = '".$FC."', Correo = '".$Correo."', Notas = '".$Notas."' where IDUsuario = ".$_GET['n']."";

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