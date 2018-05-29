<div id="contenido">
    <img id="contenidofilinkimg" src="<?php echo asset_url('images/cabecera.png'); ?>">
    <div id="contenidoreg">
      <a href="http://localhost:8080/lpv/AlumnoMenu">
        <button type="button" class="btn btn-warning">Vista Usuario</button>
      </a>
    </div>
  <link href="css/login.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <!--
      you can substitue the span of reauth email for a input with the email and
      include the remember me checkbox
      -->

        <div class="card card-container">
            <h2>Ingreso al sistema</h2>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="AdminLogin/LogIn" method="post">
                <span id="reauth-cuenta" class="reauth-cuenta"></span>
                <input type="text" name="inputText" class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" name="inputPassword" class="form-control" placeholder="Contraseña" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Ingresar</button>
            </form><!-- /form -->

       </div>  <!-- /card-container -->
    </div>
