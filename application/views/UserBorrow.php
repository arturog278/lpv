<div id="contenido">
  <img id="contenidofilinkimg" src="<?php echo asset_url('images/cabecera.png'); ?>">
  <img id="contenidocabimg" src="<?php echo asset_url('images/banprestamo.png'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <body>
    <div id="contenidoreg">
        <a href="http://localhost:8080/lpv/AlumnoMenu">
          <button type="button" class="btn btn-warning">Regresar</button>
        </a>
      </div>
      <br/><br/>
      <br/><br/>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">
          <div class="form-group">
            <select class="form-control" id="sel1" placeholder="Seleccione uno:">
              <option>1</option>
              <option>2</option>
            </select>
          </div>
        </div>
      </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-6 col-sm-3" style="background-color:white;">
      <br>

    </div>
    <div class="col-xs-6 col-sm-3" style="background-color:white;">
      <br>
    </div>
    <!-- Add clearfix for only the required viewport -->
    <div class="clearfix visible-xs"></div>
    <div class="col-xs-6 col-sm-3" style="background-color:white;">
      <br>

    </div>
    <div class="col-xs-6 col-sm-3" style="background-color:lightgray;">
      <div class="panel-group" id="accordion">
      <br>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Buscador</a>
          </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse  ">
          <div id="collapseOne" class="panel-collapse collapse in">
                          <div class="panel-body">
                              <table class="table">
                                  <tr>
                                      <td>
                                        <form action="/action_page.php">
                                          ID Profesor:<input type="number" name="profesorID"><br>
                                          Apellido Paterno: <input type="text" name="apellidop" ><br>
                                          Apellido Materno: <input type="text" name="apellidom" ><br>
                                          Nombre: <input type="text" name="nombre"><br><br>
                                          Horario: <select name="horarioID">
                                            <option value="volvo">10:00</option>
                                            <option value="saab">10:30</option>
                                            <option value="opel">11:00</option>
                                            <option value="audi">12:00</option>
                                          </select><br><br>
                                          Materia: <select name="materiaID">
                                            <option value="volvo">LPV</option>
                                            <option value="saab">SGBD</option>
                                            <option value="opel">GF</option>
                                            <option value="audi">ANASIST</option>
                                          </select><br><br>
                                          <input type="submit" value="Buscar">
                                        </form>
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

</body>
</div>
