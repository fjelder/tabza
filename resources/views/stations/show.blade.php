@extends('layouts.app')

@section('title', 'Lista stacji')
@section('card_title', 'Szczegóły wybranej stacji')
@section('content')
<p>Nazwa stacji: <b>{{$station->name}}</b></p>
<p>Uwagi: <b>{{$station->comments}}</b></p>
<p>Załączniki: <b></b></p>
<p>Utworzono: <b>{{$station->created_at}}</b></p>
<p>Zaaktualizowano: <b>{{$station->updated_at}}</b></p>
@endsection
