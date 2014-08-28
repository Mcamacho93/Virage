<?php
  //pc server
  $servidor= "localhost";
  //lomas server
    $servidor = "localhost";
    //pc-user:
    $usuario="andrea";
    //lomas user
    //$usuario = "lomas_miguel";
    //pc password
    $contrasena="pastel";
    //lomas password
         //4529aeie
    //$contrasena = "Virage2014";
    //pc database
    $BaseDeDatos="lomas_virage"; 
    //lomas database
    //$BaseDeDatos = "lomas_virage";

    /*
     //lomas server
    $servidor = "localhost";
    //lomas user
    $usuario = "lomas_miguel";
    
    //lomas password
         //4529aeie
    $contrasena = "Virage2014";
    //lomas database
    $BaseDeDatos = "lomas_virage";
    */
    $conexion = new mysqli($servidor, $usuario, $contrasena, $BaseDeDatos);

    if(!$conexion){
      
      echo 'Error al conectar con la base de datos';
    }


?>