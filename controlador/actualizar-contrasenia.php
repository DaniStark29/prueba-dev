<?php

    require_once '../conexion.php';
    require_once '../modelo/metodos.php';
    
    $contrasenia = md5($_POST['contrasenia']);
    $id = $_POST['id'];

    $datos = array(
        $contrasenia,
        $id
    );

    $obj = new metodos();
    if ($obj->cambiarContrasenia($datos) == 1) {
        header('location:../index.php');
        session_destroy();
    } else {
        echo '! Error al agregar ¡';
    }

?>