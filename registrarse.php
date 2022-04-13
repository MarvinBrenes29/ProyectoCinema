<?php
include "shared/header.php";
require "model/clsLogin.php";
$clase_login = new clsLogin();
ob_start();
?>
    <main class="container">
        <div class="administracion">
            <form class="w-40 m-auto" action="" method="POST" enctype="multipart/form-data">
                <div class="d-flex justify-content-center bd-highlight mb-3">


                    <div class="me-auto p-2 bd-highlight ">
                        <h2>Registro de Usuario
                    </div>

                </div>
                <p>Personal</p>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                    <label for="">Nombre</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="apellido1" id="apellido1" placeholder="Primer Apellido">
                    <label for="">Primer Apellido</label>
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="apellido2" id="apellido2" placeholder="Segundo Apellido">
                    <label for="">Segundo Apellido</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
                    <label for="">Telefono</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha de nacimiento">
                    <label for="">Fecha de Nacimiento</label>
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                    <label for="">Usuario</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="correo" id="correo" placeholder="email">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="file" class="form-control" name="foto" id="foto" placeholder="">
                    <label for="imagen">Fotografía</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="clave">
                    <label for="clave">Clave</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="confirmar_contrasenia" id="confirmar_contrasenia" placeholder="Confirmar clave">
                    <label for="cclave">Confirmar Clave</label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-outline-dark" href="">Crear Usuario</button>
                    <button type="submit" class="btn btn-outline-dark" href="">Cancelar</button>
                </div>
            </form>
        </div>

        <?php
            if (!empty($_POST)) {
            
                $nombre = $_POST["nombre"];
                $apellido1 = $_POST["apellido1"];
                $apellido2 = $_POST["apellido2"];
                $telefono = $_POST["telefono"];
                $fecha = $_POST["fecha_nacimiento"];
                $usuario = $_POST["usuario"];
                $correo = $_POST["correo"];
                $contrasenia = $_POST["contrasenia"];
                $confirmar_contrasenia = $_POST["confirmar_contrasenia"];
                $administrador = 0;
                
        
                $condicion = false;
                $condicion = $clase_login->verificar_siexite($usuario);
                
                if ($condicion == false) {
        
                    if($contrasenia == $confirmar_contrasenia){

                        $foto_login = "img/usuarios/$usuario.jpg";
                        $res = move_uploaded_file($_FILES["foto"]["tmp_name"], $foto_login);
                        $clase_login->insertar_usuario($usuario, $nombre, $apellido1, $apellido2, $telefono, $fecha, $contrasenia, $correo, $administrador);
                        
                        // header("Location: login.php");


                    }else{
                        ?> 
                            <p class="alert alert-danger" role="alert">Error: Las contraseñas no son iguales</p>
                        <?php
                    }
                    
                }else if($condicion == true){
                    ?>
                        <p class="alert alert-danger" role="alert">Error: Este usuario ya existe en el sistema</p>
                    <?php
                }
            }

            

        ?>


    </main>


<?php
include "shared/footer.php";
?>