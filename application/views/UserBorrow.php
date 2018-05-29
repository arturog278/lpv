<div id="contenido">
  <img id="contenidofilinkimg" src="<?php echo asset_url('images/cabecera.png'); ?>">
  <img id="contenidocabimg" src="<?php echo asset_url('images/banprestamo.png'); ?>">
  <div id="contenidoreg">
    <a href="http://localhost:8080/lpv/AlumnoMenu">
      <button type="button" class="btn btn-warning">Regresar</button>
    </a>
  </div>
  <br/><br/>
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
      <div class="form-group">
        <select class="form-control" id="sel1" placeholder="Seleccione uno:">
          <option>1</option>
          <option>2</option>
        </select>
      </div>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-*">





      <div class="panel-group" id="accordion">
        <br>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Gestionar administradores</a>
            </h4>
          </div>
          <div id="collapse13" class="panel-collapse collapse">
            <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-plus text-primary"></span><a href="http://www.jquery2dotnet.com">Altas</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-minus text-success"></span><a href="http://www.jquery2dotnet.com">Bajas</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-pencil text-info"></span><a href="http://www.jquery2dotnet.com">Cambios</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-list-alt text-success"></span><a href="http://www.jquery2dotnet.com">Consultas</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>