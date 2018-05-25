<div id="contenido">
  <img id="contenidofilinkimg" src="<?php echo asset_url('images/cabecera.png'); ?>">
  <div id="contenidoregresar">
    <button type="button" class="btn btn-warning">Regresar</button>
  </div>
  <br/><br/>
  <div id="contenidorep" class="row">
    <div id="contenidorepnor" class="col-sm-6">
      <span>Reportes Normales</span>
    </div>
    <div id="contenidorepesp" class="col-sm-6">
      <span>Reporte Especial</span>
    </div>
  </div>
  <div id="contenidotabrep" class="row">
    <div class="col-sm-6">
      <div class="table-responsive">
        <table id="contenidotabrep1" class="table">
          <tbody>
            <tr><td><button type="button" class="btn btn-info">Reporte de material</button></td></tr>
            <tr><td><button type="button" class="btn btn-info">Reporte de profesores</button></td></tr>
            <tr><td><button type="button" class="btn btn-info">Reporte de alumnos</button></td></tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="table-responsive">
        <table id="contenidotabrep2" class="table">
          <tbody>
            <tr><td><button type="button" class="btn btn-warning">Reporte especial asistido</button></td></tr>
            <tr><td><button type="button" class="btn btn-danger">Reporte especial no asistido</button></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>