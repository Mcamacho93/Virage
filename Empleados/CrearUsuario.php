<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<title>Usuario Nuevo</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
</head>
<body>
	<header>
		<div class="container">	
			<div class="three columns">
				<a href=""><img src="images/logo.png"></a>
			</div>	
			<div class="eight columns menu">	
				<ul>
					<a href=""><li>NOTICIAS</li></a>
					<a href="ReportesEmpleados.php"><li>REPORTES EN LÍNEA</li></a>
					<a href="Viajes.php"><li>VIAJES</li></a>
					<a href="Directorio.php"><li>DIRECTORIO</li></a>
				</ul>
			</div>
			<?php
		if(isset($_SESSION['Usuario'])) 
		{
		 	 if (!empty($_SESSION['Usuario'])) 
		  	{
		     	echo "<br>	
					  <div class='five columns cliente'>
					  <h5>".$_SESSION['Nombre']."</h5>	
				      <a href=' logout.php'>Cerrar Sesión</a>			
					</div>";
		  	}
		}
		else{
		?><br>	
			<div class="five columns cliente">
				<h5>Nombre Completo de Cliente</h5>	
				<a href="">Cerrar Sesión</a>			
			</div>
		</div>
		<?php } ?>
	</header>

	<div class="container titulo">
	<h1>CREAR USUARIO</h1>
	<hr>
</div>
<form id="UsuarioNuevo" name="UsuarioNuevo" method="post" action="RegistroNuevo.php" enctype="multipart/form-data">
<div class="container">
	<label class="Campos">TIPO DE USUARIO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<select name="TipoDeUsuario" id="TipoDeUsuario">
		<option value="Administrador">Administrador</option>
		<option value="Empleado">Empleado</option>
		<option value="Cliente">Cliente</option>
		<option value="Proveedor">Proveedor</option>
	</select>
	<br>
	<label class="Campos">USUARIO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Usuario" class="InputCrear">
	<br>
	<label class="Campos">CONTRASEÑA:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Contrasena" class="InputCrear">
	<br>
	<label class="Campos">NOMBRE:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Nombre" class="InputCrear">
	<br>
	<label class="Campos">EMPRESA:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Empresa" class="InputCrear">
	<br>
	<label class="Campos">EDAD:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Edad" class="InputCrear">
	<br>
	<label class="Campos">SEXO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Sexo" class="InputCrear">
	<br>
	<label class="Campos">TEL&Eacute;FONO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Telefono" class="InputCrear">
	<br>
	<label class="Campos">CORREO ELECTR&Oacute;NICO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Correo" class="InputCrear">
	<br>
	<label class="Campos">CUMPLEAÑOS:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Cumpleanos" class="InputCrear">
	<br>
	<label class="Campos">CALLE Y N&Uacute;M:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Calle" class="InputCrear">
	<br>
	<label class="Campos">CIUDAD Y ESTADO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Ciudad" class="InputCrear">
	<br>
	<label class="Campos">PA&Iacute;S:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Pais" class="InputCrear">
	<br>
			
		<input type="file" id="img" name="img"/><br/>
		<div id="vista_previa"><label class="Campos">Vista previa</label></div>
		<!--<input type="button" value="cancelar"  style="display: none;" onclick="cancela(this);" id="resetear" class="cafe"/>-->
		<script>
    if (window.FileReader) {
      function seleccionArchivo(evt) {
        var files = evt.target.files;
        var f = files[0];
        var leerArchivo = new FileReader();
        //document.getElementById('resetear').style.display= 'none';
          leerArchivo.onload = (function(elArchivo) {
            return function(e) {
              document.getElementById('vista_previa').innerHTML = '<img src="'+ e.target.result +'" alt="" width="250" />';
            };
          })(f);
    
          leerArchivo.readAsDataURL(f);
		      }
		     } else {
		      document.getElementById('vista_previa').innerHTML = "El navegador no soporta vista previa";
		    }
		    
		      document.getElementById('img').addEventListener('change', seleccionArchivo, false);
		      
		   /*  function cancela(elForm){
		document.getElementById('vista_previa').reset();
		if (window.FileReader) {
		document.getElementById('vista_previa').innerHTML = "Vista Previa";
		}else{
		document.getElementById('vista_previa').innerHTML = "El navegador no soporta vista previa";
		}
		        document.getElementById('resetear').style.display= 'none';
		      }*/
    </script>
		<!--<output id="list-miniatura"></output>
		<script>
		  function handleFileSelect(evt) {
		    var files = evt.target.files; // FileList object
		 
		    // Loop through the FileList and render image files as thumbnails.
		    for (var i = 0, f; f = files[i]; i++) {
		 
		      // Only process image files.
		      if (!f.type.match('image.*')) {
		        continue;
		      }
		 
		      var reader = new FileReader();
		 
		      // Closure to capture the file information.
		      reader.onload = (function(theFile) {
		        return function(e) {
		          // Render thumbnail.
		          var span = document.createElement('span');
		          span.innerHTML = [ '<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/><br />'].join('');
		          document.getElementById('list-miniatura').insertBefore(span, null);
		        };
		      	})(f);
		 
		      // Read in the image file as a data URL.
		      	reader.readAsDataURL(f);
		  		  }
		 		 }
		 
		 		 document.getElementById('img').addEventListener('change', handleFileSelect, false);
		</script>-->

		<br>
		<label class="Campos">NOTAS:</label>
		<br>
		<textarea class="notas" name="Notas"></textarea>
		<br>
		<input type="submit" name="Registrar" value="Guardar" class="blanco">
		<input type="hidden" value="upload" name="action" />	
	</div>
</form>	
	

	
</body> 
</html>