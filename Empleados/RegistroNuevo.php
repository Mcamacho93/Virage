<?php
	include ('conexion.php');
	if (isset($_POST["Registrar"])){
			$imgdir = 'images/Logos/';
			if ($_FILES['img']['error'] > 0){

			echo "Error: ".$_FILES['img']['error']."<br>";
			
			}
			else{
				//echo "Nombre ".$_FILES['img']['name']."<br>";
				//echo "Tipo ".$_FILES['img']['type']."<br>";
				//echo "Tamaño ".($_FILES['img']['size']/1024)." Kb<br>";
				//echo "Carpeta ".$_FILES['img']['tmp_name']."<br>";
				$dir= $imgdir	.$_FILES['img']['name'];

				move_uploaded_file($_FILES['img']['tmp_name'], $dir);

	//$conexion->query("UPDATE login SET ImagenPerfil = '".$imgdir."'");
			/*$Usuario = $_POST['Usuario'];
			$Contrasena = $_POST['Contrasena'];
			$Nombre = $_POST["Nombre"];
			$Empresa = $_POST["Empresa"];
			$Edad = $_POST["Edad"];
			$Sexo = $_POST["Sexo"];
			$Telefono = $_POST["Telefono"];
			$Calle = $_POST["Calle"];
			$Ciudad = $_POST["Ciudad"]; 
			$Pais = $_POST["Pais"];
			$Cumpleanos = $_POST["Cumpleanos"];
			$Correo = $_POST["Correo"];
			$Notas = $_POST["Notas"];
			$TipoDeUsuario = $_POST["TipoDeUsuario"];


			echo $Usuario."<br>".$Contrasena."<br>".$Nombre."<br>".$Empresa."<br>".$Edad."<br>".$Sexo."<br>".$Telefono."<br>".$Calle."<br>".$Ciudad."<br>".
			$Pais."<br>".$Cumpleanos."<br>".$Correo."<br>".$Notas."<br>".$TipoDeUsuario."<br>".$dir;*/
			$registro="insert into usuarios(IDUsuario, Usuario, Contrasena, Nombre, Apellido_Paterno, Apellido_Materno, Empresa, Edad, Sexo, 
				      Telefono, Calle, Numero, Colonia, Delegacion, CodigoPostal, Ciudad, Estado, Pais, FechaDeNacimiento, Correo, Logo, Notas, TipoDeUsuario) values 
					('', '".$_POST["Usuario"]."', '".$_POST["Contrasena"]."', '".$_POST["Nombre"]."', '".$_POST['APaterno']."',
					 '".$_POST['AMaterno']."', '".$_POST["Empresa"]."', ".$_POST["Edad"].", '".$_POST["Sexo"]."', ".$_POST["Telefono"].", 
					 '".$_POST["Calle"]."', ".$_POST['Numero'].", '".$_POST['Colonia']."', '".$_POST['Delegacion']."', ".$_POST['CodigoPostal'].",
					  '".$_POST["Ciudad"]."', '".$_POST['Estado']."', '".$_POST["Pais"]."', '".$_POST["FC"]."',
					   '".$_POST["Correo"]."', '".$dir."', '".$_POST["Notas"]."', '".$_POST["TipoDeUsuario"]."')";
		
		if($conexion->query($registro)){
			echo "<script>alert('Usuario Agregado')
				self.location = 'CrearUsuario.php';
			</script>";
		}
		else{
			echo ("Error: <br>". $conexion->error."<br>".$registro."<br><br>");
		}

		
		}
	}

	
?>