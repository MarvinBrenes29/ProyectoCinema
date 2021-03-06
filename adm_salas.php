<?php
include "shared/header.php";
require "model/clsAdm_peliculas.php";
$clase_pelicula = new clsAdm_peliculas();
ob_start();
?>

<main class="mt-5">
 
        <div class="container mb-5">
            <div class="bd-highlight mb-2 pb-5 row">

                <div class="mt-5 pt-5 bd-highlight col">
                        <h2>Administracion de Salas</h2>
                </div>
                        
                <div class="p-5 bd-highlight">
                    <a href="nuevaSala.php" class="btn btn-secondary"><i class="fas fa-plus"></i> Nuevo</a>
                </div>

            </div>

            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Nombre Sala</th>
                            <th scope="col">Tipo de Sala</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody id="mytable">
                        
                        <?php echo $clase_pelicula->crearFilasSalas(); ?>
                    </tbody>
                </table>
            </div>
        </div>
  
</main>




<?php
include "shared/footer.php";
?>