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
			<h3>FIESTAS PATRIAS LAS VEGAS</h3></div>
	<div class="slider2">

			<ul class="slides2">
				<li class="slide2"><div><img src="images/promo1_01.jpg"></div></li>
				<li class="slide2"><div><img src="images/promo1_02.jpg"></div></li>
				<li class="slide2"><div><img src="images/promo1_03.jpg"></div></li>
				<li class="slide2"><div><img src="images/promo1_04.jpg"></div></li>
				
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
		<p>12 Sept 2014 - 16 Sept 14</p>
		<div class="infotit"><img src="images/avion.png"><p>SALIDAS DESDE*:</p></div>
			<ul>
				<li>México D.F.</li>
				<li>Bajío</li>
				<li>Guadalajara</li>
				<li>Querétaro</li>
				<li>México D.F.</li>
				<li>Querétaro</li>
				<li>Puebla</li>
				<li>Monterrey</li>
				<li>Veracruz</li>
				<li>Aguascalientes</li>
			</ul>
			<p>*Del interior de la república: <br>ADD ON $169.00 USD</p>
<div class="infotit"><img src="images/box.png"><p>ESTE PAQUETE INCLUYE:</p></div>
		<ul class="flecha">
				<li>Boleto de avión clase turista en vuelos Chárter.</li>
				<li>Traslado solo llegada aeropuerto-hotel en servicio regular no privado.</li>
				<li>4 Noches de hospedaje en hotel seleccionado</li>
				<li>Cupón de descuentos para compras</li>
			</ul>	
			<h4>Paquete desde:</h4>
			<h3>$1,071.00 USD*</h3>
			<button>¡ APARTAR AHORA !</button>
<div class="terms">
	<p>* Precios NO incluyen IVA.<br>* Precios por persona en doláres americanos pagaderos en moneda nacional al tipo de cambio del día.<br>* Sujeto a disponibilidad aérea y terrestre a la fecha de reservación.<br>* Precios sujetos a cambio.</p>

</div>

	</div>
	<div class="nine columns promo">
	<div class="offset-by-one">	<h6>ACERCA DEL VIAJE</h6>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
</p>
<table>
	<tr class="tablehead">
		<th class="color"> </th>
		<th>Hotel</th>
		<th>CPL</th>
		<th>TPL</th>
		<th>DBL</th>
	</tr>
	<tr>
		<td class="blue1"></td>
		<td>Aria</td>
		<td>$ 1,071.00</td>
		<td>$ 1,106.00</td>
		<td>$ 1,106.00</td>

	</tr>
	<tr>
		<td class="blue2"></td>
		<td>Cosmopolitan</td>
		<td>$ 1,231.00</td>
		<td>$ 1,266.00</td>
		<td>$ 1,266.00</td>

	</tr>
	<tr>
		<td class="blue1"></td>
		<td>Palazzo</td>
		<td>$ 1,131.00</td>
		<td>$ 1,166.00</td>
		<td>$ 1,166.00</td>

	</tr>
	<tr>
		<td class="blue2"></td>
		<td>Bellagio</td>
		<td>$ 1,171.00</td>
		<td>$ 1,206.00</td>
		<td>$ 1,206.00</td>

	</tr>
	<tr>
		<td class="blue1"></td>
		<td>Wynn</td>
		<td>$ 1,371.00</td>
		<td>$ 1,406.00</td>
		<td>$ 1,406.00</td>

	</tr>
	<tr>
		<td class="blue2"></td>
		<td>Encore</td>
		<td>$ 1,420.00</td>
		<td>$ 1,455.00</td>
		<td>$ 1,455.00</td>

	</tr>
	<tr>
		<td class="blue1"></td>
		<td>Ceasar Augustos</td>
		<td>$ 1,243.00</td>
		<td>$ 1,278.00</td>
		<td>$ 1,278.00</td>

	</tr>

</table>
<p>* Sumplemento clase Ejecutiva 499 USD<br>
* No incluye: Impuestos 298 USD por persona - Resort Fee</p>
</div>
</div>
</section>
	<?php include 'promo.php';?>

	<?php include 'footer.php';?>

</body>
</html>