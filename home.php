<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center m-5 pb-5">
            <div class="col col-2"></div>
            <div class="col-auto">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 20rem;">
                    <div class="card-body">
                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Salir">
                            <a href="controlador/cerrar-sesion.php" class="btn btn-outline-secondary">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1 15.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM11.5 2H11V1h.5A1.5 1.5 0 0 1 13 2.5V15h-1V2.5a.5.5 0 0 0-.5-.5z"/>
                                <path fill-rule="evenodd" d="M10.828.122A.5.5 0 0 1 11 .5V15h-1V1.077l-6 .857V15H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117z"/>
                                <path d="M8 9c0 .552.224 1 .5 1s.5-.448.5-1-.224-1-.5-1-.5.448-.5 1z"/>
                            </svg>
                            </a>
                        </span>
                        <h5 class="text-center card-title">Perfil</h5>
                        <form action="controlador/actualizar-contrasenia.php" method="post">
                            <div class="form-group">
                                <label for="">Nombre de usuario</label>
                                <p></p>
                                <input type="text" name="nombre" class="form-control" disabled value="<?php echo $_SESSION['nombre'] ?>">
                                <p></p>
                            </div>
                            <div class="form-group">
                                <label for="">Correo</label>
                                <p></p>
                                <input type="email" name="correo" class="form-control" disabled value="<?php echo $_SESSION['correo'] ?>">
                                <p></p>
                            </div>
                            <div class="form-group">
                                <label for="">Contraseña</label>
                                <p></p>
                                <input type="password" class="form-control" name="contrasenia" required>
                                <p></p>
                            </div>
                            <input hidden type="text" name="id" value="<?php echo $_SESSION['id'] ?>">
                            <p></p>
                            <button class="btn btn-primary">Actualizar Contraseña</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col col-2"></div>
        </div>
    </div>
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>