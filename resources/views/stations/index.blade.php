@extends('layouts.app')

@section('title', 'Lista stacji')
@section('card_title', 'Lista stacji')
@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nazwa</th>
            <th scope="col">Akcja</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($stations as $key => $station)
          <tr>
            <th scope="row">{{$key+1}}</th>
            <td><a href="{{route('stations.show', $station->id)}}">{{$station->name}}</a></td>
            <td>
              <a href="{{route('stations.edit', $station->id)}}" class="btn btn-outline-primary" role="button">Edytuj</a>
              <form action="{{ route('stations.destroy', $station->id) }}" method="POST">
   	 						@csrf
								@method('delete')
								<button type="submit" class="btn btn-primary">Kasuj</button>
							</form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<a href="{{route('stations.create')}}">Dodaj nową stację</a>
@endsection
