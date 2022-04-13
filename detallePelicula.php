<?php
include "shared/header.php";
echo $_GET['pelicula'];
?>
  <section class="hero">
    <div>
      <iframe width="500" height="300" src="https://www.youtube.com/embed/u9Mv98Gr5pY" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

  </section>

  <section class="search">
    <h2 class="search__heading">Lorem Ipsum </h2>
    <div class="container">
      <form class="form">
        <select class="form__seccion">
          <option value="">-</option>
          <option>San José</option>
          <option>Alajuela</option>
          <option>Heredia</option>
          <option>Cartago</option>

        </select>
        <select class="form__seccion">
          <option>-</option>
          <option>1:45PM</option>
          <option>5:00PM</option>
          <option>8:00PM</option>
          <option>Marketing</option>
        </select>
        <select class="form__seccion">
          <option>-</option>
          <option>VIP</option>
          <option>Regular</option>
          <option>Adulto Mayor</option>
          <option>Niños</option>

        </select>
        <input type="submit" class="form__submit" value="Continuar">
      </form>
    </div>
  </section>

  <main class="movie__info container ">
    <div class="movie__grid">
      <div class="w-50">
        <h1 class="movie__heading">Lorem Ipsum</h1>
        <p class="movie__resume">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam hic praesentium vitae
          inventore animi ipsam dolorem provident</p>

        <div>
          <div class="movie__description">
            <h4 class="movie__titles">Director</h6>
              <p class="movie">Chris Milewski</p>
          </div>

          <div class="movie__description">
            <h4 class="movie__titles">Casting</h6>
              <p>Andrea Autulio, Jeffery Voice, Chiara Pavoni</p>
          </div>

          <div class="movie__description">
            <h4 class="movie__titles">Producción</h6>
              <p>Digiflex</p>
          </div>

        </div>


      </div>

      <div>
        <img class="movie__img" src="img/dog.jpg" alt="">
      </div>
    </div>
  </main>


<?php
include "shared/footer.php";
?>