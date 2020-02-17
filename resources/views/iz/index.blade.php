@extends('layouts.app')
@section('title', 'Lista stacji')
@section('content')

@foreach ($izs as $iz)
<div class="col-sm-4">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <a href="{{ route('iz.edit', $iz->id)}}">{{ $iz->name }}</a>
        </div>
        <div class="card-body">
            <h4 class="card-title">ul. {{ $iz->street }} {{$iz->number}}</h4>
            <p class="card-text">
                @php
                $postcode[0] = substr($iz->postcode, 0, 2);
                $postcode[1] = substr($iz->postcode, 2);
                echo $postcode[0].'-'.$postcode[1].' '.$iz->city;
                @endphp
            </p>
        </div>
        <div class="card-footer">
            <span class="text-muted p-0">
                Ost. aktualizacja: {{$iz->created_at->format('d/m/Y')}}
            </span>
        </div>
    </div>
</div>
@endforeach

@endsection