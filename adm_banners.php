<?php
include "shared/header.php";
?>
    <form class="container" action="" method="">
        <div class="d-flex justify-content-center bd-highlight mb-3">


            <div class="me-auto p-2 bd-highlight ">
                <h2>Administracion de Banners
            </div>

        </div>
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
        <a class="error__button" href="index.html">Regresar</a>
    </form>

<?php
include "shared/footer.php";
?>
  