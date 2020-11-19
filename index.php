<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center m-5 pb-5">
            <div class="col col-2"></div>
                <div class="col-auto">
                    <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="text-center card-title">Inicia Sesión</h5>
                            <form action="controlador/inicio-sesion.php" method="post">
                                <div class="form-group">
                                    <label for="">Coreo electronico</label>
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
                                <button class="btn btn-primary">Iniciar sesión</button>
                                <a type="button" class="btn btn-secondary" href="registro.php">Registrarce</a>
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