<?php
    require "conexion.php";
    mysqli_set_charset($conexion,'utf8');
    $email =$_POST['email'];
    $query="INSERT INTO EMAIL (email) VALUES ('$email');";
    mysqli_query($conexion, $query);
    mysqli_close($conexion);
    echo"<h1>CORREO INGRESADO CON EXITO</h1>";
    header("location: /");
?>