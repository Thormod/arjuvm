<!-- Start Main Footer -->
<footer class="main-footer">
    <div class="main-footer-top hidden-xs">
        <div class="container mobile-container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 col-sm-12 hidden-xs">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="{{ url('/trainingPlan') }}">Planes y precios</a></li>
                            <li><a href="{{ url('/#about') }}">¿Quién soy?</a></li>
                            <li><a href="{{ url('/#testimonials') }}">Testimonios</a></li>
                            <li><a href="#contact">Contáctame</a></li>
                            @guest
                                <li><a href="{{ route('login') }}">Inicio de sesión</a></li>
                            @else
                                <li><a href="/profile/{{ Auth::id() }}">Mi Perfil</a></li>
                                <li>
                                    <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> 
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-12 hidden-sm">
                    <div class="footer-logo">
                        <a href="{{ url('/') }}"  class="site-title">ARJU<span>VM</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.main-footer-top -->
    <div class="main-footer-middle">
        <div class="container mobile-container-fluid">
    </div><!-- /.main-footer-middle -->
    <div class="main-footer-bottom">
        <div class="container mobile-container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12 copyrights-box">
                    <div class="row">
                        <div class="col-md-11 col-sm-11 col-xs-12">
                            <p>Copyright © 2018 Arjuna Vásquez. </p>
                        </div>
                        <div class="col-md-1 col-sm-1 hidden-xs">
                            <a href="#" class="arrow-top"><i class="icon-up-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12 social-links-box">
                    <div class="social-links">
                        <ul>
                            <li><a href="https://www.facebook.com/arju.vasquezmontoya" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/arju76/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC6oj1DKR5aG_vQNPYQUGZkg" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.main-footer-bottom -->
</footer><!-- /.main-footer -->
<!-- End Main Footer -->