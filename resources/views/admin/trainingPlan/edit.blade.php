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
            <a class="navbar-brand" href="#">Editar Plan de Entrenamiento {{ $trainingPlan->name }}</a>
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
						<div class="content table-responsive table-full-width">
                            <form action="/admin/trainingPlan/update/{{ $trainingPlan->id }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Name">Nombre:</label>
										<input type="text" class="form-control border-input" value="{{ $trainingPlan->name }}" name="name" id="name" required="required">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Name">Precio:</label>
										<input type="text" class="form-control border-input" value="{{ $trainingPlan->price }}" name="price" id="price" required="required">
									</div>
                                </div>
                                <div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Name">Descuento:</label>
										<input type="text" class="form-control border-input" value="{{ $trainingPlan->discount }}" name="discount" id="discount">
									</div>
                                </div>
                                <div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
                                        <label for="image_url">Imagen:</label>
                                        <img src="{{ $trainingPlan->image_url}}"><br><br>
										<input type="file" name="image_url" id="image_url">    
									</div>
                                </div>
                                <div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Name">Video URL:</label>
										<input type="text" class="form-control border-input" value="{{ $trainingPlan->video_url }}" name="video_url" id="video_url" required="required">
									</div>
                                </div>
                                <div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Email">Descripción:</label>
										<textarea rows="5" class="form-control border-input" name="description" id="description" required="required">{{ $trainingPlan->description }}</textarea>
									</div>
                                </div>
                                <div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Email">Descripción Corta:</label>
										<textarea rows="5" class="form-control border-input" name="short_description" id="short_description" required="required">{{ $trainingPlan->short_description }}</textarea>
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