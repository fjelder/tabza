@extends('layouts.app')

@section('title', 'Lista stacji')

@section('content')
<table>
  <tr>
    <td>Nazwa stacji:</td>
    <td><input type="text" value="{{$station->name}}"></td>
  </tr>

  <tr>
    <td>Uwagi:</td>
    <td><input type="text" value="{{$station->comments}}"></td>
  </tr>

  <tr>
    <td>Załączniki:</td>
    <td></td>
  </tr>

  <tr>
    <td>Utworzono:</td>
    <td><small>{{$station->created_at}}</small></td>
  </tr>

  <tr>
    <td>Zaaktualizowano:</td>
    <td><small>{{$station->updated_at}}</small></td>
  </tr>

  <tr>
    <td>Zapisz</td>
    <td><small>Anuluj</small></td>
  </tr>
</table>
@endsection
