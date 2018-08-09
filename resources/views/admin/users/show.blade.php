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
				<a class="navbar-brand" href="#">Usuario {{ $user->email }}</a>
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
							<div class="row">
								<div class="col-md-4"></div>
								<div class="form-group col-md-4">
									<label for="Name">Nombre:</label>
									<input type="text" class="form-control border-input" value="{{ $user->name }}" name="name" id="name" readonly>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="form-group col-md-4">
									<label for="Name">Número de Celular:</label>
									<input type="text" class="form-control border-input" value="{{ $user->phone }}" name="phone" id="phone" readonly>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="form-group col-md-4">
									<label for="Name">E-mail:</label>
									<input type="text" class="form-control border-input" value="{{ $user->email }}" name="email" id="email" readonly>
								</div>
							</div>
							<form method="POST" action="/admin/users/updateRole/{{ $user->id }}">
								@csrf
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Name">Rol:
										@if( $user->admin == 1)
										Admin
										@else
										Usuario
										@endif
										</label>
										<select class="border-input form-control" value="{{ $user->admin }}" name="admin" id="admin">
											<option value="0">Usuario</option>
											<option value="1">Admin</option>
										</select>
									</div>
								</div>
								<div class="center">
									<button type="submit" class="btn btn-info btn-fill btn-wd">Actualizar Rol</button>
								</div>
							</form>
						</div>
						<div class="row">
							<div class="col-md-4"></div>
							<div class="form-group col-md-4">
								<label for="Name">Género:</label>
								<input type="text" class="form-control border-input" value="{{ $user->gender }}" readonly>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4"></div>
							<div class="form-group col-md-4">
								<label for="Name">Fecha de Nacimiento:</label>
								<input class="border-input form-control" type="date"  placeholder="YYYY-MM-DD" value="{{ $user->birthdate }}" name="birthdate" id="birthdate" readonly>                                        
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