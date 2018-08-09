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
							<form action="/admin/trainingPlan/workout/update/{{ $trainingPlan->id }}" method="POST" enctype="multipart/form-data">
								@csrf
								<h4 class="center">Workouts</h4>
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Name">Nombre:</label>
										<select class="border-input form-control" name="workout_id">
											@foreach ($workouts as $workout)
											<option value="{{ $workout->id }}">{{ $workout->id}} : {{ $workout->name }}</option>
											@endforeach
										</select>
									</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="form-group col-md-4">
                                        <label for="Name">Día:</label>
                                        <input type="text" class="form-control border-input" name="day" id="day" required="required">
                                    </div>
                                </div>
								<div class="center">
									<button type="submit" class="btn btn-fill btn-wd">Añadir Workout</button>
								</div>
							</form>
                            @foreach ($trainingPlanDetail as $detail)
							<hr>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="form-group col-md-4">
									<label for="Name">id:</label>
									<input type="text" class="form-control border-input" value="{{ $detail->workout_id }}" name="name" id="name" readonly>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="form-group col-md-4">
									<label for="Name">Dia:</label>
									<input type="text" class="form-control border-input" value="{{ $detail->day }}" name="day" id="day" readonly>
								</div>
							</div>
							<div class="center">
								<a href="/admin/workout/show/{{ $detail->workout_id }}" class="btn btn-fill btn-wd">Ver Workout</a>
								<br><br>
								<form method="POST" action="{{ route('trainingPlan.destroyWorkout', [$detail->id]) }}">
									@csrf
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-danger btn-fill btn-wd">Eliminar Workout</button>
								</form>
							</div>
							<hr>
							@endforeach
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection