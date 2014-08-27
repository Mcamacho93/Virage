<?php
include ('conexion.php');
if(isset($_POST['Registrar'])){
	$Modificar = "UPDATE usuarios SET Usuario = '".$_POST['Usuario']."' ,Contrasena = '"-$_POST['Contrasena']."', Nombre = '".$_POST['Nombre']."',
				Empresa = '".$_POST['Empresa']."' , Edad = ".$_POST['Edad']." , Sexo = '".$_POST['Sexo']."' ,Telefono = ".$_POST['Telefono'].",
				Calle_Numero = '".$_POST['Calle']."',Ciudad_Estado = '".$_POST['Ciudad']."' , Pais = '".$_POST['Pais']."',
				FechaDeNacimiento= '".$_POST['Cumpleanos']."', Correo = '".$_POST['Correo']."',Notas = '".$_POST['Notas']."' , WHERE IDUsuario = ".$_GET['nn']."";

	if($conexion->query($Modificar)){
		echo "<script>alert('Perfil Actualizado')
				self.location = 'Perfil.php'
			</script>";
	}
	else{
		echo "<script>alert('Ha ocurrido un error, vuelve a intentarlo')
				self.location = 'Perfil.php'
		</script>";
	}
			
	}


if(isset($_POST['Borrar'])){
	$borrar = "delete from usuarios where IDUsuario = ".$_POST['Usuario']."";
	if($conexion->query($borrar)){
		echo "<script>alert('Regi')
				self.location = 'Directorio.php'
			</script>";
	}
	else{
		echo "<script>alert('Ha ocurrido un error, vuelve a intentarlo')
				self.location = 'Perfil.php'
		</script>";
	}
}

?>