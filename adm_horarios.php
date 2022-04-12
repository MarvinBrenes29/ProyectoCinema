<?php
include "shared/header.php";
?>
  <form class="container">
  <div class="administracion">
  
      <h1 class="administracion__heading">Administracion de Horarios</h1>


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



      <div class="adm__botones">
         <button class="btn btn-primary btn-lg">Guardar</button>
      <a class="btn btn-success btn-lg" href="index.html">Regresar</a>
      </div>
   

</div>
  </form>

<?php
include "shared/footer.php";
?>