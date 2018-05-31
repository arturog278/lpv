<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<link href="<?php echo asset_url('css/AAluA.css'); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div id="contenido">
  <img id="contenidofilinkimg" src="<?php echo asset_url('images/cabecera.png'); ?>">
  <img id="contenidocabimg" src="<?php echo asset_url('images/banprestamo.png'); ?>">
  <div id="contenidoreg">
    <a href="<?php echo site_url('AdminBD'); ?>">
      <button type="button" class="btn btn-warning">Regresar</button>
    </a>
  </div>
  <div class="row">
    <form role="form" class="col-md-6 go-right" action = <?php echo base_url().'Consulta/alumnos' ?> method='post' >
      <div class="form-group">
        <label for="sel1">Select list:</label>
        <select class="form-control" id="sel1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
      <select>
        <option>1</option>
          <option>2</option>
      </select>
    </form>
    <form role="form" class="col-md-5 go-right" action = <?php echo base_url().'UserBorrow/' ?> method='post' >
      <div id="noApply" class="row">
        <div class="col-md-8">
          <h2>Busqueda de Profesores</h2>
        </div>
        <div class="col-md-3">
          <br/><br/>
          <button type="submit" class="btn btn-success">Busqueda</button>
        </div>
      </div><p>Ingresa los datos en los espacios siguientes</p>
      <div class="form-group">
        <input id="alumnoID" name="cuenta" type="number" class="form-control">
        <label for="alumnoID">Numero de cuenta</label>
      </div>
      <div class="form-group">
        <input id="apellidoP" name="appelidoP" type="text" class="form-control">
        <label for="apellidoP">Apellido Paterno</label>
      </div>
      <div class="form-group">
        <input id="apellidoM" name="apellidoM" type="text" class="form-control">
        <label for="apellidoM">Apellido Materno</label>
      </div>
      <div class="form-group">
        <input id="nombre" name="nombre" type="text" class="form-control">
        <label for="nombre">Nombre(s)</label>
      </div>
      <div class="form-group">
        <input id="divisionID" name="divisionID" type="text" class="form-control">
        <label for="divisionID">División</label>
      </div>
    </form>
  </div>
</div>
