<?php
include "shared/header.php";
?>
  <form>

    <div class="container">
      <h1>Administracion de Películas</h1>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="" id="" placeholder="Titulo">
        <label for="">Titulo</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="" id="" placeholder="Titulo">
        <label for="">Actor Principal</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="" id="" placeholder="Titulo">
        <label for="">Actor Secundario</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="" id="" placeholder="Titulo">
        <label for="">Director</label>
      </div>
      <div class="form-floating mb-3">
        <input type="file" class="form-control" name="" id="" placeholder="">
        <label for="imagen">Poster</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="" id="" placeholder="Titulo">
        <label for="">Clasificación</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="" id="" placeholder="Titulo">
        <label for="">Duración</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="" id="" placeholder="Titulo">
        <label for="">Genero</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="" id="" placeholder="Titulo">
        <label for="">Idioma</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="" id="" placeholder="Titulo">
        <label for="">Sinopis</label>
      </div>
      <div class="form-floating mb-3">
        <input type="url" class="form-control" name="" id="" placeholder="Titulo">
        <label for="">Trailer</label>
      </div>
      <div class="form-floating mb-3">
        <p>Estado</p>
        <select name="select">
          <option value="value1">Activo</option>
          <option value="value3">Inactivo</option>
        </select>
      </div>


      <a class="error__button" href="index.html">Regresar</a>

    </div>

  </form>

<?php
include "shared/footer.php";
?>