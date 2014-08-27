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
       <input id="geocompleteOrigin" type="text" placeholder="Origen" type="text" name="origen" />
         <input id="geocompleteDestiny" type="text" placeholder="Destino" type="text" name="destino" /> 
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
<input class="botoncot" type="button" value="COTIZAR MI VIAJE"></input>
</form>

<div class="flecha-down"></div>

  </div>