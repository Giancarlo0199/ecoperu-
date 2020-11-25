<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <style>
  .margin-l{
    margin: 10px
  }
  </style>
  <title>EcoPeru / Contactanos</title>
</head>
<body>
<div class="container-nav">
@include('navbar')
</div>
  <header>
  <br>
  <h2 align="center"><span class="fa fa-file-signature"></span> Contactanos</h2>
  <br>
  <hr class="m-1">
  </header>
  <div align=center>
    <div class="card w-75 m-5 alert-success">
      <div class="card-body" align="justify">
      <br>
      <p class="h6">Nombre y Apellidos:</p>
      <input type="text" class="form-control" id="name" placeholder="Nombres y Apellidos">
      <br>
      <p class="h6">E-mail:</p>
      <input type="email" class="form-control" id="email" placeholder="name@example.com">
      <br>
      <p class="h6">DNI:</p>
      <input type="text" class="form-control" id="dni" placeholder="example: 01020304">
      <br>
      <p class="h6">Número:</p>
      <input type="text" class="form-control" id="cellphone" placeholder="example: 555 555 555">
      <br>
      <p class="h6">Dirección:</p>
      <input type="text" class="form-control" id="direction" placeholder="example: Calle los Olivos 304">
      <br><br><br>
      <div align="center">
        <a href="#" class="btn btn-secondary w-25" align="center">Enviar</a>
      </div>
      </div>
    </div>
  </div>
<br><br>
  @include('footer')
</body>
</html>