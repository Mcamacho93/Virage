<?php 
session_start();
include("conexion.php"); 


if(isset($_POST["loginbtn"])){
	if($_POST["Tipo"] == "Cliente"){
	$cons = "select * from login where CodigoCliente = ".$_POST["username"]." and Contrasena = '".$_POST["password"]."'";
	


	if($login=$conexion->query($cons)){	
	while ($columna=$login->fetch_array(MYSQLI_ASSOC)){
	
		
		$_SESSION['Usuario']=$columna["CodigoCliente"];
		$_SESSION['Nombre'] = $columna["NombreDeCliente"];
		$_SESSION['Img']=$columna["RutaImg"];

		echo '<script>
		self.location = "Reportes.php"
		</script>';
	}
	}
	else{
		echo "Error".@mysql_escape_string($conexion->error).".... ".$cons;
		echo '<script>
		alert("Usuario o Password erroneos, por favor verifique.")
		self.location = "../Web/login.php"
		</script>';
	}

	}

	if($_POST["Tipo"] == "Empleado"){
	$cons = "select * from usuarios where Usuario = '".$_POST["username"]."' and Contrasena = '".$_POST["password"]."'";

	if($login=$conexion->query($cons)){	
	while ($columna=$login->fetch_array(MYSQLI_ASSOC)){
	
		
		$_SESSION['Usuario']=$columna["IDUsuario"];
		$_SESSION['Nombre'] = $columna["Nombre"];
		$_SESSION['Apellido_Paterno'] = $columna["Apellido_Paterno"];
		$_SESSION['Apellido_Materno'] = $columna["Apellido_Materno"];
		$_SESSION['Empresa'] = $columna['Empresa'];

		echo '<script>
		
		self.location = "../Empleados/ReportesEmpleados.php"
		</script>';
	}
	}
	else{
		echo '<script>
		alert("Usuario o Password erroneos, por favor verifique.")
		self.location = "../Web/login.php"
		</script>';
	}

	}
	



				
	
}
	
	

?>
