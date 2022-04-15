<?php
include "shared/header.php";
require "model/clsAdm_peliculas.php";
$clase_pelicula = new clsAdm_peliculas();
$idbanner = $_GET["idbanner"];
ob_start();
?>

    <form class="container" action="" method="POST" enctype="multipart/form-data">

        <div class="administracion">
                <h2 class="administracion__heading">Administración de Banners</h2>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="idbanner" id="" placeholder="Titulo">
            <label for="">ID Banner</label>
        </div>


        <div class="form-floating mb-3">
            <input type="file" class="form-control" name="foto" id="" placeholder="">
            <label for="imagen">Banner</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="titulo" id="" placeholder="Titulo">
            <label for="">Titulo</label>
        </div>

        <div class="form-floating mb-3">
            <input type="date" class="form-control" name="fecha" id="" placeholder="Fecha de nacimiento">
            <label for="">Fecha de Publicacion</label>
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