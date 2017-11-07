<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Acceso restringido!!!</title>
    <link type="text/css" rel="stylesheet" href="/ecommerce/public/plugins/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="/ecommerce/public/css/app.css"  media="screen,projection"/>
  </head>
  <body>
    <div class="container">
  <div class="row valign-wrapper">
    <div class="col s6 offset-s3 valign">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Acceso restringido!</span>
          <p>No tienes los permisos de administrador para ingresar a este modulo de la aplicación</p>
          <br>
          <br>
          <img src="/ecommerce/public/images/denegado.png" width="410px" heigth="200px">
        </div>
        <div class="card-action">
          <a href="{{ url('/')}}">Volver al inicio</a>          
        </div>
      </div>
    </div>
  </div>
</div>
  </body>
</html>
