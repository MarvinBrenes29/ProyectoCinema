<?php
include "shared/header.php";
require "model/clsAdm_peliculas.php";
$clase_pelicula = new clsAdm_peliculas();
ob_start();
?>
  <form class="container w-40 m-auto" action="" method="POST" enctype="multipart/form-data">

    <div class="administracion">

      <h1 class="administracion__heading">Administracion de Películas</h1>
      <div class="form-floating mb-3">
        <input type="text" class="form-control form-control-lg w-50 p-3" name="idpelicula" id="idpelicula" placeholder="Titulo">
        <label for="">ID Pelicula</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control w-50 p-3" name="titulo" id="titulo" placeholder="Titulo">
        <label for="">Titulo</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control w-50 p-3" name="actor_principal" id="actor_principal" placeholder="Titulo">
        <label for="">Actor Principal</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control w-50 p-3" name="actor_secundario" id="actor_secundario" placeholder="Titulo">
        <label for="">Actor Secundario</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control w-50 p-3" name="director" id="director" placeholder="Titulo">
        <label for="">Director</label>
      </div>
      <div class="form-floating mb-3">
        <input type="file" class="form-control w-50 p-3" name="poster" id="poster" placeholder="">
        <label for="imagen">Poster</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control w-50 p-3" name="clasificacion" id="clasificacion" placeholder="Titulo">
        <label for="">Clasificación</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control w-50 p-3" name="duracion" id="duracion" placeholder="Titulo">
        <label for="">Minutos de Duración</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control w-50 p-3" name="genero" id="genero" placeholder="Titulo">
        <label for="">Genero</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control w-50 p-3" name="idioma" id="idioma" placeholder="Titulo">
        <label for="">Idioma</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control w-50 p-3" name="sinopsis" id="sinopsis" placeholder="Titulo">
        <label for="">Sinopsis</label>
      </div>
      <div class="form-floating mb-3">
        <input type="url" class="form-control w-50 p-3" name="trailer" id="trailer" placeholder="Titulo">
        <label for="">Trailer</label>
      </div>
      <div class="form-floating mb-3">
        <p>Estado</p>
        <select class=" w-50 p-3" name="estado" id="estado">
          <option value="1">Activo</option>
          <option value="0">Inactivo</option>
        </select>
      </div>


      <div class="adm__botones mb-5">
        <a class="btn btn-success btn-lg w-25 p-3" href="adm_peliculas.php">Regresar</a>
        <button type="submit" class="btn btn-primary btn-lg w-25 p-3">Guardar</button>
      
      </div>

    </div>

  </form>




  <?php
    if (!empty($_POST)) {
    
        $idpelicula = $_POST["idpelicula"];
        $titulo = $_POST["titulo"];
        $actor_principal = $_POST["actor_principal"];
        $actor_secundario = $_POST["actor_secundario"];
        $director = $_POST["director"];
        $clasificacion = $_POST["clasificacion"];
        $duracion = $_POST["duracion"];
        $genero = $_POST["genero"];
        $idioma = $_POST["idioma"];
        $sinopsis = $_POST["sinopsis"];
        $trailer = $_POST["trailer"];
        $estado = $_POST["estado"];


        

        $condicion = false;
        $condicion = $clase_pelicula->verificar_siexite_pelicula($idpelicula);
        
        if ($condicion == false) {

            

            $foto_pelicula = "img/peliculas/$idpelicula.jpg";
            $res = move_uploaded_file($_FILES["poster"]["tmp_name"], $foto_pelicula);
            $clase_pelicula->insertar_pelicula($idpelicula, $titulo, $actor_principal, $actor_secundario, $director, $clasificacion, $duracion, $genero, $idioma, $sinopsis, $trailer, $estado);
            
            // header("Location: login.php");


            
        }else if($condicion == true){
            ?>
                <p class="alert alert-danger" role="alert">Error: Esta pelicula ya existe en el sistema</p>
            <?php
        }
    }

            

        ?>

<?php
include "shared/footer.php";

?>