@extends('base')
@section('content')
<div class="main-wrapper">
	@include('layouts.navbar')
	<div class="gray-background">
		<div class="container">
			<div class="clearfix">
				<h4 class="text-uppercase text-center mt-4 mb-4">{{ $trainingPlan->name }}</h4>
			</div>
			<div class="row">
				<div class="center">
					<p>{{ $trainingPlan->short_description }}</p>
					<hr>
				</div>
			</div>
			<div id="calendar">
				<table>
					<tbody class="days_cal">
						@foreach($details->chunk(5) as $chunk)
						<tr>
							@foreach($chunk as $item) 
							<td><a href="/workout/{{ $item->workout_id }}">{{ $item->day }}</a></td>
							@endforeach 
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.main-wrapper -->
@endsection