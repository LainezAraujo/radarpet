@extends('layouts.app')

@section('content')
    <div class="bgi" id="image-bk2">
        <div class="container">
            <div class="row">
                <div class="col s12 m5 offset-m7">

                    <div class="form form--scrollable">
                        <div class="form__scrollable">

                            <form id="cadastro">
                                <div class="form__header">
                                    <h2 class="white-text">Cadastro</h2>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="first_name" type="text" class="validate">
                                        <label for="first_name">Nome</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="last_name" type="text" class="validate">
                                        <label for="last_name">Sobrenome</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s7">
                                        <input id="cpf" type="text" class="validate">
                                        <label for="cpf">CPF</label>
                                    </div>
                                    <div class="input-field col s5">
                                        <input id="birthdate" type="text" class="datepicker" class="validate">
                                        <label for="birthdate">Data de nasc.</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s7">
                                        <input id="zip-code" type="text" class="validate">
                                        <label for="zip-code">CEP</label>
                                    </div>
                                    <div class="input-field col s5">
                                        <input id="number" type="text">
                                        <label for="number">Número</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="adress" type="text" class="validate" id="disabled">
                                        <label for="disabled">Endereço</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="primary-phone" type="text" class="validate">
                                        <label for="primary-phone">Telefone 1</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="second-phone" type="text">
                                        <label for="second-phone">Telefone 2</label>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="input-field col s4">
                                        <select class="browser-default">
                                            <option value="" disabled selected>Sexo</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Feminino</option>
                                            <option value="3">--</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s8">
                                        <label>
                                            <input type="checkbox" class="filled-in" checked="checked"/>
                                            <span>Represento uma ONG</span>
                                        </label>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="input-field col s12">

                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>Foto</span>
                                                <input type="file">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" placeholder="Foto Perfil" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input id="password" type="password" class="validate">
                                        <label for="password">Senha</label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input id="password-confirm" type="password" class="validate">
                                        <label for="password-confirm">Confirme a senha</label>
                                    </div>
                                </div>




                                <div class="input-field">
                                    <button class="btn-large btn-block waves-effect waves-light" type="submit" name="action">
                                        Cadastre-se! <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
