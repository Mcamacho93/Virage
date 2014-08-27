<?php 
session_start();
?>
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

  <script src="js/jquery.leanModal.min.js"></script>
  <div id="loginmodal" style="display:none;">
      <div class="top"> 
        <img class="hidemodal" src="images/close.png">
      </div>
    
      <form id="loginform" name="loginform" method="post" action="../Clientes/log.php">
          <div class="logintittle">
        <h6>INICIAR SESIÓN</h6>
      </div>
         <label for="username">Usuario:</label>
         <input type="text" name="username" id="username" tabindex="1" placeholder="Usuario" required onchange="alert('Usuario OK')">
         <label for="password">Contraseña:</label>
          <input type="password" name="password" id="password" tabindex="2" placeholder="Contraseña" onchange="alert('Contraseña OK')">
        <div class="center"><a href=""><button type="submit" name="loginbtn" id="loginbtn" value="Log In" tabindex="3" >INICIAR SESIÓN</button></a></div>
        <div class="bot"> 
Si olvidaste tu contraseña o tienes problemas para iniciar sesión <a href="#">haz click aqui</a>      </div>
    <?php
    if (isset($_POST["loginbtn"])){

      echo "Se presiono el boton";
    }
    else{
      echo "No se presiono el boton";
    }
  ?>
    </form>
      
  </div>

  


<div class="liston hidden">
	<div class="lblanco"><h4>¡ORGANIZA TU VIAJE!</h4></div>
	<div class="triangulo"></div>
		<form name="form" action="" onsubmit="return validateForm();" method="post">
			<input placeholder="Nombre" type="text" name="nombre" ></input>
			<input placeholder="Télefono" type="text" name="teléfono"></input>
			<input placeholder="Correo electrónico" type="text"></input>
			<input placeholder="Número de personas" type="number" name="quantity" min="1" max="999"></input>
			<div class="radio">
				<input id="sencillo" type="radio" name="viaje" value="sencillo">
				<label for="sencillo">Sencillo</label>
				<input id="redondo" type="radio" name="viaje" value="redondo">
				<label for="redondo">Redondo</label>
			</div>
			<p>Seleccione el origen y su destino:</p>
			 <input id="geocomplete" type="text" placeholder="Origen" type="text" name="origen" />
		     <input id="geocomplete2" type="text" placeholder="Destino" type="text" name="destino" /> 
<script>
$(".liston").hide();
  $( ".togglebtn" ).click(function() {
  $( ".liston" ).slideToggle( "slow" );
});

      $(function(){
     
        var options = {
        };
        
        $("#geocomplete").geocomplete(options);
        
      });
      $(function(){
        
        var options = {
        };
        
        $("#geocomplete2").geocomplete(options);
        
      });
    </script>
			<p>Seleccione la fecha de su viaje:</p>

 <label for="datepicker">Ida:</label>
    <input class="date1" placeholder="DD/MM/AA" id="datepicker">
 <label for="datepicker">Vuelta:</label>
    <input  class="date2" placeholder="DD/MM/AA" id="datepicker2">
<script src="js/pikaday.js"></script>
    <script>

    var picker = new Pikaday(
    {
        field: document.getElementById('datepicker'),
        firstDay: 1,
        minDate: new Date('2000-01-01'),
        maxDate: new Date('2020-12-31'),
        yearRange: [2000,2020]
    });
    var picker = new Pikaday(
    {
        field: document.getElementById('datepicker2'),
        firstDay: 1,
        minDate: new Date('2000-01-01'),
        maxDate: new Date('2020-12-31'),
        yearRange: [2000,2020]
    });

    </script>
<button>COTIZAR VIAJE</button>
</form>

<div class="flecha-down"></div>

	</div>
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

<?php include 'promo.php'; ?>




<section class="testimonio">
	<div class="container">
		<div class="eight columns">
			<div class="two column"><img src="images/foto1.png"></div>
			<div class="five columns testm">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"</div>
		</div>
		<div class="eight columns">
			<div class="two column"><img src="images/foto2.png"></div>
			<div class="five columns testm">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"</div>
		</div>
	</div>
</section>
	<?php include 'footer.php';?>

</body>

</html>