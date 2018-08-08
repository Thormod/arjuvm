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
				<a class="navbar-brand" href="#">Editar Ejercicio</a>
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
			
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				@if ($message = Session::get('success'))
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>{{ $message }}</strong>
					</div>
				@endif

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h4 class="title">{{ $exercise->name }}</h4>
						</div>
						<div class="content table-responsive table-full-width">
							 <form action="/admin/exercises/update/{{ $exercise->id }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Name">Nombre:</label>
										<input type="text" class="form-control border-input" value="{{ $exercise->name }}" name="name" id="name" required="required">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Email">Descripción:</label>
									<textarea rows="5" class="form-control border-input" name="description" id="description" required="required">{{ $exercise->description}}</textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Name">Video URL:</label>
										<input type="text" class="form-control border-input" value="{{ $exercise->video_url}}" name="video_url" id="video_url" required="required">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Number">Imagen:</label>
										<img src="{{ $exercise->image_url}}"><br><br>
										<input type="file" name="image_url" id="image_url">    
									</div>
								</div>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Number">Sets: </label>
										<input type="text" class="form-control border-input" value="{{ $exercise->sets}}" name="sets" id="sets" required="required">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Number">Reps: </label>
										<input type="text" class="form-control border-input" value="{{ $exercise->reps}}" name="reps" id="reps" required="required">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Number">Rest: </label>
										<input type="text" class="form-control border-input" value="{{ $exercise->rest}}" name="rest" id="rest" required="required">
									</div>
								</div>
								<div class="center">
									<button type="submit" class="btn btn-info btn-fill btn-wd">Actualizar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection