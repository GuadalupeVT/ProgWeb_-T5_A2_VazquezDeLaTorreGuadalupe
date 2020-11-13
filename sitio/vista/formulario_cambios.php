<?php
    session_start();
    if($_SESSION['autenticado'] == false){
        header("location:../vista/login.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>MODIFICAR ALUMNOS</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        
        <style>
    #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
    }
    </style>

    </head>

    <body>

    <?php
       require_once('header.html');

      

    ?>
    <h3 style="background-color:#4CAF50; text-align:center;
    padding:15px; margin-bottom:15px; border:0px; color:white;">MODIFICAR ALUMNO</h3>
   

   <table id="customers">
      <tr> <th>Num. Control</th> 
           <th>Nombre</th> 
           <th>Primer Ap.</th> 
           <th>Segundo Ap.</th>
           <th>Edad</th> 
           <th>Semestre</th> 
           <th>Carrera</th> 
           <th>ACCIONES</th>
        </tr>

           <?php
              include('../scripts_php/conexion_bd.php');
              $con = new ConexionBD();
              $conexion = $con->getConexion();

              $sql="SELECT * from alumnos";

              $resultado=mysqli_query($conexion,$sql);

              //var_dump($resultado);
              if(mysqli_num_rows($resultado)>0){
                        //mysqli_fetch_row
                  while($fila=mysqli_fetch_assoc($resultado)){
                      printf("<tr> <td>".$fila['numControl']."</td>". 
                                   "<td>".$fila['nombre']."</td>".
                                   "<td>".$fila['primerAp']."</td>".
                                   "<td>".$fila['segundoAp']."</td>".
                                   "<td>".$fila['edad']."</td>".
                                   "<td>".$fila['semestre']."</td>".
                                   "<td>".$fila['carrera']."</td>".
                                   "<td> <a href='../vista/formulario_modificacion.php?nc=%s&n=%s&pa=%s&sa=%s&e=%s&s=%s&c=%s'>MODIFICAR</a> </td> </tr>", $fila['numControl'],$fila['nombre'],$fila['primerAp'],$fila['segundoAp'],$fila['edad'],$fila['semestre'],$fila['carrera']         
                                

                                   
                      );
                  }
              }else{
                  echo ('No hay datos');
              }

           ?>

      

   </table>
        

        
    </body>

</html>