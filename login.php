<?php
    require "conexion.php";
    mysqli_set_charset($conexion,'utf8');

    session_start();// iniciamos sesion

    $correo_cliente = $_POST['correo'];
    $pass_cliente = $_POST['contrasena'];

    $query = "SELECT contrasena, nombre_cliente, id_cliente FROM CLIENTE WHERE email = '$correo_cliente';";
    $resultado = $conexion->query($query);
    $row = mysqli_fetch_assoc($resultado);

    $usr = $row['nombre_cliente'];
    $pss = $row['contrasena'];
    $id_usr = $row['id_cliente'];

    if($pass_cliente == $pss){
        $_SESSION['usuario_autenticado'] = true;
        $_SESSION['correo_usuario'] = $correo_cliente;
        $_SESSION['nombre_usuario'] = $usr;
        $_SESSION['id_usuario'] = $id_usr;
        mysqli_close($conexion);

        header("Location: index.php");
    }
    else{
        echo"<p>Datos de ingreso incorrectos</p>";
        mysqli_close($conexion);

    }

?>