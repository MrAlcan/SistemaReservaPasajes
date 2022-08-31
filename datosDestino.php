<?php

    $usuario = "root"; //en ste caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="reservas"; //nombre de la base de datos



$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 



$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");



    $agencia=$_POST['agencia']; 
    $destino=$_POST['destino'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $precio=$_POST['precio']; 

    //sentencia sql
     $sql="INSERT INTO destinos VALUES ('$agencia','$destino','$fecha','$hora','$precio')"; 

    $ejecutar=mysqli_query($conexion, $sql);



    if(!$ejecutar){
    	 echo '<script>alert("huvo algun error")</script> ';
         echo "<script>location.href='destino.php'</script>";	
    }else{
        echo "<script>alert($agencia)</script>";
        echo '<script>alert("Su registro de destino se realizo correctamente ")</script> ';
        echo "<script>alert($agencia)</script>";
        
        echo "<script>location.href='admin.php'</script>";	
    }
     
?>﻿