<?php
include "shared/header.php";
?>


<section>
   
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