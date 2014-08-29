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


<section class="container cotizarform" >
	<div class="seven columns">
	<h6>COTIZAR MI VIAJE</h6>
	 <form class="cot" name="form" action="" onsubmit="return validateForm();" method="post">
      <input placeholder="Nombre" type="text" name="nombre" required ></input>
      <input placeholder="Télefono" type="text" name="teléfono" required></input>
      <input placeholder="Correo electrónico" type="text" required></input>
      <input placeholder="Número de personas" type="number" name="quantity" min="1" max="999" required></input>
      <div class="radio">
        <input id="sencillo" type="radio" name="viaje" value="sencillo">
        <label for="sencillo">Sencillo</label>
        <input id="redondo" type="radio" name="viaje" value="redondo">
        <label for="redondo">Redondo</label>
      </div>
      <p>Seleccione el origen y su destino:</p>
       <input id="geocompleteOrigin" type="text" placeholder="Origen" type="text" name="origen" required />
         <input id="geocompleteDestiny" type="text" placeholder="Destino" type="text" name="destino"  required/> 
<script>
$(".liston").hide();
  $( ".togglebtn" ).click(function() {
  $( ".liston" ).slideToggle( "slow" );
});
      $(function(){
     
        var options = {
        };
        
        $("#geocompleteOrigin").geocomplete(options);
        
      });
      $(function(){
        
        var options = {
        };
        
        $("#geocompleteDestiny").geocomplete(options);
        
      });

    </script>
      <p>Seleccione la fecha de su viaje:</p>

 <label for="datepicker">Ida:</label>
    <input class="date" placeholder="DD/MM/AA" id="datepicker">
 <label for="datepicker">Vuelta:</label>
    <input  class="date" placeholder="DD/MM/AA" id="datepicker2">
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
        <button>COTIZAR MI VIAJE</button>
</form>
</div>

</section>

	<?php include 'footer.php';?>

</body>

</html>