<?php
include "shared/header.php";
require "model/clsAdm_peliculas.php";
$clase_pelicula = new clsAdm_peliculas();
$idpelicula = $_GET["idpelicula"];
ob_start();
?>
  <form class="container w-40 m-auto" action="" method="POST" enctype="multipart/form-data">

    <div class="administracion mb-30">

      <h1 class="adm__heading">Administracion de Películas</h1>
      
      <div class="ing mb-3">
        <label for="" class="mb-3">Titulo</label>
        <input type="text" class="form-control w-50 p-3" name="titulo" id="titulo" placeholder="Titulo">
        
      </div>
      <div class="mb-3">
         <label for="" class="mb-3">Actor Principal</label>
        <input type="text" class="form-control w-50 p-3" name="actor_principal" id="actor_principal" placeholder="Actor Principal">
       
      </div>
      <div class="mb-3">
        <label for="" class="mb-3">Actor Secundario</label>
        <input type="text" class="form-control w-50 p-3" name="actor_secundario" id="actor_secundario" placeholder="Actor Secundario">
        
      </div>
      <div class="mb-3">
        <label for="" class="mb-3">Director</label>
        <input type="text" class="form-control w-50 p-3" name="director" id="director" placeholder="Director">
        
      </div>
      <div class="mb-3">
        <label for="imagen" class="mb-3">Poster</label>
        <input type="file" class="form-control w-50 p-3" name="poster" id="poster" placeholder="Poster">
        
      </div>
      <div class= "mb-3">
      <label for="" class="mb-3">Clasificación</label>
        <input type="text" class="form-control w-50 p-3" name="clasificacion" id="clasificacion" placeholder="Clasificación">
        
      </div>
      <div class= "mb-3">
<label for="" class="mb-3">Minutos de Duración</label>
        <input type="text" class="form-control w-50 p-3" name="duracion" id="duracion" placeholder="Minutos de Duración">
        
      </div>
      <div class="mb-3">
        <label for="" class="mb-3">Genero</label>
        <input type="text" class="form-control w-50 p-3" name="genero" id="genero" placeholder="Genero">
        
      </div>
      <div class=" mb-3">
        <label for="" class="mb-3">Idioma</label>
        <input type="text" class="form-control w-50 p-3" name="idioma" id="idioma" placeholder="Idioma">
        
      </div>
      <div class="mb-3">
        <label for="" class="mb-3">Sinopsis</label>
        <input type="text" class="form-control w-50 p-3" name="sinopsis" id="sinopsis" placeholder="Sipnosis">
        
      </div>
      <div class="mb-3">
 <label for="" class="mb-3">Trailer</label>
        <input type="url" class="form-control w-50 p-3" name="trailer" id="trailer" placeholder="Trailer">
       
      </div>
      <div class="form-floating mb-3">
        <p>Estado</p>
        <select class=" w-50 p-3" name="estado" id="estado">
          <option value="1">Activo</option>
          <option value="0">Inactivo</option>
        </select>
      </div>


      <div class="adm__botones mb-5">
        <a class="btn btn-success btn-lg w-25 p-3" href="index.php">Regresar</a>
        <button type="submit" class="btn btn-primary btn-lg w-25 p-3">Guardar</button>
      
      </div>

    </div>

  </form>




  <?php
    if (!empty($_POST)) {
        


        $clase_pelicula->idpelicula = $idpelicula;
        $clase_pelicula->titulo = $_POST["titulo"];
        $clase_pelicula->actor_principal = $_POST["actor_principal"];
        $clase_pelicula->actor_secundario = $_POST["actor_secundario"];
        $clase_pelicula->director = $_POST["director"];
        $clase_pelicula->clasificacion = $_POST["clasificacion"];
        $clase_pelicula->duracion = $_POST["duracion"];
        $clase_pelicula->genero = $_POST["genero"];
        $clase_pelicula->idioma = $_POST["idioma"];
        $clase_pelicula->sinopsis = $_POST["sinopsis"];
        $clase_pelicula->trailer = $_POST["trailer"];
        $clase_pelicula->estado = $_POST["estado"];



            if(file_exists('img/peliculas/'.$idpelicula.'.jpg')){
                unlink('img/peliculas/'.$idpelicula.'.jpg');
            }
    
            $foto_pelicula = "img/peliculas/$idpelicula.jpg";
            $res = move_uploaded_file($_FILES["poster"]["tmp_name"], $foto_pelicula);
            
            $clase_pelicula->modificar_pelicula();
            
            
    }

            

        ?>

<?php
include "shared/footer.php";
?>