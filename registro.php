<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="controlador/insertar-usuario.php" method="post">
        <label for="">Nombre de usuario</label>
        <p></p>
        <input type="text" name="usuario" required>
        <p></p>
        <label for="">Correo</label>
        <p></p>
        <input type="email" name="correo" required>
        <p></p>
        <label for="">Contraseña</label>
        <p></p>
        <input type="password" name="contrasenia" required>
        <p></p>
        <button>Registrarse</button>
    </form>
</body>
</html>