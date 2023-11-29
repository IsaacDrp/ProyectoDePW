<?php
    require "conexion.php";
    mysqli_set_charset($conexion,'utf8');
    

    $nombre_cliente = $_POST['nombre_cliente'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $edad = $_POST['edad'];

    $query = "INSERT INTO CLIENTE (nombre_cliente, primer_apellido, segundo_apellido, direccion, email, contrasena, edad)
        VALUES ('$nombre_cliente', '$primer_apellido', '$segundo_apellido', '$direccion', '$email', '$contrasena', $edad)";
    
    mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("location: successful.html");
?>