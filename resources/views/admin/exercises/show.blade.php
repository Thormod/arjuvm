@extends('admin.base')
@section('content')
@include('admin.layouts.navbar')
<div class="main-panel">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar bar1"></span>
				<span class="icon-bar bar2"></span>
				<span class="icon-bar bar3"></span>
				</button>
				<a class="navbar-brand" href="#">Agregar Ejercicio</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="/home">
							<i class="ti-settings"></i>
							<p>Inicio</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h4 class="title">{{ $exercise->name }}</h4>
						</div>
						<div class="content table-responsive table-full-width">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection