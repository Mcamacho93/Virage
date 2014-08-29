<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Virage</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
	<link type="text/css" href="css/le-frog/jquery-ui-1.8.1.custom.css" rel="Stylesheet" />  
	<link type="text/css" rel="stylesheet" href="css/css.css">

	<?php include ("conexion.php");?>	

</head>
<body onload="startTime()" >

<!--Header-->
	<?php
		if (empty($_SESSION["Usuario"])) 
			{ ?> 
				<script type="text/javascript">
					alert('Inicie sesión para continuar')
					self.location="../Web/login.php"
				</script>
			<?php }
	?>
	<header>
		<div class="container">	
			<div class="three columns">
				<a href=""><img src="images/logo.png"></a>
			</div>	
			<div class="eight columns menu">	
				<ul>
					<a href=""><li>NOTICIAS</li></a>
					<a href=""><li>REPORTES EN LÍNEA</li></a>
					<a href=""><li>CUPONERA</li></a>
					<a href=""><li>PERFIL</li></a>
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
				      <a href='logout.php'>Cerrar Sesión</a>			
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

<!--<a href='logout.php'>Cerrar Sesión</a>-->
<!--Titulo de seccion-->
<div class="container titulo">
	<h1>FILTRAR POR</h1>
	<hr>
</div>

</div>


	<form name="filtro" method="get">
		<div class="container"><h2>FORMULARIO:</h2>
			<img src="<?php echo $_SESSION['Img'];?>">
			<label>FECHA DE INICIO: </label><input type="text" placeholder="YY-MM-DD" name="datepicker" id="datepicker" class="calendario" readonly/>
				<script type="text/javascript">
					jQuery(function($){
			      	$.datepicker.regional['es'] = {
			            closeText: 'Cerrar',
			            prevText: '&#x3c;',
			            nextText: '&#x3e;',
			            currentText: 'Hoy',
			            monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
			            'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
			            monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
			            'Jul','Ago','Sep','Oct','Nov','Dic'],
			            dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
			            dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
			            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
			            weekHeader: 'Sm',
			            dateFormat: 'yy-mm-dd',
			            firstDay: 1,
			            isRTL: false,
			            showMonthAfterYear: false,
			            yearSuffix: ''};
		     	 $.datepicker.setDefaults($.datepicker.regional['es']);
				});    
		 
		$(document).ready(function() {
		   $("#datepicker").datepicker();
		 });
		</script>
		
		<LABEL>PASAJERO: </LABEL><input placeholder="Buscar" class="buscar" name="buscar" id="buscar"></input>
			
			<!--<label>FECHA FIN: </label></th><th><input type="text" placeholder="DD/MM/YY" name="datepicker" id="datepicker" class="calendario" readonly="readonly"/>-->
			<br>
			
			<label>PNR: </label></th><th><input placeholder="Buscar por PNR" name="PNR"></input>
			<br>		
			<label>Empresa:</label><br><label>Nombre de la Empresa</label>
			
			<input type="submit" class="cafe" name="Busqueda" value="Buscar" style="width:5em; height:2em;"	id="Buscar">
			<input type="submit" class="cafe" name="Busqueda" value="Mostrar Todo" style="width:7em; height:2em;" id="Mostrar">
		</div>

		<div class="container">
			
</table>
</form>
<!--<button class="cumpleanos"> 
	<div class="title">Enviar tarjeta de regalo</div>
	<div class="icon"><img src="images/gift.png"></div>
</button>-->

<!--<button class="cargar">
	<div class="report">Cargar reporteador</div>
	<div class="icon"><img src="images/sync.png"></div>
</button>-->

<br><br><br>

<br><br><br>

<!--Estilos texto-->
	<div class="container titulo">
	<h1>REPORTES EN LINEA</h1>
	<hr>
	</div>
	<!--<h2>TÍTULO TABLAS Y FORMULARIOS</h2>
	<br>
	<h4>TEXTO TABLAS</h4>
	<br>
	<p>Párrafo:<br>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et d</p>-->
</div>



<div class="container">
	<br><br>
<!--Tablas-->
	<table class="tablas" id="Registros">
		<tr class="none">
		  <th><h2>FECHA DE <br>EMISIÓN</h2></th>
		  <th><h2>NO. DE <br>DOC.</h2></th>		
		  <th><h2>PNR</h2></th>
		  <th class="w1"><h2>NOMBRE DEL <br>PASAJERO</h2></th>
		  <th class="w2"><h2>PROVEEDOR</h2></th>
		  <th><h2>RUTA</h2></th>
		  <th class="w3"><h2>IMPORTE<br> TOTAL</h2></th>
		  <th><h2>FORMA <br>DE PAGO</h2></th>
		  <th class="w4"><h2>DETALLES</h2></th>


<?php 

		/* Es el código de la paginación, lo comenté porque tiene un detalle
			$url = "http://localhost/Virage/Reportes.php";
			//echo "<b>$url</b>";
			$reg = $conexion->query("select count(*) from reportesvirage");
			$array = $reg->fetch_row();
			$totalderegistros = $array[0];
			


			if ($totalderegistros > 0) {
				//Limito la busqueda
				$Tamanodepagina = 12;
			        $pagina = false;

				//examino la pagina a mostrar y el inicio del registro a mostrar
			        if (isset($_GET["pagina"]))
			            $pagina = $_GET["pagina"];
			        
				if (!$pagina) {
					$inicio = 0;
					$pagina = 1;
				}
				else {
					$inicio = ($pagina - 1) * $Tamanodepagina;
				}
				//calculo el total de paginas
				$total_paginas = ceil($totalderegistros / $Tamanodepagina);
	*/
						

