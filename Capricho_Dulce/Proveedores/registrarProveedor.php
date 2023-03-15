<form name="form-data" action="recibProveedores.php" method="POST">

    <div class="row">
      <div class="col-md-12">
          <label for="name" class="form-label">Nombre del Cliente</label>
          <input type="text" class="form-control" name="nombre" required='true' autofocus>
      </div>
      <div class="col-md-12 mt-2">
          <label for="email" class="form-label">Correo</label>
          <input type="email" class="form-control" name="correo" required='true'>
      </div>
      <div class="col-md-12 mt-2">
          <label for="celular" class="form-label">Número telefónico</label>
          <input type="number" class="form-control" name="número telefónico" required='true'>
      </div>
    </div>
      <div class="row justify-content-start text-center mt-5">
          <div class="col-12">
              <button class="btn btn-primary btn-block" id="btnEnviar">
                  Registrar proveedor
              </button>
          </div>
      </div>
</form>