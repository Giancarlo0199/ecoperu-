<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <title>EcoPeru / Sobre Nosotros</title>
</head>
<body>
<div class="container-nav">
@include('navbar')
</div>
  <header>
  <br>
  <h2 align="center"><span class="fa fa-address-card"></span> Sobre Nosostros</h2>
  <br>
  <hr  class="m-1">
  </header>
  <br><br>
  <div align=center>
    <div class="card w-75" align="justify">
  <div class="card-header h5">
    ¿Quienes Somos?
  </div>
  <div class="card-body">
    <p>
    Somos un Servis que presta atención a los problemas Ambientales; esta Generativa fue creada 
    con la intención de distribuir la idea y concientalizacion del mundo en el que vivimos. Para
    asi mantener el mundo en el que vivimos evitando la destrucción del ecosistema peruano.
    </p>
    <p>
    En este lugar puedes inscribirte de forma gratuita para participar de nuestra marchas y formativa
    de protestas ambientales para concientizar; este lugar a su vez permite idear formas de mejoramiento
    ambiental. Y disernir de propuestas de mejora del propio Ecosistema.
    </p>
    <p>
    Puedes Comunicarte a nuestros correos asociados@ecoperu.com.pe o llamarnos a los numeros de la parte 
    inferior.
    </p>
  </div>
</div>
  </div>
  <br><br>
  @include('footer')
</body>
</html>