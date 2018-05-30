<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="<?php echo asset_url('css/AAluA.css'); ?>" rel="stylesheet" type="text/css">
<div id="contenido">
  <img id="contenidofilinkimg" src="<?php echo asset_url('images/cabecera.png'); ?>">
  <div id="contenidoreg">
      <a href="<?php echo site_url('AdminBD') ?>">
        <button type="button" class="btn btn-warning">Regresar</button>
      </a>
    </div>
  <div class="row">
    <form role="form" class="col-md-9 go-right" action="<?php echo site_url('Altas/Profesores')?>" method="post">
      <div id="noApply" class="row">
        <div class="col-sm-10">
          <h2>Alta de Profesores</h2>
          <p>Ingresa los datos en los espacios siguientes</p>
        </div>
        <div class="col-sm-2">
          <br/><br/><button id="btnregistrar" type="submit" class="btn btn-success">Registrar</button>
        </div>
      </div>
      <div class="form-group">
        <input id="profesoresID" name="profesoresID" type="number" class="form-control" required>
        <label for="profesoresID">ID de profesor</label>
      </div>
      <div class="form-group">
        <input id="pass" name="pass" type="password" class="form-control"  required>
        <label for="pass">Contraseña</label>
      </div>
      <div class="form-group">
        <input id="apellidop" name="apellidop" type="text" class="form-control"  required>
        <label for="apellidop">Apellido Paterno</label>
      </div>
      <div class="form-group">
        <input id="apellidom" name="apellidom" type="text" class="form-control" required >
        <label for="apellidom">Apellido Materno</label>
      </div>
      <div class="form-group">
        <input id="nombre" name="nombre" type="text" class="form-control" required>
        <label for="nombre">Nombre(s)</label>
      </div>
    </form>
  </div>
</div>
