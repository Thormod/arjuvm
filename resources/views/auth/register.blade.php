@extends('base')

@section('content')

<div class="main-wrapper">
@include('layouts.navbar')

<!-- Start Main Content Part -->
<div class="s-pagetitle">
    <img src="img/backgrounds/pagetitle-img_classes.jpg" class="s-pagetitle-img" alt="About page title image">
    <div class="container flexbox">
        <h1 class="clr-white title-decor">Registro</h1>
    </div>
</div><!-- /.s-pagetitle -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul>
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><span>Registro</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="block-style-border row">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @csrf

                        <div class="form-group">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <input id="name" type="text" class="input-text{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                            <input id="email" type="email" class="input-text {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="input-text {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>
                            <input id="password-confirm" type="password" class="input-text" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Número de Celular') }}</label>
                            <input id="phone" type="text" class="input-text {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" required>

                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Género') }}</label>
                            <select class="input {{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" id="gender">
                                <option value="male">Hombre</option>
                                <option value="female">Mujer</option>
                            </select>
                            @if ($errors->has('gender'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>
                            <input class="input {{ $errors->has('birthdate') ? ' is-invalid' : '' }}" type="date"  placeholder="YYYY-MM-DD" name="birthdate" id="birthdate" required="required">
                            @if ($errors->has('birthdate'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('birthdate') }}</strong>
                                </span>
                            @endif
                        </div>

                        <br>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button button-bg">
                                    {{ __('Registro') }}
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
