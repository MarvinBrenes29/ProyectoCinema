<?php
include "shared/header.php";
?>

<main>
    <div class="container ">
        <div class="modificar">
             <form class="" action="" method="POST">
                <div class=" bd-highlight mb-3">


                    <div class="me-auto p-2 bd-highlight ">
                        <h2 class="adm__heading">Modificar Usuario
                    </div>

                </div>
           
                <div class="mb-3">
                    <label for="" class="mb-3">Nombre</label>
                    <input type="text" class="form-control" name="" id="" placeholder="" disabled>
                    
                </div>

                <div class="mb-3">
                    <label for="" class="mb-3">Primer Apellido</label>
                    <input type="text" class="form-control " name="" id="" placeholder="Primer Apellido">
                </div>


                <div class=" mb-3">
                    <label for="" class="mb-3">Segundo Apellido</label>
                    <input type="text" class="form-control" name="" id="" placeholder="Segundo Apellido" >
                    
                </div>

                <div class=" mb-3">
                    <label for="" class="mb-3">Teléfono</label>
                    <input type="text" class="form-control" name="" id=""placeholder="Número de Teléfono" >
                    
                </div>

                <div class=" mb-3">
                    <label for="" class="mb-3">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="" id="" placeholder="Fecha de nacimiento" >
                    
                </div>


                <div class=" mb-3">
                    <label for=""  class="mb-3">Usuario</label>
                    <input type="text" class="form-control" name="" id="" placeholder="Usuario" >
                    
                </div>

                <div class=" mb-3">
                    <label for="email" class="mb-3">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
                    
                </div>
                <div class=" mb-3">
                    <label for="imagen" class="mb-3">Fotografía</label>
                    <input type="file" class="form-control" name="" id="" placeholder="" placeholder="Fotografía">
                    
                </div>

                <div class=" mb-3">
                     <label for="clave" class="mb-3">Clave</label>
                    <input type="password" class="form-control" name="clave" id="clave"  placeholder="Clave">
                   
                </div>
                <div class=" mb-3">
                <label for="cclave"class="mb-3">Confirmar Clave</label>
                    <input type="password" class="form-control" name="cclave" id="cclave" placeholder="Confirmar Clave" >
                    
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-outline-dark" href="">Modificar</button>
                    <button type="submit" class="btn btn-outline-dark" href="">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
    
</main>

<?php
include "shared/footer.php";
?>
  