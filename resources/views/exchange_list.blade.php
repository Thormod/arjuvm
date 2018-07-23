@extends('base')
@section('content')
<div class="main-wrapper">
   @include('layouts.navbar')
   <!-- Start Main Content Part -->
   <div class="s-pagetitle">
      <img src="/img/backgrounds/pagetitle-img_classes.jpg" class="s-pagetitle-img" alt="About page title image">
      <div class="container flexbox">
         <h1 class="clr-white title-decor">Tabla de nutrientes</h1>
      </div>
   </div>
   <!-- /.s-pagetitle -->
   <div class="breadcrumbs">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <ul>
                  <li><a href="{{ url('/') }}">Inicio</a></li>
                  <li><a href="">Tabla de nutrientes</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <table class="table">
         <tbody>
         <thead>
            <tr>
               <th scope="col">Alimento</th>
               <th scope="col">Calorias</th>
               <th scope="col">Carbohidratos</th>
               <th scope="col">Proteina</th>
               <th scope="col">Grasa</th>
               <th scope="col">Unidad</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($exchangeListItems as $item)
            <tr>
               <td>{{ $item->food_name }}</td>
               <td>{{ $item->calorie_amount }}</td>
               <td>{{ $item->carbohydrate_amount }} g</td>
               <td>{{ $item->protein_amount }} g</td>
               <td>{{ $item->fat_amount }} g</td>
               <td>{{ $item->measure }} {{ $item->measure_type }}</td>
            </tr>
            @endforeach
         </tbody>
         </tbody>
      </table>
   </div>
</div>
<!-- /.main-wrapper -->
@endsection