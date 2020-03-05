@extends('layouts.app') @section('title', 'Lista zwrotnic') @section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header card-danger card-outline">
				<h5 class="m-0">Istniejące zwrotnice stacji <span style="color:#0a829a;">{{ $station_name }}</span></h5>
				<p class="card-title float-none"><a href="{{ route('stations.show', $station_id)}}">Wróć do szczegółów stacji</a></p>
			</div>
			<div class="card-body">
				@if (session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
				@endif

				<div class="row">
					
			
				@forelse ($railroads as $railroad)
				    <div class="col-lg-3">
				    	<div class="form-group row mb-3">
				    		<label for="" class="col-form-label col-2 pr-0">#{{$loop->iteration}}</label>
				    		<input name="zwrotnica[{{$railroad->id}}]" type="text" class="form-control col-6" value="{{ $railroad->name }}">
				    		<div class="col-2 pl-1">
					    		<form action="{{ route('railroad.destroy', [$station_id, $railroad->id]) }}" method="POST">
									@csrf @method('delete')
					    		<button class="btn" type="submit"><i class="fas fa-trash-alt"></i></button>
					    		</form>
				    		</div>
				    	</div>
				    </div>
				    
				    <!-- @if(($loop->iteration % 4) == 0)
					<div class="col-12 border-bottom mb-3"></div>
				    @endif -->
				@empty
				    <p>Brak zdefiniowanuch zwrotnic.</p>
				@endforelse
				</div>

				<!-- <form action="{{route('railroad.update', [$station_id, null])}}" method="post">
					@csrf @method('put') @foreach ($railroads as $key => $railroad)
					<div class="form-group row">
						<label for="zwr1" class="col-sm-2 col-form-label">#{{$key+1}}</label>
						<div class="col-sm-5">
							<input name="zwrotnica[{{$railroad->id}}]" type="text" class="form-control" value="{{ $railroad->name }}">
						</div>

						<div class="col-sm-5">
							<form action="{{ route('railroad.destroy', [$station_id, $railroad->id]) }}" method="POST">
								@csrf @method('delete')
								<button class="btn btn-danger" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
							</form>
						</div>


					</div>

					@endforeach -->
			</div>
			<!-- /.card-body -->
			<div class="card-footer">
				<button type="submit" class="btn btn-primary">Aktualizuj</button>
			</div>
			</form>
			<!-- /.card-footer -->
		</div>
	</div>
	<!-- /.col-md-6 -->

	<div class="col-md-6">
		<div class="card card-primary card-outline">
			<div class="card-header">
				<h3 class="card-title">Dodaj zwrotnicę2</h3>
			</div>

			<div class="card-body">
				<form method="POST" action="{{ route('railroad.store', $station_id) }}">
					@csrf

					<div class="input_fields_wrap">
						<div class="form-group">
							<div class="form-row">
								<div class="col-2"><label class="col-form-label xx2">#1</label></div>
								<div class="col-7">
									<input type="text" name="name[]" placeholder="..." value="" class="form-control" required>
								</div>
								<div class="col-3">
								<button class="add_field_button mb-4 btn"><i class="fas fa-plus"></i></button>
							</div>
							</div>
							
						</div>
						<!-- form-row -->
					</div>
					<!-- /.form-group -->
			</div>
			<!-- /.card-body -->

			<div class="card-footer">
				<button type="submit" class="btn btn-primary">Dodaj</button>
			</div>
			<!-- /.card-footer -->
			</form>
		</div>
		<!-- /.card -->
	</div>
	<!-- /.col-md-4 -->

</div>
@endsection