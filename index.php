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
      <li class="slider__slide">
        <img class="slider__imagen" src="img/Venom.jpg" alt="venom">
      </li>

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
    <div class="pelicula d-flex flex-row">
      
        
          <div class="mr-5"><img class="img__pelicula" src="img/dog.jpg" alt="Movie Title"> Some Text</div>
 

      
      
    </div>
  </section>
  <!--.ultimosEstrenos-->

  
<?php
include "shared/footer.php";
?>
  