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
        <input type="text" class="form-control" name="idhorario" id="idhorario" placeholder="">
        <label for="">ID Horario</label>
      </div>


      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="idpelicula" id="idpelicula" placeholder="">
        <label for="">ID Pelicula</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="idSala" id="idSala" placeholder="">
        <label for="">ID Sala</label>
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
        <input type="number" class="form-control" name="precio" id="precio" placeholder="">
        <label for="">Precio</label>
      </div>



      <div class="adm__botones">
         <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
      <a class="btn btn-success btn-lg" href="adm_horarios.php">Regresar</a>
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
        $idhorario = $_POST["idhorario"];
      

        $condicion_pelicula = false;
        $condicion_sala = false;


        $condicion_pelicula = $clase_pelicula->verificar_siexite_pelicula($idpelicula);
        $condicion_sala = $clase_pelicula->verificar_siexite_sala($idSala);

        if ($condicion_pelicula == true) {

            if ($condicion_sala == true) {

              
                $condicion_horario = $clase_pelicula->insertar_horario($idpelicula, $idSala, $fecha, $hora, $precio, $idhorario);
                
                if($condicion_horario == true){
                  // $sillas->crear_sillas($idhorario);
                }

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