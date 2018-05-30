<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="<?php echo asset_url('css/AAluA.css'); ?>" rel="stylesheet" type="text/css">
<div id="contenido">
  <img id="contenidofilinkimg" src="<?php echo asset_url('images/cabecera.png'); ?>">
  <div id="contenidoreg">
      <a href="http://localhost:8080/lpv/AdminDB">
        <button type="button" class="btn btn-warning">Regresar</button>
      </a>
    </div>
  <div class="row">
    <form role="form" class="col-md-4 go-right">
      <div id="noApply" class="row">
        <div id="noApply" class="col-sm-8">
          <h2>Busqueda de Alumnos</h2>
          <p>Ingresa los datos en los espacios siguientes</p>
        </div>
        <div class="col-sm-4">
          <br/><br/><button id="btnbuscar" type="button" class="btn btn-success">Busqueda</button>
        </div>
      </div>
      <div class="form-group">
        <input id="alumnoID" name="alumnoID" type="number" class="form-control" required>
        <label for="alumnoID">Numero de cuenta</label>
      </div>
      <div class="form-group">
        <input id="apellidoP" name="apellidoP" type="text" class="form-control"  required>
        <label for="apellidoP">Apellido Paterno</label>
      </div>
      <div class="form-group">
        <input id="apellidoM" name="apellidoM" type="text" class="form-control" required >
        <label for="apellidoM">Apellido Materno</label>
      </div>
      <div class="form-group">
        <input id="nombre" name="nombre" type="text" class="form-control" required>
        <label for="nombre">Nombre(s)</label>
      </div>
      <div class="form-group">
        <input id="divisionID" name="divisionID" type="text" class="form-control"  required>
        <label for="divisionID">División</label>
      </div>
    </form>
    <div class="form-group col-md-7">
      <br/><br/>
      <label for="resultadosAlu">Resultados:</label>
      <table class="table table-condensed table-striped table-hover">
        <thead>
          <tr>
            <th>Numero de cuenta</th>
            <th>Nombre(s)</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Division</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1113156</td>
            <td>Valentín</td>
            <td>Medina</td>
            <td>Nieto</td>
            <td>ICO</td>
            <td>Editar</td>
            <td>Borrar</td>
          </tr>
          <tr>
            <td>1420836</td>
            <td>Sebastian</td>
            <td>García</td>
            <td>Vargas</td>
            <td>ICO</td>
            <td>Editar</td>
            <td>Borrar</td>
          </tr>
          <tr>
            <td>1110861</td>
            <td>Miguel Angel</td>
            <td>Tapia</td>
            <td>Ayala</td>
            <td>ICO</td>
            <td>Editar</td>
            <td>Borrar</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
