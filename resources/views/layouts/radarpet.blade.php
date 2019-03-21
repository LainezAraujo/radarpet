<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>RadarPet&copy;</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
</head>
<body id="topo">
<nav id="menu" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="index.html" class="brand-logo"><img alt="logo" src="{{ asset('image/RadarPet-Logo.svg') }}"></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.html#topo">Home</a></li>
            <li><a href="index.html#como-funciona">Como Funciona</a></li>
            <li><a href="/index.html#sobre">Sobre</a></li>
            <li><a href="{{route('galeria')}}">Galeria de Adoção</a></li>
            <li><a href="{{route('login')}}">Login</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="index.html#topo">Home</a></li>
            <li><a href="#como-funciona">Como Funciona</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="/galeria.html">Galeria de Adoção</a></li>
            <li><a href="{{route('login')}}">Login</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>

@yield('content')

<footer class="page-footer grey darken-3">
    <!-- <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div> -->
    <!-- <div class="footer-copyright"> -->
    <div class="container">
        <div class="row center">
            <a class="brown-text text-lighten-3" href="#">RadarPet&copy;</a> - Copyrigth2018 - Todos os direitos reservados.
        </div>
    </div>
    <!-- </div> -->
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="{{ asset('js/init.js') }}"></script>

</body>
</html>
