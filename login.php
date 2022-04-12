<?php
include "shared/header.php";
?>
    <main class="container">
        <div class="administracion">
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

    </main>
<?php
include "shared/footer.php";
?>