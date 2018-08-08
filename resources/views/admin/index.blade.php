@extends('admin.base')
@section('content')
<div class="sidebar" data-background-color="white" data-active-color="danger">
	<div class="sidebar-wrapper">
		<div class="logo">
			<a href="/admin" class="simple-text">
			ARJU - ADMIN
			</a>
		</div>
		<ul class="nav">
			<li class="active">
				<a href="/admin">
					<i class="fa fa-bars"></i>
					<p>Inicio</p>
				</a>
			</li>
			<li>
				<a href="/admin/users">
					<i class="fa fa-users"></i>
					<p>Usuarios</p>
				</a>
			</li>
			<li>
				<a href="/admin/trainingPlan">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<p>Planes</p>
				</a>
			</li>
			<li>
				<a href="/admin/workouts">
					<i class="fa fa-map"></i>
					<p>Workouts</p>
				</a>
			</li>
			<li>
				<a href="/admin/exercises">
					<i class="fa fa-life-ring" aria-hidden="true"></i>
					<p>Ejercicios</p>
				</a>
			</li>
			<li>
				<a href="/admin/exchageList">
					<i class="fa fa-beer" aria-hidden="true"></i>
					<p>Alimentos</p>
				</a>
			</li>
		</ul>
	</div>
</div>
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
				<a class="navbar-brand" href="#">Dashboard</a>
			</div>
			{{-- 
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="ti-panel"></i>
							<p>Stats</p>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="ti-settings"></i>
							<p>Settings</p>
						</a>
					</li>
				</ul>
			</div>
			--}}
		</div>
	</nav>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="card">
						<div class="content">
							<div class="row">
								<div class="col-xs-5">
									<div class="icon-big icon-warning text-center">
										<i class="ti-server"></i>
									</div>
								</div>
								<div class="col-xs-7">
									<div class="numbers">
										<p>Usuarios</p>
										{{ $usersCount }}
									</div>
								</div>
							</div>
							<div class="footer">
								<hr />
								<div class="stats">
									<i class="ti-reload"></i> Updated now
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="card">
						<div class="content">
							<div class="row">
								<div class="col-xs-5">
									<div class="icon-big icon-warning text-center">
										<i class="ti-server"></i>
									</div>
								</div>
								<div class="col-xs-7">
									<div class="numbers">
										<p>Planes activos</p>
										{{ $ordersCount }}
									</div>
								</div>
							</div>
							<div class="footer">
								<hr />
								<div class="stats">
									<i class="ti-reload"></i> Updated now
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