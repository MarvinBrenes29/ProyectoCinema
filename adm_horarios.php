<?php
include "shared/header.php";
require "model/clsAdm_peliculas.php";
$clase_pelicula = new clsAdm_peliculas();
ob_start();
?>

  <form class="container" action="" method="POST" enctype="multipart/form-data">
  <div class="administracion">
  
      <h1 class="administracion__heading">Administracion de Horarios</h1>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="idpelicula" id="idpelicula" placeholder="">
        <label for="">ID Pelicula</label>
      </div>


      <div class="form-floating mb-3">
        <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Fecha">
        <label for="">Fecha</label>
      </div>

      <div class="form-floating mb-3">
        <input type="time" class="form-control" name="hora" id="hora" placeholder="">
        <label for="">Hora</label>
      </div>
      <div class="form-floating mb-3">
        <p>Tipo de sala</p>
        <select name="tipo_sala">
          <option value="regular">Regular</option>
          <option value="vip">VIP</option>
        </select>
      </div>

      <div class="form-floating mb-3">
        <input type="number" class="form-control" name="precio" id="precio" placeholder="">
        <label for="">Precio</label>
      </div>



      <div class="adm__botones">
         <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
      <a class="btn btn-success btn-lg" href="index.php">Regresar</a>
      </div>
   

</div>
  </form>

  <?php
    if (!empty($_POST)) {
    
        $idpelicula = $_POST["idpelicula"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $tipo_sala = $_POST["tipo_sala"];
        $precio = $_POST["precio"];
      

        $condicion = false;
        $condicion = $clase_pelicula->verificar_siexite_pelicula($idpelicula);
        
        if ($condicion == true) {

          
            $clase_pelicula->insertar_horario($idpelicula, $fecha, $hora, $tipo_sala, $precio);
            
            // header("Location: login.php");


            
        }else if($condicion == false){
            ?>
                <p class="alert alert-danger" role="alert">Error: Esta pelicula no existe en el sistema</p>
            <?php
        }
    }

            

        ?>





<?php
include "shared/footer.php";
?>