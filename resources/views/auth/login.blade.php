@extends('layouts.radarpet')

@section('content')
    <div class="bgi" id="image-bk">
        <div class="container">
            <div class="row">

                <div class="col s12 m5 offset-m7">
                    <div class="form form--login">
                        <form method="POST" action="{{route('login')}}" id="login">
                            <!--@csrf-->
                            <div class="form__header">
                                <h2 class="white-text">Login</h2>
                            </div>

                            <div class="form__body">
                                <div class="input-field">
                                    <input id="email" type="email" class="white-text validate
                                    form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email" value="{{ old('email') }}" required autofocus>
                                    <label for="email">Email</label>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="input-field">
                                    <input id="password-confirm" type="password" class="validate
                                     form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    <label for="password-confirm">Senha</label>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="input-field">
                                    <button class="btn-large btn-block waves-effect waves-light" type="submit" name="action">
                                        Entrar <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>



                            <div class="form__footer">
                                <a href="{{route('register')}}">Não possui conta?</a>
                                <a href="/forgot.html">Esqueci minha senha.</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