if (isset($_GET["Busqueda"])){ //Para llenar la tabla dependiendo de lo que se quiera buscar
	if ($_GET["Busqueda"]=="Buscar") {
		if(($_GET["buscar"]) || ($_GET["buscar"] && $_GET["PNR"]) || ($_GET["buscar"]) && ($_GET["PNR"] && $_GET["datepicker"])){ //Para búsqueda por nombre
			
			
			
        		$select=$conexion->query("select ID,FECHA,NODOCUMENTO, PNR,NOMBREDEPASAJERO, 
           						PROVEEDOR,RUTA1, IMPORTETOTAL,FORMADEPAGO from reportesvirage 
           						where NOMBREDEPASAJERO like '".$_GET["buscar"]."%' and CODIGOCLIENTE = ".$_SESSION['Usuario']."");
           						

           		while ($columna=$select->fetch_array(MYSQLI_ASSOC))
                   {
                    
                 		echo "<tr>
                  		<td align='left'> $columna[FECHA] </td>
                  		<td> $columna[NODOCUMENTO] </td>
                  		<td> $columna[PNR] </td>
                  		<td> $columna[NOMBREDEPASAJERO] </td>
                  		<td> $columna[PROVEEDOR] </td>
                  		<td> $columna[RUTA1] </td>
                  		<td> $columna[IMPORTETOTAL] </td>
                  		<td> $columna[FORMADEPAGO] </td>
                      <td><a href='ReporteadorViajes.php?value=$columna[ID]'>Detalles<img src='images/flecha.png'></a></td>
                  		</tr>";
                	}


            echo "</table>";
                
        echo "</div>";
         	}
         	   
         	//Igual que antes, para llenar la tabla
        else if (($_GET["datepicker"]) || ($_GET["datepicker"] && $_GET["buscar"]) || ($_GET["datepicker"] && $_GET["PNR"]) ){
        	
        		$select=$conexion->query("select ID,FECHA,NODOCUMENTO, PNR,NOMBREDEPASAJERO, 
           						PROVEEDOR,RUTA1, IMPORTETOTAL,FORMADEPAGO from reportesvirage 
           						where FECHA = '".$_GET["datepicker"]."' and CODIGOCLIENTE = ".$_SESSION['Usuario']."");

        		while($columna=$select->fetch_array(MYSQLI_ASSOC)){
        			echo "<tr>
					<td> $columna[FECHA] </td>
                  			<td> $columna[NODOCUMENTO] </td>
                  			<td> $columna[PNR] </td>
                  			<td> $columna[NOMBREDEPASAJERO] </td>
                  			<td> $columna[PROVEEDOR] </td>
                  			<td> $columna[RUTA1] </td>
                  			<td> $columna[IMPORTETOTAL] </td>
                  			<td> $columna[FORMADEPAGO] </td>
                      		<td><a href='ReporteadorViajes.php?value=$columna[ID]'>Detalles<img src='images/flecha.png'></a></td>
	                  	</tr>"; 
        		}
        		echo "</table>

        	</div>";
        		
        	}

        	 else if($_GET["PNR"]){ //Para búsqueda por PNR

            	
        		 $select=$conexion->query("select ID,FECHA,NODOCUMENTO, PNR,NOMBREDEPASAJERO, 
           						PROVEEDOR,RUTA1, IMPORTETOTAL,FORMADEPAGO from reportesvirage 
           						where PNR like '%".$_GET["PNR"]."' and CODIGOCLIENTE = ".$_SESSION['Usuario']."");
           						

           				while ($columna=$select->fetch_array(MYSQLI_ASSOC))
           		        {
                    
                	 		echo "<tr>
                  			<td align='left'> $columna[FECHA] </td>
                  			<td> $columna[NODOCUMENTO] </td>
                  			<td> $columna[PNR] </td>
                  			<td> $columna[NOMBREDEPASAJERO] </td>
                  			<td> $columna[PROVEEDOR] </td>
                  			<td> $columna[RUTA1] </td>
                  			<td> $columna[IMPORTETOTAL] </td>
                  			<td> $columna[FORMADEPAGO] </td>
                      		<td><a href='ReporteadorViajes.php?value=$columna[ID]'>Detalles<img src='images/flecha.png'></a></td>
	                  		</tr>";
                		}


            echo "</table>";
                
        echo "</div>";

            }
        }


       else if ($_GET["Busqueda"]=="Mostrar Todo") {
       		$select = $conexion->query("select ID, FECHA,NODOCUMENTO, PNR,NOMBREDEPASAJERO,
                                              PROVEEDOR, RUTA1, IMPORTETOTAL,FORMADEPAGO from reportesvirage
                                              where CODIGOCLIENTE = ".$_SESSION['Usuario']." ");
                     
                   while ($columna=$select->fetch_array(MYSQLI_ASSOC))
                   {
                    
                 		echo "<tr>
                  		<td align='left'> $columna[FECHA] </td>
                  		<td> $columna[NODOCUMENTO] </td>
                  		<td> $columna[PNR] </td>
                  		<td> $columna[NOMBREDEPASAJERO] </td>
                  		<td> $columna[PROVEEDOR] </td>
                  		<td> $columna[RUTA1] </td>
                  		<td> $columna[IMPORTETOTAL] </td>
                  		<td> $columna[FORMADEPAGO] </td>
                      <td><a href='ReporteadorViajes.php?value=$columna[ID]'>Detalles<img src='images/flecha.png'></a></td>
                  		</tr>";
                		
                	}
              	echo "</table>";
                
            	echo "</div>";                  
	}
}

    else{//Para que en caso de no haber ninguna búsqueda muestre algunos resultados, lo filtré por un código fijo, depués que hagamos el inicio de
    	//sesión el codigo será el del cliente que ingrese

                    $select = $conexion->query("select ID, FECHA,NODOCUMENTO, PNR,NOMBREDEPASAJERO,
                                              PROVEEDOR, RUTA1, IMPORTETOTAL,FORMADEPAGO from reportesvirage
                                              where CODIGOCLIENTE = ".$_SESSION['Usuario']." ");
                     
                   while ($columna=$select->fetch_array(MYSQLI_ASSOC))
                   {
                    
                 		echo "<tr>
                  		<td align='left'> $columna[FECHA] </td>
                  		<td> $columna[NODOCUMENTO] </td>
                  		<td> $columna[PNR] </td>
                  		<td> $columna[NOMBREDEPASAJERO] </td>
                  		<td> $columna[PROVEEDOR] </td>
                  		<td> $columna[RUTA1] </td>
                  		<td> $columna[IMPORTETOTAL] </td>
                  		<td> $columna[FORMADEPAGO] </td>
                      <td><a href='ReporteadorViajes.php?value=$columna[ID]'>Detalles<img src='images/flecha.png'></a></td>
                  		</tr>";
                		
                	}
              	echo "</table>";
                
            	echo "</div>";                  
	}

/* Más código sobre paginación
	echo "<div class='container'><p>";
	//pongo el n�mero de registros total, el tama�o de p�gina y la p�gina que se muestra

		if ($total_paginas > 1) {
			if ($pagina != 1)
				echo '<a href="'.$url.'?pagina='.($pagina-1).'"></a>';
			for ($i=1;$i<=$total_paginas;$i++) {
				if ($pagina == $i)
				//si muestro el �ndice de la p�gina actual, no coloco enlace
					echo $pagina;
				else
					//si el �ndice no corresponde con la p�gina mostrada actualmente,
					//coloco el enlace para ir a esa p�gina
					echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
		}
			if ($pagina != $total_paginas)
				echo '<a href="'.$url.'?pagina='.($pagina+1).'"></a>';
		}
		echo '</p></div>';
	


     
*/
	
            	?>
   
	<br>
	
    	<!--<button class="blanco" name="mostrar">Descargar Excel</button>--> 
<!--</tr> Evite borrar comentarios aún
<tr>
	<td>1/26/14</td>
	<td>1016288</td>
	<td>VJLJOF</td>
	<td>GOMEZ ANDRES MR</td>
	<td>ABC AEROLINEAS SA DE CV</td>
	<td>MEX SJD MEX</td>
	<td>$ 2,529.00</td>
	<td>CA</td>
	<td>Ver detalles <img src="images/flecha.png"></td>

</tr>
<tr>
	<td>1/26/14</td>
	<td>1016288</td>
	<td>VJLJOF</td>
	<td>GOMEZ ANDRES MR</td>
	<td>ABC AEROLINEAS SA DE CV</td>
	<td>MEX SJD MEX</td>
	<td>$ 2,529.00</td>
	<td>CA</td>
	<td>Ver detalles <img src="images/flecha.png"></td>

</tr>
<tr>
	<td>1/26/14</td>
	<td>1016288</td>
	<td>VJLJOF</td>
	<td>GOMEZ ANDRES MR</td>
	<td>ABC AEROLINEAS SA DE CV</td>
	<td>MEX SJD MEX</td>
	<td>$ 2,529.00</td>
	<td>CA</td>
	<td>Ver detalles <img src="images/flecha.png"></td>

</tr>
<tr>
	<td>1/26/14</td>
	<td>1016288</td>
	<td>VJLJOF</td>
	<td>GOMEZ ANDRES MR</td>
	<td>ABC AEROLINEAS SA DE CV</td>
	<td>MEX SJD MEX</td>
	<td>$ 2,529.00</td>
	<td>CA</td>
	<td>Ver detalles <img src="images/flecha.png"></td>

</tr>
</table>
</div>-->
	
			
			<div class="container">
			<a href="ReporteExcel.php" id="link" name="link" ><button class="cafe" name="mostrar" style="width:10em; height:2em;">Descargar Excel</button></a>
		</div>
		
			
		

			

		
<!--Cuadros-->
<!--<div class="container">-->
	<!--<div class="six columns cuadro">
		<div class="titular"><h3>PRECIOS</h3></div>
		<table class="tablas">
		<tr>
			<td><h2>TARIFA BASE:</h2></td>
			<td>$ 1650.00</td>
		</tr>
		<tr>
			<td><h2>IVA:</h2></td>
			<td>$ 1650.00</td>
		</tr>
		<tr>
			<td><h2>TUA:</h2></td>
			<td>$ 1650.00</td>
		</tr>
		<tr>
			<td><h2>OTROS IMPUESTOS:</h2></td>
			<td>$ 1650.00</td>
		</tr>
		<tr class="line">
			<td><h2>SUBTOTAL:</h2></td>
			<td>$ 1650.00</td>
		</tr>
		<tr>
			<td><h2>TOTAL:</h2></td>
			<td><h2>$ 1650.00</h2></td>
		</tr>
		</table>
	</div>	
<br><br>
	<div class="six columns cuadro">
		<div class="titular alert">
			<img src="images/alert.png">
			<h3>No olvide registrar su entrada</h3>
		</div>
		<div id="txt"></div>
		<div class="botones">
			<button class="blanco">Check in</button>
			<button class="cafe">Check out</button>
		</div>
		<div class="clock">
			<div id="txt2"></div>
			<div id="txt3"></div>
		</div>

	</div>	-->
	<!--<script> 
function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML = h+":"+m+":"+s;
    var t = setTimeout(function(){startTime()},500);
    document.getElementById('txt2').innerHTML = h+":"+m+":"+s;
    var t = setTimeout(function(){startTime()},500);
    document.getElementById('txt3').innerHTML = h+":"+m+":"+s;
    var t = setTimeout(function(){startTime()},500);
}

function checkTime(i) {
    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>-->




<!--</div>-->
</body>
</html>