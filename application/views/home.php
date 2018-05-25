<div id="contenido">
  <img id="contenidofilinkimg" src="<?php echo asset_url('images/cabecera.png'); ?>">
  <div id="contenidoregresar">
    <button type="button" class="btn btn-warning">Regresar</button>
  </div>
  <br/><br/>
  <div id="contenidotablahe" class="row">
    <div id="contenidotablahe1" class="col-sm-6">
      <span>Solicitudes pendientes</span>
    </div>
    <div id="contenidotablahe2" class="col-sm-6">
      <span>Préstamos pendientes</span>
    </div>
  </div>
  <div id="contenidotabsol" class="row">
    <div class="col-sm-6">
      <div class="table-responsive">
        <table class="table table-hover table-striped">
          <thead class="thead-light">
            <tr>
              <th></th>
            </tr>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>john@example.com</td>
            </tr>
          </tbody>
        </table>
      </div>
      <button type="button" class="btn btn-primary">Aceptar Solicitud</button>
    </div>
    <div class="col-sm-6">
      <div class="table-responsive">
        <table class="table table-hover table-striped">
          <thead class="thead-light">
            <tr>
              <th></th>
            </tr>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>john@example.com</td>
            </tr>
          </tbody>
        </table>
      </div>
      <button type="button" class="btn btn-danger">Realizar Anotación</button>
      <button type="button" class="btn btn-success">Concluir Solicitud</button>
    </div>
  </div>
</div>