<?php
    require "conexion.php";
    mysqli_set_charset($conexion,'utf8');

    session_start();// iniciamos sesion

    $correo_cliente = $_POST['correo'];
    $pass_cliente = $_POST['contrasena'];

    $query = "SELECT contrasena, nombre_cliente FROM CLIENTE WHERE email = '$correo_cliente';";
    $resultado = $conexion->query($query);
    $row = mysqli_fetch_assoc($resultado);

    $usr = $row['nombre_cliente'];
    $pss = $row['contrasena'];

    if($pass_cliente == $pss){
        $_SESSION['usuario_autenticado'] = true;
        $_SESSION['correo_usuario'] = $correo_cliente;
        $_SESSION['nombre_usuario'] = $usr;
        header("Location: index.php");
    }
    else{
        echo"<p>Incorrecto</p>";
    }

?>