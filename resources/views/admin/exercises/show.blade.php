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
				<a class="navbar-brand" href="#">Ejercicio</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="/">
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
							<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Name">Nombre:</label>
										<input type="text" class="form-control border-input" value="{{ $exercise->name }}" name="name" id="name" readonly>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Email">Descripción:</label>
									<textarea rows="5" class="form-control border-input" name="description" id="description" readonly>{{ $exercise->description}}</textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Name">Video URL:</label>
										<input type="text" class="form-control border-input" value="{{ $exercise->video_url}}" name="video_url" id="video_url" readonly>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Number">Imagen:</label>
										<img src="{{ $exercise->image_url}}"><br><br>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Number">Sets: </label>
										<input type="text" class="form-control border-input" value="{{ $exercise->sets}}" name="sets" id="sets" readonly>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Number">Reps: </label>
										<input type="text" class="form-control border-input" value="{{ $exercise->reps}}" name="reps" id="reps" readonly>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Number">Rest: </label>
										<input type="text" class="form-control border-input" value="{{ $exercise->rest}}" name="rest" id="rest" readonly>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection