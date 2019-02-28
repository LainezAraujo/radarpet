@extends('layouts.radarpet')
@section('content')
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center white-text">Encontre seu PET</h1>
                <div class="row center">
                    <h5 class="header col s12 light white-text">Informe caso tenha perdido um pet, encontrado ou queira doar.</h5>
                </div>
                <div class="row center">
                    <a href="cadastro.html" id="download-button" class="btn-large waves-effect waves-light">Cadastre-se</a>
                    <a href="/login.html" id="download-button" class="btn-large waves-effect waves-light">Já Possui Cadastro</a>
                </div>
                <br><br>

            </div>
        </div>
        <div class="parallax"><img src="{{asset('/image/cat.jpg')}}" alt="Unsplashed background img 1"></div>
    </div>


    <div class="container">
        <div id="como-funciona" class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m3">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="large material-icons">pets</i></h2>
                        <h5 class="center">Perdeu seu Pet?</h5>

                        <p class="light">Cadastre o animal perdido, informe características e último local onde o avistou.</p>
                    </div>
                </div>

                <div class="col s12 m3">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="large material-icons">group</i></h2>
                        <h5 class="center">Encontrou Pet?</h5>

                        <p class="light">Caso esteja com o animal encontrado, cadastra-se e ajude este voltar a seu lar.</p>
                    </div>
                </div>

                <div class="col s12 m3">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="large material-icons">gps_fixed</i></h2>
                        <h5 class="center">Avistou Pet?</h5>

                        <p class="light">Veja em nosso mapa se animal avistado está sendo procurado. Informe a localização onde avistou o Pet. (Não é necessário cadastro)</p>
                    </div>
                </div>

                <div class="col s12 m3">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="large material-icons">pets</i></h2>
                        <h5 class="center">Doar Pet?</h5>

                        <p class="light">Cadastre o animal que deseja doar. O Radar Pet oferece um galeria com fotos e características do pet a ser doado.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper center-align">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h4 class="header col s12 light white-text">Uma plataforma amigável e intuitiva para proporcionar um reecontro animal.</h4>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{{asset('image/dog_bk.jpg')}}" alt="Unsplashed background img 2"></div>
    </div>

    <div class="container">
        <div id="sobre" class="section">

            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Sobre nós</h4>
                    <p class="left-align light">Radar Pet é uma plataforma colaborativa que tem como missão destinar animais de estimação aos seus donos e futuros donos. Oferencendo serviços para a doação e a adoção de animais.</p>
                </div>
            </div>

        </div>
    </div>


    <!-- <div class="parallax-container valign-wrapper">
      <div class="section no-pad-bot">
        <div class="container">
          <div class="row center">
            <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
          </div>
        </div>
      </div>
      <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
    </div> -->
@endsection