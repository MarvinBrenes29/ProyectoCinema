<?php
include "shared/header.php";
require "model/clsAdm_peliculas.php";
$clase_pelicula = new clsAdm_peliculas();
ob_start();
?>


  <form class="container"  action="" method="POST" enctype="multipart/form-data">
    <div class="administracion">
      <h1 class="administracion__heading">Admnistración de Salas</h1>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="nombreSala" id="" placeholder="Nombre">
        <label for="">Nombre</label>
      </div>
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
         <button class="btn btn-primary btn-lg">Guardar</button>
      <a class="btn btn-success btn-lg" href="adm_salas.php">Regresar</a>
      </div>
     
    </div>
  </form>
     
  <?php
    if (!empty($_POST)) {
    
        $nombreSala = $_POST["nombreSala"];
        $tipo_sala = $_POST["tipo_sala"];
        $estado_sala = $_POST["estado"];


        $condicion = false;
        $condicion = $clase_pelicula->verificar_siexite_sala($nombreSala);
        
        if ($condicion == false) {

          
            $clase_pelicula->insertar_sala($nombreSala, $tipo_sala, $estado_sala);
            
            // header("Location: login.php");


            
        }else if($condicion == true){
            ?>
                <p class="alert alert-danger" role="alert">Error: Esta sala ya existe en el sistema</p>
            <?php
        }
    }

            

    ?>




<?php
include "shared/footer.php";
?>