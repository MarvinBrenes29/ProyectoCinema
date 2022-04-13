<?php
include "shared/header.php";
require "model/clsAdm_peliculas.php";
$clase_pelicula = new clsAdm_peliculas();
ob_start();
?>
  <form class="container" action="" method="POST" enctype="multipart/form-data">

    <div class="administracion">
      <h1 class="administracion__heading">Administracion de Películas</h1>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="idpelicula" id="idpelicula" placeholder="Titulo">
        <label for="">ID Pelicula</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo">
        <label for="">Titulo</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="actor_principal" id="actor_principal" placeholder="Titulo">
        <label for="">Actor Principal</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="actor_secundario" id="actor_secundario" placeholder="Titulo">
        <label for="">Actor Secundario</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="director" id="director" placeholder="Titulo">
        <label for="">Director</label>
      </div>
      <div class="form-floating mb-3">
        <input type="file" class="form-control" name="poster" id="poster" placeholder="">
        <label for="imagen">Poster</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="clasificacion" id="clasificacion" placeholder="Titulo">
        <label for="">Clasificación</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="duracion" id="duracion" placeholder="Titulo">
        <label for="">Minutos de Duración</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="genero" id="genero" placeholder="Titulo">
        <label for="">Genero</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="idioma" id="idioma" placeholder="Titulo">
        <label for="">Idioma</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="sinopsis" id="sinopsis" placeholder="Titulo">
        <label for="">Sinopsis</label>
      </div>
      <div class="form-floating mb-3">
        <input type="url" class="form-control" name="trailer" id="trailer" placeholder="Titulo">
        <label for="">Trailer</label>
      </div>
      <div class="form-floating mb-3">
        <p>Estado</p>
        <select name="estado" id="estado">
          <option value="1">Activo</option>
          <option value="0">Inactivo</option>
        </select>
      </div>


      <div class="adm__botones">
         <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
      <a class="btn btn-success btn-lg" href="index.php">Regresar</a>
      </div>

    </div>

  </form>
     <!--Tabla crud-->
     <div class="container">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
            <h2>Administración <b>Salas</b></h2>
          </div>
    
        </div>
      </div> <!--Seccion del titulo-->


      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>
           
            </th>
            <th>ID</th>
            <th>Nombre</th>
            <th>#</th>
            <th>#</th>
          
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                <label for="checkbox1"></label>
              </span>
            </td>
            <td>1</td>
            <td>Sonic</td>
            <td>0</td>
            <td>(171) 555-2222</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            </td>
          </tr>
          <tr>
            <td>
              <span class="custom-checkbox">
                <input type="checkbox" id="checkbox2" name="options[]" value="1">
                <label for="checkbox2"></label>
              </span>
            </td>
            <td>Dominique Perrier</td>
            <td>dominiqueperrier@mail.com</td>
            <td>Obere Str. 57, Berlin, Germany</td>
            <td>(313) 555-5735</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            </td>
          </tr>
          <tr>
            <td>
              <span class="custom-checkbox">
                <input type="checkbox" id="checkbox3" name="options[]" value="1">
                <label for="checkbox3"></label>
              </span>
            </td>
            <td>Maria Anders</td>
            <td>mariaanders@mail.com</td>
            <td>25, rue Lauriston, Paris, France</td>
            <td>(503) 555-9931</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            </td>
          </tr>
          <tr>
            <td>
              <span class="custom-checkbox">
                <input type="checkbox" id="checkbox4" name="options[]" value="1">
                <label for="checkbox4"></label>
              </span>
            </td>
            <td>Fran Wilson</td>
            <td>franwilson@mail.com</td>
            <td>C/ Araquil, 67, Madrid, Spain</td>
            <td>(204) 619-5731</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            </td>
          </tr>
          <tr>
            <td>
              <span class="custom-checkbox">
                <input type="checkbox" id="checkbox5" name="options[]" value="1">
                <label for="checkbox5"></label>
              </span>
            </td>
            <td>Martin Blank</td>
            <td>martinblank@mail.com</td>
            <td>Via Monte Bianco 34, Turin, Italy</td>
            <td>(480) 631-2097</td>
            <td>
              <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            </td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
  <!-- Edit Modal HTML -->
  <div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h4 class="modal-title">Add Employee</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Address</label>
              <textarea class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="text" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-success" value="Add">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit Modal HTML -->
  <div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h4 class="modal-title">Edit Employee</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Address</label>
              <textarea class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="text" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-info" value="Save">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete Modal HTML -->
  <div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h4 class="modal-title">Delete Employee</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to delete these Records?</p>
            <p class="text-warning"><small>This action cannot be undone.</small></p>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-danger" value="Delete">
          </div>
        </form>
      </div>
    </div>
  </div>
        <div>

  <?php
    if (!empty($_POST)) {
    
        $idpelicula = $_POST["idpelicula"];
        $titulo = $_POST["titulo"];
        $actor_principal = $_POST["actor_principal"];
        $actor_secundario = $_POST["actor_secundario"];
        $director = $_POST["director"];
        $clasificacion = $_POST["clasificacion"];
        $duracion = $_POST["duracion"];
        $genero = $_POST["genero"];
        $idioma = $_POST["idioma"];
        $sinopsis = $_POST["sinopsis"];
        $trailer = $_POST["trailer"];
        $estado = $_POST["estado"];


        

        $condicion = false;
        $condicion = $clase_pelicula->verificar_siexite_pelicula($idpelicula);
        
        if ($condicion == false) {

            

            $foto_pelicula = "img/peliculas/$idpelicula.jpg";
            $res = move_uploaded_file($_FILES["poster"]["tmp_name"], $foto_pelicula);
            $clase_pelicula->insertar_pelicula($idpelicula, $titulo, $actor_principal, $actor_secundario, $director, $clasificacion, $duracion, $genero, $idioma, $sinopsis, $trailer, $estado);
            
            // header("Location: login.php");


            
        }else if($condicion == true){
            ?>
                <p class="alert alert-danger" role="alert">Error: Esta pelicula ya existe en el sistema</p>
            <?php
        }
    }

            

        ?>

<?php
include "shared/footer.php";
?>