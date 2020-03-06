@extends('layouts.app') 
@section('title', 'Stacja '.$station->name) 
@section('content')
<div class="row">
	<div class="col-12">
		<h3>Stacja {{ $station->name }} <small class="text-muted"> --Utw. {{ $station->created_at->format('d.m.Y') }} # Akt. {{ $station->updated_at->format('d.m.Y') }}</small> </h3>
		<h6 class="text-muted">
			<a href="{{route('stations.edit', $station->id)}}">#Edytuj szczegóły stacji</a>
		</h6>
		<div class="card-columns">
			
			@isset($station->lks)
			<div class="card">
				<div class="card-body">
					@if(count($station->lks) > 1)
					<h5>Linie kolejowa</h5>
					@else
					<h5>Linia kolejowa</h5>
					@endif
					<ul>
						@foreach($station->lks as $lk)
						<li>nr {{$lk->number}} {{$lk->nameA}} - {{$lk->nameB}}</li>
						@endforeach
					</ul>
					<p>{{$station->izs->name}}</p>
				</div>
				<!-- card-body -->
			</div>
			<!-- card -->
			@endisset

			@isset($railroads)
			<div class="card">
				<div class="card-body">
					<h5>Zwrotnice</h5>
					<ul>
						@foreach($railroads as $railroad)
						<li>{{$railroad->name}}</li>
						@endforeach
					</ul>
					<p class="card-text"><a href="{{ route('railroad.index', $station->id) }}" class="btn btn-primary btn-sm">Edytuj</a></p>
				</div>
				<!-- card-body -->
			</div>
			<!-- card -->
			@endisset

			@isset($railroads)
			<div class="card">
				<div class="card-body">
					<h5>Odcinki izolowane</h5>
					<div class="row">
						<div class="col-sm-6">
							<p class="card-text">torowe</p>
							<ul>
							@foreach($railroads as $railroad)
							<li>{{$railroad->name}}</li>
							@endforeach
							</ul>
						</div>
						<!-- col-sm-6 -->

						<div class="col-sm-6">
							<p class="card-text">zwrotnicowe</p>
							<ul>
							@foreach($railroads as $railroad)
							<li>{{$railroad->name}}</li>
							@endforeach
							</ul>
						</div>
						<!-- col-sm-6 -->
					</div>
					<!-- row -->

					<p class="card-text"><a href="{{ route('railroad.index', $station->id) }}" class="btn btn-primary btn-sm">Edytuj</a></p>
				</div>
				<!-- card-body -->
			</div>
			<!-- card -->
			@endisset

		</div>
		<!-- card-column -->

	</div>
	<!-- col-12 -->

	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h5>Wykaz przebiegów</h5>
				<table class="table table-striped table-sm table-responsive-sm">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Sygnał</th>
							<th scope="col">Nazwa przebiegu</th>
							<th scope="col">Sekcja/Wariant</th>
							<th scope="col">Zwrotnice</th>
							<th scope="col">Odcinki izolowane torowe</th>
							<th scope="col">Odcinki izolowane zwrotnicowe</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
					</tbody>
				</table>
				<p class="card-text"><a href="{{ route('railroad.index', $station->id) }}" class="btn btn-primary btn-sm">Edytuj</a></p>
			</div>
			<!-- card-body -->
		</div>
		<!-- card -->
	</div>
	<!-- col-12 -->
</div>
<!-- row -->

@endsection