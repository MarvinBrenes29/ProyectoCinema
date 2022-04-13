<?php
include "shared/header.php";
?>
  <form class="container">
    <div class="administracion">
      <h1 class="administracion__heading">Admnistración de Salas</h1>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="" id="" placeholder="Nombre">
        <label for="">Nombre</label>
      </div>
      <div class="form-floating mb-3">
        <p>Tipo de sala</p>
        <select name="select">
          <option value="value3">Regular</option>
          <option value="value3">VIP</option>
        </select>
      </div>
      <div class="form-floating mb-3">
        <p>Estado</p>
        <select name="select">
          <option value="value1">Activo</option>
          <option value="value3">Inactivo</option>
        </select>
      </div>
      <div class="adm__botones">
         <button class="btn btn-primary btn-lg">Guardar</button>
      <a class="btn btn-success btn-lg" href="index.html">Regresar</a>
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
include "shared/footer.php";
?>