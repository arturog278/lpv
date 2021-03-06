<div id="contenido">
    <div id="contenidoreg">
        <a href="http://localhost:8080/lpv/AdminMenu">
            <button type="button" class="btn btn-warning">Regresar</button>
        </a>
    </div>
    <img id="contenidofilinkimg" src="<?php echo asset_url('images/cabecera.png'); ?>">
    <img id="contenidocabimg" src="<?php echo asset_url('images/banadmin.png'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>

  <div class="panel-group" id="accordion">
    <br>
    <!--<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Gestionar administradores</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse  ">
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
    </div>-->
  </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Gestionar alumnos</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-plus text-primary"></span><a href="AdminBD/Alumnos/1">Altas</a>
                                    </td>
                                </tr>
                                <!--<tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-info"></span><a href="AdminBD/Alumnos/2">Cambios</a>
                                    </td>
                                </tr>-->
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-list-alt text-success"></span><a href="Consulta/alumnos">Consultas</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
      </div>
      </div>
    </div>
    <!--<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Gestionar anotaciones</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
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
    </div>-->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Gestionar aulas</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-plus text-primary"></span><a href="AdminBD/Aulas/1">Altas</a>
                                    </td>
                                </tr>
                                <!--<tr>
                                    <td>
                                        <span class="glyphicon glyphicon-minus text-success"></span><a href="http://www.jquery2dotnet.com">Bajas</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-info"></span><a href="http://www.jquery2dotnet.com">Cambios</a>
                                    </td>
                                </tr>-->
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-list-alt text-success"></span><a href="Consulta/aulas">Consultas</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
      </div>
      </div>
    </div>
    <!--<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Gestionar clases</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
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
    </div>-->
    <!--<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Gestionar divisiones</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
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
    </div>-->
    <!--<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Gestionar horarios</a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
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
    </div>-->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Gestionar materiales</a>
        </h4>
      </div>
      <div id="collapse8" class="panel-collapse collapse">
        <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-plus text-primary"></span><a href="AdminBD/materiales/1">Altas</a>
                                    </td>
                                </tr>
                                <!--<tr>
                                    <td>
                                        <span class="glyphicon glyphicon-minus text-success"></span><a href="http://www.jquery2dotnet.com">Bajas</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-info"></span><a href="http://www.jquery2dotnet.com">Cambios</a>
                                    </td>
                                </tr>-->
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-list-alt text-success"></span><a href="Consulta/materiales/">Consultas</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
      </div>
      </div>
    </div>
    <!--<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Gestionar materias</a>
        </h4>
      </div>
      <div id="collapse9" class="panel-collapse collapse">
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
    </div>-->
  <!--  <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">Gestionar préstamos</a>
        </h4>
      </div>
      <div id="collapse10" class="panel-collapse collapse">
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
    </div>-->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">Gestionar profesores</a>
        </h4>
      </div>
      <div id="collapse11" class="panel-collapse collapse">
        <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-plus text-primary"></span><a href="AdminBD/profesores/1">Altas</a>
                                    </td>
                                </tr>
                                <!--<tr>
                                    <td>
                                        <span class="glyphicon glyphicon-minus text-success"></span><a href="http://www.jquery2dotnet.com">Bajas</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-info"></span><a href="http://www.jquery2dotnet.com">Cambios</a>
                                    </td>
                                </tr>-->
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-list-alt text-success"></span><a href="Consulta/profesores">Consultas</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
      </div>
      </div>
    </div>
    <!--<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">Gestionar registros</a>
        </h4>
      </div>
      <div id="collapse12" class="panel-collapse collapse">
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
    </div-->
    <!--<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">Gestionar registros activos</a>
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
  </div>-->


</body>
</div>
