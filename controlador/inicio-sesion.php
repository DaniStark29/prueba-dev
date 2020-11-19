<?php
    require_once '../conexion.php';
    require_once '../modelo/metodos.php';

    $correo = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];


    $datos = array(
        $correo,
        $contrasenia
    );

    $obj = new metodos();
    $respuesta = $obj->inicioSesionUsuario($datos);
    echo $respuesta;
    if ($respuesta == 1) {
        header('location:../home.php');
        echo 'Usuario encontrado';
    } else {
        echo '! Usuario no encontrado ¡';
    }

?>