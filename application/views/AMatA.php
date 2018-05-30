<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<div id="contenido">
  <img id="contenidofilinkimg" src="<?php echo asset_url('images/cabecera.png'); ?>">
  <div id="contenidoreg">
      <a href="<?php echo site_url('AdminBD'); ?>">
        <button type="button" class="btn btn-warning">Regresar</button>
      </a>
    </div>
  <div class="row">
    <form role="form" class="col-md-9 go-right" action="<?php echo site_url('Altas/materiales')?>" method="post">
      <div id="noApply" class="row">
        <div class="col-sm-10">
          <h2>Alta de Materiales</h2>
          <p>Ingresa los datos en los espacios siguientes</p>
        </div>
        <div class="col-sm-2">
          <br/><br/><button id="btnregistrar" type="submit" class="btn btn-success">Registrar</button>
        </div>
      </div>
      <div class="form-group">
        <input id="materialID" name="materialID" type="number" class="form-control" required>
        <label for="materialID">Número único de material</label>
      </div>
      <div class="form-group">
        <input id="nombre" name="nombre" type="text" class="form-control"  required>
        <label for="nombre">Nombre</label>
      </div>
      <div class="form-group">
        <textarea id="descripcion" name="descripcion" type="text" class="form-control" rows="2" id="comment" required></textarea>
        <label for="descripcion">Descripcion</label>
      </div>
      <div class="form-group">
        <input id="fechaAdquisicion" name="fechaAdquisicion" type="date" class="form-control" required>
        <label for="fechaAdquisicion">Fecha de adquisicion</label>
      </div>
      <div class="form-group">
        <input id="modelo" name="modelo" type="text" class="form-control"  required>
        <label for="modelo">Modelo</label>
      </div>
    </form>
  </div>
</div>
