<?php
  include('conexion_bd.php');

  class AlumnoDAO{
      private $conexion;

      public function __construct(){
          $this->conexion = new ConexionBD();
      }

      //===============METODOS PARA ABCC ===============

      //------------ ALTAS ------------
      public function agregarAlumno($nc, $n, $pa, $sa, $e, $s, $c){
          $sql= "INSERT INTO ALUMNOS VALUES('$nc','$n','$pa','$sa', $e, $s,'$c');";
          if(mysqli_query($this->conexion->getConexion(),$sql)  ){
              //echo("<script> alert('Agregado con Exito')</script>");
              header('location:../vista/formulario_altas.php');
              //echo "PREFECTO, CASI SOY ISC =)";
          }else{
              echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
              echo mysqli_error($this->conexion->getConexion());
          }
      }//agregar

      //------------ BAJAS ------------
      public function eliminarAlumno($nc){
        $sql= "DELETE FROM ALUMNOS WHERE numControl='$nc'";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
            //echo("<script> alert('Agregado con Exito')</script>");
            header('location:../vista/formulario_bajas.php');
            //echo "PREFECTO, CASI SOY ISC =)";
        }else{
            echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
            echo mysqli_error($this->conexion->getConexion());
        }
    }//eliminar

  }
?>