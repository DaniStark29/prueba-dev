<?php
    require_once '../conexion.php';
    require_once '../modelo/metodos.php';

    $correo = $_POST['correo'];
    $contrasenia = md5($_POST['contrasenia']);


    $datos = array(
        $correo,
        $contrasenia
    );

    $obj = new metodos();
    $respuesta = $obj->inicioSesionUsuario($datos);
    echo $respuesta[0];
    if ($respuesta) {
        session_start();
        $_SESSION['id'] = $respuesta[0];
        $_SESSION['nombre'] = $respuesta[1];
        $_SESSION['correo'] = $respuesta[2];
        $_SESSION['contrasenia'] = $respuesta[3];
        header('location:../home.php');
    } else {
        echo '! Usuario no encontrado ¡';
    }

?>