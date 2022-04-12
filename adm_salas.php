<?php
include "shared/header.php";
?>
  <form class="container">
    <div class="administracion">
      <h1 class="administracion__heading">Admnistración de Salas</h1>

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
      <div class="adm__botones">
         <button class="btn btn-primary btn-lg">Guardar</button>
      <a class="btn btn-success btn-lg" href="index.html">Regresar</a>
      </div>
     
    </div>




  </form>
<?php
include "shared/footer.php";
?>