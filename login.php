<?php
include "shared/header.php";
require "model/clsLogin.php";
$clase_login = new clsLogin();

?>
    <main class="container">
        <div class="administracion mb-30">
            <h1 class="">Iniciar Sesión</h1>

            <form class="w-40 m-auto" action="" method="POST">
                <div class="mb-3">
                    <label class="form-label" for="">Usuario</label>
                    <input class="form-control" type="text" name="usr">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Clave</label>
                    <input class="form-control" type="password" name="pass">
                </div>
                <div class="mb-3 d-grid gap-2">
                    <input class="btn btn-dark" type="submit" value="Iniciar Sesión">
                </div>
                <div class="mb-3 d-grid gap-2">
                    <a class="btn btn-outline-dark" href="registrarse.php">Registrarse</a>
                </div>
            </form>
        </div>

        <?php
    
        if (!empty($_POST)) {

            $usr = $_POST["usr"];
            $pass = $_POST["pass"];


            $condicion = 0;
            $condicion = $clase_login->verificar_usuario($usr, $pass);
            
            if ($condicion == 2) {

                $_SESSION["login"]=true;
                $_SESSION["rol"]="admin";
                $_SESSION["usuario"] = $usr;
                header("Location: index.php");

            }else if($condicion == 1){

                $_SESSION["login"]=true;
                $_SESSION["rol"]="user";
                $_SESSION["usuario"] = $usr;
                header("Location: index.php");

            } else{
                $error = "1";
            }
        }
    ?>

    <?php if (isset($error)) { ?>

        <p class="alert alert-danger" role="alert">Error: usuario o contraseña equivocada</p>

    <?php } ?>





    </main>
<?php
include "shared/footer.php";
?>