<?php
include "shared/header.php";
unset($_SESSION['idhorario']);
?>


<section>
   <h3 class="mapa__heading">Sucursales</h3>

   <div id="contenedor">
  <!--Elemento Contenido-->
  <div id="contenido">
    <fieldset>
      <legend>Selccione Provincia</legend>
        <select class="form-control mb-3" id="provincia">
          <option value="San Jose">San José</option>
          <option value="Alajuela">Alajuela</option>
          <option value="Heredia">Heredia</option>
          <option value="Cartago">Cartago</option>
          <option value="Guanacaste">Guanacaste</option>
          <option value="Puntarenas">Puntarenas</option>
          <option value="Limon">Limón</option>
        </select>
        <button id="cargar" class="btn btn-outline-success">Cargar Clima</button>
    </fieldset>


    <br><br>

    <fieldset id="contenedorMapa">
     
      <div id="containerMapa">
        <div id="map" class="mx-auto"></div>
      </div>
      <div id='mapaProvincia' style='width: 500px; height: 400px'></div>
    </fieldset>
  </div>
  <!--Fin elemento Contenido-->

 </div>
 <!--Fin Elemento Principal-->
</div>
  
</section>

<section class="mt-5">
    <div class="contacto__heading">
        <h4 class="contacto__texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
            vulputate sed
            tempor vulputate. Iaculis fusce Pellentesque vulputate sed
            tempor vulputate. Iaculis fusc</h4>
    </div>
</section>
<!--.contacto-->


<section class="container contacto__grid">
    <div class="contacto__info">
        <h3 class="contacto__titulo">Lorem Ipsum</h3>
        <p class="contacto__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis cum
            inventore esse sint itaque optio fugiat recusandae voluptatum</p>
            <div class="contacto__logos">
                <img src="img/telephone.png"  class="contacto__img"alt="">
                <p class="contacto__redes">88-88-88</p>
            </div>
        <div class="contacto__logos"> 
        <img src="img/email.png"  class="contacto__img"alt="">
             <p class="contacto__redes">contact@cinema.com</p>
        </div>
       <div class="contacto__logos">
       <img src="img/twitter.png"  class="contacto__img"alt="">
           <p class="contacto__redes" >https//twitter.com/Cinema</p>
       </div>
        
    </div>

    <div class="contacto">
        <div class="ms-5">
            <h3 class="contacto__titulo">Lorem Ipsum</h3>

            <form id="enviar-mail" class="">

                <div class="">
                    <label class="form__titulo" for="asunto">Nombre*</label> <br>
                    <input class="form__input" id="nombre" type="text">
                </div>


                <div class="">
                    <label class="form__titulo" for="email">Email*:</label> <br>
                    <input class="form__input" id="email" type="email" width="50px">
                </div>

                <div class="">
                    <label class="form__titulo" for="mensaje">Mensaje</label> <br>
                    <textarea class="form__input--texto" id="mensaje"></textarea>
                </div>

                <div id="spinner">
                    <div class="sk-chase">
                        <div class="sk-chase-dot"></div>
                        <div class="sk-chase-dot"></div>
                        <div class="sk-chase-dot"></div>
                        <div class="sk-chase-dot"></div>
                        <div class="sk-chase-dot"></div>
                        <div class="sk-chase-dot"></div>
                    </div>
                </div>
                <div>
                    <button id="enviar" class="btn__enviar" type="submit">Enviar
                    </button>

                </div>
            </form>
        </div>


    </div>

</section>


<script src="js/app.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

<?php
include "shared/footer.php";
?>