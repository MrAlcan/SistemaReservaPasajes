<?php

    $usuario = "root"; //en ste caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="reservas"; //nombre de la base de datos



$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 



$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");



    $nombre=$_POST['nombre']; 
    $destino=$_POST['destino'];
    $fecha=$_POST['fecha'];
    $cantidad=$_POST['cantidad'];
    $precio=$_POST['precio'];
    $sqla=("SELECT * FROM destinos WHERE fecha='$fecha' and destino='$destino' and precio='$precio'");



    $query=mysqli_query($conexion,$sqla);

    while($arreglo=mysqli_fetch_array($query)){
        $agencia = $arreglo[0];
        $hora = $arreglo[3];
    }

    session_start();
    $ses = $_SESSION['id'];
    //$us = $_SESSION['user'];





    //sentencia sql
    $sql="INSERT INTO reservaciones VALUES ('$nombre','$agencia','$destino','$fecha','$hora','$precio','$cantidad','$ses')"; 

    $ejecutar=mysqli_query($conexion, $sql);



    if(!$ejecutar){
    	 echo '<script>alert("huvo algun error")</script> ';
         echo "<script>location.href='reserva2.php'</script>";	
    }else{
        echo "<script>alert($agencia)</script>";
        echo '<script>alert("Su registro de destino se realizo correctamente ")</script> ';
        echo "<script>alert($agencia)</script>";
        
        echo "<script>location.href='inicio.php'</script>";	
    }
     
?>﻿