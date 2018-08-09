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
                <li><a href="{{ url('/')}} ">Inicio</a></li>
                    <li><span>Planes y precios</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach ($trainingPlans as $trainingPlan)
            <div class="col-md-6 classes-item">
                <div class="classes_img">
                <img src="{{ $trainingPlan->image_url }}" alt="Crossfit">
                </div>
                <div class="classes_desc">
                    <h3>{{ $trainingPlan->name }}</h3>
                    <p class="clr-lighther">{{ $trainingPlan->short_description }}</p>
                </div>
                <div class="classes_footer">
                    <div class="classes_footer-item">
                        <span class="clr-dark">Precio:
                            <span class="clr-lighther">${{ $trainingPlan->price }}</span>
                        </span>
                    </div>
                    <div class="classes_footer-item">
                        @if($trainingPlan->discount != 100)  
                        <span class="clr-dark">DESCUENTO:
                            <span class="clr-lighther">{{ $trainingPlan->discount }}%</span>
                        </span>
                        @endif
                    </div>
                </div>
                <a href="/trainingPlan/{{ $trainingPlan->id }}" class="link-readmore">Ver más</a>
            </div>
        @endforeach
    </div>
</div>
</div><!-- /.main-wrapper -->
@endsection