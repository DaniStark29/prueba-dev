<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
</head>
<body>
<form action="controlador/actualizar-contrasenia.php" method="post">

        <label for="">Nombre de usuario</label>
        <p></p>
        <input type="text" name="nombre" disabled value="<?php echo $_SESSION['nombre'] ?>">
        <p></p>
        <label for="">Correo</label>
        <p></p>
        <input type="email" name="correo" disabled value="<?php echo $_SESSION['correo'] ?>">
        <p></p>
        <label for="">Contraseña</label>
        <p></p>
        <input type="password" name="contrasenia" required>
        <p></p>
        <input hidden type="text" name="id" value="<?php echo $_SESSION['id'] ?>">
        <p></p>
        <button>Actualizar Contraseña</button>

    </form>
</body>
</html>