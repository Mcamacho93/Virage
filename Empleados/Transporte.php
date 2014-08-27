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
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
	<script src="js/jquery.js"></script>
	<script src="js/jquery.datetimepicker.js"></script>
    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
	<link type="text/css" href="css/le-frog/jquery-ui-1.8.1.custom.css" rel="Stylesheet" /> 
	<link type="text/css" rel="stylesheet" href="css/css.css">
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script src="js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script> -->
	
	

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

	<div class="container titulo">
	<h1>Favor de llenar la siguiente información</h1>
	<hr>
</div>


<div class="container">
	<form action="#" method="post" name="Transporte" id="Transporte">	
		<label class="Campos">Nombre del pasajero:</label>
		<label class="Datos"><?php if(isset($_POST['Trans'])){ echo $_POST['buscar'];} ?></label>
		<br>
		<label class="Campos">Aerolinea:</label>
		<input type="text" name="Aerolinea" id="Aerolinea" class="ui-autocomplete-input">

		<br>
		<label class="Campos">Origen:</label>
		<input type="text" id="Origen" name="Origen" placeholder="Origen del viaje">
		<br>
		<label class="Campos">Destino:</label>
		<input type="text" id="Destino" name="Destino" placeholder="Destino del viaje">
		<br>
		<label class="Campos">Fecha y Hora de Salida:</label>
		<input type="text" id="datetimepicker_mask" name="Fecha" class="InputCrear" onlyread/>
								<script>
								$('#datetimepicker_mask').datetimepicker({
								mask:'9999/19/39 29:59',lang:'es'
								});

								</script>
				<br>
		<br>
		<label class="Campos">N&uacute;mero de vuelo:</label>
		<input type="text" id="Vuelo" name="Vuelo" placeholder="N&uacute;mero de vuelo" autocomplete="on">
		<br>
		<label class="Campos">Terminal/Sala:</label>
		<input type="text" id="Terminal" name="Terminal">
		<br>
		<label class="Campos">Asiento/Clase:</label>
		<input type="text" id="Asiento" name="Asiento">
		<br>
		<label class="Campos">Puerta:</label>
		<input type="text" id="Puerta" name="Puerta">
		<br>
		<input type="submit" name="RegistrarTransporte" id="RegistrarTransporte" class="blanco">
	</form>
	</div>
<?php


$consulta = "select IDUsuario, Empresa from usuarios where TipoDeUsuario = 'Proveedor' order by Empresa ASC";
$resultados1 = $conexion->query($consulta);
$aerolineas = array();
if($resultados1->num_rows==0)
   array_push($aerolineas, "No hay datos");
else{
  while($columna = $resultados1->fetch_array(MYSQLI_ASSOC)){
    array_push($aerolineas, $columna['Empresa']);
    
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
     $('#Aerolinea').autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletar1 //Le decimos que nuestra fuente es el arreglo
     });
  });
</script>

</body>
</html>





