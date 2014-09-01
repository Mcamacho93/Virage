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
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <script src="js/jquery.datetimepicker.js"></script>
	
	

	<?php include ("conexion.php"); ?>	

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
	if(isset($_POST['Trans'])){
		if($_POST['buscar']==null){
		echo "<script>alert('Tiene que elegir una empresa para registrar el transporte')
				self.location = 'Viajes.php'
				</script>";
				}
	}
?>
	<div class="container titulo">
	<h1>Favor de llenar la siguiente información</h1>
	<hr>
</div>


<div class="container">
	<form action="RegistrarTransporte.php" method="post" name="Transporte" id="Transporte">	
		<label class="Campos">NOBRE DE LA EMPRESA:</label>
		<input type="text" class="Datos" name="Empresa" value = "<?php if(isset($_POST['Trans'])){ echo $_POST['buscar'];} ?>" readonly>
		<br>
		<label class="Campos">NOMBRE:</label>
		<input type="text" name="Nombre" id="Nombre">
		<br>
		<label class="Campos">APELLIDO PATERNO:</label>
		<input type="text" name="APaterno" id="APaterno">
		<br>
		<label class="Campos">APELLINO MATERNO:</label>
		<input type="text" name="AMaterno" id="AMaterno">
		<br>
		<label class="Campos">AEROLINEA:</label>
		<input type="text" name="Aerolinea" id="Aerolinea" class="ui-autocomplete-input">
		<br>
		<label class="Campos">AEROPUERTO DE ORIGEN:</label>
		<input type="text" id="Origen" name="Origen" placeholder="Origen del viaje">
		<br>
		<label class="Campos">AEROPUERTO DE DESTINO:</label>
		<input type="text" id="Destino" name="Destino" placeholder="Destino del viaje">
		<br>
		<label class="Campos">TIPO DE VUELO:</label>
		<select name="TIPOV" id="TIPOV" class="InputCrear">
			<option value="Sencillo">SENCILLO</option>
			<option value="Redondo">REDONDO</option>
		</select>
		<br>
		<script type="text/javascript">
			
			var posicion=document.getElementById('TIPOV').options.selectedIndex; //posicion
			var actual = document.getElementById('TIPOV').options[posicion].text);//valor
			if(actual=='Sencillo'){
				document.getElementById('datetimepicker').style.display = 'block';
			}

		</script>
		<label class="Campos">FECHA Y HORA DE SALIDA:</label>
		<input type="text" id="datetimepicker_mask" name="Fecha" class="InputCrear" />
								<script>
								$('#datetimepicker_mask').datetimepicker({
								mask:'9999-19-39 29:59',lang:'es',minDate: 0
								});

								</script>
		<br>
		<label class="Campos" style="display:none">FECHA Y HORA DE REGRESO:</label>
		<input type="text" id="datetimepicker" name="Fecha" class="InputCrear" style="display:none"/>
								<script>
								$('#datetimepicker').datetimepicker({
								mask:'9999-19-39 29:59',lang:'es',minDate: 0
								});

								</script>
				<br>		
		<label class="Campos">N&Uacute;MERO DE VUELO:</label>
		<input type="text" id="Vuelo" name="Vuelo" placeholder="N&uacute;mero de vuelo" autocomplete="on">
		<br>
		<label class="Campos">TERMINAL/SALA:</label>
		<input type="text" id="Terminal" name="Terminal">
		<br>
		<label class="Campos">ASIENTO/CLASE:</label>
		<input type="text" id="Asiento" name="Asiento">
		<br>
		<label class="Campos">PUERTA:</label>
		<input type="text" id="Puerta" name="Puerta">
		<br>
		<input type="submit" value="Registrar Transporte" name="RegistrarTransporte" id="RegistrarTransporte" class="blanco">
	</form>
	</div>
<?php


$consulta = "select IDUsuario, Empresa from usuarios where TipoDeUsuario = 'Proveedor' order by Empresa ASC";
$resultados1 = $conexion->query($consulta);
$conexion->close();
$aerolineas = array();
if($resultados1->num_rows==0)
   array_push($aerolineas, "No hay datos");
else{
  while($columna = $resultados1->fetch_array(MYSQLI_ASSOC)){
    array_push($aerolineas, $columna["Empresa"]);
    
  }
}

?>


<script>
  $(function(){
    var autocompletarr = new Array();
    <?php //Esto es un poco de php para obtener lo que necesitamos
     for($i = 0;$i < count($aerolineas); $i++){ //usamos count para saber cuantos elementos hay ?>
       autocompletarr.push('<?php echo $aerolineas[$i]; ?>');
     <?php } ?>
     $("#Aerolinea").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletarr //Le decimos que nuestra fuente es el arreglo
     });
  });
</script>

</body>
</html>





