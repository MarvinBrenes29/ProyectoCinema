<?php
include "shared/header.php";
require "model/clsAdm_peliculas.php";
$clase_pelicula = new clsAdm_peliculas();
ob_start();
?>
  <form class="container w-40 m-auto" action="" method="POST" enctype="multipart/form-data">

    <div class="administracion mb-30">

      <h1 class="adm__heading">Administracion de Películas</h1>
      <div class="mb-5 mt-5">
      <label for="" class="mb-3">ID Pelicula</label>
        <input type="text" class="form-control " name="idpelicula" id="idpelicula" placeholder="ID Película">
        
      </div>
      <div class="mb-5">
         <label for="" class="mb-3" >Titulo</label>
        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título">
       
      </div>
      <div class="mb-5">
      <label for="" class="mb-3">Actor Principal</label>
        <input type="text" class="form-control" name="actor_principal" id="actor_principal" placeholder="Actor Principal">
        
      </div>
      <div class=" mb-5">
<label for="" class="mb-3">Actor Secundario</label>
        <input type="text" class="form-control" name="actor_secundario" id="actor_secundario" placeholder="Actor Secundario">
        
      </div>
      <div class="mb-5">
      <label for="" class="mb-3" >Director</label>
        <input type="text" class="form-control" name="director" id="director" placeholder="Director">
        
      </div>
      <div class="mb-5">
    <label for="imagen" class="mb-3">Poster</label>
        <input type="file" class="form-control" name="poster" id="poster" placeholder="Poster">
        
      </div>
      <div class="mb-5">
        <label for="" class="mb-3">Clasificación</label>
        <input type="text" class="form-control" name="clasificacion" id="clasificacion" placeholder="Clasificación">
        
      </div>
      <div class="mb-5">
         <label for="" class="mb-3">Minutos de Duración</label>
        <input type="text" class="form-control " name="duracion" id="duracion" placeholder="Minutos de Duración">
       
      </div>
      <div class="mb-5">
        <label for="" class="mb-3">Género</label>
        <input type="text" class="form-control" name="genero" id="genero" placeholder="Género">
        
      </div>
      <div class="mb-5">
      <label for="" class="mb-3">Idioma</label>
        <input type="text" class="form-control" name="idioma" id="idioma" placeholder="Idioma">
        
      </div>
      <div class="mb-5">
        <label for="" class="mb-3">Sinopsis</label>
        <input type="text" class="form-control" name="sinopsis" id="sinopsis" placeholder="Sinopsis">
        
      </div>
      <div class="mb-5">
        <label for="" class="mb-3">Trailer</label>
        <input type="url" class="form-control" name="trailer" id="trailer" placeholder="Trailer">
        
      </div>
      <div class="mb-3">
        <p>Estado</p>
        <select class="" name="estado" id="estado">
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