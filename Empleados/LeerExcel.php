<?php
if (isset($_POST['action'])){
include ('conexion.php');
$exceldir = 'Archivos/';
if ($_FILES['excel']['error'] > 0){
	//echo "Error: ".$_FILES['excel']['error']."<br>";
	if($_FILES['excel']['error'] == 4){
		echo "<script>alert('Seleccione el archivo a subir')
			  self.location = 'ReportesEmpleados.php'
		</script>";
	}
	else{
	echo "<script>alert('Intentalo Nuevamente')
		  self.location = 'Reportes.php';
	</script>";
	}
	}
else{
	echo "Nombre ".$_FILES['excel']['name']."<br>";
	echo "Tipo ".$_FILES['excel']['type']."<br>";
	echo "Tamaño ".($_FILES['excel']['size']/1024)." Kb<br>";
	echo "Carpeta ".$_FILES['excel']['tmp_name']."<br>";
	$archivo = $_FILES['excel']['name'];

	move_uploaded_file($_FILES['excel']['tmp_name'], $exceldir.$_FILES['excel']['name']);
	echo "<script>alert('Archivo Subido, espere a que se procese su peticion')</script>";

	//incluimos la clase
					require_once 'Classes/PHPExcel/IOFactory.php';					
					$objPHPExcel = PHPExcel_IOFactory::load($exceldir.$archivo);
					
					
					for ($i=1;$i<=2000;$i++){
				    $SERIE = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();	
				    $FECHA	= $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
				    $FECHASALIDA = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
				    $FECHAREGRESO = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();	
				    $NODOCUMENTO = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();//int	
				    $AGENTEVENTAS = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();	
				    $CODIGOCLIENTE = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();//int
				    $NOMBREDELCLIENTE = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
				    $PNR = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
				    $NOMBREDEPASAJERO = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
				    $NOEMPLEADO = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();//int
				    $DEPARTAMENTO = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
				    $CENTRODECOSTOS = $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();	
				    $PROVEEDOR = $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
				    $REGION = $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
				    $SOLICITANTE = $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
				    $PROYECTO = $objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
				    $ORDENDECOMPRA = $objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
				    $NOBOLETO = $objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();//int
				    $BOLETOENCONTRA = $objPHPExcel->getActiveSheet()->getCell('T'.$i)->getCalculatedValue();//int
				    $RUTA1 = $objPHPExcel->getActiveSheet()->getCell('U'.$i)->getCalculatedValue();
				    $CODIGOPRODUCTO = $objPHPExcel->getActiveSheet()->getCell('V'.$i)->getCalculatedValue();
				    $DESCRIPCIONDELPRODUCTO = $objPHPExcel->getActiveSheet()->getCell('W'.$i)->getCalculatedValue();
				    $CLAVEPROVEEDOR = $objPHPExcel->getActiveSheet()->getCell('X'.$i)->getCalculatedValue();//int
				    $RUTADEABC = $objPHPExcel->getActiveSheet()->getCell('Y'.$i)->getCalculatedValue();
				    $FECHADEINICIO = $objPHPExcel->getActiveSheet()->getCell('Z'.$i)->getCalculatedValue();
				    $MONTOTARIFABASE = $objPHPExcel->getActiveSheet()->getCell('AA'.$i)->getCalculatedValue();//float
				    $IVA = $objPHPExcel->getActiveSheet()->getCell('AB'.$i)->getCalculatedValue();//float
				    $TUA = $objPHPExcel->getActiveSheet()->getCell('AC'.$i)->getCalculatedValue();//float
				    $OTROSIMPUESTOS = $objPHPExcel->getActiveSheet()->getCell('AD'.$i)->getCalculatedValue();//float
				    $ISH = $objPHPExcel->getActiveSheet()->getCell('AE'.$i)->getCalculatedValue();//float
				    $IMPORTETOTAL = $objPHPExcel->getActiveSheet()->getCell('AF'.$i)->getCalculatedValue(); //float
				    $FORMADEPAGO = $objPHPExcel->getActiveSheet()->getCell('AG'.$i)->getCalculatedValue(); 
				    $NOTARJETACREDITO = $objPHPExcel->getActiveSheet()->getCell('AH'.$i)->getCalculatedValue();//
				    $timestamp = PHPExcel_Shared_Date::ExcelToPHP($FECHA);
					$FECHAN = date("Y-m-d",$timestamp);
					$timestamp2 = PHPExcel_Shared_Date::ExcelToPHP($FECHASALIDA);
					$FECHAS = date("Y-m-d",$timestamp2);
					$timestamp3 = PHPExcel_Shared_Date::ExcelToPHP($FECHAREGRESO);
					$FECHAR = date("Y-m-d",$timestamp3);
					$timestamp4 = PHPExcel_Shared_Date::ExcelToPHP($FECHADEINICIO);
					$FECHAI = date("Y-m-d",$timestamp4);
					str_replace(',', '', $MONTOTARIFABASE);
					str_replace(',', '', $IVA);
					str_replace(',', '', $TUA);
					str_replace(',', '', $OTROSIMPUESTOS);
					str_replace(',', '', $ISH);
					str_replace(',', '', $IMPORTETOTAL);


					if($NODOCUMENTO == "" || !is_numeric($NODOCUMENTO)){
						$NODOCUMENTO = 0;
					}

					if($CODIGOCLIENTE == "" || !is_numeric($CODIGOCLIENTE)){
							$CODIGOCLIENTE=0;
					} 
					
					if($NOEMPLEADO == "" || !is_numeric($NOEMPLEADO)){
						$NOEMPLEADO=0;
					}
					if($NOBOLETO == "" || !is_numeric($NOBOLETO)){
						$NOBOLETO=0;
					}

					if($BOLETOENCONTRA == "" || !is_numeric($BOLETOENCONTRA)){
						$BOLETOENCONTRA =0;
					}

					if($CLAVEPROVEEDOR == "" || !is_numeric($CLAVEPROVEEDOR)){
						$CLAVEPROVEEDOR = 0;
					}

					if($NOTARJETACREDITO == "" || !is_numeric($NOTARJETACREDITO)){
						$NOTARJETACREDITO = 0;
					}
					
				    
				   	//comentarios de prueba
		  			/*echo "<div class='container'><br>".$SERIE."<br>".$FECHAN."<br>  ".$FECHAS."<br>  ".$FECHAR."<br> ".$NODOCUMENTO."<br>  ".
		  			$AGENTEVENTAS."<br>"."  ".$CODIGOCLIENTE."<br>  ".$NOMBREDELCLIENTE."<br> ".$PNR."<br>  ".$NOMBREDEPASAJERO."<br> ".
		  			$NOEMPLEADO."<br>"."  ".$DEPARTAMENTO."<br> ".$CENTRODECOSTOS."<br>  ".$PROVEEDOR."<br>   ".$REGION."<br> "
		  			.$SOLICITANTE."<br>  ".$PROYECTO."<br>"."  ".$ORDENDECOMPRA."<br>  ".$NOBOLETO."<br> ".$BOLETOENCONTRA."<br> ".
		  			$RUTA1."<br>".$CODIGOPRODUCTO." "."<br>"."  ".$DESCRIPCIONDELPRODUCTO."<br> ".$CLAVEPROVEEDOR."<br> ".$RUTADEABC.
		  			"<br>  ".$FECHAI."<br>  ".$MONTOTARIFABASE."<br>".$IVA."<br>  ".$TUA."<br>  ".$OTROSIMPUESTOS.
		  			"<br> ".$ISH."<br>  ".$IMPORTETOTAL."<br> ".$FORMADEPAGO."<br>  ".$NOTARJETACREDITO."<br></div>";*/
					
					//echo "<br> Fecha: ".$FECHA;
					//echo "<br> Fecha Salida: ".$FECHASALIDA;
					//echo "<br> Fecha Regreso:".$FECHAREGRESO."<br>";
					

					$insert="insert into reportesvirage (ID, SERIE, FECHA, FECHASALIDA, FECHAREGRESO, NODOCUMENTO, AGENTEVENTAS, CODIGOCLIENTE,
					 NOMBREDELCLIENTE, PNR, NOMBREDEPASAJERO, NOEMPLEADO, DEPARTAMENTO, CENTRODECOSTOS, PROVEEDOR, REGION, SOLICITANTE, PROYECTO,
					 ORDENDECOMPRA, NOBOLETO, BOLETOENCONTRA, RUTA1, CODIGOPRODUCTO, DESCRIPCIONPRODUCTO, CLAVEPROVEEDOR, RUTAABC, FECHADEINICIO,
					 MONTOTARIFABASE, IVA, TUA, OTROSIMPUESTOS, ISH, IMPORTETOTAL, FORMADEPAGO, NoTARJETA) VALUES ('','$SERIE', '$FECHAN', '$FECHAS', 
					 '$FECHAR', $NODOCUMENTO, '$AGENTEVENTAS', $CODIGOCLIENTE, '$NOMBREDELCLIENTE', '$PNR', '$NOMBREDEPASAJERO', $NOEMPLEADO,
					 '$DEPARTAMENTO', '$CENTRODECOSTOS', '$PROVEEDOR', '$REGION', '$SOLICITANTE', '$PROYECTO', '$ORDENDECOMPRA', $NOBOLETO, $BOLETOENCONTRA,
					 '$RUTA1', '$CODIGOPRODUCTO', '$DESCRIPCIONDELPRODUCTO', $CLAVEPROVEEDOR, '$RUTADEABC', '$FECHAI', '$MONTOTARIFABASE', 
					 $IVA, $TUA, $OTROSIMPUESTOS, $ISH, '$IMPORTETOTAL', '$FORMADEPAGO', $NOTARJETACREDITO)";


					//$conexion->query($insert);
					
					if($conexion->query($insert)){
						
											
					}
					//else{
					//	echo ("Error: ". $conexion->error."<br>".$insert."<br><br>");	
					//}	

					
					
					//if ($exito==true){
						

					}
					echo "<label>Espere a que termine de cargar la pagina para regresar a la </label><a href='Reportes.php'> p&aacute;gina anterior</a>";
}
}