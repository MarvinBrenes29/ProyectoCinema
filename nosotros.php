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
                        <label for="asunto">Nombre*</label>
                        <input class="" id="nombre" type="text">
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

                    <div class="">
                        <button id="enviar" class="" type="submit">Enviar

                        </button>


                    </div>
                </form>


            </div>


        </section>

        

        <!--.footer-->
        <footer class="footer">
            <div class="footer__contenido">
                <div>
                    <a href="index.html">
                        <img class="footer__logo" src="img/Logo.png" alt="">
                    </a>
                </div>
                <div class="footer__redes">
                    <a href="">
                        <img class="footer__social" src="img/facebook.png" alt="facebook">
                    </a>
                    <a href="#">
                        <img class="footer__social" src="img/instagram.png" alt="instagram">
                    </a>
                    <a href="#">
                        <img class="footer__social" src="img/youtube .png" alt="youtube">
                    </a>
                </div>

                <div>
                    <p class="footer__texto">Todos los derechos reservados &copy</p>
                </div>


            </div>
<?php
include "shared/footer.php";
?>