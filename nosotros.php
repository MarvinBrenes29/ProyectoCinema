<?php
include "shared/header.php";
unset($_SESSION['idhorario']);

require "model/clsMapa.php";
$mapa = new clsMapa();
?>


<section>
    <div class="container">
        <div>
            <h3 class="mapa__heading">Sucursales</h3>
        </div>
  

   <div id="contenedor">
  <!--Elemento Contenido-->
  <div class="contenido">
    <form method="POST">
      <legend class="mapa__provincia">Seleccione la  Provincia</legend>
        <select class="form-control  form-group-lg" name="provincia" id="provincia">
          <option value="san jose">San José</option>
          <option value="alajuela">Alajuela</option>
          <option value="heredia">Heredia</option>
          <option value="cartago">Cartago</option>
          <option value="guanacaste">Guanacaste</option>
          <option value="puntarenas">Puntarenas</option>
          <option value="limon">Limón</option>
        </select>
        <button id="cargar" type="submit" class="btn btn-outline-success  btn-lg">Cargar Ubicacion</button>
    </form>

    <?php 
        

        if(isset($_POST['provincia'])){
            $provincia = $_POST['provincia'];
        }else{
            $provincia = 'san jose';
        }
    ?>

    <?php 
    if(isset($provincia)){
        $latitud = $mapa->obtenerlatitud($provincia);
        $longitud = $mapa->obtenerlongitud($provincia);
    }else{ 
        $latitud = 9.935470955250178;
        $longitud = -84.10443318733695;
    }?>
    
    
    <br><br>

    <fieldset id="contenedorMapa">
     
      <div id="containerMapa">
        <div id="map" class="mx-auto"></div>
      </div>
      
  <!--Fin elemento Contenido-->

 </div>
 <!--Fin Elemento Principal-->
</div>




    </div>
 
  
</section>

<section class="mt-5">
    <div class="contacto__heading">
        <h4 class="contacto__texto">Estamos trabajando en llegar a muchos mas lugares para que puedas visitarnos, pero por lo pronto todos estos son los lugares en los que nos encontramos</h4>
    </div>
</section>
<!--.contacto-->


<section class="container contacto__grid">
    <div class="contacto__info">
        <h3 class="contacto__titulo">Contáctenos</h3>
        <p class="contacto__descripcion">Estamos comprometidos en darte el mejor de los servicios, por eso te animamos a contactarnos en la siguiente informacion</p>
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
            <h3 class="contacto__titulo">Sugerencias</h3>

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
                    <button id="enviar" class="boton draw-border" type="submit">Enviar
                    </button>

                </div>
            </form>
        </div>


    </div>

</section>







<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

    
    
    <?php
       echo '<script> var map = L.map("map").setView([ "'.$latitud.'" , "'.$longitud.'"], 17);
            var marcador = L.marker([ "'.$latitud.'" , "'.$longitud.'"]).addTo(map);
            marcador.bindPopup(`<h1>The MovieDB</h1>`);  </script>';
    ?>
    <script>
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 22,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiYWxzb2xpczEyMyIsImEiOiJja3prdGZidmMxbmVxMm9xcmJwa3RyOHFiIn0.KKEIgHgO6Pj3YqAzp_Lw2A'
        }).addTo(map);
    </script>
<?php
include "shared/footer.php";
?>