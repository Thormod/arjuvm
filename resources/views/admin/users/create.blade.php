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
				<a class="navbar-brand" href="#">Crear usuario</a>
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
                                <form action="/admin/users/store" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Name">Nombre:</label>
                                    <input type="text" class="form-control border-input" name="name" id="name" required="required">
									</div>
                                </div>
                                <div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Name">Número de Celular:</label>
                                    <input type="text" class="form-control border-input" name="phone" id="phone" required="required">
									</div>
                                </div>
                                <div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Name">E-mail:</label>
                                    <input type="text" class="form-control border-input" name="email" id="email" required="required">
									</div>
                                </div>
                                <div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Name">Contraseña:</label>
                                    <input type="text" class="form-control border-input" name="password" id="password" required="required">
									</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="form-group col-md-4">
                                        <label for="Name">Admin:</label>
                                        <select class="border-input form-control" name="admin" id="admin">
                                            <option value="0">Usuario</option>
                                            <option value="1">Admin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
									<div class="col-md-4"></div>
                                    <div class="form-group col-md-4">
                                        <label for="Name">Género:</label>
                                        <select class="border-input form-control" name="gender" id="gender">
                                            <option value="male">Hombre</option>
                                            <option value="female">Mujer</option>
                                        </select>
                                    </div>
                                </div>

								<div class="row">
									<div class="col-md-4"></div>
                                    <div class="form-group col-md-4">
                                        <label for="Name">Fecha de Nacimiento:</label>
										<input class="border-input form-control" type="date"  placeholder="YYYY-MM-DD" name="birthdate" id="birthdate" required="required">                                        
                                    </div>
                                </div>
								
								<div class="center">
									<button type="submit" class="btn btn-info btn-fill btn-wd">Crear</button>
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