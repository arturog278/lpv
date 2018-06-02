<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="<?php echo asset_url('css/AAluA.css'); ?>" rel="stylesheet" type="text/css">
<div id="contenido">
  <img id="contenidofilinkimg" src="<?php echo asset_url('images/cabecera.png'); ?>">
  <div id="contenidoreg">
      <a href="http://localhost:8080/lpv/AdminBD">
        <button type="button" class="btn btn-warning">Regresar</button>
      </a>
    </div>
  <div class="row">
    <form role="form" class="col-md-4 go-right" action = <?php echo base_url().'Consulta/aulas' ?> method='post' >
      <div id="noApply" class="row">
        <div id="noApply" class="col-sm-8">
          <h2>Busqueda de Aulas</h2>
          <p>Ingresa los datos en los espacios siguientes</p>
        </div>
        <div class="col-sm-4">
          <br/><br/><button id="btnbuscar" type="submit" class="btn btn-success">Busqueda</button>
        </div>
      </div>
      <div class="form-group">
        <input id="aulaID" name="aulaID" type="number" class="form-control">
        <label for="aulaID">ID Aula</label>
      </div>
      <div class="form-group">
        <input id="numero" name="numero" type="number" class="form-control">
        <label for="numero">Numero de aula</label>
      </div>
      <div class="form-group">
        <input id="edificio" name="edificio" type="text" class="form-control">
        <label for="edificio">Edificio</label>
      </div>
    </form>
    <div class="form-group col-md-7">
      <br/><br/>
      <label for="resultadosAul">Resultados:</label>
      <div style="height:330px; overflow:auto;" >
        <table class="table table-condensed table-striped table-hover">
          <thead>
            <tr>
              <th>ID </th>
              <th>Aula</th>
              <th>Edificio</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($aulas as $aula) { ?>
              <tr>
                <td><?php echo $aula->aulaID;?></td>
                <td><?php echo $aula->numero;?></td>
                <td><?php echo $aula->edificio;;?></td>
                <td>Editar</td>
                <td>Borrar</td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
