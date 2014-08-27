
<?php
  session_start();
  unset($_SESSION["CODIGOCLIENTE"]); 
  session_destroy();
  /*header("Location: inicio.html");*/
  echo '<script language = javascript>
		alert("Usted ha cerrado sesion")
		self.location = "../Web/home.php"
		</script>';
  exit;
?>

