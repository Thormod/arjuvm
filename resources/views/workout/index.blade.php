@extends('base')
@section('content')
<div class="main-wrapper">
	@include('layouts.navbar')
	<div class="gray-background">
		<div class="container">
			<div class="clearfix">
				<h4 class="text-uppercase text-center mt-4 mb-4">{{ $workout->name }}</h4>
			</div>
			<div class="row">
				<div class="center">
					<p>{{ $workout->description }}</p>
				</div>
			</div>
			<div class="row exercise-list">
				@foreach ($exercises as $exercise)
				<div class="exercise list-group modal-instance" style="width: 100%">
					<a href="#" class="btn modal-trigger list-group-item" style="width: 100%;display: block;" data-modal-index="1" data-toggle="modal" data-target="#modal-id-{{ $exercise->id}}">
						<i class="fa fa-chevron-right"></i>
						<h4 class="mb-0">{{ $exercise->name }}</h4>
						<div style="font-weight: 200; white-space: normal;" class="exercise-instructions p-3">
							<div class="details center">
								<div class="wrapper center">
									<div class="spec sets"> <span>{{ $exercise->sets }}</span> <label>Sets</label></div>
									<div class="spec reps"> <span>{{ $exercise->reps }}</span> <label>Reps</label></div>
									<div class="spec rest"> <span>{{ $exercise->rest }}</span> <label>Rest</label></div>
								</div>
							</div>
						</div>
						<img src="{{ $exercise->image_url }}" width="200px"alt="Crunch">
					</a>
				</div>
				<!-- Modal -->
				<div class="exercise-modal modal fade" id="modal-id-{{ $exercise->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<iframe id="yotube" width="560" height="400"  src="{{ $exercise->video_url }}" frameborder="0" allowfullscreen></iframe> 
								<div class="center">
									<h4 class="title">{{ $exercise->name }}</h4>
								</div>
								<div class="description">
									<p>
										{{ $exercise->description }}
									</p>
								</div>
								<div class="details center">
										<div class="wrapper center">
											<div class="spec sets"> <span>{{ $exercise->sets }}</span> <label>Sets</label></div>
											<div class="spec reps"> <span>{{ $exercise->reps }}</span> <label>Reps</label></div>
											<div class="spec rest"> <span>{{ $exercise->rest }}</span> <label>Rest</label></div>
										</div>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="center button button-bg button-buying" data-dismiss="modal" onclick="document.getElementById('yotube').pause();">Cerrar</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /.main-wrapper -->
				@endforeach
			</div>
			<button class="center button button-bg button-buying"  data-modal-index="1" data-toggle="modal" data-target="#modal-video">Descarga PDF</button>
		</div>
	</div>
</div>
@endsection