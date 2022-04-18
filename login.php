<?php
include "shared/header.php";
require "model/clsLogin.php";
$clase_login = new clsLogin();
ob_start();
?>
<main class="container">
    <div class="administracion mb-30 login">
        <div class="login__grid">
             <div class="p-5">
               <h3 class="login__title mb-5"> Iniciar Sesión</h3>
                 <p class="text-muted mt-2 mb-5">Welcome Back!</p>
                 <p class="text-muted mt-2 mb-5"> Enter your email address and password to access admin panel.</p>
           

                <form class="w-40 m-auto" action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="">Usuario</label>
                        <input class="form-control" type="text" name="usr">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Clave</label>
                        <input class="form-control" type="password" name="pass">
                    </div>
                    <div class="mb-3 gap-2">
                        <input class="" type="submit" value="Iniciar Sesión">
                    </div>
                    <div class="mb-3 gap-2">
                        <a class="" href="registrarse.php">Registrarse</a>
                    </div>
                </form>
            </div>

            <div>

               <div class="account-block">
                <div class="account-testimonial">
                    <h4 class="text-white mb-4"> Cinema Plus </h4>
                <p class="lead text-white">"Una buena historia te puede llevar a un viaje fantástico."</p>
                <p class="lead text-white">-Walt Disney</p>
                </div>  
                
            </div>
           
                
            </div>

        </div>

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