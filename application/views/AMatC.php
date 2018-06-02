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
    <form role="form" class="col-md-4 go-right" action = <?php echo base_url().'Consulta/materiales' ?> method='post' >
      <div id="noApply" class="row">
        <div id="noApply" class="col-sm-8">
          <h2>Busqueda de Materiales</h2>
          <p>Ingresa los datos en los espacios siguientes</p>
        </div>
        <div class="col-sm-4">
          <br/><br/><button id="btnbuscar" type="submit" class="btn btn-success">Busqueda</button>
        </div>
      </div>
      <div class="form-group">
        <input id="materialID" name="materialID" type="number" class="form-control">
        <label for="materialID">Numero de identificador</label>
      </div>
      <div class="form-group">
        <input id="nombre" name="nombre" type="text" class="form-control">
        <label for="nombre">Nombre</label>
      </div>
      <div class="form-group">
        <input id="modelo" name="modelo" type="text" class="form-control">
        <label for="modelo">Modelo</label>
      </div>
      <div class="form-group">
        <input id="fechaAdquisicion" name="fechaAdquisicion" type="date" class="form-control">
        <label for="fechaAdquisicion">Fecha de adquisición</label>
      </div>
      <div class="form-group">
        <textarea class="form-control" rows="5" id="descripcion" name="descripcion"></textarea>
        <label for="descripcion">Descripción</label>
      </div>
    </form>
    <div class="form-group col-md-7">
      <br/><br/>
      <label for="resultadosAlu">Resultados:</label>
      <div style="height:330px; overflow:auto;" >
        <table class="table table-condensed table-striped table-hover">
          <thead>
            <tr>
              <th>NID</th>
              <th>Nombre</th>
              <th>Modelo</th>
              <th>Adquisición</th>
              <th>Descripción</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($materiales as $material) { ?>
              <tr>
                <td><?php echo $material->materialID;?></td>
                <td><?php echo $material->nombre;?></td>
                <td><?php echo $material->modelo;?></td>
                <td><?php echo $material->fechaAdquisicion?></td>
                <td><?php echo $material->descripcion;?></td>
                <td><?php echo '<a href="'.base_url().'Editar/material/'.$material->materialID.'">Editar</a>'?></td>
                <td><?php echo '<a href="'.base_url().'Bajas/materiales/'.$material->materialID.'">Borrar</a>'?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
