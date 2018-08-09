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
                <a class="navbar-brand" href="#">Plan - {{ $order->id }}</a>
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
						<div class="content table-responsive table-full-width">
							<div class="row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="Name">Usuario:</label>
                                    <input type="text" class="form-control border-input" value="{{ $user->email }}" name="name" id="name" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="Name">Plan de Entrenamiento:</label>
                                    <input type="text" class="form-control border-input" value="{{ $trainingPlan->name }}" name="name" id="name" readonly>
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