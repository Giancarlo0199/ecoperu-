<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <title>EcoPeru / Inicio</title>
  <style>
  </style>
</head>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.1.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.1.1/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
<body>
<div class="container-nav">
@include('navbar')
</div>
<div class="jumbotron jumbotron-fluid alert-success" align="center">
  <div class="container">
    <h1 class="display-4"><span class="fa fa-seedling"></span> EcoPeru</h1>
    <p class="lead">Buscamos un mejor trato con la naturaleza; para mantener un mejor equilibrio en nuestro planeta.</p>
  </div>
</div>
  <header>
  <h1 class="m-1" align="center"><span class="fa fa-mouse-pointer"></span> Nuestra Web</h1>
  <hr class="m-1 ">
  </header>
  <br>
  <div align="center">
    <div class="card" style="width: 18rem; display: inline-block; margin-top: 20px; margin-left: 3%;">
      <div class="card-header">
      <h4 align="center"><span class="fa fa-address-card"></span> Sobre Nosostros</h4>
      </div>
      <div class="card-body" align="justify">
        <p>Si deseas conocer nuestra causa puedes revisar tocando en el botón; 
        nos gustaria luego te unas a nuestra idea por el cuidado Ecologico.
        </p>
        <br>
        <div align="center">
        <a class="nav-link text-light " href="{{url('about-us')}}">
          <button type="button" class="btn btn-success">Ver >></button>
        </a>
        </div>
      </div>
    </div>
    <div class="card" style="width: 18rem; display: inline-block;margin-top: 20px; margin-left: 3%;">
      <div class="card-header">
      <h4 align="center"><span class="fa fa-file-signature"></span> Contactanos</h4>
      </div>
      <div class="card-body" align="justify">
        <p>Si deseas unirte a nuestra causa puedes realizar tu inscripcion de forma gratuita tocando en el botón.
        Y forma parte de esta comunidad que sigue creciendo
        </p>
        <br>
        <div align="center">
        <a class="nav-link text-light " href="{{url('contact-us')}}">
          <button type="button" class="btn btn-success">Ver >></button>
        </a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
@include('footer')
</body>
</html>