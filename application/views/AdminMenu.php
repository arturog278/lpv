<div id="contenido">
  <img id="contenidofilinkimg" src="<?php echo asset_url('images/cabecera.png'); ?>">
      <div id="contenidocerrarsesion">
        <a href="http://localhost:8080/lpv/AdminLogin">
          <button type="button" class="btn btn-danger">Cerrar Sesión</button>
        </a>
      </div>
  <div class="row">
    <div class="col-sm-1"></div>
    <a href="http://localhost:8080/lpv/AdminSoli">
      <div id="contenidoado1" class="col-sm-3">
        <img id="contenidoado1img" src="<?php echo asset_url('images/solicitud.png'); ?>">
        <br/><br/>
        <div id="contenidoado1txt">
          Solicitudes de Préstamo
          <br/><br/>
        </div>
      </div>
    </a>
    <a href="http://localhost:8080/lpv/AdminBD">
      <div id="contenidoado2" class="col-sm-3">
        <img id="contenidoado2img" src="<?php echo asset_url('images/bd.png'); ?>">
        <br/><br/>
        <div id="contenidoado2txt">
          Administración de Base de Datos
        </div>
      </div>
    </a>
    <a href="http://localhost:8080/lpv/AdminReport">
      <div id="contenidoado3" class="col-sm-3">
        <img id="contenidoado3img" src="<?php echo asset_url('images/reportes.png'); ?>">
        <br/><br/>
        <div id="contenidoado3txt">
          Reportes
          <br/><br/>
        </div>
      </div>
    </a>
  </div>
</div>
