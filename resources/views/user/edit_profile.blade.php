@extends('base')
@section('content')
<div class="main-wrapper">
	@include('layouts.navbar')
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
						<li><a href="#">Editar Perfil</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
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
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<h4>Tu perfil</h4>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<form action="/updateProfile" method="post" enctype="multipart/form-data">
									@csrf
									<div class="form-group row">
										<label for="name" class="col-4 col-form-label">NOMBRE</label> 
										<div class="col-8">
											<input id="name" name="name" placeholder="{{ $user->name }}" class="form-control here" type="text" readonly>
										</div>
									</div>
									<div class="form-group row">
										<label for="lastname" class="col-4 col-form-label">E-MAIL</label> 
										<div class="col-8">
											<input id="email" name="email" placeholder="{{ $user->email }}" class="form-control here" type="text" readonly>
										</div>
									</div>
									<div class="form-group row">
										<label for="text" class="col-4 col-form-label">FECHA DE NACIMIENTO</label> 
										<div class="col-8">
											<input id="birthdate" name="birthdate" placeholder="{{ $user->birthdate }}" class="form-control here" required="required" type="text" readonly>
										</div>
									</div>
									<div class="form-group row">
										<label for="text" class="col-4 col-form-label">GÉNERO</label> 
										<div class="col-8">
											<input id="gender" name="gender" placeholder="{{ $user->gender }}" class="form-control here" required="required" type="text" readonly >
										</div>
									</div>
									<div class="form-group row">
										<label for="text" class="col-4 col-form-label">TELEFONO</label> 
										<div class="col-8">
											<input id="phone" name="phone" value="{{ $user->phone }}" class="form-control here" required="required" type="text">
										</div>
									</div>
									<div class="form-group row">
										<label for="text" class="col-4 col-form-label">PESO ACTUAL</label> 
										<div class="col-8">
											<input id="actual_weight" name="actual_weight" value="{{ $nutritionalPlan->actual_weight }}" class="form-control here" required="required" type="text"  pattern="[0-9]+([,\.][0-9]+)?" >
										</div>
									</div>
									<div class="form-group row">
										<label for="text" class="col-4 col-form-label">IMAGEN DE PERFIL</label> 
										<div class="col-8">
											<div class="input-group image-preview">
												<input type="text" class="form-control image-preview-filename" disabled="disabled">
												<span class="input-group-btn">
													<!-- image-preview-clear button -->
													<button type="button" class="btn btn-default image-preview-clear" style="display:none;">
													<i class="fas fa-trash-alt"></i> Clear
													</button>
													<!-- image-preview-input -->
													<div class="btn btn-default image-preview-input">
														<i class="fas fa-folder-open"></i>
														<span class="image-preview-input-title">Browse</span>
														<input type="file" accept="image/png, image/jpeg, image/gif" name="avatar"/>
													</div>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="offset-4 col-8">
											<button name="submit" type="submit" class="button button-border">ACTUALIZAR</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.main-wrapper -->
@endsection