<?php
	include ('conexion.php');

	if (isset($_POST['RegistrarTransporte'])){
		$Empresa = $_POST['Empresa'];
		$Nombre = $_POST['Nombre'];
		$Apellido_Paterno = $_POST['APaterno'];
		$Apellido_Materno = $_POST['AMaterno'];
		$Aerolinea = $_POST['Aerolinea'];
		$Origen = $_POST['Origen'];
		$Destino = $_POST['Destino'];
		$Fecha_Hora = $_POST['Fecha'];
		$Vuelo = $_POST['Vuelo'];
		$Terminal = $_POST['Terminal'];
		$Asiento = $_POST['Asiento'];
		$Puerta = $_POST['Puerta'];
		$Fecha = str_replace("/", "-", $Fecha_Hora);

		$NuevoTransporte = "insert into transporte (Folio, Fecha_Hora_Creacion, Nombre_Empresa, Nombre, Apellido_Paterno, Apellido_Materno, Aerolinea, Origen, Destino, Fecha_Hora, NumeroDeVuelo,
						Terminal_Sala, Asiento_Clase, Puerta) values ('', '',  '".$Empresa."', '".$Nombre."', '".$Apellido_Paterno."', '".$Apellido_Materno."', 
						'".$Aerolinea."', '".$Origen."', '".$Destino."', '".$Fecha."', ".$Vuelo.", '".$Terminal."', '".$Asiento."', '".$Puerta."')";
		if($conexion->query($NuevoTransporte)){
			echo "<script>alert('Transporte Agregado')
					self.location = 'Viajes.php'
				</script>";
		}
		else{
			echo "No fue posible agregar el transporte ".$conexion->error;
		}
	}

?>