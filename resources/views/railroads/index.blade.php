@extends('layouts.app') @section('title', 'Lista zwrotnic') @section('content')
<div class="row">
	<div class="col-12">
		<h5 class="m-0">Istniejące zwrotnice stacji <span style="color:#0a829a;">{{ $station_name }}</span></h5>
				<p class="card-title float-none"><a href="{{ route('stations.show', $station_id)}}">Wróć do szczegółów stacji</a></p>
		<div class="form-group row">
			<div class="col-4 col-lg-1">
				<label for="cRow" class="col-form-label d-inline">Ilość wierszy</label>
				<select name="cRow" id="cRow" class="form-control d-inline">
					<option value="10">10</option>
					<option value="20">20</option>
					<option value="30">30</option>
					<option value="40">40</option>
					<option value="50">50</option>
				</select>
			</div>
		</div>
		<div class="row addInput">
		</div><!-- addInput -->	
	</div><!-- col-4 -->
</div><!-- row -->


@endsection