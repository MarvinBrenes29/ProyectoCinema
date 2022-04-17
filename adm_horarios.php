<?php
include "shared/header.php";
require "model/clsAdm_peliculas.php";
$clase_pelicula = new clsAdm_peliculas();
ob_start();
?>

<main class="adm">
 
        <div class="container mb-70">
            <div class="bd-highlight mb-2 pb-5 row">

                <div class="bd-highlight col">
                        <h2 class="adm__heading">Administración de horarios</h2>
                </div>
                        
                <div class="p-5 bd-highlight">
                    <a href="nuevoHorario.php" class="btn btn-secondary"><i class="fas fa-plus"></i> Nuevo</a>
                </div>

            </div>

            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID Horario</th>
                            <th scope="col">ID Pelicula</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Nombre de Sala</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody id="mytable">
                        
                        <?php echo $clase_pelicula->crearFilasHorario(); ?>
                    </tbody>
                </table>
            </div>
        </div>
  
</main>




<?php
include "shared/footer.php";
?>