<?php
include "shared/header.php";
require "model/clsAdm_peliculas.php";
$clase_pelicula = new clsAdm_peliculas();
$idhorario = $_GET["idhorario"];
ob_start();
?>

  <form class="container" action="" method="POST" enctype="multipart/form-data">
  <div class="administracion mb-30">
  
      <h1 class="adm__heading">Administracion de Horarios</h1>



      <div class="mb-3">
<label for="" class="mb-3">ID Pelicula</label>
        <input type="text" class="form-control" name="idpelicula" id="idpelicula" placeholder="ID Película">
        
      </div>

      <div class=" mb-3">
<label for="" class="mb-3">ID Sala</label>
        <input type="text" class="form-control" name="idSala" id="idSala" placeholder="ID Sala">
        
      </div>


      <div class=" mb-3">
        <label for="" class="mb-3">Fecha</label>
        <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Fecha">
        
      </div>

      <div class="mb-3">
        <label for="" class="mb-3">Hora</label>
        <input type="time" class="form-control" name="hora" id="hora" placeholder="Hora">
        
      </div>


      <div class=" mb-3">
        <label for="" class="mb-3">Precio</label>
        <input type="number" class="form-control" name="precio" id="precio" placeholder="Precio">
        
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
        $idSala = $_POST["idSala"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $precio = $_POST["precio"];
      

        $condicion_pelicula = false;
        $condicion_sala = false;


        $condicion_pelicula = $clase_pelicula->verificar_siexite_pelicula($idpelicula);
        $condicion_sala = $clase_pelicula->verificar_siexite_sala($idSala);

        if ($condicion_pelicula == true) {

            if ($condicion_sala == true) {

              
                $clase_pelicula->modificar_horario($idpelicula, $idSala, $fecha, $hora, $precio, $idhorario);
                


                // header("Location: login.php");


                
            }else if($condicion_sala == false){
                ?>
                    <p class="alert alert-danger" role="alert">Error: Esta sala no existe en el sistema</p>
                <?php
            }


        }else if($condicion_pelicula == false){
          ?>
              <p class="alert alert-danger" role="alert">Error: Esta pelicula no existe en el sistema</p>
          <?php
        }
    }

            

        ?>





<?php
include "shared/footer.php";
?>