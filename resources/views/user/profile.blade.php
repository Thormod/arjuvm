@extends('base')
@section('content')
<div class="main-wrapper">
   @include('layouts.navbar')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
   <!-- Start Main Content Part -->
   <div class="s-pagetitle">
      <img src="/img/backgrounds/pagetitle-img_classes.jpg" class="s-pagetitle-img" alt="About page title image">
      <div class="container flexbox">
            <h1 class="clr-white title-decor">AFILIADO <span>- {{ $user->name }}</span></h1>
      </div>
   </div>
   <!-- /.s-pagetitle -->
   <div class="breadcrumbs">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <ul>
                  <li><a href="{{ url('/') }}">Inicio</a></li>
                  <li><a href="/profile/{{ Auth::id() }}">Mi Perfil</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
        <div class="trainer-page">
            <div class="row">
                <div class="col-md-3">
                    {{-- <div class="trainer-page-img">
                        <img src="{{ $user->avatar_url }}" alt="{{ $user->name }}">
                    </div> --}}
                    <div class="profile-sidebar">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">
                            <img src="{{ $user->avatar_url }}" class="img-thumbnail center" alt="" align="middle">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <h4> {{ $user->name }} </h4>
                            <a href="/edit_profile/{{ Auth::id() }}" class="button button-border">EDITAR PERFIL</a>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                    </div>
                </div>
                <div class="col-md-9">
                    <table class="table">
                        <tr>
                            <td>EMAIL:</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td>PHONE:</td>
                            <td>{{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <td>EDAD:</td>
                            <td>{{ (date('Y') - date('Y',strtotime($user->birthdate))) }}</td>
                        </tr>
                        <tr>
                            <td>PESO ACTUAL:</td>
                            <td>{{ $nutritionalPlan->actual_weight }}</td>
                        </tr>
                        <tr>
                            <td>PESO DESEADO:</td>
                            <td>{{ $nutritionalPlan->target_weight }}</td>
                        </tr>
                        <tr>
                            <td>CALORIAS OBJETIVO:</td>
                            <td>{{ $nutritionalPlan->target_calories }}</td>
                        </tr>
                        <tr>
                            <td>PROTEINA OBJETIVA:</td>
                            <td>{{ $nutritionalPlan->protein }} g.</td>
                        </tr>
                        <tr>
                            <td>CARBOHIDRATOS OBJETIVO:</td>
                            <td>{{ $nutritionalPlan->carbohydrate }} g.</td>
                        </tr>
                        <tr>
                            <td>GRASA OBJETIVA:</td>
                            <td>{{ $nutritionalPlan->fat }} g.</td>
                        </tr>
                    </table>
                </div>
            </div>
   </div>
   <hr>
   <div class="row">
    @if(!empty($trainingPlans))
        @foreach ($trainingPlans as $trainingPlan)
            <div class="col-md-3 col-sm-6">
                <a href="/trainingPlan/dashboard/{{ $trainingPlan->id }}">
                <span class="thumbnail">
                <div class="trainer-item">
                    <div class="trainer-img">
                        <img src="{{ $trainingPlan->image_url }}" alt="Oliver McCormick">
                    </div>
                    <div class="trainer-desc">
                        <h4>{{ $trainingPlan->name }}</h4>
                    </div>
                </div>
                </span>
                </a>
            </div>
        @endforeach
    @else
        <h3 class="profile-plan-msg center">No tienes planes activos!</h3>
    @endif
    </div>
</div>
<!-- /.main-wrapper -->
@endsection