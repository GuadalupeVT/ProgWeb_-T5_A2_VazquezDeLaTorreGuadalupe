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
        <title>ALTA ALUMNOS</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type="text/css" media='screen' href="main.css">
        <script src="main.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        
    </head>

    <body>

    <?php
       require_once('header.html');

       echo "<p style=\"text-align:center; color:red;\";> REGISTRO..........</p>"

    ?>
    <h3 style="background-color:#29C053 text-align:center;
    padding:15px; margin-bottom:15px; border:0px;">AGREGAR ALUMNO</h3>
    <form method="POST" action="../scripts_php/procesar_altas.php">
      <div class="form-row">
        <div class="form-group col-md-6">
           <label for="inputEmail4">Numero de control</label>
           <input type="text" class="form-control" id="inputEmail4" placeholder="Numero de control" name="caja_num_control">
         </div>
         <div class="form-group col-md-6">
           <label for="inputPassword4">Nombre</label>
           <input type="text" class="form-control" id="inputPassword4" placeholder="Nombre" name="caja_nombre">
          </div>
      </div>
      <div class="form-group">
    <label for="inputAddress">Primer Apellido</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="solo letras" name="caja_primer_ap">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Segundo Apellido</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="solo letras" name="caja_segundo_ap">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Edad</label>
      <input type="text" class="form-control" id="Solo numeros" name="caja_edad"> 
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Semestre</label>
      <select id="inputState" class="form-control" name="select_semestre">
        <option selected>1</option>
        <option selected>2</option>
        <option selected>3</option>
        <option selected>4</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Carrera</label>
      <input type="text" class="form-control" id="inputZip" name="caja_carrera">
    </div>
  </div>
    <button type="submit" class="btn btn-primary">GUARDAR ALUMNO</button>
  </form>
        

        
    </body>

</html>