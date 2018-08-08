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
				<a class="navbar-brand" href="#">Ejercicios</a>
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
						<div class="header">
							<h4 class="title">Tabla de alimentos</h4>
							<p class="category"><a href="/admin/exchangeList/create" type="submit" class="btn btn-fill btn-wd">Agregar</a></p>
						</div>
						<div class="content table-responsive table-full-width">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nombre</th>
										<th></th>
										<th></th>
									</tr>
								</thead>
								@foreach ($exchangeList as $food)
								<tr>
									<td>{{ $food->id }}</td>
									<td>{{ $food->food_name }}</td>
                                    <td>
                                        <a href="/admin/exchangeList/edit/{{ $food->id }}" class="btn btn-info btn-fill btn-wd">Editar</button>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('exchangeList.destroy', [$food->id]) }}">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-fill btn-wd">Eliminar</button>
                                        </form>
                                    </td>
                                    
								</tr>
								@endforeach
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection