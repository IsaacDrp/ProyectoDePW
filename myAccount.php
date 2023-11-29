<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos del Usuario</title>
    <link rel="stylesheet" href="myAccount.css">
</head>
<body>
<?php
    require "conexion.php";
    mysqli_set_charset($conexion,'utf8');
    session_start(); // iniciamos sesion

    $id_cliente = $_SESSION["id_usuario"];

    $query = "SELECT nombre_cliente, primer_apellido, segundo_apellido, direccion, contrasena FROM CLIENTE WHERE id_cliente = '$id_cliente';";
    $resultado = $conexion->query($query);
    $row = mysqli_fetch_assoc($resultado);

    $nombre_cliente = $row['nombre_cliente'];
    $primer_apellido = $row['primer_apellido'];
    $segundo_apellido = $row['segundo_apellido'];
    $direccion = $row['direccion'];
    $contrasena = $row['contrasena'];
    mysqli_close($conexion);
?>

<?php
    session_start();
    require "conexion.php";
    mysqli_set_charset($conexion,'utf8');

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"]) && $_POST["contrasenaA"]==$contrasena) {

        $nuevo_nombre = $_POST['nombre_cliente'];
        $nuevo_pApellido = $_POST['primer_apellido'];
        $nuevo_sApellido = $_POST['segundo_apellido'];
        $nueva_direccion = $_POST['direccion'];
        $nueva_contrasena = $_POST['contrasenaN'];

        $query_update = "UPDATE CLIENTE 
            SET nombre_cliente = '$nuevo_nombre', 
                primer_apellido = '$nuevo_pApellido', 
                segundo_apellido = '$nuevo_sApellido', 
                direccion = '$nueva_direccion', 
                contrasena = '$nueva_contrasena' 
            WHERE id_cliente = '$id_cliente';";

        echo '<p>' . htmlspecialchars($nuevo_nombre) . ' ' . htmlspecialchars($primer_apellido) . ' ' . htmlspecialchars($segundo_apellido) . ' ' . htmlspecialchars($direccion) . ' ' . htmlspecialchars($nueva_contrasena) . '</p>';
        
        $resultado_update = $conexion->query($query_update);

        // Verificar si la actualización fue exitosa
        if ($resultado_update) {
            $_SESSION['nombre_usuario'] = $nuevo_nombre;
            header("location: successful.html");
        } else {
            echo '<p>Error al actualizar los datos: ' . mysqli_error($conexion) . '</p>';
        }
    }
    else{
        echo'<p>Contraseña actual incorrecta</p>';
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar"])) {
        if ($_POST['contrasenaE'] == $contrasena) {
            require "conexion.php";
            mysqli_set_charset($conexion,'utf8');
            $query_EliminarCupones = "DELETE FROM CUPON WHERE idCliente ='$id_cliente'";
            $query_eliminar = "DELETE FROM CLIENTE WHERE id_cliente = '$id_cliente';";
    
            $resultado_eliminarCupones = $conexion->query($query_EliminarCupones);
            $resultado_eliminar = $conexion->query($query_eliminar);
    
            mysqli_close($conexion);
            header("location: successful.html");
        } else {
            echo '<p>Contraseña incorrecta para la eliminación</p>';
        }
    }

    // Cerrar la conexión
    mysqli_close($conexion);
?>


<div class="form-container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name= "update">
        <div class="title-container">
            <h2>Actualizar Datos del Usuario</h2>
        </div>

        <label for="nombre_cliente">Nombre:</label>
        <input type="text" id="nombre_cliente" name="nombre_cliente" value="<?php echo $nombre_cliente; ?>" required>

        <label for="primer_apellido">Primer Apellido:</label>
        <input type="text" id="primer_apellido" name="primer_apellido" value="<?php echo $primer_apellido; ?>" required>

        <label for="segundo_apellido">Segundo Apellido:</label>
        <input type="text" id="segundo_apellido" name="segundo_apellido" value="<?php echo $segundo_apellido; ?>" required>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" value="<?php echo $direccion; ?>" required>

        <label for="contrasena">Contraseña Actual:</label>
        <input type="password" id="contrasenaA" name="contrasenaA" required>
        
        <label for="contrasena">(En caso de no cambiar, solo confirma)Nueva Contraseña:</label>
        <input type="password" id="contrasenaN" name="contrasenaN" required>

        <button type="submit" name= "update">Guardar Cambios</button>
    </form>
</div>
<!-- Inicio del segundo formulario (Eliminar Usuario) -->
<div class="form-container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="eliminar">
        <div class="title-container">
            <h2>Eliminar Usuario</h2>
        </div>

        <label for="contrasenaE">Contraseña para Eliminar:</label>
        <input type="password" id="contrasenaE" name="contrasenaE" required>
        <button type="submit" name="eliminar">Eliminar Usuario</button>
    </form>
</div>
<!-- Fin del segundo formulario -->

</body>
</html>
