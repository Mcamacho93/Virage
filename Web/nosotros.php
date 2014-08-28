<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<title>VIRAGE</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" href="fonts/fonts.css">
<link rel="stylesheet" href="css/slicknav.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/jquery.glide.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.geocomplete.js"></script>
<script src="js/logger.js"></script> 
<script src="js/jquery.slicknav.js"></script>

</head>
</head>

<body>
	<?php include 'menu.php';?>
	<?php include 'cotizador.php';?>


<section class="hnos" id="largeimage">
	<div class="container"> <h3>ACERCA DE NOSOTROS</h3></div>
</section>
<section class="container main">
	
<div class="eight columns tamano">
	<div class="botones">
<ul class="tabs">
	<li id="img1"><div class="spacetab">NOSOTROS</div></li>
	<li id="img2"><div class="spacetab">MISIÓN</div></li>
	<li id="img3"><div class="spacetab">DISTINTIVO M</div> </li>
	<li id="img4"><div class="spacetab last">VENTAJAS</div></li>
</ul></div>
<div id="div1">
	<h6>CONÓCENOS</h6>
	<p>Nuestro trabajo nos ha llevado al liderazgo en la industria y a ser reconocidos por diferentes prestadores de servicios turísticos, lo que nos impulsa a continuar esforzándonos y seguir en el camino a la excelencia de los viajes, poniendo a disposición de nuestros clientes, todas nuestra experiencia y conocimiento.
</p><p>
Somos profesionales en un mundo donde la competitividad no se detiene con soluciones rápidas y efectivas, ofrecemos a nuestros clientes un valor agregado en los servicios corporativos y administración del viaje.

</div>

<div id="div2">
	<h6>NUESTRA MISIÓN</h6>
	<p>Estamos comprometidos para brindar calidad y excelencia en  servicios turísticos corporativos dando a nuestros clientes la confianza, seguridad, satisfacción y las mejores experiencias de viaje por medio de una  comunicación bilateral que logre superar toda expectativa. 
</p></div>

<div id="div3"><h6>DISTINTIVO M</h6>
	<p>Contamos con la certificación de SECTUR dentro del programa de calidad Moderniza, sistema de gestión para el mejoramiento de la calidad de las micro, pequeñas y grandes empresas turísticas, a través del cual, se estimula a los colaboradores para incrementar los índices de rentabilidad y competitividad de la empresa. Con base en una dirección y administración que permita a la empresa satisfacer las expectativas de sus clientes. 
</p>
<img src="images/m.png">
</div>

<div id="div4"><h6>¿QUÉ VENTAJAS TE OFRECEMOS?</h6>
	<p>Ser la primera agencia de viajes en América Latina que hace de los negocios, toda una experiencia y orientar a nuestros clientes para la adecuada administración de presupuestos con nuestra tecnología SAP Business One, CORPONET y Sabre. 
</p><p>
SAP Business One se integra con el Sistema de Distribución Global (GDS) Sabre, globalizador mas importante a nivel internacional,  líder mundial de soluciones de alto desempeño para la industria de viajes, el cual, proporciona un análisis detallado de la actividad de los viajes corporativos al:
</p>
<ul class="flecha">
	<li><p> Monitorear volúmenes aéreos, hospedaje, servicios terrestres, entre otros. 
</p></li>
<li><p> Centralizar e integrar ventas, operaciones y finanzas en un solo reporte.</p></li>

<li><p> Detectar áreas de oportunidad en los gastos de viaje y cumplimiento con la política de viaje.</p></li>

<li><p> Tomar decisiones acertadas y eficaces recaudando la información en una sola fuente de datos inmediata y actualizada.</p></li>

<li><p> Conciliar reportes en tiempo real de la actividad del viaje de acuerdo a los requerimientos contables.</p></li>

</ul>
	<div class="one column"></div>
	</div>
	</div>	
	

</div>	
<div class=" offset-by-one six columns con">
		<h1>“EN VIRAGE NOS ESPECIALIZAMOS EN HACER DE LOS SERVICIOS CORPORATIVOS TODA UNA EXPERIENCIA.”</h1>

</div>
		<script type="text/javascript">
$("#img1").on('click', function() {
   $("#div1").fadeIn();
   $("#div2").hide();
   $("#div3").hide();
   $("#div4").hide();
});

$("#img2").on('click', function() {
   $("#div1").hide();
   $("#div2").fadeIn();
   $("#div3").hide();
   $("#div4").hide();
});

$("#img3").on('click', function() {
   $("#div1").hide();
   $("#div2").hide();
   $("#div3").fadeIn();
   $("#div4").hide();
});

$("#img4").on('click', function() {
   $("#div1").hide();
   $("#div2").hide();
   $("#div3").hide();
   $("#div4").fadeIn();
});
</script>
</section>
	<?php include 'footer.php';?>

</body>
</html>