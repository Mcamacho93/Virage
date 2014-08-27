
<link rel="stylesheet" href="css/base.css">
<?php

require("dompdf/dompdf_config.inc.php");
include("conexion.php"); 

$select = $conexion->query("SELECT * FROM reportesvirage where ID= ".$_GET["val"]."");

while($columna=$select->fetch_array(MYSQLI_ASSOC)){

				$Reporte = '
				
				<div class="container">
				
					<table id="DatosReporte> 
					<colgroup>
					<col style="width: 196px">
					<col style="width: 200px">
					</colgroup>
					
						<tr>
							<tr>
								<td><label class="Campos">SERIE:</label></td>
								<td><label class="Datos">'.$columna['SERIE'].'</label></td>							
							</tr>
								
							<tr>
								<td><label class="Campos">FECHA:</label></td>
								<td><label class="Datos">'.$columna['FECHA'].'</label></td>																
							</tr>

							<tr>	
								<td><label class="Campos">FECHASALIDA:</label></td>
								<td><label class="Datos"><.'.$columna["FECHASALIDA"].'</label></td>
								
							</tr>
	
							<tr>
								<td><label class="Campos">FECHAREGRESO:</label></td>
								<td><label class="Datos"><'.$columna["FECHAREGRESO"].'</label></td>
								
							</tr>
								
							<tr>	
								<td><label class="Campos">NO. DOCUMENTO:</label></td>
								<td><label class="Datos">'.$columna["NODOCUMENTO"].'</label></td>
								
							</tr>

							<tr>
								<td><label class="Campos">AGENTE VENTAS:</label></td>
								<td><label class="Datos">.'.$columna["AGENTEVENTAS"].'</label></td>
								
							</tr>

							<tr>	
								<td><label class="Campos">CODIGO CLIENTE:</label></td>
								<td><label class="Datos">'.$columna["CODIGOCLIENTE"].'</label></td>
								
							</tr>
								
							<tr>	
								<td><label class="Campos">NOMBRE DEL CLIENTE:</label></td>
								<td><label class="Datos">'.$columna["NOMBREDELCLIENTE"].'</label></td>
								
							</tr>

							<tr>	
								<td><label class="Campos">PNR:</label></td>
								<td><label class="Datos">'.$columna["PNR"].'</label></td>
								
							</tr>

							<tr>	
								<td><label class="Campos">NOMBRE DE PASAJERO:</label></td>
								<td><label class="Datos">'.$columna["NOMBREDEPASAJERO"].'</label></td>
								
							</tr>	
							
							<tr>
								<td><label class="Campos">NO. EMPLEADO:</label></td>
								<td><label class="Datos">'.$columna["NOEMPLEADO"].'</label></td>
								
							</tr>

							<tr>	
								<td><label class="Campos">DEPARTAMENTO:</label></td>
								<td><label class="Datos">'.$columna["DEPARTAMENTO"].'</label></td>
								 
							</tr>

							<tr>	
								<td><label class="Campos">CENTRO DE COSTOS:</label></td>
								<td><label class="Datos">'.$columna["CENTRODECOSTOS"].'</label></td>
							</tr>

							<tr>	
								<td><label class="Campos">PROVEEDOR:</label></td>
								<td><label class="Datos">'.$columna["PROVEEDOR"].'</label></td>
							</tr>

							<tr>	
								<td><label class="Campos">REGION:</label></td>
								<td><label class="Datos">'.$columna["REGION"].'</label></td>
							</tr>	

							<tr>
								<td><label class="Campos">SOLICITANTE:</label></td>
								<td><label class="Datos">'.$columna["SOLICITANTE"].'</label></td>		
							</tr>

							<tr>
								<td><label class="Campos">PROYECTO:</label></td> 
								<td><label class="Datos">'.$columna['PROYECTO'].'</label></td>
							</tr>
						
							<tr>
								<td><label class="Campos">ORDEN DE COMPRA:</label></td>
								<td><label class="Datos">'.$columna['ORDENDECOMPRA'].'</label></td>
							</tr>

							<tr>
								<td><label class="Campos">NO. BOLETO:</label></td>
								<td><label class="Datos">'.$columna["NOBOLETO"].'</label></td>
							</tr>

							<tr>
								<td><label class="Campos">BOLETO EN CONTRA:</label></td>
								<td><label class="Datos">'.$columna["BOLETOENCONTRA"].'</label></td>
							</tr>

							<tr>
								<td><label class="Campos">CODIGO PRODUCTO/SERVICIO:</label></td>
								<td><label class="Datos">'.$columna["CODIGOPRODUCTO"].'</label></td>
							</tr>
							

							<tr>
								<td><label class="Campos">DESCRIPCION DEL PRODUCTO/SERVICIO:</label></td>
								<td><label class="Datos"><'.$columna["DESCRIPCIONPRODUCTO"].'</label></td>
							</tr>


							<tr>
								<td><label class="Campos">CLAVE PROVEEDOR:</label></td>
								<td><label class="Datos"><'.$columna["CLAVEPROVEEDOR"].'</label></td>
							</tr>


							<tr>
								<td><label class="Campos">RUTA DE ABC:</label></td>
								<td><label class="Datos">'.$columna["RUTAABC"].'</label></td>
							</tr>

							<tr>
								<td><label class="Campos">FECHA DE INICIO:</label></td>
								<td><label class="Datos">'.$columna["FECHADEINICIO"].'</label></td>
							</tr>

							<tr>
								<td><label class="Campos">FORMA DE PAGO:</label></td>
							    <td><label class="Datos">'.$columna["FORMADEPAGO"].'</label></td>

							</tr>

							<tr>
								<td><label class="Campos">NO. TARJETA CREDITO:</label></td>
							    <td><label class="Datos">'.$columna["NoTARJETA"].'</label></td>
							</tr>
						
						</tr>
					</table>';		

				
			}

$dompdf = new DOMPDF();
$dompdf->load_html($Reporte);
$dompdf->render();
$dompdf->stream("Usuarios.pdf");			



?>







