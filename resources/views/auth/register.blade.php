@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('first_name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('last_name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('cpf') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required autofocus>

                                @if ($errors->has('cpf'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cpf')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="birth" class="col-md-4 col-form-label text-md-right">{{ __('birth') }}</label>

                            <div class="col-md-6">
                                <input id="birth" type="text" class="form-control{{ $errors->has('birth') ? ' is-invalid' : '' }}" name="birth" value="{{ old('birth') }}" required autofocus>

                                @if ($errors->has('birth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birth')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 -->

                        <div class="form-group row">
                            <label for="primary_phone" class="col-md-4 col-form-label text-md-right">{{ __('primary_phone') }}</label>

                            <div class="col-md-6">
                                <input id="primary_phone" type="text" class="form-control{{ $errors->has('primary_phone') ? ' is-invalid' : '' }}" name="primary_phone" value="{{ old('primary_phone') }}" required autofocus>

                                @if ($errors->has('primary_phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('primary_phone')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="secondary_phone" class="col-md-4 col-form-label text-md-right">{{ __('secondary_phone') }}</label>

                            <div class="col-md-6">
                                <input id="secondary_phone" type="text" class="form-control{{ $errors->has('secondary_phone') ? ' is-invalid' : '' }}" name="secondary_phone" value="{{ old('secondary_phone') }}" required autofocus>

                                @if ($errors->has('secondary_phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('secondary_phone')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!-- <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('gender') }}</label>

                            <div class="col-md-6">
                                <select name="gender" class="browser-default form-control{{ $errors->has('primary_phone') ? ' is-invalid' : '' }}">
                                            <option value="" disabled selected>Sexo</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Feminino</option>
                                            <option value="3">--</option>
                                </select>
                            

                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
