


<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $dataProveedor['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataProveedor['id']; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre del proveedores:</label>
                  <input type="text" name="nombre" class="form-control" value="<?php echo $dataProveedor['nombre']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Gmail:</label>
                  <input type="email" name="correo" class="form-control" value="<?php echo $dataProveedores['gmail']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Número telefónico:</label>
                  <input type="number" name="celular" class="form-control" value="<?php echo $dataProveedores['número telefónico']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Dirección:</label>
                  <input type="number" name="celular" class="form-control" value="<?php echo $dataProveedores['Dirección']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Producto:</label>
                  <input type="number" name="celular" class="form-control" value="<?php echo $dataProveedores['Producto']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Fecha:</label>
                  <input type="number" name="celular" class="form-control" value="<?php echo $dataProveedores['Fecha']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Instrucción especial</label>
                  <input type="number" name="celular" class="form-control" value="<?php echo $dataProveedores['Instrucción especial']; ?>" required="true">
                </div>
                
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>