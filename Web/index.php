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

<body>
<?php include 'menu.php';?>
	<?php include 'cotizador.php';?>


<div class="slider">
			<ul class="slides">
				<li class="slide">
					<div>
						<div class="blacks">
						<h3>CONNECTING EXPERIENCES</h3>	
						<a href="contacto.php"><button>VÁMONOS DE VIAJE</button></a>
						</div><img src="images/h1.jpg"></div>
					</li>
				<li class="slide"><div>
						<div class="b">
						<h3>CONECTANDO EXPERIENCIAS</h3>	
						<a href="contacto.php"><button>VÁMONOS DE VIAJE</button></a>
						</div><img src="images/h2.jpg"></div>
					</li>
				<li class="slide">	<div>
						<div class="b">
						<h3>EXPERIÊNCIA DE CONEXÃO</h3>	
						<a href="contacto.php"><button>VÁMONOS DE VIAJE</button></a>
						</div><img src="images/h3.jpg"></div>
					</li>
				<li class="slide">	<div>
						<div class="b">
						<h3>EXPÉRIENCE DE CONNEXION</h3>	
						<a href="contacto.php"><button>VÁMONOS DE VIAJE</button></a>
						</div><img src="images/h4.jpg"></div>
					</li>
			</ul>
		</div>
		<script>
			var glide = $('.slider').glide({
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

				$('.slider-arrow').on('click', function() {
					console.log(glide.current());
				});
		</script>
		<section class="nosotros">
			<div class="container">
				<h1>¿PORQUÉ VIAJAR CON VIRAGE?</h1>
				<div class="nine columns"><p>En Virage nos especializamos en servicios turísticos corporativos con más de 30 años de experiencia, realizando grupos de incentivos, convenciones y congresos de diferentes sectores; Nuestra área de Tour and Travel a formado parte de miles de experiencias que han hecho la recomendación de nuestros clientes y en la parte corporativa hemos ayudado a integrar procesos, mayores ahorros y mejorar la administración del viaje.</p><p>

Nuestros trabajo nos ha llevado a formar parte de los lideres de la industria y a ser reconocidos como una empresa innovadora y transparente.

</p></div>
			</div>
		</section>

<?php include 'promo.php';?>


	<?php include 'footer.php';?>

</body>

</html>