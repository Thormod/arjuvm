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
				<a class="navbar-brand" href="#">Dashboard</a>
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