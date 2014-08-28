<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Virage</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
		<link rel="stylesheet" type="text/css" href="css/skeleton.css">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
	<link type="text/css" href="css/le-frog/jquery-ui-1.8.1.custom.css" rel="Stylesheet" />  
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
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

<!--<a href='logout.php'>Cerrar Sesión</a>-->
<!--Titulo de seccion-->
<div class="container titulo">
	<h1>FILTRAR POR</h1>
	<hr>
</div>

</div>

<!--<form name="filtro" method="get">

		<div class="container"><h2>FORMULARIO:</h2>
		<table>	
		<tr><th>	
		<th><img src="images/Empresas/bimbo.jpg"></th>
			<tr><th>
			
			<th></th>	
			<th></th>
			<th><label>FECHA DE INICIO: </label></th><th><input type="text" placeholder="DD/MM/YY" name="datepicker" id="datepicker" class="calendario" readonly="readonly"/></th>
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
			            dateFormat: 'dd/mm/yy',
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

		
		<th><LABEL>PASAJERO: </LABEL></th><th><input placeholder="Buscar" class="buscar" name="buscar" id="buscar"></input></th>
		</th></tr>
		<tr><th>
			<th></th>
			<th></th>
			<th><label>FECHA FIN: </label></th><th><input type="text" placeholder="DD/MM/YY" name="datepicker" id="datepicker" class="calendario" readonly="readonly"/></th>
			<th><label>PNR: </label></th><th><input placeholder="Buscar por PNR" name="PNR"></input></th>
		</th></tr>
			<tr><th>
			<th><label>Empresa:</label><br><label>Nombre de la Empresa</label><th>
			<th></th>
			<th></th>
			<th><input type="submit" class="cafe" name="Busqueda" value="Buscar"></th>
			</th></tr>
		</th></tr>
		<BR>
		
		</div>-->

		<!--<div class="container">-->
			<!--botones-->
			<!--<button class="blanco" name="mostrar">Mostrar Todo</button>-->
			<!--<input type="submit" name="Busqueda" class="blanco" value="Mostrar Todo">-->
<!--</table>
</form>-->
<!--<button class="cumpleanos"> 
	<div class="title">Enviar tarjeta de regalo</div>
	<div class="icon"><img src="images/gift.png"></div>
</button>-->

<!--<button class="cargar">
	<div class="report">Cargar reporteador</div>
	<div class="icon"><img src="images/sync.png"></div>
</button>-->

<form name="filtro" method="get" class="busquedaReportes">
	<div class="container filtro">
		<div class="six columns">
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
		</div>
		<div class="offset-by-one nine columns">
		<label>PASAJERO: </label><input placeholder="Buscar" class="buscar" name="buscar" id="buscar"></input>		
		</div>
	</div><!--container-->

	<div class="container">
			<div class="six columns">
				<label>PNR: </label></th><th><input placeholder="Buscar por PNR" name="PNR"></input>
			</div>
		<div class="offset-by-one nine columns">						
			<label>EMPRESA:</label><input placeholder="Buscar por Empresa" name="Empresa"></input>
		</div>
	</div><!--container-->

	<div class="container sixteen columns b">
		<input type="submit" class="cafe" name="Busqueda" value="Buscar" style="width:5em; height:2em;"	id="Buscar">
		<input type="submit" class="cafe" name="Busqueda" value="Mostrar Todo" style="width:7em; height:2em;" id="Mostrar">
	</div>
			
</form>
<!--<button class="cumpleanos"> 
	<div class="title">Enviar tarjeta de regalo</div>
	<div class="icon"><img src="images/gift.png"></div>
</button>-->

<!--<button class="cargar">
	<div class="report">Cargar reporteador</div>
	<div class="icon"><img src="images/sync.png"></div>
</button>-->



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
						

