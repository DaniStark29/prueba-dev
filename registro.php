<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center m-5 pb-5">
            <div class="col col-2"></div>
            <div class="col-auto">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 20rem;">
                    <div class="card-body">
                        <a href="javascript:history.back()" type="button" class="btn btn-outline-secondary">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-double-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        </a>
                        <h5 class="text-center card-title">Registrate</h5>
                        <form action="controlador/insertar-usuario.php" method="post">
                            <div class="form-group">
                                <label for="">Nombre de usuario</label>
                                <p></p>
                                <input type="text" name="usuario" class="form-control" required>
                                <p></p>
                            </div>
                            <div class="form-group">
                                <label for="">Correo</label>
                                <p></p>
                                <input type="email" name="correo" class="form-control" required>
                                <p></p>
                            </div>
                            <div class="form-group">
                                <label for="">Contraseña</label>
                                <p></p>
                                <input type="password" name="contrasenia" class="form-control" required>
                                <p></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary">Registrarse</button>
                            </div>
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