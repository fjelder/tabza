@extends('layouts.app')

@section('title', 'Lista stacji')
@section('card_title', 'Stacja ::: '.$station->name )
@section('content')

<div class="col-sm-12">
	<dl class="row">
		<dt class="col-sm-12">
			<h3>Szczegóły stacji {{ $station->name }}</h3>
		</dt>
		<dt class="col-sm-2">Zwrotnice</dt>
		<dd class="col-sm-8">
            @foreach($railroads as $railroad)
			<span class="">{{$railroad->name}}</span>
            @endforeach
		</dd>
		<dd class="col-sm-2">
			<a href="{{ route('railroad.index', $station->id) }}" class="btn btn-primary">Edytuj</a>
		</dd>

		<dt class="col-sm-3">Euismod</dt>
		<dd class="col-sm-9">
			<p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
			<p>Donec id elit non mi porta gravida at eget metus.</p>
		</dd>

		<dt class="col-sm-3">Malesuada porta</dt>
		<dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

		<dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
		<dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
            justo sit amet risus.</dd>

		<dt class="col-sm-3">Nesting</dt>
		<dd class="col-sm-9">
			<dl class="row">
				<dt class="col-sm-4">Nested definition list</dt>
				<dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
			</dl>
		</dd>
	</dl>
</div>



@endsection
