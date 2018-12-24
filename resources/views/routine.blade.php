@extends('base')

@section('content')

<div class="main-wrapper">
    <!-- Start Main Header -->
    <header class="main-header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-8 col-sm-7">
                        <div class="social-links">
                            <ul>
                                <li><a href="https://www.facebook.com/arju.vasquezmontoya" target="_blank"><i class="fab fa-facebook-f"></i><span>facebook</span></a></li>
                                <li><a href="https://www.youtube.com/channel/UC6oj1DKR5aG_vQNPYQUGZkg" target="_blank"><i class="fab fa-youtube"></i><span>youtube</span></a></li>
                                <li><a href="https://www.instagram.com/arju76/" target="_blank"><i class="fab fa-instagram"></i><span>instagram</span></a></li>
                            </ul>
                        </div>
                        <div class="phone-info">
                            <a href="#"><i class="fas fa-phone"></i> (+57) 316 690 3748 </a>
                        </div>
                    </div><!-- /.social-links -->
                </div>
            </div><!-- /.container -->
        </div><!-- /.top-bar -->
        {{-- Home Section --}}
        <section id="home">
        <div class="nav-bar" id="navbar">
            <div class="nav-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-7 col-xs-7">
                            <div class="logo">
                                <a href="{{ url('/') }}" class="site-title"><span>ARJU</span>VM</a>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-5 col-xs-5 nav-mobile">
                            <a href="#" class="nav-trigger">
                                <div class="bars">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <div class="nav-box">
                                <div class="main-nav">
                                    <ul id="myNavbar">
                                        <li><a href="{{ url('/') }}">Planes y precios</a></li>
                                        <li><a href="{{ url('/') }}">¿Quién soy?</a></li>
                                        <li><a href="{{ url('/') }}">Testimonios</a></li>
                                        <li><a href="/routine">Rutina Arju</a></li>
                                        {{-- <li><a href="#contact">Contáctame</a></li> --}}
                                        {{-- @guest
                                            <li><a href="{{ route('login') }}">Inicio de sesión</a></li>
                                        @else
                                            <li><a href="/profile/{{ Auth::id() }}">Mi Perfil</a></li>
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                                    Cerrar Sesión
                                                </a>    
                                                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        @endguest --}}
                                    </ul>
                                </div><!-- /.main-nav -->
                                {{-- <div class="small-cart-link">
                                    <a href="#">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span class="small-cart-counter">2</span>
                                    </a>
                                </div><!-- /.small-cart-link --> --}}
                                {{-- <div class="small-search">
                                    <a href="#" class="search-open"><i class="fa fa-search"></i></a>
                                </div><!-- /.small-search --> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.nav-bar-container -->
            {{-- <div class="search-box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="#">
                                <input type="text" name="search" class="search-inp" placeholder="Type then hit enter to search..." autofocus>
                                <a href="#" class="search-close">
                                    <i class="fa fa-times"></i>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.search-box --> --}}
        </div><!-- /.nav-bar -->
    </header><!-- /.main-header -->
</section>
    <!-- End Main Header -->
<!-- Start Main Content Part -->

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul>
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><span>Rutina Arju</span></li>
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
                    <div class="form-group">
                        <label for="password" class="col-sm-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                        <input id="password" type="email" class="input-text {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>
                    </div>

                    <div class="radio">
                        <label><input type="radio" name="optradio" checked value="male">Rutina Hombres</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio" value="women">Rutina mujeres</label>
                    </div>
                    <div class="form-group row form-buttons">
                        <div class="col-md-12">
                            <button id="pdfDownload" class="center button button-bg button-buying">Descarga PDF</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $("#pdfDownload").click(function(){
        if($("#password").val() ==  "Estilodevida123") {
            var selValue = $('input[name=optradio]:checked').val();
            if(selValue == 'male') {
                var valFileDownloadPath = '/files/ULPPL.pdf';
            } else {
                var valFileDownloadPath = '/files/WOMEN.pdf';
            }
            window.open(valFileDownloadPath , '_blank');
        } else {
            alert("Contraseña invalida");
        }
    });
});
</script>   
@endsection
{{-- <!-- @if (Route::has('login'))
<div class="top-right links">
    @auth
        <a href="{{ url('/home') }}">Home</a>
    @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endauth
</div>
@endif --}}

