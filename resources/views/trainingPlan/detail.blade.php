@extends('base')

@section('content')

<div class="main-wrapper">
@include('layouts.navbar')
<!-- Start Main Content Part -->
<div class="s-pagetitle">
    <img src="/img/backgrounds/pagetitle-img_classes.jpg" class="s-pagetitle-img" alt="About page title image">
    <div class="container flexbox">
        <h1 class="clr-white title-decor">Planes</h1>
    </div>
</div><!-- /.s-pagetitle -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul>
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a href="{{ url('/trainingPlan') }}">Planes y precios</a></li>
                    <li><span> {{ $trainingPlan->name }}</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="info-banner">
                <div class="row">
                    <div class="col-md-7 nopadding-right">
                        <div class="info-banner-img">
                            <img src="{{ $trainingPlan->image_url }}" alt="Classes banner">
                        </div>
                    </div>
                    <div class="col-md-5 nopadding-left">
                        <div class="info-banner-desc">
                            <h3 class="clr-colorify">7 DAYS FREE FITNESS CLASSES LIKE IMPROVE FLEXIBILITY, MOBILITY & POSTURE.</h3>
                            <p>{{ $trainingPlan->short_description }}</p>
                            <a href="#" class="button button-border button-decor-triangle">Try a free class</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-box">
            <h3>{{ $trainingPlan->name }}</h3>
            <p>{{ $trainingPlan->description }}</p>
            <div class="classes_footer">
                <div class="classes_footer-item">
                    <span class="clr-dark">Precio:
                        <span class="clr-lighther">${{ $trainingPlan->price }}</span>
                    </span>
                </div>
                <div class="classes_footer-item">
                    <span class="clr-dark">Descuento:
                        <span class="clr-lighther">{{ $trainingPlan->discount }}</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- /.main-wrapper -->
@endsection