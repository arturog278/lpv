<div id="contenido">
  <img id="contenidofilinkimg" src="<?php echo asset_url('images/cabecera.png'); ?>">
  <img id="contenidocabimg" src="<?php echo asset_url('images/banprestamo.png'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/userBorrow.css" rel="stylesheet" id="bootstrap-css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
      <body>
        <div class="card card-container">
        <div class="panel-group" id="accordion">

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
                        <div class="container">
	                          <div class="row">
                              <div class="col-md-3">
		                              <div class="form_main">
                                    <h4 class="heading"><strong>Quick </strong> Contact <span></span></h4>
                                    <div class="form">
                                      <form action="contact_send_mail.php" method="post" id="contactFrm" name="contactFrm">
                                        <input type="text" required="" placeholder="Please input your Name" value="" name="name" class="txt">
                                        <input type="text" required="" placeholder="Please input your mobile No" value="" name="mob" class="txt">
                                        <input type="text" required="" placeholder="Please input your Email" value="" name="email" class="txt">

                	                       <textarea placeholder="Your Message" name="mess" type="text" class="txt_3"></textarea>
                                         <input type="submit" value="submit" name="submit" class="txt2">
                                       </form>
                                     </div>
                                   </div>
                                   </div
	                                 </div>
                                 </div>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </body>
    </div>
  </div>
</div>
