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
				<a class="navbar-brand" href="#">Actualizar Alimento</a>
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
                                <form action="/admin/exchangeList/update/{{ $food->id }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
										<label for="Name">Nombre:</label>
                                    <input type="text" class="form-control border-input" value="{{ $food->food_name }}" name="food_name" id="food_name" required="required">
									</div>
								</div>
								<div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="form-group col-md-4">
                                        <label for="Name">Carbohidratos:</label>
                                        <input type="text" class="form-control border-input" value="{{ $food->carbohydrate_amount }}" name="carbohydrate_amount" id="carbohydrate_amount" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="form-group col-md-4">
                                        <label for="Name">Grasa:</label>
                                        <input type="text" class="form-control border-input" value="{{ $food->fat_amount }}" name="fat_amount" id="fat_amount" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="form-group col-md-4">
                                        <label for="Name">Proteina:</label>
                                        <input type="text" class="form-control border-input" value="{{ $food->protein_amount }}" name="protein_amount" id="protein_amount" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="form-group col-md-4">
                                        <label for="Name">Calorias:</label>
                                        <input type="text" class="form-control border-input" value="{{ $food->calorie_amount }}" name="calorie_amount" id="calorie_amount" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="form-group col-md-4">
                                        <label for="Name">Medida:</label>
                                        <input type="text" class="form-control border-input" value="{{ $food->measure }}" name="measure" id="measure" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="form-group col-md-4">
                                        <label for="Name">Tipo de Medida:</label>
                                        <input type="text" class="form-control border-input" value="{{ $food->measure_type }}" name="measure_type" id="measure_type" required="required">
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