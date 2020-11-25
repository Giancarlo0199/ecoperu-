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
  .foot{
    width:210px;
    bottom:0;
    margin-bottom: 0;
  }
  .format-initial{
    margin-left: 200px;
    margin-bottom: 10px;
    width: 250px;
    display: inline-block;
  }
  .format-initial-1{
    margin-left: 100px;
    margin-bottom: 10px;
    width: 250px;
    display: inline-block;
  }
  .format-initial-2{
    margin-left: 100px;
    margin-bottom: 10px;
    width: 250px;
    display: inline-block;
  }
  ul{
    margin-top: 5px;
    margin-left: 20px
  }
  li{
    list-style: none;
  }
  .text-p{
    font: 9pt Times;
  }
  .cost{
    margin-bottom: 10px;
  }
  .footer-section{
    width: 300px;
    display: inline-block;
  }
  .footir{
    height: 15px;
    bottom:0;
    position: fixed;
  }
  
  @media(max-width: 1261px){
    .format-initial{
      display: none;
    }
    .foot{
      display:none;
    }
  }
  </style>
</head>
<body>
<div class="bg-success w-100 foot">
  <div class="format-initial">
  <a class="navbar-brand text-light" href="{{url('/')}}"><span class="fa fa-seedling h2"></span> EcoPeru</a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-light" href="{{url('/')}}"><span class="fa fa-home"></span> Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light " href="{{url('about-us')}}"><span class="fa fa-address-card"></span> Sobre Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="{{url('contact-us')}}"><span class="fa fa-file-signature"></span> Contactanos</a>
      </li>
    </ul>
  </div>
  <div class="format-initial-1">
      <li class="nav-item">
        <p class="h6 text-light">Nuestras Redes Sociales:</p> 
      </li>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-text text-light" href="https://www.facebook.com/"><span class="fa fa-surprise"></span> Facebook </a>
      </li>
      <li class="nav-item">
        <a class="nav-text text-light" href="https://www.instagram.com/"><span class="fa fa-camera-retro"></span> Instagran</a>
      </li>
      <li class="nav-item">
        <a class="nav-text text-light" href="https://twitter.com/?lang=es"><span class="fa fa-hashtag"></span> Twitter</a>
      </li>
    </ul>
  </div>
  <div class="format-initial-2">
      <li class="nav-item">
        <p class="h6 text-light">Números de Telefonos</p> 
      </li>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <p class="text-light"><span class="fa fa-mobile-alt"></span> +51 555 555 555</p>
      </li>
      <li class="nav-item">
        <p class="text-light"><span class="fa fa-mobile-alt"></span> +51 555 555 555</p>
      </li>
      <li class="nav-item">
        <p class="text-light"><span class="fa fa-phone-alt"></span> (073) 555555</p>
      </li>
    </ul>
  </div>
  <br>
  <p class="text-light text-p m-0" align="center">Copirigth&copy; 2020</h6>
  <p class="text-light text-p cost" align="center">Todos los derechos Reservados por: </h6>
  <br>
  <br>
</div>
<div class="w-100 bg-success footir m-0"></div>
</body>
</html>