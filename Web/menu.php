<!--LOGIN-->
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
         <input type="text" name="username" id="username" tabindex="1" placeholder="Usuario" required >
         <label for="password">Contraseña:</label>
          <input type="password" name="password" id="password" tabindex="2" placeholder="Contraseña">
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

  

<script type="text/javascript">
$(function(){
  $('#loginform').submit(function(e){
    return false;
  });
  
  $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });


});
</script>
  <!--LOGIN-->

  <div id="men">
      <div class="container">
      <div class="three columns">
      <a href="home.php"><img src="images/logo_03.png"></a></div>
<ul id="menu">
    <a href="nosotros.php"><li>Nosotros</li></a>
    <a href="servicios.php"><li>Servicios</li></a>
    <a href="premium.php"><li>Premium</li></a>
    <a href=""><li>Blog</li></a>
    <a href="contacto.php"><li>Contacto</li></a>
    <a href="login.php" class="flatbtn"><li>Login</li></a>
    <a href="#" class="togglebtn"><li>COTIZAR MI VIAJE</li></a>

</ul>
<script type="text/javascript">
$(document).ready(function(){
  $('#menu').slicknav();
});
</script>
</div></div></div>

<!--<div id="men"> Hice una copia del contenido original para poder modificarlo
      <div class="container">
      <div class="three columns">
      <a href="home.php"><img src="images/logo_03.png"></a></div>
<ul id="menu">
    <a href="nosotros.php"><li>Nosotros</li></a>
    <a href="servicios.php"><li>Servicios</li></a>
    <a href="premium.php"><li>Premium</li></a>
    <a href=""><li>Blog</li></a>
    <a href="contacto.php"><li>Contacto</li></a>
    <a href="#loginmodal" class="flatbtn" id="modaltrigger"><li>Login</li></a>
    <a href="#" class="togglebtn"><li>COTIZAR MI VIAJE</li></a>

</ul>
<script type="text/javascript">
$(document).ready(function(){
  $('#menu').slicknav();
});
</script>
</div></div></div>-->
