<?php
include "shared/header.php";
require "model/clsSillas.php";
$sillas = new clsSillas();

$vectorEntradas = explode(",",$_GET['entrada']);
$_SESSION['comboentrada'] = $_GET['entrada'];

$_SESSION['vector'] = $vectorEntradas;
$idhorario = $_SESSION['idhorario'];

?>



  <main>
    <div class="container pt-5 mx-5">
        <h1 class="display-4 pt-5 mx-5">Paso Final</h1>
        <h1 class="display-6">
        <?php
            if(isset($_GET['entrada'])){
                $conteoEntradas = count($vectorEntradas);

                $montoEntradas = $conteoEntradas * $sillas->costoEntrada($idhorario);

                $_SESSION['montoEntradas'] = $montoEntradas;

                if($conteoEntradas == 1){
                    echo 'El costo por esta entrada es: ₡'.$montoEntradas.'.';
                }else{
                    echo 'El costo por estas ' .$conteoEntradas.' entradas es: ₡'.$montoEntradas.'.';
                }
            }
        ?>
        </h1>
    </div>

    <div class="container pt-5 mx-5">
        <h1 class="display-6">Ingrese su metodo de pago</h1>
    </div>

    <form class="pt-5 mx-5">

        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre titular</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombreComprador">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Numero tarjeta</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="numeroTarjeta">
                <input type="text" class="form-control" placeholder="CVV" aria-label="State">
            </div>
        </div>
        

        <!-- <button type="submit" class="btn btn-primary mx-5">Comprar</button> -->
        <!-- <button type="buttom" class="btn btn-primary mx-5">Comprar</button> -->
        <a href='compra.php' role='button'>Comprar</a>
    </form>




  </main>


<?php
include "shared/footer.php";
?>