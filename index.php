<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>
    <form action="controlador/inicio-sesion.php" method="post">
        <label for="">Coreo electronico</label>
        <p></p>
        <input type="email" name="correo" required>
        <p></p>
        <label for="">Contraseña</label>
        <p></p>
        <input type="password" name="contrasenia" required>
        <p></p>
        <button>Iniciar sesión</button>
        <a href="registro.php">Registrarce</a>
    </form>
</body>
</html>