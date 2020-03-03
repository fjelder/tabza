@extends('layouts.app') @section('title', 'Lista stacji') @section('card_title', 'Stacja ::: '.$station->name ) @section('content')

<div class="col-sm-12">
	<div class="card">
		<div class="card-header">
			<h5 class="card-title">Szczegóły stacji :: {{ $station->name }}</h5>
			<h6 class="card-subtitle mb-2 text-muted">----------------------------</h6>
		</div>

		<div class="card-body">
			<dl class="row border-bottom">

				<dt class="col-sm-2">Zwrotnice</dt>
				<dd class="col-sm-8">
					@isset($railroads)
						<ul>
							@foreach($railroads as $railroad)
							<li class="">{{$railroad->name}}</li> 
							@endforeach
						</ul>
					@endisset
				</dd>
				<dd class="col-sm-2">
					<a href="{{ route('railroad.index', $station->id) }}" class="">Edytuj</a>
				</dd>
			</dl>

			<dl class="row border-bottom">
				<dt class="col-sm-2">Odciniki izolowane</dt>
				<dd class="col-sm-4">
					<p>Torowe</p>
					@foreach($railroads as $railroad)
					<span class="">{{$railroad->name}}</span> @endforeach
				</dd>
				<dd class="col-sm-4">
					<p>Zwrotnicowe</p>
					@foreach($railroads as $railroad)
					<span class="">{{$railroad->name}}</span> @endforeach
				</dd>
				<dd class="col-sm-2">
					<a href="{{ route('railroad.index', $station->id) }}" class="">Edytuj</a>
				</dd>
			</dl>

			<dl class="row border-bottom">
				<dt class="col-sm-2">Przebiegi pociągowe</dt>
				<dd class="col-sm-8">
					@foreach($railroads as $railroad)
					<p class="">{{$railroad->name}}</p> 
					@endforeach
				</dd>
				<dd class="col-sm-2">
					<a href="{{ route('railroad.index', $station->id) }}" class="">Edytuj</a>
				</dd>
			</dl>
		</div>

		<div class="card-footer text-muted">
			<p>Utworzono:: {{ $station->created_at }}</p>
			<p>Zaktualizowano:: {{ $station->created_at }}</p>
		</div>

	</div>



</div>



@endsection