if (isset($_GET["Busqueda"])){ //Para llenar la tabla dependiendo de lo que se quiera buscar
	if ($_GET["Busqueda"]=="Buscar") {
		if(($_GET["buscar"]) || ($_GET["buscar"] && $_GET["PNR"]) || ($_GET["buscar"] && $_GET["Empresa"] && $_GET["buscar"] && $_GET["PNR"] && $_GET["datepicker"] && $_GET["Empresa"])){ //Para búsqueda por nombre
			
			
			
        		
        		$totalr=$conexion->query("select count(*) from reportesvirage where NOMBREDEPASAJERO like '".$_GET["buscar"]."%'");
				$columna= $totalr->fetch_row();
				$registrostotales = $columna[0];

				$regpp = 12;
				$paginasTotales = ceil($registrostotales / $regpp);

				$paginaActual = 0;
					if(isset($_GET['pagina'])){

			   		
			   		 $paginaActual = (int)$_GET['pagina'];
				}

				// el número de la página actual no puede ser menor a 0
				if($paginaActual < 1){
				    $paginaActual = 1;
				}
				else if($paginaActual > $paginasTotales){ // tampoco mayor la cantidad de páginas totales
			   		 $paginaActual = $paginasTotales;
				}

				// obtenemos cuál es el artículo inicial para la consulta
			$Inicial = ($paginaActual - 1) * $regpp;
			$select=$conexion->query("select ID,FECHA,NODOCUMENTO, PNR,NOMBREDEPASAJERO, 
           						PROVEEDOR,RUTA1, IMPORTETOTAL,FORMADEPAGO from reportesvirage 
           						where NOMBREDEPASAJERO like '".$_GET["buscar"]."%' Limit ".$Inicial.", ".$regpp."");
			           						

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
                      <td><a href='ReporteadorViajesEmpleados.php?value=$columna[ID]'>Detalles<img src='images/flecha.png'></a></td>
                  		</tr>";
                	}


            echo "</table>";
            
                echo '<div class="paginacion">';

               
                for ($i=1; $i <= $paginasTotales; $i++) { 

                   
                    if($i == $paginaActual){
                        echo '<span class="pagina actual">' . $i . '</span>';
                    }
                    
                    else if($i == 1 || $i == $paginasTotales || ($i >= $paginaActual - 2 && $i <= $paginaActual + 2)){
                        echo '<a href="?pagina=' . $i . '" class="pagina">' . $i . '</a>';
                    }
                }
                
        echo "</div>";
        echo '</div>';
         	}
         	   
         	//Igual que antes, para llenar la tabla
        else if (($_GET["datepicker"]) || ($_GET["datepicker"] && $_GET["buscar"]) || ($_GET["datepicker"] && $_GET["PNR"]) || ($_GET["datepicker"] && $_GET["Empresa"]) ){
        		
        		$totalr=$conexion->query("select count(*) from reportesvirage where FECHA = '".$_GET["datepicker"]."'");
				$columna= $totalr->fetch_row();
				$registrostotales = $columna[0];

				$regpp = 12;
				$paginasTotales = ceil($registrostotales / $regpp);

				$paginaActual = 0;
					if(isset($_GET['pagina'])){

			   		
			   		 $paginaActual = (int)$_GET['pagina'];
				}

				// el número de la página actual no puede ser menor a 0
				if($paginaActual < 1){
				    $paginaActual = 1;
				}
				else if($paginaActual > $paginasTotales){ // tampoco mayor la cantidad de páginas totales
			   		 $paginaActual = $paginasTotales;
				}

				// obtenemos cuál es el artículo inicial para la consulta
				$Inicial = ($paginaActual - 1) * $regpp;
        		$select=$conexion->query("select ID,FECHA,NODOCUMENTO, PNR,NOMBREDEPASAJERO, 
           						PROVEEDOR,RUTA1, IMPORTETOTAL,FORMADEPAGO from reportesvirage 
           						where FECHA = '".$_GET["datepicker"]."' Limit ".$Inicial.", ".$regpp."");

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
                      		<td><a href='ReporteadorViajesEmpleados.php?value=$columna[ID]'>Detalles<img src='images/flecha.png'></a></td>
	                  	</tr>"; 
        		}
        		echo "</table></div>";
        		echo '<div class="paginacion">';

                // mostramos la paginación
                for ($i=1; $i <= $paginasTotales; $i++) { 

                    // para identificar la página actual, le agregamos una clase
                    // para darle un estilo diferente 
                    if($i == $paginaActual){
                        echo '<span class="pagina actual">' . $i . '</span>';
                    }
                    // sólo vamos a mostrar los enlaces de la primer página,
                    // las dos siguientes, las dos anteriores
                    // y la última
                    else if($i == 1 || $i == $paginasTotales || ($i >= $paginaActual - 2 && $i <= $paginaActual + 2)){
                        echo '<a href="?pagina=' . $i . '" class="pagina">' . $i . '</a>';
                    }
                }
                echo '</div>';
            
        		
        	}

        	 else if($_GET["PNR"] || ($_GET["PNR"] && $_GET["Empresa"])){ //Para búsqueda por PNR

            	$totalr=$conexion->query("select count(*) from reportesvirage where PNR like '%".$_GET["PNR"]."'");
				$columna= $totalr->fetch_row();
				$registrostotales = $columna[0];

				$regpp = 12;
				$paginasTotales = ceil($registrostotales / $regpp);

				$paginaActual = 0;
					if(isset($_GET['pagina'])){

			   		
			   		 $paginaActual = (int)$_GET['pagina'];
				}

				// el número de la página actual no puede ser menor a 0
				if($paginaActual < 1){
				    $paginaActual = 1;
				}
				else if($paginaActual > $paginasTotales){ // tampoco mayor la cantidad de páginas totales
			   		 $paginaActual = $paginasTotales;
				}

				// obtenemos cuál es el artículo inicial para la consulta
			$Inicial = ($paginaActual - 1) * $regpp;
        		 $select=$conexion->query("select ID,FECHA,NODOCUMENTO, PNR,NOMBREDEPASAJERO, 
           						PROVEEDOR,RUTA1, IMPORTETOTAL,FORMADEPAGO from reportesvirage 
           						where PNR like '%".$_GET["PNR"]."' Limit ".$Inicial.", ".$regpp."");
           						

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
                      		<td><a href='ReporteadorViajesEmpleados.php?value=$columna[ID]'>Detalles<img src='images/flecha.png'></a></td>
	                  		</tr>";
                		}


            echo "</table>";
                echo '<div class="paginacion">';

                // mostramos la paginación
                for ($i=1; $i <= $paginasTotales; $i++) { 

                    // para identificar la página actual, le agregamos una clase
                    // para darle un estilo diferente 
                    if($i == $paginaActual){
                        echo '<span class="pagina actual">' . $i . '</span>';
                    }
                    // sólo vamos a mostrar los enlaces de la primer página,
                    // las dos siguientes, las dos anteriores
                    // y la última
                    else if($i == 1 || $i == $paginasTotales || ($i >= $paginaActual - 2 && $i <= $paginaActual + 2)){
                        echo '<a href="?pagina=' . $i . '" class="pagina">' . $i . '</a>';
                    }
                }
                echo '</div>';
            
        echo "</div>";

            }

            if(($_GET["Empresa"]) || ($_GET["buscar"] && $_GET["PNR"] && $_GET["Empresa"]) || ($_GET["buscar"] && $_GET["datepicker"] && $_GET["datepicker"])){ //Para búsqueda por empresa
			
			
				$totalr=$conexion->query("select count(*) from reportesvirage where NOMBREDEPASAJERO like '".$_GET["Empresa"]."%'");
				$columna= $totalr->fetch_row();
				$registrostotales = $columna[0];

				$regpp = 12;
				$paginasTotales = ceil($registrostotales / $regpp);

				$paginaActual = 0;
					if(isset($_GET['pagina'])){

			   		
			   		 $paginaActual = (int)$_GET['pagina'];
				}

				// el número de la página actual no puede ser menor a 0
				if($paginaActual < 1){
				    $paginaActual = 1;
				}
				else if($paginaActual > $paginasTotales){ // tampoco mayor la cantidad de páginas totales
			   		 $paginaActual = $paginasTotales;
				}

				// obtenemos cuál es el artículo inicial para la consulta
				$Inicial = ($paginaActual - 1) * $regpp;
        		$select=$conexion->query("select ID,FECHA,NODOCUMENTO, PNR,NOMBREDEPASAJERO, 
           						PROVEEDOR,RUTA1, IMPORTETOTAL,FORMADEPAGO from reportesvirage 
           						where NOMBREDEPASAJERO like '".$_GET["Empresa"]."%' Limit ".$Inicial.", ".$regpp."");
           						

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
                      <td><a href='ReporteadorViajesEmpleados.php?value=$columna[ID]'>Detalles<img src='images/flecha.png'></a></td>
                  		</tr>";
                	}


            echo "</table>";
                echo '<div class="paginacion">';

                // mostramos la paginación
                for ($i=1; $i <= $paginasTotales; $i++) { 

                    // para identificar la página actual, le agregamos una clase
                    // para darle un estilo diferente 
                    if($i == $paginaActual){
                        echo '<span class="pagina actual">' . $i . '</span>';
                    }
                    // sólo vamos a mostrar los enlaces de la primer página,
                    // las dos siguientes, las dos anteriores
                    // y la última
                    else if($i == 1 || $i == $paginasTotales || ($i >= $paginaActual - 2 && $i <= $paginaActual + 2)){
                        echo '<a href="?pagina=' . $i . '" class="pagina">' . $i . '</a>';
                    }
                }
                echo '</div>';
            
        echo "</div>";
         	}
        }


       else if ($_GET["Busqueda"]=="Mostrar Todo") {
       		
       		$totalr=$conexion->query("select count(*) from reportesvirage");
				$columna= $totalr->fetch_row();
				$registrostotales = $columna[0];

				$regpp = 12;
				$paginasTotales = ceil($registrostotales / $regpp);

				$paginaActual = 0;
					if(isset($_GET['pagina'])){

			   		
			   		 $paginaActual = (int)$_GET['pagina'];
				}

				// el número de la página actual no puede ser menor a 0
				if($paginaActual < 1){
				    $paginaActual = 1;
				}
				else if($paginaActual > $paginasTotales){ // tampoco mayor la cantidad de páginas totales
			   		 $paginaActual = $paginasTotales;
				}

				// obtenemos cuál es el artículo inicial para la consulta
			$Inicial = ($paginaActual - 1) * $regpp;
       		$select = $conexion->query("select ID, FECHA,NODOCUMENTO, PNR,NOMBREDEPASAJERO,
                                              PROVEEDOR, RUTA1, IMPORTETOTAL,FORMADEPAGO from reportesvirage Limit ".$Inicial.", ".$regpp."");
                     
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
                      <td><a href='ReporteadorViajesEmpleados.php?value=$columna[ID]'>Detalles<img src='images/flecha.png'></a></td>
                  		</tr>";
                		
                	}
              	echo "</table>";
                echo '<div class="paginacion">';

                // mostramos la paginación
                for ($i=1; $i <= $paginasTotales; $i++) { 

                    // para identificar la página actual, le agregamos una clase
                    // para darle un estilo diferente 
                    if($i == $paginaActual){
                        echo '<span class="pagina actual">' . $i . '</span>';
                    }
                    // sólo vamos a mostrar los enlaces de la primer página,
                    // las dos siguientes, las dos anteriores
                    // y la última
                    else if($i == 1 || $i == $paginasTotales || ($i >= $paginaActual - 2 && $i <= $paginaActual + 2)){
                        echo '<a href="?pagina=' . $i . '" class="pagina">' . $i . '</a>';
                    }
                }
                echo '</div>';
            
            	echo "</div>";                  
	}
}

    else{//Al ser de lado del empleado muestra todos lois registros disponibles
    				
    				$totalr=$conexion->query("select count(*) from reportesvirage");
				$columna= $totalr->fetch_row();
				$registrostotales = $columna[0];

				$regpp = 12;
				$paginasTotales = ceil($registrostotales / $regpp);

				$paginaActual = 0;
					if(isset($_GET['pagina'])){

			   		
			   		 $paginaActual = (int)$_GET['pagina'];
				}

				// el número de la página actual no puede ser menor a 0
				if($paginaActual < 1){
				    $paginaActual = 1;
				}
				else if($paginaActual > $paginasTotales){ // tampoco mayor la cantidad de páginas totales
			   		 $paginaActual = $paginasTotales;
				}

				// obtenemos cuál es el artículo inicial para la consulta
			$Inicial = ($paginaActual - 1) * $regpp;
                    $select = $conexion->query("select ID, FECHA,NODOCUMENTO, PNR,NOMBREDEPASAJERO,
                                              PROVEEDOR, RUTA1, IMPORTETOTAL,FORMADEPAGO from reportesvirage Limit ".$Inicial.", ".$regpp."");
                     
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
                      <td><a href='ReporteadorViajesEmpleados.php?value=$columna[ID]'>Detalles<img src='images/flecha.png'></a></td>
                  		</tr>";
                		
                	}
              	echo "</table>";
                echo '<div class="paginacion">';

                // mostramos la paginación
                for ($i=1; $i <= $paginasTotales; $i++) { 

                    // para identificar la página actual, le agregamos una clase
                    // para darle un estilo diferente 
                    if($i == $paginaActual){
                        echo '<span class="pagina actual">' . $i . '</span>';
                    }
                    // sólo vamos a mostrar los enlaces de la primer página,
                    // las dos siguientes, las dos anteriores
                    // y la última
                    else if($i == 1 || $i == $paginasTotales || ($i >= $paginaActual - 2 && $i <= $paginaActual + 2)){
                        echo '<a href="?pagina=' .$i. '" class="pagina">' . $i . '</a>';
                    }
                }
                echo '</div>';
            
            	echo "</div>";                  
				
		}


	
            	?>
   
	
 
	
			<!--Esta parte contiene tanto al boton de carga como de descarga del archivo-->
			<div class="container">
				<div class="offset-by-six">
			<form name="importa" method="post"  enctype="multipart/form-data" action="LeerExcel.php" >
					<input type="file" name="excel" style="width:23em; height:2em;" accept=".xlsx, .xls"/>
					<input type="submit" name="enviar"  value="Cargar Archivo" class="cafe" style="width:10em; height:2em;"  />
					<input type="hidden" value="upload" name="action" />
			</form>
			<a href="ReporteExcel.php" id="link" name="link" ><button class="cafe" name="mostrar" style="width:10em; height:2em;">Descargar Excel</button></a>
		</div>
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