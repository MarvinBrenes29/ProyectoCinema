<?php
include "shared/header.php";
?>
  <form>
    <div class="container">
      <h1>Administracion de Horarios</h1>


      <div class="form-floating mb-3">
        <input type="date" class="form-control" name="" id="" placeholder="Fecha">
        <label for="">Fecha</label>
      </div>

      <div class="form-floating mb-3">
        <input type="time" class="form-control" name="" id="" placeholder="Fecha de nacimiento">
        <label for="">Hora</label>
      </div>
      <div class="form-floating mb-3">
        <p>Tipo de sala</p>
        <select name="select">
          <option value="value3">Regular</option>
          <option value="value3">VIP</option>
        </select>
      </div>

      <div class="form-floating mb-3">
        <input type="number" class="form-control" name="" id="" placeholder="Fecha de nacimiento">
        <label for="">Precio</label>
      </div>



      <a class="error__button" href="index.html">Regresar</a>
    </div>


  </form>

<?php
include "shared/footer.php";
?>