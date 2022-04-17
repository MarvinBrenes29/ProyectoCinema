<?php
include "shared/header.php";
require "model/clsAdm_peliculas.php";
$clase_pelicula = new clsAdm_peliculas();
$idbanner = $_GET["idbanner"];
ob_start();
?>

    <form class="container" action="" method="POST" enctype="multipart/form-data">

        <div class="administracion">
            <div>
                <h2 class="" class="adm__heading">Administración de Banners</h2>
            </div>
                

        <div class=" mb-3">
                <label for="" class="mb-3">ID Banner</label>
            <input type="text" class="form-control" name="idbanner" id="" placeholder="ID Banner">
        
        </div>


        <div class=" mb-3">
           <label for="imagen" class="mb-3">Banner</label> 
            <input type="file" class="form-control" name="foto" id="" placeholder="">
            
        </div>

        <div class=" mb-3">
             <label for="" class="mb-3">Titulo</label>
            <input type="text" class="form-control" name="titulo" id="" placeholder="Titulo">
           
        </div>

        <div class=" mb-3">
            <label for="" class="mb-3">Fecha de Publicación</label>
            <input type="date" class="form-control" name="fecha" id="" placeholder="Fecha de nacimiento">
            
        </div>

        <div class="form-floating mb-3">
            <p>Estado</p>
            <select name="estado">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
            
        </div>

        <div class="adm__botones">
         <button class="btn btn-primary btn-lg">Guardar</button>
      <a class="btn btn-success btn-lg" href="adm_banners.php">Regresar</a>
      </div>
        </div>
  </div>
    
  <?php
    if (!empty($_POST)) {
    
        $titulo = $_POST["titulo"];
        $fecha = $_POST["fecha"];
        $estado = $_POST["estado"];



            if(file_exists('img/banners/'.$idbanner.'.jpg')){
                unlink('img/banners/'.$idbanner.'.jpg');
            }

            $foto_banner = "img/banners/$idbanner.jpg";
            $res = move_uploaded_file($_FILES["foto"]["tmp_name"], $foto_banner);

            $clase_pelicula->modificar_banner($idbanner, $titulo, $fecha, $estado);
            
            // header("Location: login.php");


            
      
    }

            

        ?>

<?php
include "shared/footer.php";
?>