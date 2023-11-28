<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Nuevo Cliente</title>
    <link rel="stylesheet" href="myAccount.css">
</head>
<body>
    <form action="inputUsuarios.php" method="POST">
        <div class="title-container">
            <h2>Registro de Nuevo Cliente</h2>
        </div>

        <label for="nombre_cliente">Nombre:</label>
        <input type="text" id="nombre_cliente" name="nombre_cliente" required>

        <label for="primer_apellido">Primer Apellido:</label>
        <input type="text" id="primer_apellido" name="primer_apellido" required>

        <label for="segundo_apellido">Segundo Apellido:</label>
        <input type="text" id="segundo_apellido" name="segundo_apellido" required>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
