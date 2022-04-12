<?php
include "shared/header.php";
?>
    <form class="container" action="" method="">
        <div class="administracion">
                <h2 class="administracion__heading">Administración de Banners</h2>

        <div class="form-floating mb-3">
            <input type="file" class="form-control" name="" id="" placeholder="">
            <label for="imagen">Banner</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="" id="" placeholder="Titulo">
            <label for="">Titulo</label>
        </div>

        <div class="form-floating mb-3">
            <input type="date" class="form-control" name="" id="" placeholder="Fecha de nacimiento">
            <label for="">Fecha de Publicacion</label>
        </div>

        <div class="form-floating mb-3">
            <p>Estado</p>
            <select name="select">
                <option value="value1">Activo</option>
                <option value="value3">Inactivo</option>
            </select>
            
        </div>

        <div class="adm__botones">
         <button class="btn btn-primary btn-lg">Guardar</button>
      <a class="btn btn-success btn-lg" href="index.html">Regresar</a>
      </div>
        </div>
    </form>

<?php
include "shared/footer.php";
?>
  