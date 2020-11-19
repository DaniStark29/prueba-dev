<?php 

    class conectar_BD{

        // atributos para la conexión a la base de datos.
        private $servidor = 'localhost';
        private $usuario = 'root';
        private $contrasenia = '';
        private $bd = 'prueba-dev';

        // metodo para la conexion a la bd
        public function conexion(){
            $conexion = mysqli_connect($this->servidor, $this->usuario, $this->contrasenia, $this->bd);
            return $conexion;
        }

    }

    // declarando objeto de prueba de conexión
    // $obj = new conectar_BD();
    // if ($obj->conexion()) {
    //     echo 'Conexion exitosa';
    // }else{
    //     echo 'Error en la conexión';
    // }

?>
