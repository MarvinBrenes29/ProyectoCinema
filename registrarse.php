<?php
include "shared/header.php";
?>
    <main class="container">
        <div class="administracion">
            <form class="w-40 m-auto" action="" method="POST">
                <div class="d-flex justify-content-center bd-highlight mb-3">


                    <div class="me-auto p-2 bd-highlight ">
                        <h2>Registro de Usuario
                    </div>

                </div>
                <p>Personal</p>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="" id="" placeholder="Nombre">
                    <label for="">Nombre</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="" id="" placeholder="Primer Apellido">
                    <label for="">Primer Apellido</label>
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="" id="" placeholder="Segundo Apellido">
                    <label for="">Segundo Apellido</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="" id="" placeholder="Teléfono">
                    <label for="">Telefono</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" name="" id="" placeholder="Fecha de nacimiento">
                    <label for="">Fecha de Nacimiento</label>
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="" id="" placeholder="Usuario">
                    <label for="">Usuario</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="email">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="file" class="form-control" name="" id="" placeholder="">
                    <label for="imagen">Fotografía</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="clave" id="clave" placeholder="clave">
                    <label for="clave">Clave</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="cclave" id="cclave" placeholder="Confirmar clave">
                    <label for="cclave">Confirmar Clave</label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-outline-dark" href="">Crear Usuario</button>
                    <button type="submit" class="btn btn-outline-dark" href="">Cancelar</button>
                </div>
            </form>
        </div>
    </main>
<?php
include "shared/footer.php";
?>