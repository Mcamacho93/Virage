<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporteador de Viajes</title>
	<link rel="stylesheet" href="css/base.css">
	
	<?php include ("conexion.php");?>
</head>
<body>
<body onload="startTime()" >
	<?php
		if (empty($_SESSION["Usuario"])) 
			{ ?> 
				<script type="text/javascript">
					alert('Inicie sesión para continuar')
					self.location="login.html"
				</script>
			<?php }

		if($_GET["value"])
	?>



<!--Header-->
	<header>
		<div class="container">	
			<div class="three columns">
				<a href=""><img src="images/logo.png"></a>
			</div>	
			<div class="eight columns menu">	
				<ul>
					<a href=""><li>NOTICIAS</li></a>
					<a href="Reportes.php"><li>REPORTES EN LÍNEA</li></a>
					<a href=""><li>CUPONERA</li></a>
					<a href=""><li>PERFIL</li></a>
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
				      <a href='logout.php'>Cerrar Sesión</a>			
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

<!--Titulo de seccion-->
<div class="container titulo">
	<h1>REPORTES EN LINEA</h1>
	<hr>
</div>

 
		<?php
	 //$cons="select * from ReportesVirage where ID= ".$_GET["value"]." and CODIGOCLIENTE = ".$_SESSION['Usuario']."";
    $select = $conexion->query("select * from reportesvirage where ID= ".$_GET["value"]." and CODIGOCLIENTE = ".$_SESSION['Usuario']."");

    
                    
        while ($columna=$select->fetch_array(MYSQLI_ASSOC)){
                 	?>
				
					<div class="container">
					<table id="DatosReporte">
					<colgroup>
					<col style="width: 196px">
					<col style="width: 240px">
					</colgroup>	
					
						<tr>
							<tr>
								<td><label class="Campos">SERIE:</label></td>
								<td><label class="Datos"><?php echo $columna["SERIE"] ?></label></td>
								<td><label class="Campos">PROYECTO:</label></td> 
								<td><label class="Datos"><?php echo $columna["PROYECTO"] ?></label></td>
							</tr>
								
							<tr>
								<td><label class="Campos">FECHA:</label></td>
								<td><label class="Datos"><?php echo $columna["FECHA"] ?></label></td>
								<td><label class="Campos">ORDEN DE COMPRA:</label></td>
								<td><label class="Datos"><?php echo $columna["ORDENDECOMPRA"] ?></label></td>
							</tr>

							<tr>	
								<td><label class="Campos">FECHASALIDA:</label></td>
								<td><label class="Datos"><?php echo $columna["FECHASALIDA"] ?></label></td>
								<td><label class="Campos">NO. BOLETO:</label></td>
								<td><label class="Datos"><?php echo $columna["NOBOLETO"] ?></label></td>
							</tr>

								
							<tr>
								<td><label class="Campos">FECHAREGRESO:</label></td>
								<td><label class="Datos"><?php echo $columna["FECHAREGRESO"] ?></label></td>
								<td><label class="Campos">BOLETO EN CONTRA:</label></td>
								<td><label class="Datos"><?php echo $columna["BOLETOENCONTRA"] ?></label></td>
							</tr>
								
							<tr>	
								<td><label class="Campos">NO. DOCUMENTO:</label></td>
								<td><label class="Datos"><?php echo $columna["NODOCUMENTO"] ?></label></td>
								<td><label class="Campos">RUTA 1:</label></td>
								<td><label class="Datos"><?php echo $columna["RUTA1"] ?></label></td>
							</tr>

							<tr>
								<td><label class="Campos">AGENTE VENTAS:</label></td>
								<td><label class="Datos"><?php echo $columna["AGENTEVENTAS"] ?></label></td>
								<td><label class="Campos">CODIGO PRODUCTO/SERVICIO:</label></td>
								<td><label class="Datos"><?php echo $columna["CODIGOPRODUCTO"] ?></label></td>
							</tr>

							<tr>	
								<td><label class="Campos">CODIGO CLIENTE:</label></td>
								<td><label class="Datos"><?php echo $columna["CODIGOCLIENTE"] ?></label></td>
								<td><label class="Campos">DESCRIPCION DEL PRODUCTO/SERVICIO:</label></td>
								<td><label class="Datos"><?php echo $columna["DESCRIPCIONPRODUCTO"] ?></label></td>
							</tr>
								
							<tr>	
								<td><label class="Campos">NOMBRE DEL CLIENTE:</label></td>
								<td><label class="Datos"><?php echo $columna["NOMBREDELCLIENTE"] ?></label></td>
								<td><label class="Campos">CLAVE PROVEEDOR:</label></td>
								<td><label class="Datos"><?php echo $columna["CLAVEPROVEEDOR"] ?></label></td>
							</tr>

							<tr>	
								<td><label class="Campos">PNR:</label></td>
								<td><label class="Datos"><?php echo $columna["PNR"] ?></label></td>
								<td><label class="Campos">RUTA DE ABC:</label></td>
								<td><label class="Datos"><?php echo $columna["RUTAABC"] ?></label></td>
							</tr>

							<tr>	
								<td><label class="Campos">NOMBRE DE PASAJERO:</label></td>
								<td><label class="Datos"><?php echo $columna["NOMBREDEPASAJERO"] ?></label></td>
								<td><label class="Campos">FECHA DE INICIO:</label></td>
								<td><label class="Datos"><?php echo $columna["FECHADEINICIO"] ?></label></td>
							</tr>	
							
							<tr>
								<td><label class="Campos">NO. EMPLEADO:</label></td>
								<td><label class="Datos"><?php echo $columna["NOEMPLEADO"] ?></label></td>
								<td><label class="Campos">FORMA DE PAGO:</label></td>
							    <td><label class="Datos"><?php echo $columna["FORMADEPAGO"] ?></label></td>
							</tr>

							<tr>	
								<td><label class="Campos">DEPARTAMENTO:</label></td>
								<td><label class="Datos"><?php echo $columna["DEPARTAMENTO"] ?></label></td>
								 <td><label class="Campos">NO. TARJETA CREDITO:</label></td>
							    <td><label class="Datos"><?php echo $columna["NoTARJETA"] ?></label></td>
							</tr>

							<tr>	
								<td><label class="Campos">CENTRO DE COSTOS:</label></td>
								<td><label class="Datos"><?php echo $columna["CENTRODECOSTOS"] ?></label></td>
							</tr>

							<tr>	
								<td><label class="Campos">PROVEEDOR:</label></td>
								<td><label class="Datos"><?php echo $columna["PROVEEDOR"] ?></label></td>
							</tr>

							<tr>	
								<td><label class="Campos">REGION:</label></td>
								<td><label class="Datos"><?php echo $columna["REGION"] ?></label></td>
							</tr>	

							<tr>
								<td><label class="Campos">SOLICITANTE:</label></td>
								<td><label class="Datos"><?php echo $columna["SOLICITANTE"] ?></label></td>		
							</tr>
						

						</tr>
							

						
					</table>
					</div>	    
							  						    
						<div class="container">
				

							<div class="container">
								<div class="six columns cuadro">
								<div class="titular"><h3>PRECIOS</h3></div>
								<table class="tablas"	>
								<tr>
									<td><h2><label class="Campos">TARIFA BASE:</label></h2></td>
									<td><label class="Datos"><?php echo $columna["MONTOTARIFABASE"] ?></label></td>
								</tr>
								<tr>
									<td><h2><label class="Campos">IVA:</label></h2></td>
									<td><label class="Datos"><?php echo $columna["IVA"] ?></label></td>
								</tr>
								<tr>
									<td><h2><label class="Campos">TUA:</label></h2></td>
									<td><label class="Datos"><?php echo $columna["TUA"] ?></label></td>
								</tr>
								<tr>
									<td><h2><label class="Campos">OTROS IMPUESTOS:</label></h2></td>
									<td><label class="Datos"><?php echo $columna["OTROSIMPUESTOS"] ?></label></td>
								</tr>
								<tr class="line">
									<td><h2><label class="Campos">SUBTOTAL:</label></h2></td>
									<td><label class="Datos"><?php echo $columna["IMPORTETOTAL"] ?></label></td>
								</tr>
								<tr>
									<td><h2><label class="Campos">TOTAL:</label></h2></td>
									<td><h2><label class="Datos"><?php echo $columna["IMPORTETOTAL"] ?></label></h2></td>
								</tr>

								</table>
								
								<!--<h5><a href="ReportePasajero.php?val= <?php $ID ?> "><button class="blanco" name="mostrar">Descargar PDF</button></a></h5>-->
								
							</div>
							 		<?php
									$ID=$columna["ID"];
										
									echo "<a href='ReportePasajero.php?val=$ID;'><button class='blanco' name='mostrar' style='width:10em; height:2em;'>Descargar PDF</button></a>";
								?>				
						</div>


	<?php } ?>
					

		

	
	
</body>
</html>

 	
	
