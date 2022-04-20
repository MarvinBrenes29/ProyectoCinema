<?php
include "shared/header.php";
require "model/clsLogin.php";
$login = new clsLogin();
$usuario = $_SESSION['usuario'];


?>

<main>
    <div class="container ">
        <div class="modificar">
             <form class="" action="" method="POST" enctype="multipart/form-data">
                <div class=" bd-highlight mb-3">


                    <div class="me-auto p-2 bd-highlight ">
                        <h2 class="adm__heading">Modificar Usuario
                    </div>

                </div>
           
                

                <div class="mb-3">
                    <label for="" class="mb-3">Primer Apellido</label>
                    <input type="text" class="form-control " name="apellido1" id="" placeholder="Primer Apellido">
                </div>


                <div class=" mb-3">
                    <label for="" class="mb-3">Segundo Apellido</label>
                    <input type="text" class="form-control" name="apellido2" id="" placeholder="Segundo Apellido" >
                    
                </div>

                <div class=" mb-3">
                    <label for="" class="mb-3">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" id=""placeholder="Número de Teléfono" >
                    
                </div>

                <div class=" mb-3">
                    <label for="" class="mb-3">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nacimiento" id="" placeholder="Fecha de nacimiento" >
                    
                </div>


                <div class=" mb-3">
                    <label for="email" class="mb-3">Email</label>
                    <input type="email" class="form-control" name="correo" id="email" placeholder="Email" >
                    
                </div>
                <div class=" mb-3">
                    <label for="imagen" class="mb-3">Fotografía</label>
                    <input type="file" class="form-control" name="foto" id="" placeholder="" placeholder="Fotografía">
                    
                </div>

                <div class=" mb-3">
                     <label for="clave" class="mb-3">Clave</label>
                    <input type="password" class="form-control" name="contrasenia" id="clave"  placeholder="Clave">
                   
                </div>
                <div class=" mb-3">
                <label for="cclave"class="mb-3">Confirmar Clave</label>
                    <input type="password" class="form-control" name="confirmar_contrasenia" id="cclave" placeholder="Confirmar Clave" >
                    
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-lg" href="">Modificar</button>
                    <button type="submit" class="btn btn-secondary btn-lg" href="">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
    
</main>

<?php 
    if (!empty($_POST)) {
            


           $apellido1 = $_POST['apellido1'];
           $apellido2 = $_POST['apellido2'];
           $telefono = $_POST['telefono'];
           $fecha_nacimiento = $_POST['fecha_nacimiento'];
           $correo = $_POST['correo'];
           $contrasenia = $_POST['contrasenia'];
           $confirmar_contrasenia = $_POST['confirmar_contrasenia'];

        if($contrasenia == $confirmar_contrasenia){

            if(file_exists('img/usuarios/'.$usuario.'.jpg')){
                unlink('img/usuarios/'.$usuario.'.jpg');
            }
    
            $foto_usuario = "img/usuarios/$usuario.jpg";
            $res = move_uploaded_file($_FILES["foto"]["tmp_name"], $foto_usuario);
            
            $login->modificar_usuario($apellido1, $apellido2, $telefono, $fecha_nacimiento, $correo, $contrasenia, $usuario);




        }else{
            ?>
                <p class="alert alert-danger" role="alert">Error: Las contraseñas son diferentes</p>
            <?php
        }

                
                
                
        }
?>

<?php
include "shared/footer.php";
?>
  