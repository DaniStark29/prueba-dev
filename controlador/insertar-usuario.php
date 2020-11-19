<?php
    require_once '../conexion.php';
    require_once '../modelo/metodos.php';

    $usurio = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];


    $datos = array(
        $usurio,
        $correo,
        $contrasenia
    );

    $obj = new metodos();
    if ($obj->registroNuevoUsuario($datos) == 1) {
        header('location:../index.php');
    } else {
        echo '! Error al agregar ¡';
    }

?>