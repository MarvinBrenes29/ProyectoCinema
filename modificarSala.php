<?php
include "shared/header.php";
require "model/clsAdm_peliculas.php";
$clase_pelicula = new clsAdm_peliculas();
$nombreSala = $_GET["nombreSala"];
ob_start();
?>


  <form class="container"  action="" method="POST" enctype="multipart/form-data">
    <div class="administracion">
      <h1 class="administracion__heading">Admnistración de Salas</h1>

      <div class="form-floating mb-3">
        <p>Tipo de sala</p>
        <select name="tipo_sala">
          <option value="Regular">Regular</option>
          <option value="VIP">VIP</option>
        </select>
      </div>
      <div class="form-floating mb-3">
        <p>Estado</p>
        <select name="estado">
          <option value="1">Activo</option>
          <option value="0">Inactivo</option>
        </select>
      </div>
      <div class="adm__botones">
         <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
      <a class="btn btn-success btn-lg" href="adm_salas.php">Regresar</a>
      </div>
     
    </div>
  </form>
     
  <?php
    if (!empty($_POST)) {
    
        $clase_pelicula->nombreSala = $nombreSala;
        $clase_pelicula->tipo_sala = $_POST["tipo_sala"];
        $clase_pelicula->estado_sala = $_POST["estado"];

          
            $clase_pelicula->modificar_sala();
            
            // header("Location: login.php");


            
    }

            

    ?>




<?php
include "shared/footer.php";
?>