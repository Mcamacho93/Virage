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
    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
	<link type="text/css" href="css/le-frog/jquery-ui-1.8.1.custom.css" rel="Stylesheet" /> 
	<link type="text/css" rel="stylesheet" href="css/css.css">
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script src="js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script> -->
	
	

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
	<h1>CREAR NUEVO VIAJE</h1>
	<hr>
</div>


<div class="container">
	<form name="Usuario" id="Usuario" method="post" action="Transporte.php">
	<label class="Campos">NOMBRE: </label>	
	<input type="text" name="buscar" id="buscar" style="width:300px;" class="ui-autocomplete-input">
	<br>
	<label class="Campos">ID:</label>
	<label class="Datos"><?php if(isset($_POST['buscar'])){ echo $_POST['buscar'];}else{echo "Nada";} ?></label>
	<br>
	<label class="Campos">FECHA DE SALIDA: </label>
	<input type="text" placeholder="Fecha" name="Fecha" id="Fecha" readonly> <br>
	<button type="submit" class="cargar" style="width:250px; height:50px;" name="Trans">
	<div class="report">Agregar Transporte</div>
	<div class="icon"><img src="images/sync.png"></div>
	</button>
	</form>
</div>
<?php


$sql = "select CodigoCliente, NombreDeCliente from login order by NombreDeCliente ASC";
$res = $conexion->query($sql);
$conexion->close();
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


<div class="container">

</div>