@extends('layouts.app')

@section('title', 'Lista stacji')
@section('card_title', 'Lista stacji')
@section('content')
<div class="table-responsive">
  <table class="table">
    <thead class=" text-primary">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nazwa</th>
        <th scope="col">Komentarz</th>
        <th scope="col">Akcja</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($stations as $key => $station)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td><a href="{{route('stations.show', $station->id)}}">{{$station->name}}</a></td>
        <td>{{$station->comments}}</td>
        <td>
            <form action="{{ route('stations.destroy', $station->id) }}" method="POST">
            @csrf
            @method('delete')
            <a href="{{route('stations.edit', $station->id)}}" class="btn btn-outline-primary" role="button">Edytuj</a>
            <button class="btn btn-outline-danger" type="submit">Usuń</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<a href="{{route('stations.create')}}">Dodaj nową stację</a>
@endsection
