<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ArjuVM - Fitness Coach</title>

        <!-- /Plugins CSS Files -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/animate.min.css">
        <link rel="stylesheet" href="/css/slick.css"/>
        <link rel="stylesheet" href="/css/jquery-ui.min.css">
        <link rel="stylesheet" href="/css/magnific-popup.css">
        <!-- /Template CSS Files -->
        <link rel="stylesheet" href="/css/app.css">

        <!-- ==== Font Awesome ==== -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <!--Include Google Fonts Montserrat-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">


        <!-- /JS -->
        <script src="/js/vendor/modernizr-custom.js"></script>

        <!-- /Add favicon -->
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

       
        <div class="main-wrapper">
            <!-- Start Main Header -->
            <header class="main-header">
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-md-8 col-sm-7">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="https://www.facebook.com/arju.vasquezmontoya"><i class="fab fa-facebook-f"></i><span>facebook</span></a></li>
                                        <li><a href="https://www.youtube.com/channel/UC6oj1DKR5aG_vQNPYQUGZkg"><i class="fab fa-youtube"></i><span>youtube</span></a></li>
                                        <li><a href="https://www.instagram.com/arju76/"><i class="fab fa-instagram"></i><span>instagram</span></a></li>
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
                <div class="nav-bar nav-bar-black" id="navbar">
                    <div class="nav-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2 col-sm-7 col-xs-7">
                                    <div class="logo">
                                        <a href="index.html" class="site-title"><span>ARJU</span>VM</a>
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
                                                <li><a href="#prices">Planes y precios</a></li>
                                                <li><a href="#about">¿Quién soy?</a></li>
                                                <li><a href="#testimonials">Testimonios</a></li>
                                                <li><a href="#contact">Contáctame</a></li>
                                                <li><a href="#login">Login</a></li>
                                            </ul>
                                        </div><!-- /.main-nav -->
                                        <div class="small-cart-link">
                                            <a href="#">
                                                <i class="fas fa-shopping-basket"></i>
                                                <span class="small-cart-counter">2</span>
                                            </a>
                                        </div><!-- /.small-cart-link -->
                                        <div class="small-search">
                                            <a href="#" class="search-open"><i class="fa fa-search"></i></a>
                                        </div><!-- /.small-search -->
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
        </section>
            <!-- End Main Header -->

            <!-- Start Main Content Part -->
            <div class="welcome-section">
                <div class="welcome-slider">
                    <div class="welcome-slider-item data-bg" data-background="img/welcome-slider/home-welcome-img_4.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                                    <div class="welcome-section-container">
                                        <div class="welcome-section-txt">
                                            <div class="decor-corner-lines" data-animation="fadeIn" data-delay="0.5s"></div>
                                            <h1 class="clr-white" data-animation="fadeInRight" data-delay="0s">COACH ONLINE!</h1>
                                            <p class="clr-white" data-animation="fadeInRight" data-delay="0.3s">
                                                Hola mi Nombre es Arju y me gustaría llevarte a través del verdadero y unico proceso que necesitas 
                                                para traer una  mejor versión de ti mismo. Yo enseñoo un estilo de vida que es sostenible en todos 
                                                los ámbitos, que te llevara a tu cuerpo soñado y te hara sentir bien en el proceso.
                                            </p>
                                            <a href="#" class="button button-border clr-white button-decor-triangle" data-animation="fadeInUp" data-delay=".8s">¡ÚNETE AHORA!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span data-slick-index="2" class="progressBar"></span>
                    </div>

                    <div class="welcome-slider-item data-bg" data-background="img/welcome-slider/home-welcome-img_1.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                                    <div class="welcome-section-container">
                                        <div class="welcome-section-txt">
                                            <div class="decor-corner-lines" data-animation="fadeIn" data-delay="0.5s"></div>
                                            <h1 class="clr-white" data-animation="fadeInRight" data-delay="0s">ENTRENAMIENTO PERSONALIZADO!</h1>
                                            <p class="clr-white" data-animation="fadeInRight" data-delay="0.3s">
                                                Mi asesoría personalizada  es 1 a 1, es decir me vas a tener como tu coach online 24/7 para 
                                                resolverte todas tus dudas, cada semana se hace ajuste de la dieta y  me vas a tener pendiente 
                                                cada semana para ver como vamos en el proceso. Esta es la manera mas efectiva de progresar y ver cambios 
                                                rápidamente, ses por eso que es el plan mas Premium de los que manejo.
                                            </p>
                                            <a href="#" class="button button-border clr-white button-decor-triangle" data-animation="fadeInUp" data-delay=".8s">¡ÚNETE AHORA!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span data-slick-index="2" class="progressBar"></span>
                    </div>
                    <div class="welcome-slider-item data-bg" data-background="img/welcome-slider/home-welcome-img_3.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                                    <div class="welcome-section-container">
                                        <div class="welcome-section-txt">
                                            <div class="decor-corner-lines" data-animation="fadeIn" data-delay="0.5s"></div>
                                            <h1 class="clr-white" data-animation="fadeInRight" data-delay="0s">DIETA FLEXIBLE!</h1>
                                            <p class="clr-white" data-animation="fadeInRight" data-delay="0.3s">
                                                La dieta flexible no es la típica dieta copy-paste de comer solo brócoli y pechuga,nada de esto! 
                                                Es una dieta estilo de vida, ya que no hay restricciones de alimentos y vas a poder seguir disfrutando
                                                de tus comidas favoritas con moderación. En todos mis planes la vas a  poder aplicar, es solo 
                                                cuestión de balance calorías quemadas por calorías consumidas y llevar control de los macronutrientes. 
                                                Una vez aprendas esto vas a ver que descubriste la clave absoluta para definir o poner mas musculo.
                                            </p>
                                            <a href="#" class="button button-border clr-white button-decor-triangle" data-animation="fadeInUp" data-delay=".8s">¡ÚNETE AHORA!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span data-slick-index="2" class="progressBar"></span>
                    </div>
                </div>
            </div>

            <div class="prices-section">
                <div class="container mobile-container-fluid">
                    <div class="discount-box">
                        <div class="discount-percent clr-colorify">35%</div>
                        <div class="discount-title">DISCOUNT</div>
                        <a href="#" class="button button-border clr-white button-decor-triangle btn-lg">PAY NOW</a>
                    </div>
                    <div class="prices-block">
                        <div class="prices-box">
                            <h3 class="clr-white">BEGINNER</h3>
                            <div class="prices-box-price clr-white">$65</div>
                            <span>Monthly</span>
                            <p class="clr-white lh-200">Lorem ipsum dolor sit amet, quod duis mea no. Graece debitis lobortis mea ut, et detracto indoctum principes mea.</p>
                            <a href="#" class="link-readmore clr-white">Read more</a>
                        </div>
                        <div class="prices-box">
                            <h3 class="clr-white">Advanced</h3>
                            <div class="prices-box-price clr-white">$90</div>
                            <span>Monthly</span>
                            <p class="clr-white lh-200">Lorem ipsum dolLorem ipsum dolorLorem ipsum doloror sit amet. Graece et detracto indoctum principes mea.</p>
                            <a href="#" class="link-readmore clr-white">Read more</a>
                        </div>
                        <div class="prices-box">
                            <h3 class="clr-white">Warior</h3>
                            <div class="prices-box-price clr-white">$145</div>
                            <span>Monthly</span>
                            <p class="clr-white lh-200">Lorem ipsum dolor sit amet, quod duis mea no. Graece debitis lobortis mea ut, et detracto indoctum principes mea.</p>
                            <a href="#" class="link-readmore clr-white">Read more</a>
                        </div>
                    </div><!-- /.prices -->
                </div><!-- /.wrapper -->
            </div>

            <div class="text-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 animated-on-scroll" data-animation="fadeInUp" data-delay="0s">
                            <h3>BULK CLEAN</h3>
                            <p>Lorem ipsum dolor sit amet, eu sea cetero contentiones, ut mei ridens mollis prodesset. Ne atqui congue eirmod nec, nec assueverit instructior te. Amet expetenda urbanitas ei sed. An vix ipsum malis ignota, ad nec suavitate deseruisse. Movet nusquam at his, fugit aeterno vix ei.</p>
                            <a href="#" class="link-readmore">Leer más</a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 animated-on-scroll" data-animation="fadeInUp" data-delay="0.1s">
                            <h3>DEFICIT</h3>
                            <p>Lorem ipsum dolor sit amet, eu sea cetero contentiones, ut mei ridens mollis prodesset. Ne atqui congue eirmod nec, nec assueverit instructior te. Amet expetenda urbanitas ei sed. An vix ipsum malis ignota, ad nec suavitate deseruisse. Movet nusquam at his, fugit aeterno vix ei.</p>
                            <a href="#" class="link-readmore">Leer más</a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 animated-on-scroll" data-animation="fadeInUp" data-delay="0.2s">
                            <h3>COACH ONLINE</h3>
                            <p>Lorem ipsum dolor sit amet, eu sea cetero contentiones, ut mei ridens mollis prodesset. Ne atqui congue eirmod nec, nec assueverit instructior te. Amet expetenda urbanitas ei sed. An vix ipsum malis ignota, ad nec suavitate deseruisse. Movet nusquam at his, fugit aeterno vix ei.</p>
                            <a href="#" class="link-readmore">Leer más</a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 animated-on-scroll" data-animation="fadeInUp" data-delay="0.3s">
                            <h3>ALIMENTACIÓN</h3>
                            <p>Lorem ipsum dolor sit amet, eu sea cetero contentiones, ut mei ridens mollis prodesset. Ne atqui congue eirmod nec, nec assueverit instructior te. Amet expetenda urbanitas ei sed. An vix ipsum malis ignota, ad nec suavitate deseruisse. Movet nusquam at his, fugit aeterno vix ei.</p>
                            <a href="#" class="link-readmore">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- About Section --}}
            <section id="about">
            <div class="banner main-banner-1 hidden-sm hidden-xs">
                <div class="container">
                    <div class="banner-1-img animated-on-scroll"  data-animation="fadeInUp" data-delay="0s">
                        <img src="img/banners/banner-1-img.png" alt="Banner 1">
                    </div>
                    <div class="banner-row-top">
                        <div class="banner-1-col-left animated-on-scroll"  data-animation="fadeInLeft" data-delay="0.3s">
                            <p><span>5</span> PROGRAMAS</p>
                        </div>
                        <div class="banner-1-col-right animated-on-scroll"  data-animation="fadeInRight" data-delay="0.3s">
                            <p><span>+50</span><br>CASOS DE<br>EXITO</p>
                        </div>
                    </div>
                    <div class="banner-title animated-on-scroll"  data-animation="fadeInUp" data-delay="0.2s">
                        <p>ARJU<span>VM</span></p>
                    </div>
                    <div class="banner-row-bottom animated-on-scroll"  data-animation="fadeInUp" data-delay="0.2s">
                        <p>ENTRENADOR PERSONAL ONLINE</p>
                    </div>
                </div>
            </div>
            </section>

   
            <div class="our-team">
                <div class="our-team-bg">
                    <div class="our-team-bg-img data-bg" data-background="img/team/ourteam-bg.jpg"></div>
                </div>
                <div class="container our-team__content">
                    <div class="our-team__item">
                        <p class="name">ARJU<span>VM</span></p>
                        <p>
                                ​Hola soy  Arju y mi misión es mostrar el fitness como un estilo de vida, demostrándole a la gente que se puede tener el cuerpo que siempre quisieron, 
                                ser saludable y poder disfrutar del proceso!

                                El fitness te va ayudar no solamente a lucir bien y ser físicamente mas fuerte, 
                                sino que te enseñará a ser una persona disciplinada, enfocada en tus metas y con mas autoestima!
                                
                                Yo ofrezco programas reales con resultados reales de acuerdo a las necesidades de mis clientes, 
                                el proceso no es duro, pero requiere de voluntad, disciplina y constancia, mucha constancia, por eso voy a serles sincero, 
                                si no están dispuestos a meterle la voluntad y las ganas que deberían, quédense tal como están y abandonen el sueño de tener el cuerpo que desean.
                                
                                Yo no nací teniendo este cuerpo o siendo un deportista nato, incluso sufrí lo que se denomina pubertad tardía, 
                                lo cual estancó mi crecimiento durante mucho tiempo, casi todo mi época de colegio era conocido como el “pequeñito de la clase” 
                                incluso las niñas eran mas altas y grandes que yo, esto hacia que no me sintiera bien conmigo mismo, refugiándome así en los juegos virtuales, 
                                hasta tal punto que solo me la pasaba jugando en el computador y no hacia nada mas, nunca me importo lo que comía, 
                                me la pasaba comiendo cualquier cosa que se me atravesara, mi físico a los 17 años era una mezcla de flaco y gordo lo que se denomina como “skinny-fat”.
                        </p>
                        <p>
                                Mi físico actual a mis 22 años es prueba de que se puede ser naturales y obtener un cuerpo “ chévere” de playa  y no sacrificar los 
                                otros aspectos de la vida como el trabajo, el estudio, las comidas, la rumba, haciendo lo que  se denomina  “disfrutar el proceso.”
                                Así que ya saben, déjenme guiarlos por este mundo del fitness, yo garantizo que una persona puede ver resultados si pone el trabajo, 
                                la constancia y la disciplina necesaria, y puedan volverse mejores físicamente y emocionalmente. Así como pasó conmigo, 
                                ¡el fitness ha sido un factor clave en mi vida!
                        </p>

                    </div>
                </div>
            </div>
            <div class="banner-trainer negative-margin-top animated-on-scroll" data-animation="fadeInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-4 hidden-xs hidden-sm main-banner-2-img animated-on-scroll"  data-animation="fadeInLeft" data-delay="0.2s">
                            <img src="img/banners/discount-img43.png" alt="Banner 2">
                        </div>
                        <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 animated-on-scroll"  data-animation="fadeInRight" data-delay="0.2s">
                            <h3>¿QUIERES SER <br><span>PARTE DEL CAMBIO?</span></h3>
                            <div class="banner-2-cols">
                                <div class="banner-2-col-1">
                                    <p>Planes personalizados <br>para necesidades únicas</p>
                                </div>
                                <div class="banner-2-col-2">
                                    <a href="#" class="button button-border button-decor-triangle">PLANES Y PRECIOS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            {{-- Testiomials section --}}
            <section id="testimonials">
            <div class="main-news-list">
                <div class="container">
                    <h2 class="section-title">Testimonios</h2>
                    <div class="main-news-box row">
                    <div class="news-item col-md-6 col-sm-6 col-xs-12 nopadding">
                            <div class="news-item__img">
                                <img src="img/testimonials/04.jpg" alt="News 1">
                            </div>
                            <div class="news-item__content"></a>
                                <span class="link-readmore">FELIPE MONTOYA</span>
                                <p class="news-item-text">"Arju gracias, con vos aprendí a contar macros, hacer mi dieta flexible y perder peso al mismo tiempo. Ademas, las rutinas que propones son exigentes pero divertidas"</p>
                            </div>
                        </div>
                        <div class="news-item col-md-6 col-sm-6 col-xs-12 nopadding">
                            <div class="news-item__img">
                                <img src="img/testimonials/05.jpg" alt="News 2">
                            </div>
                            <div class="news-item__content"></a>
                                <span class="link-readmore">DIANA</span>
                                <p class="news-item-text">"Arju no solamente me condujo a músculos mas fuertes y grandes, si no que le perdí el miedo a comer carbohidratos, ahora disfruto mucho mas de mis comidas y veo grandes resultados!"</p>
                            </div>
                        </div>
                        <div class="news-item col-md-6 col-sm-6 col-xs-12 nopadding">
                            <div class="news-item__img">
                                <img src="img/testimonials/07.jpg" alt="News 1">
                            </div>
                            <div class="news-item__content"></a>
                                <span class="link-readmore">NESTOR</span>
                                <p class="news-item-text">"Nunca creí que definirme a este punto seria tan fácil!, todo gracias a la dieta flexible y los entrenos que me dio Arju"</p>
                            </div>
                        </div>
                        <div class="news-item col-md-6 col-sm-6 col-xs-12 nopadding">
                            <div class="news-item__img">
                                <img src="img/testimonials/10.jpg" alt="News 2">
                            </div>
                            <div class="news-item__content"></a>
                                <span class="link-readmore">ALEJANDRO</span>
                                <p class="news-item-text">"Por medio del conteo de macronutrientes y al entrenamiento bien estructurado por Arju, he logrado un buen progreso a lo largo de 5 meses y medio, seguiré con tus consejos hermano, muchas gracias"</p>
                            </div>
                        </div>
                        <div class="news-item col-md-6 col-sm-6 col-xs-12 nopadding">
                            <div class="news-item__img">
                                <img src="img/testimonials/11.jpg" alt="News 1">
                            </div>
                            <div class="news-item__content"></a>
                                <span class="link-readmore">DUVAN</span>
                                <p class="news-item-text">"Luego de aprender a hacer una etapa de volumen como debe ser, a contar macro y a aplicar las herramientas enseñadas por @Arju76... esta es mi transformación luego de 4 meses "</p>
                            </div>
                        </div>
                        <div class="news-item col-md-6 col-sm-6 col-xs-12 nopadding">
                            <div class="news-item__img">
                                <img src="img/testimonials/08.jpg" alt="News 2">
                            </div>
                            <div class="news-item__content"></a>
                                <span class="link-readmore">GUILLE MOREIRA</span>
                                <p class="news-item-text">"Simplemente genial, la dieta flexible me ayudo a ganar músculo magro  mientras incrementaba mi fuerza"</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            </div>
            <div class="counters-section hidden-xs">
                <div class="counters-line"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="counter-item">
                                <span class="counter" data-from="100" data-to="150" data-speed="6000" data-refresh-interval="50">100</span>
                                <span class="counter-title">Clientes <br> Satisfechos</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="counter-item">
                                <span class="counter" data-from="10" data-to="24" data-speed="6000" data-refresh-interval="50">10</span>
                                <span class="counter-title">Horas <br> de disponibilidad</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="counter-item">
                                <span class="counter" data-from="10" data-to="170" data-speed="6000" data-refresh-interval="50">10</span>
                                <span class="counter-title">Rutinas <br>Establecidas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-products">
            
            </div>
        
        @include('layouts.footer')
        <!-- Include JS -->
        <script src="/js/vendor/jquery-3.2.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/slick.min.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/app.js"></script>
        <script src="/js/scroll.js"></script>
    </body>
</html>