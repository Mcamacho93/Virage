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

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.slicknav.js"></script>

</head>

<body>
	<?php include 'menu.php';?>

<section>
	<div class="container tittle"> 
			<h3>CARIBE ORIENTAL: 7 DÍAS</h3></div>
	<div class="slider2">

			<ul class="slides2">
				<li class="slide2"><div><img src="images/promo4_01.jpg"></div></li>
				<li class="slide2"><div><img src="images/promo4_02.jpg"></div></li>
				<li class="slide2"><div><img src="images/promo4_03.jpg"></div></li>
				<li class="slide2"><div><img src="images/promo4_04.jpg"></div></li>
				
			</ul>


		</div>

		<script>
			var glide = $('.slider2').glide({
					afterTransition: function() {
						var currentSlide = this.currentSlide;
						console.log(currentSlide);
					}
				}).data('api_glide');

				$(window).on('keyup', function (key) {
					if (key.keyCode === 13) {
						glide.jump(3, console.log('Wooo!'));
					};
				});

				$('.slider2-arrow').on('click', function() {
					console.log(glide.current());
				});
		</script>
</section>
<section class="container mainpromo">
	<div class="six columns info">
		<div class="infohead"> <h6>INFORMACIÓN</h6></div>
		<div class="infotit"><img src="images/calendario.png"><p>FECHAS DISPONIBLES</p></div>
		<p>12 Diciembre 2014</p>
		
<div class="infotit"><img src="images/box.png"><p>ESTE PAQUETE INCLUYE:**</p></div>
		<ul class="flecha">
				<li>7 días en crucero. </li>
				<li>Recorrido Gran Turca, Turcas y Caicos - San Juan, Puerto Rico - Santo Tomás, Isla Vírgenes, E.E.U.U. - Cayo Media Luna, Las Bahamas.</li>
				
			</ul>	
			<h4>Paquete desde:</h4>
			<h3>$499.00 USD*</h3>
			<button>¡ APARTAR AHORA !</button>
<div class="terms">
	<p>* Precios NO incluyen impuestos, cargos y gastos portuarios.<br>*Precios sujetos a cambio y dispoibilidad<br>*Consulta nuestras comisiones<br>* Precios por persona CBL en doláres americanos pagaderos en moneda nacional al tipo de cambio del día.<br>** Puerto de embarque: Fort Lauderdale, Florida E.E.U.U. </p>

</div>

	</div>
	<div class="nine columns promo">
	<div class="offset-by-one">	<h6>ACERCA DEL VIAJE</h6>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
</p>
</div>
</div>

</section>
	<?php include 'promo.php';?>

	<?php include 'footer.php';?>

</body>
</html>