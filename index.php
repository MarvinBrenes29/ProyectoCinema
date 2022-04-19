<?php
include "shared/header.php";
require "model/clsAdm_peliculas.php";
$clase_pelicula = new clsAdm_peliculas();
unset($_SESSION['idhorario']);
unset($_SESSION['vector']);
ob_start();
?>


  <!--.slider-->
  <section class="slider ">
    <ul class="slider__contenedor">
      
      <?php echo $clase_pelicula->crearImagenesBanner(); ?>

    </ul>
    <!--.slider_contenedor-->
  </section>
  <!--.slider-->

  <!--.seccion cartelera-->
  <main class=" container cartelera">
    <h3 class="propiedades__heading">En Cartelera</h3>
    <div class="d-flex flex-row gap-3" >
        <?php echo $clase_pelicula->crearImagenesCartelera(); ?>
    </div>
    
  </main>
  <!--.cartelera-->


  <!--.seccion cartelera-->
  <section class="container estrenos">
    <h3 class="propiedades__heading">Últimos Estrenos</h3>
    <div class="pelicula">
      <div class="swiper-container swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img class="img__pelicula" src="img/dog.jpg" alt="Movie Title"> Some Text</div>
          <div class="swiper-slide"><img class="img__pelicula" src="img/dog.jpg" alt="Movie Title">Some Text</div>
          <div class="swiper-slide"><img class="img__pelicula" src="img/dog.jpg" alt="Movie Title">Some Text</div>
          <div class="swiper-slide"><img class="img__pelicula" src="img/dog.jpg" alt="Movie Title">Some Text</div>
          <div class="swiper-slide"><img class="img__pelicula" src="img/dog.jpg" alt="Movie Title">Some Text</div>

        </div>
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>
  <!--.ultimosEstrenos-->

  
<?php
include "shared/footer.php";
?>
  