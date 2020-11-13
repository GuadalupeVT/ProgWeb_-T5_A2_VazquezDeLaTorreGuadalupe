<?php

    class ConexionBD {
        private $conexion;

        private $host='localhost:3306';
        private $usuario='gvt';
        private $contraseña='123';
        private $bd = 'Usuarios_BD_Escuela';

        public function __construct() {
            $this->conexion = mysqli_connect($this->host, $this->usuario, $this->contraseña, $this->bd);
            //var_dump($conexion);
        }

        public function getConexion() {
            return  $this->conexion;
        }
    }

?>