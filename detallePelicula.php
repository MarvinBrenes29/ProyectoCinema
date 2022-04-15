<?php
include "shared/header.php";
require "model/clsProcesoCompra.php";
$_SESSION['idpelicula'] = $_GET['pelicula'];
$compra = new clsProcesoCompra();
$compra->crearImagenesCartelera($_SESSION['idpelicula']);
?>
  <section class="hero">
    <div >
    
      <iframe width="500" height="300" src="<?php echo $compra->trailer ?>" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

  </section>

  <section class="search">
    <h2 class="search__heading"></h2>
    <div class="container">
      
    </div>
  </section>

  <main class="movie__info container ">
    <div class="movie__grid">
      <div class="w-50">
        <h1 class="movie__heading"><?php echo $compra->titulo ?></h1>
        <p class="movie__resume"><?php echo $compra->sinopsis ?></p>

        <div>

          <div class="movie__description">
            <h4 class="movie__titles">Director</h6>
              <p class="movie"><?php echo $compra->director ?></p>
          </div>

          <div class="movie__description">
            <h4 class="movie__titles">Casting</h6>
              <p class="movie"><?php echo $compra->actor_principal ?>, <?php echo $compra->actor_secundario ?></p>
          </div>

          <div class="movie__description">
            <h4 class="movie__titles">Duracion</h6>
              <p class="movie"><?php echo $compra->duracion ?> minutos</p>
          </div>

          <div class="movie__description">
            <h4 class="movie__titles">Clasificacion</h6>
              <p class="movie"><?php echo $compra->clasificacion ?></p>
          </div>

          
        </div>

        <?php 
        
        

        
        ?>

        <div class="container">
          
          <?php echo $compra->buscarFechas($_SESSION['idpelicula']) ?>

        </div>
        
        

      </div>

      <div>
        
        <img class="movie__img" src="img/peliculas/<?php echo $_SESSION['idpelicula'] ?>.jpg">
      </div>
    </div>
  </main>


<?php
include "shared/footer.php";
?>