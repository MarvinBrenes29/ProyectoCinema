<?php
include "shared/header.php";
?>


        <section >
            <div class="map container">
                <fieldset id="contenedorMapa">
                    <legend>Mapa</legend>
                    <div id="containerMapa">
                      <div id="map" class="mx-auto"></div>
                    </div>
                    <div id='mapaProvincia' style='width: 500px; height: 400px'></div>
                  </fieldset>
            </div>
        </section>
        <!--map-->

        <section>
            <div class="contacto__heading">
                <h4 class="contacto__texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                    vulputate sed
                    tempor vulputate. Iaculis fusce Pellentesque vulputate sed
                    tempor vulputate. Iaculis fusc</h4>
            </div>
        </section>
        <!--.contacto-->
        

        <section class="container contacto__grid">
            <div>
                <h3>Lorem Ipsum</h3>
                <p class="contacto__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis cum
                    inventore esse sint itaque optio fugiat recusandae voluptatum</p>
                <p>88-88-88</p>
                <p>contact@cinema.com</p>
                <p>https//twitter.com/Cinema</p>
            </div>

            <div class="contacto">
                <h3>Lorem Ipsum</h3>

                <form id="enviar-mail" class="">

                    <div class="">
                        <label class="form__nombre" for="asunto">Nombre*</label>
                        <input id="nombre" type="text">
                    </div>


                    <div class="">
                        <label for="email">Email*:</label>
                        <input class="" id="email" type="email">
                    </div>

                    <div class="">
                        <label for="mensaje">Mensaje</label>
                        <textarea class="" id="mensaje"></textarea>
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


        </section>

        
        <script src="js/app.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
    
<?php
include "shared/footer.php";
?>