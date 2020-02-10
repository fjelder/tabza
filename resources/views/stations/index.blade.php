@extends('layouts.app')

@section('title', 'Lista stacji')
@section('card_title', 'Lista stacji')
@section('content')

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
      <td><a href="{{route('stations.edit', $station->id)}}">Edytuj</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{route('stations.create')}}">Dodaj nową stację</a>

@endsection
