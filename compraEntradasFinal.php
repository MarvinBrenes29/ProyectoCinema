<?php
include "shared/header.php";
require "model/clsSillas.php";
$sillas = new clsSillas();

$vectorEntradas = explode(",",$_GET['entrada']);
$_SESSION['comboentrada'] = $_GET['entrada'];

$_SESSION['vector'] = $vectorEntradas;
$idhorario = $_SESSION['idhorario'];



?>



<main class="bg-payment ">
    



    <div class="container bg-white">

        <div class="">
            <h1 class="pay__heading">Ingrese su metodo de pago</h1>
            <img class="pay__image" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
        </div>


        
    </form>


        <form class="">

           
                <label for="inputEmail3" class="pay__info">Nombre titular</label>
                <div class="">
                    <input type="text" placeholder="Nombre del titular de la tarjeta" class="form-control pay__input"
                        id="nombreComprador">
                </div>
            
          
                <label for="inputPassword3" class="pay__info">Número tarjeta</label>
                <div class="">
                    <input type="text" placeholder="Valid Card Number" class="form-control pay__input" id="numeroTarjeta">
                    <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>

                    <input type="text" class="form-control" placeholder="CVV" aria-label="State">
                </div>
           


            <!-- <button type="submit" class="btn btn-primary mx-5">Comprar</button> -->
            <!-- <button type="buttom" class="btn btn-primary mx-5">Comprar</button> -->
            <a href='compra.php' role='button'>Procesar Pago</a>


            <div class="container pt-5 mx-5">
            <h1 class="pay__compra pt-5 mx-5">Paso Final</h1>
            <h1 class="pay__compra--info">

        

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




        </form>




    </div>


</main>


<?php
include "shared/footer.php";
?>