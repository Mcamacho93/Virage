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

	<div class="container titulo">
	<h1>CREAR NUEVO VIAJE</h1>
	<hr>
</div>


<div class="container">
	<form name="Usuario" id="Usuario" method="post" action="Transporte.php">
	<label class="Campos">EMPRESA : </label>	
	<input type="text" name="buscar" id="buscar" style="width:300px;" class="ui-autocomplete-input">
	<br>
	<br>
	<button type="submit" class="cargar"  name="Transporte">
	<div class="report">Crear Vuelo</div>
	<div class="icon"><img src="images/sync.png"></div>
	</button>
	</script>
	<button type="submit" class="cargar" name="Hotel">
	<div class="report">Agregar Hospedaje</div>
	<div class="icon"><img src="images/sync.png"></div>
	</button>
	<button type="submit" class="cargar" name="Hotel">
	<div class="report">Agregar Transporte</div>
	<div class="icon"><img src="images/sync.png"></div>
	</button>
	</form>
</div>
<?php


$sql = "select CodigoCliente, NombreDeCliente from login order by NombreDeCliente ASC";
$res = $conexion->query($sql);

$arreglo = array();
if($res->num_rows==0)
   array_push($arreglo, "No hay datos");
else{
  while($resultados = $res->fetch_array(MYSQLI_ASSOC)){
    array_push($arreglo, $resultados["NombreDeCliente"]);
  }
}

?>


<script>
  $(function(){
    var autocompletar = new Array();
    <?php //Esto es un poco de php para obtener lo que necesitamos
     for($p = 0;$p < count($arreglo); $p++){ //usamos count para saber cuantos elementos hay ?>
       autocompletar.push('<?php echo $arreglo[$p]; ?>');
     <?php } ?>
     $("#buscar").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletar //Le decimos que nuestra fuente es el arreglo
     });
  });
</script>
<br>
<div class="container titulo">
	<h1>VUELOS PROGRAMADOS</h1>
	<hr>
</div>

<div class="container">
	<table class="tablas">
		<tr class="none" id="borde">
			<th>FOLIO</th>
			<th>NOMBRE</th>
			<th>AEROLINEA</th>
			<th>ORIGEN</th>
			<th>DESTINO</th>
			<th>TIPO DE VUELO</th>
			<th>FECHA DE SALIDA</th>
			<th>NUMERO DE VUELO</th>			
		</tr>
	
		<?php	
			$consultaviajes = "Select Folio, Nombre, Apellido_Paterno, Apellido_Materno, Aerolinea, Origen, Destino, TipoDeVuelo, Fecha_Hora,NumeroDeVuelo 
			from transporte";
			//$consultaviajes = "select * from transporte";
			$viajes = $conexion->query($consultaviajes);
			$conexion->close();
			while($columnas = $viajes->fetch_array(MYSQLI_ASSOC)){

				echo "<tr>
						<td>".$columnas['Folio']."</td>
						<td>".$columnas['Nombre']."  ".$columnas['Apellido_Paterno']."  ".$columnas['Apellido_Materno']."</td>
						<td>".$columnas['Aerolinea']."</td>
						<td>".$columnas['Origen']."</td>
						<td>".$columnas['Destino']."</td>
						<td>".$columnas['TipoDeVuelo']."</td>
						<td>".$columnas['Fecha_Hora']."</td>
						<td>".$columnas['NumeroDeVuelo']."</td>
					  </tr>";
			}
			
		?>
	</table>
</div>



</body>
</html>