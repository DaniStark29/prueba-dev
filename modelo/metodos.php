<?php

class metodos{

    // inicia registro de usuarios
    public function registroNuevoUsuario($datos){

        $c = new conectar_BD();
        $conexion = $c->conexion();
        $sql = "INSERT INTO usuarios (nombre_usuario, correo, contrasenia) VALUES ('$datos[0]', '$datos[1]', '$datos[2]' )";
        return $result = mysqli_query($conexion, $sql);
        
    }

    // inicia inicio de sesión de usuario
    public function inicioSesionUsuario($datos){

        $c = new conectar_BD();
        $conexion = $c->conexion();
        $sql = "SELECT id, nombre_usuario, correo, contrasenia FROM usuarios WHERE correo = '$datos[0]' AND contrasenia = '$datos[1]'";
        $result = mysqli_query($conexion, $sql);
        return mysqli_fetch_row($result);
    }

    // inicia actulizaci{on de contraseña
    public function cambiarContrasenia($datos){

        $c = new conectar_BD();
        $conexion = $c->conexion();
        $sql = "UPDATE usuarios SET contrasenia = '$datos[0]' WHERE id = '$datos[1]'";
        return $result = mysqli_query($conexion, $sql);
    }

}

?>