<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio de Sesión</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" href="fonts/fonts.css">
	<link rel="stylesheet" href="css/slicknav.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic' rel='stylesheet' type='text/css'>
</head>
<body>


	
	<!--<center>
	<div class="cuadro">
		<form id="log" action="../Clientes/log.php" method="post">
			<table id="tablalog" border="1">
				<label class="Campos">No. de Cliente</label>
				<br>
				<input type="text" placeholder="Número de Cliente" pattern="[0-9]" required name="username">
				<br>
				<label class="Campos">Contraseña</label>
				<br>
				<input type="password" placeholder="Contraseña" id="Contrasena">
				<br>
				<input type="submit" value="Ingresar" name="loginbtn" class="cafe"> 
			</table>
		</form>
	</center>
</div>-->
<?php include('menu.php'); 
	
		if (!empty($_SESSION["Usuario"])) 
			{ ?> 
				<script type="text/javascript">
					alert('Actualmente hay una sesión activa, finalice la sesión actual y vuelva a intentarlo')
					self.location="../Clientes/Reportes.php"
				</script>
			<?php }
	
?>
<center>
<div id="loginmodal">
	  	<div class="top"> 
	  		<img class="hidemodal" src="images/close.png">
	  	</div>
    
    	<form id="loginform" name="loginform" method="post" action="../Clientes/log.php">
    			<div class="logintittle">
    		<h6>INICIAR SESIÓN</h6>
    	</div>
    		<label>Tipo de Usuario:</label>
    		
    		  <select name="Tipo" tabindex="1" id="password">
            	<option value="Cliente">Cliente</option>
            	<option value="Empleado">Empleado</option>
          	</select>
          		
     		 <label for="username">Usuario:</label>
     		 <input type="text" name="username" id="username" tabindex="1" placeholder="Usuario" required>
     		 <label for="password">Contraseña:</label>
      		<input type="password" name="password" id="password" tabindex="2" placeholder="Contraseña">
     		<div class="center"><a href="#"><button type="submit" name="loginbtn" id="loginbtn" value="Log In" tabindex="3">INICIAR SESIÓN</button></a></div>
     		<div class="bot"> 
Si olvidaste tu contraseña o tienes problemas para iniciar sesión <a href="#">haz click aqui</a></div>
    
    </form>
    	
  </div>	
  </center>
	
</body>
</html>