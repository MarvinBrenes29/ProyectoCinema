<?php
include "shared/header.php";
?>
  <form>
    <div class="container">
      <h1>Admnistración de Salas</h1>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="" id="" placeholder="Nombre">
        <label for="">Nombre</label>
      </div>
      <div class="form-floating mb-3">
        <p>Tipo de sala</p>
        <select name="select">
          <option value="value3">Regular</option>
          <option value="value3">VIP</option>
        </select>
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