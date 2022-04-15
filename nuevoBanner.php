<?php
include "shared/header.php";
require "model/clsAdm_peliculas.php";
$clase_pelicula = new clsAdm_peliculas();
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
    
        $idbanner = $_POST["idbanner"];
        $titulo = $_POST["titulo"];
        $fecha = $_POST["fecha"];
        $estado = $_POST["estado"];


        

        $condicion = false;
        $condicion = $clase_pelicula->verificar_siexite_banner($idbanner);
        
        if ($condicion == false) {

            

            $foto_banner = "img/banners/$idbanner.jpg";
            $res = move_uploaded_file($_FILES["foto"]["tmp_name"], $foto_banner);

            $clase_pelicula->insertar_banner($idbanner, $titulo, $fecha, $estado);
            
            // header("Location: login.php");


            
        }else if($condicion == true){
            ?>
                <p class="alert alert-danger" role="alert">Error: Esta pelicula ya existe en el sistema</p>
            <?php
        }
    }

            

        ?>







<?php
include "shared/footer.php";
?>