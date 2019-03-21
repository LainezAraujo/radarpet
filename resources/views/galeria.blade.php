@extends('layouts.radarpet')
@section('content')
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center white-text">Adote um PET</h1>
                <div class="row center">
                    <h5 class="header col s12 light white-text">Veja os animais que precisam de um lar.</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{{asset('image/cat.jpg')}}" alt="Unsplashed background img 1"></div>
    </div>


    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">


                <!-- (div.col.s12.m3>.card>.card-image.waves-effect.waves-block.waves-light>img.activator[src=img/dog1.jpg]^.card-content.orange>span.card-title.activator.white-text>strong{Doguinho}+i.material-icons.right{add}^^.card-reveal.grey.lighten-4>span.card-title.grey-text.text-darken-4>strong{Doguinho}+i.material-icons.right{close}^span>strong{Responsável: }+{Dores da Costa}^p>strong{Espécie: }+{Cachorro}^p>strong{Sexo: }+{Macho}^p>strong{Cor Predominante: }+{Branca}^p>strong{Cor Complementar: }+{Preta}^p>strong{Descrição: }+{Brincalhão. Precisa tomar remédios para alergia.}^p>strong{Idade Aparente: }+{Jovem}^p>strong{Vacinação: }+{Ok}^.center-align>a.btn-floating.btn-large.waves-effect.waves-light>i.material-icons{pets}^{ }+a.btn-floating.btn-large.waves-effect.waves-light.red>i.material-icons{close})*8 -->

                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light"><img src="{{asset('image/dog1.jpg')}}" alt=""
                                                                                          class="activator"></div>
                        <div class="card-content orange"><span
                                    class="card-title activator white-text"><strong>Doguinho</strong><i
                                        class="material-icons right">add</i></span></div>
                        <div class="card-reveal grey lighten-4">
                            <span class="card-title grey-text text-darken-4"><strong>Doguinho</strong><i
                                        class="material-icons right">close</i></span>
                            <span><strong>Responsável: </strong>Dores da Costa</span>
                            <p><strong>Espécie: </strong>Cachorro</p>
                            <p><strong>Sexo: </strong>Macho</p>
                            <p><strong>Cor Predominante: </strong>Branca</p>
                            <p><strong>Cor Complementar: </strong>Preta</p>
                            <p><strong>Descrição: </strong>Brincalhão. Precisa tomar remédios para alergia.</p>
                            <p><strong>Idade Aparente: </strong>Jovem</p>
                            <p><strong>Vacinação: </strong>Ok</p>
                            <div class="center-align"><a href=""
                                                         class="btn-floating btn-large waves-effect waves-light"><i
                                            class="material-icons">pets</i></a> <a href=""
                                                                                   class="btn-floating btn-large waves-effect waves-light red"><i
                                            class="material-icons">close</i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light"><img src="{{asset('image/dog1.jpg')}}" alt=""
                                                                                          class="activator"></div>
                        <div class="card-content orange"><span
                                    class="card-title activator white-text"><strong>Doguinho</strong><i
                                        class="material-icons right">add</i></span></div>
                        <div class="card-reveal grey lighten-4">
                            <span class="card-title grey-text text-darken-4"><strong>Doguinho</strong><i
                                        class="material-icons right">close</i></span>
                            <span><strong>Responsável: </strong>Dores da Costa</span>
                            <p><strong>Espécie: </strong>Cachorro</p>
                            <p><strong>Sexo: </strong>Macho</p>
                            <p><strong>Cor Predominante: </strong>Branca</p>
                            <p><strong>Cor Complementar: </strong>Preta</p>
                            <p><strong>Descrição: </strong>Brincalhão. Precisa tomar remédios para alergia.</p>
                            <p><strong>Idade Aparente: </strong>Jovem</p>
                            <p><strong>Vacinação: </strong>Ok</p>
                            <div class="center-align"><a href=""
                                                         class="btn-floating btn-large waves-effect waves-light"><i
                                            class="material-icons">pets</i></a> <a href=""
                                                                                   class="btn-floating btn-large waves-effect waves-light red"><i
                                            class="material-icons">close</i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light"><img src="{{asset('image/dog1.jpg')}}" alt=""
                                                                                          class="activator"></div>
                        <div class="card-content orange"><span
                                    class="card-title activator white-text"><strong>Doguinho</strong><i
                                        class="material-icons right">add</i></span></div>
                        <div class="card-reveal grey lighten-4">
                            <span class="card-title grey-text text-darken-4"><strong>Doguinho</strong><i
                                        class="material-icons right">close</i></span>
                            <span><strong>Responsável: </strong>Dores da Costa</span>
                            <p><strong>Espécie: </strong>Cachorro</p>
                            <p><strong>Sexo: </strong>Macho</p>
                            <p><strong>Cor Predominante: </strong>Branca</p>
                            <p><strong>Cor Complementar: </strong>Preta</p>
                            <p><strong>Descrição: </strong>Brincalhão. Precisa tomar remédios para alergia.</p>
                            <p><strong>Idade Aparente: </strong>Jovem</p>
                            <p><strong>Vacinação: </strong>Ok</p>
                            <div class="center-align"><a href=""
                                                         class="btn-floating btn-large waves-effect waves-light"><i
                                            class="material-icons">pets</i></a> <a href=""
                                                                                   class="btn-floating btn-large waves-effect waves-light red"><i
                                            class="material-icons">close</i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light"><img src="{{asset('image/dog1.jpg')}}" alt=""
                                                                                          class="activator"></div>
                        <div class="card-content orange"><span
                                    class="card-title activator white-text"><strong>Doguinho</strong><i
                                        class="material-icons right">add</i></span></div>
                        <div class="card-reveal grey lighten-4">
                            <span class="card-title grey-text text-darken-4"><strong>Doguinho</strong><i
                                        class="material-icons right">close</i></span>
                            <span><strong>Responsável: </strong>Dores da Costa</span>
                            <p><strong>Espécie: </strong>Cachorro</p>
                            <p><strong>Sexo: </strong>Macho</p>
                            <p><strong>Cor Predominante: </strong>Branca</p>
                            <p><strong>Cor Complementar: </strong>Preta</p>
                            <p><strong>Descrição: </strong>Brincalhão. Precisa tomar remédios para alergia.</p>
                            <p><strong>Idade Aparente: </strong>Jovem</p>
                            <p><strong>Vacinação: </strong>Ok</p>
                            <div class="center-align"><a href=""
                                                         class="btn-floating btn-large waves-effect waves-light"><i
                                            class="material-icons">pets</i></a> <a href=""
                                                                                   class="btn-floating btn-large waves-effect waves-light red"><i
                                            class="material-icons">close</i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light"><img src="{{asset('image/dog1.jpg')}}" alt=""
                                                                                          class="activator"></div>
                        <div class="card-content orange"><span
                                    class="card-title activator white-text"><strong>Doguinho</strong><i
                                        class="material-icons right">add</i></span></div>
                        <div class="card-reveal grey lighten-4">
                            <span class="card-title grey-text text-darken-4"><strong>Doguinho</strong><i
                                        class="material-icons right">close</i></span>
                            <span><strong>Responsável: </strong>Dores da Costa</span>
                            <p><strong>Espécie: </strong>Cachorro</p>
                            <p><strong>Sexo: </strong>Macho</p>
                            <p><strong>Cor Predominante: </strong>Branca</p>
                            <p><strong>Cor Complementar: </strong>Preta</p>
                            <p><strong>Descrição: </strong>Brincalhão. Precisa tomar remédios para alergia.</p>
                            <p><strong>Idade Aparente: </strong>Jovem</p>
                            <p><strong>Vacinação: </strong>Ok</p>
                            <div class="center-align"><a href=""
                                                         class="btn-floating btn-large waves-effect waves-light"><i
                                            class="material-icons">pets</i></a> <a href=""
                                                                                   class="btn-floating btn-large waves-effect waves-light red"><i
                                            class="material-icons">close</i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light"><img src="{{asset('image/dog1.jpg')}}" alt=""
                                                                                          class="activator"></div>
                        <div class="card-content orange"><span
                                    class="card-title activator white-text"><strong>Doguinho</strong><i
                                        class="material-icons right">add</i></span></div>
                        <div class="card-reveal grey lighten-4">
                            <span class="card-title grey-text text-darken-4"><strong>Doguinho</strong><i
                                        class="material-icons right">close</i></span>
                            <span><strong>Responsável: </strong>Dores da Costa</span>
                            <p><strong>Espécie: </strong>Cachorro</p>
                            <p><strong>Sexo: </strong>Macho</p>
                            <p><strong>Cor Predominante: </strong>Branca</p>
                            <p><strong>Cor Complementar: </strong>Preta</p>
                            <p><strong>Descrição: </strong>Brincalhão. Precisa tomar remédios para alergia.</p>
                            <p><strong>Idade Aparente: </strong>Jovem</p>
                            <p><strong>Vacinação: </strong>Ok</p>
                            <div class="center-align"><a href=""
                                                         class="btn-floating btn-large waves-effect waves-light"><i
                                            class="material-icons">pets</i></a> <a href=""
                                                                                   class="btn-floating btn-large waves-effect waves-light red"><i
                                            class="material-icons">close</i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light"><img src="{{asset('image/dog1.jpg')}}" alt=""
                                                                                          class="activator"></div>
                        <div class="card-content orange"><span
                                    class="card-title activator white-text"><strong>Doguinho</strong><i
                                        class="material-icons right">add</i></span></div>
                        <div class="card-reveal grey lighten-4">
                            <span class="card-title grey-text text-darken-4"><strong>Doguinho</strong><i
                                        class="material-icons right">close</i></span>
                            <span><strong>Responsável: </strong>Dores da Costa</span>
                            <p><strong>Espécie: </strong>Cachorro</p>
                            <p><strong>Sexo: </strong>Macho</p>
                            <p><strong>Cor Predominante: </strong>Branca</p>
                            <p><strong>Cor Complementar: </strong>Preta</p>
                            <p><strong>Descrição: </strong>Brincalhão. Precisa tomar remédios para alergia.</p>
                            <p><strong>Idade Aparente: </strong>Jovem</p>
                            <p><strong>Vacinação: </strong>Ok</p>
                            <div class="center-align"><a href=""
                                                         class="btn-floating btn-large waves-effect waves-light"><i
                                            class="material-icons">pets</i></a> <a href=""
                                                                                   class="btn-floating btn-large waves-effect waves-light red"><i
                                            class="material-icons">close</i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light"><img src="{{asset('image/dog1.jpg')}}" alt=""
                                                                                          class="activator"></div>
                        <div class="card-content orange"><span
                                    class="card-title activator white-text"><strong>Doguinho</strong><i
                                        class="material-icons right">add</i></span></div>
                        <div class="card-reveal grey lighten-4">
                            <span class="card-title grey-text text-darken-4"><strong>Doguinho</strong><i
                                        class="material-icons right">close</i></span>
                            <span><strong>Responsável: </strong>Dores da Costa</span>
                            <p><strong>Espécie: </strong>Cachorro</p>
                            <p><strong>Sexo: </strong>Macho</p>
                            <p><strong>Cor Predominante: </strong>Branca</p>
                            <p><strong>Cor Complementar: </strong>Preta</p>
                            <p><strong>Descrição: </strong>Brincalhão. Precisa tomar remédios para alergia.</p>
                            <p><strong>Idade Aparente: </strong>Jovem</p>
                            <p><strong>Vacinação: </strong>Ok</p>
                            <div class="center-align"><a href=""
                                                         class="btn-floating btn-large waves-effect waves-light"><i
                                            class="material-icons">pets</i></a> <a href=""
                                                                                   class="btn-floating btn-large waves-effect waves-light red"><i
                                            class="material-icons">close</i></a></div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection