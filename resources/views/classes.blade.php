@extends('base')

@section('content')

<div class="main-wrapper">
@include('layouts.navbar')
<!-- Start Main Content Part -->
<div class="s-pagetitle">
    <img src="img/backgrounds/pagetitle-img_classes.jpg" class="s-pagetitle-img" alt="About page title image">
    <div class="container flexbox">
        <h1 class="clr-white title-decor">Planes</h1>
    </div>
</div><!-- /.s-pagetitle -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><span>Planes y precios</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 classes-item">
            <div class="classes_img">
                <img src="img/classes/classes-img_1.jpg" alt="Crossfit">
            </div>
            <div class="classes_desc">
                <h3>Crossfit</h3>
                <p class="clr-lighther">Lorem ipsum dolor sit amet, eu sea cetero contentiones, ut mei ridens mollis prodesset. Ne atqui congue eirmod nec, nec assueverit instructior te. Amet expetenda urbanitas ei sed. An vix ipsum malis ignota, ad nec suavitate deseruisse. Movet nusquam at his, fugit aeterno vix ei.</p>
            </div>
            <div class="classes_footer">
                <div class="classes_footer-item">
                    <span class="clr-dark">Duration:
                        <span class="clr-lighther">2 HOURS</span>
                    </span>
                </div>
                <div class="classes_footer-item">
                    <span class="clr-dark">Trainer:
                        <span class="clr-lighther">MAX SHOW</span>
                    </span>
                </div>
                <div class="classes_footer-item">
                    <span class="clr-dark">ROOM:
                        <span class="clr-lighther">4ND FLOOR GYM TASTIC</span>
                    </span>
                </div>
            </div>
            <a href="#" class="link-readmore">Read more</a>
        </div>
        <div class="col-md-6 classes-item">
            <div class="classes_img">
                <img src="img/classes/classes-img_2.jpg" alt="Crossfit">
            </div>
            <div class="classes_desc">
                <h3>Bodybuilding</h3>
                <p class="clr-lighther">Lorem ipsum dolor sit amet, eu sea cetero contentiones, ut mei ridens mollis prodesset. Ne atqui congue eirmod nec, nec assueverit instructior te. Amet expetenda urbanitas ei sed. An vix ipsum malis ignota, ad nec suavitate deseruisse. Movet nusquam at his, fugit aeterno vix ei.</p>
            </div>
            <div class="classes_footer">
                <div class="classes_footer-item">
                    <span class="clr-dark">Duration:
                        <span class="clr-lighther">2 HOURS</span>
                    </span>
                </div>
                <div class="classes_footer-item">
                    <span class="clr-dark">Trainer:
                        <span class="clr-lighther">MAX SHOW</span>
                    </span>
                </div>
                <div class="classes_footer-item">
                    <span class="clr-dark">ROOM:
                        <span class="clr-lighther">4ND FLOOR GYM TASTIC</span>
                    </span>
                </div>
            </div>
            <a href="#" class="link-readmore">Read more</a>
        </div>
        <div class="col-md-6 classes-item">
            <a href="#" class="classes_img">
                <img src="img/classes/classes-img_3.jpg" alt="Martial arts">
            </a>
            <div class="classes_desc">
                <h3>Martial arts</h3>
                <p class="clr-lighther"> mei ridens mollis prodesset. Ne atqui congue eirmod nec, nec assueverit instructior te. Amet expetenda urbanitas ei sed. An vix ipsum malis ignota, ad nec suavitate deseruisse. Movet nusquam at his, fugit aeterno vix ei.</p>
            </div>
            <div class="classes_footer">
                <div class="classes_footer-item">
                    <span class="clr-dark">Duration:
                        <span class="clr-lighther">2 HOURS</span>
                    </span>
                </div>
                <div class="classes_footer-item">
                    <span class="clr-dark">Trainer:
                        <span class="clr-lighther">MAX SHOW</span>
                    </span>
                </div>
                <div class="classes_footer-item">
                    <span class="clr-dark">ROOM:
                        <span class="clr-lighther">4ND FLOOR GYM TASTIC</span>
                    </span>
                </div>
            </div>
            <a href="#" class="link-readmore">Read more</a>
        </div>
        <div class="col-md-6 classes-item">
            <div class="classes_img">
                <img src="img/classes/classes-img_4.jpg" alt="Crossfit">
            </div>
            <div class="classes_desc">
                <h3>YOGA & PILATES</h3>
                <p class="clr-lighther">Lorem ipsum dolor sit amet, eu sea cetero contentiones, ut mei ridens mollis prodesset. Ne atqui congue eirmod nec, nec assueverit instructior te. Amet expetenda urbanitas ei sed. An vix ipsum malis ignota, ad nec suavitate deseruisse. Movet nusquam at his, fugit aeterno vix ei.</p>
            </div>
            <div class="classes_footer">
                <div class="classes_footer-item">
                    <span class="clr-dark">Duration:
                        <span class="clr-lighther">2 HOURS</span>
                    </span>
                </div>
                <div class="classes_footer-item">
                    <span class="clr-dark">Trainer:
                        <span class="clr-lighther">MAX SHOW</span>
                    </span>
                </div>
                <div class="classes_footer-item">
                    <span class="clr-dark">ROOM:
                        <span class="clr-lighther">4ND FLOOR GYM TASTIC</span>
                    </span>
                </div>
            </div>
            <a href="#" class="link-readmore">Read more</a>
        </div>

        <div class="col-md-12">
            <div class="pagination">
                <ul>
                    <li class="pagination-prev"><a href="#">Previous</a></li>
                    <li class="current"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li class="pagination-next"><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div><!-- /.main-wrapper -->
@endsection