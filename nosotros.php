<?php
include "shared/header.php";
?>


<section class="container__mapa">
   <h3 class="mapa__heading">Sucursales</h3>
   <div id="contenido">
            <fieldset>
              <legend class="mapa__provincia">Seleccione la Provincia</legend>
                <select class="form-control form-control-lg mb-5" id="provincia">
                  <option class="mapa__provincias" value="San Jose">San José</option>
                  <option class="mapa__provincias"  value="Alajuela">Alajuela</option>
                  <option class="mapa__provincias"  value="Heredia">Heredia</option>
                  <option class="mapa__provincias" value="Cartago">Cartago</option>
                  <option class="mapa__provincias" value="Guanacaste">Guanacaste</option>
                  <option class="mapa__provincias" value="Puntarenas">Puntarenas</option>
                  <option class="mapa__provincias" value="Limon">Limón</option>
                </select>
                <button id="cargar" class="btn btn-outline-success btn-lg">Buscar</button>
            </fieldset>

    </div>

 
   <fieldset id="contenedorMapa">
      
              <div id="containerMapa">
                <div id="map" class="mx-auto"></div>
              </div>
              <div id='mapaProvincia' style='width: 500px; height: 400px'></div>
            </fieldset>
          </div>
   </div>

</section>
<!--map-->

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
        <p class="contacto__redes">88-88-88</p>
        <p class="contacto__redes">contact@cinema.com</p>
        <p class="contacto__redes">https//twitter.com/Cinema</p>
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