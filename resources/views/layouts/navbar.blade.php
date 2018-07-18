<div class="main-wrapper">
<!-- Start Main Header -->
<header class="main-header">
    <div class="nav-bar">
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
                                <ul>
                                    <li><a href="#prices">Planes y precios</a></li>
                                    <li><a href="#about">¿Quién soy?</a></li>
                                    <li><a href="#testimonials">Testimonios</a></li>
                                    <li><a href="#contact">Contáctame</a></li>
                                    @guest
                                        <li><a href="{{ route('login') }}">Inicio de sesión</a></li>
                                    @else
                                        <li>
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->email }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                    </li>
                                    @endguest
                                </ul>
                            </div><!-- /.main-nav -->
                            {{-- <div class="small-cart-link">
                                <a href="#">
                                    <i class="icon-shopping-cart"></i>
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
        <div class="search-box">
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
        </div><!-- /.search-box -->
    </div><!-- /.nav-bar -->
</header><!-- /.main-header -->
<!-- End Main Header -->