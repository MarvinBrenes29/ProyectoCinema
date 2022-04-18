<?php
include "shared/header.php";
require "model/clsSillas.php";
$sillas = new clsSillas();
$usuario = $_SESSION['usuario'];
?>

<main>
    <div class="container mt-5 mb-70">
        <div class="historial">
            <h3 class="adm__heading">Historial de compra</h3>

            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"># Orden de compra</th>
      <th scope="col">Película</th>
      <th scope="col">Fecha</th>
      <th scope="col">Hora</th>
      <th scope="col">Asientos</th>
      <th scope="col">Monto Pagado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php echo $sillas->crearFilasCompra($usuario) ?>
    </tr>
  </tbody>
</table>
        </div>
        
    </div>
    
</main>


<?php
include "shared/footer.php";
?>
  