@extends('layouts.app')

@section('title', 'Lista stacji')
@section('card_title', 'Stacja ::: '.$station->name )
@section('content')
<dl class="row">
    <dt class="col-sm-3">Zwrotnice</dt>
    <dd class="col-sm-6">
        @foreach($railroads as $railroad)
            {{$railroad->name}}; 
        @endforeach
    </dd>
    <dd class="col-sm-3"><a href="{{ route('railroad.index', $station->id) }}">Edytuj</a></dd>
</dl>
<dl class="row">
    <dt class="col-sm-3">Odcinki izolowane</dt>
    <dd class="col-sm-6">
        <p>torowe</p>
        <p>JtA, JtB, JtC</p>
        <p>zwrotnicowe</p>
        <p>Jz1, Jz2, Jz4</p>
    </dd>
    <dd class="col-sm-3">Edytuj</dd>
</dl>

<dl class="row">
    <dt class="col-sm-3">Komentarz</dt>
    <dd class="col-sm-9">
        <p>{{$station->comments}}</p>
    </dd>

    <dt class="col-sm-3">Załączniki</dt>
    <dd class="col-sm-9">
        <ul>
            <li><a href="#">Plan schematyczny</a></li>
            <li><a href="#">Plan izolacji</a></li>
        </ul>
    </dd>

    <dt class="col-sm-3">Utworzono</dt>
    <dd class="col-sm-9">{{$station->created_at}}</dd>

    <dt class="col-sm-3 text-truncate">Zaktualizowano</dt>
    <dd class="col-sm-9">{{$station->updated_at}}</dd>
</dl>

@endsection
