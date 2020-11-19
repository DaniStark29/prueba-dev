<?php

class metodos{

    public function registroNuevoUsuario($datos){

        $c = new conectar_BD();
        $conexion = $c->conexion();
        $sql = "INSERT INTO usuarios (nombre_usuario, correo, contrasenia) VALUES ('$datos[0]', '$datos[1]', '$datos[2]' )";
        return $result = mysqli_query($conexion, $sql);
        
    }

    public function inicioSesionUsuario($datos){

        $c = new conectar_BD();
        $conexion = $c->conexion();
        $sql = "SELECT id, nombre_usuario, correo, contrasenia FROM usuarios WHERE correo = '$datos[0]' AND contrasenia = '$datos[1]'";
        $result = mysqli_query($conexion, $sql);
        return mysqli_num_rows($result);
    }

}

?>