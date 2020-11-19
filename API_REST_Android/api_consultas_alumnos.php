<?php

    include('../sitio/scripts_php/conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();

    //var_dump($conexion);

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cadena_JSON = file_get_contents('php://input'); //Recibe información a través de HTTP

        if($cadena_JSON == false) {
            echo "No hay cadena JSON";
        } else {
            $datos = json_decode($cadena_JSON, true);
            $nc = $datos['nc'];
           //Para todos $sql="SELECT * from alumnos";
           //Para uno
           $sql="SELECT * from alumnos WHERE numControl='$nc'";
            $resultado=mysqli_query($conexion,$sql);
            $respuesta = array();

            if(mysqli_num_rows($resultado)>0){
                        
                while($fila=mysqli_fetch_assoc($resultado)){
                    $respuesta['nc']=$fila['numControl']; 
                    $respuesta['n']=$fila['nombre'];
                    $respuesta['pa']=$fila['primerAp'];
                    $respuesta['sa']=$fila['segundoAp'];
                    $respuesta['e']=$fila['edad'];
                    $respuesta['s']=$fila['semestre'];
                    $respuesta['c']=$fila['carrera']; 
                    $cad = json_encode($respuesta);
                    var_dump($cad);       
                  }
              }else{
                  echo ('No hay datos');
              }
        }        

    } else {
        echo "No hay peticion HTTP";
    }

?>