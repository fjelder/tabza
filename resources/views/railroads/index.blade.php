@extends('layouts.app')

@section('title', 'Lista zwrotnic')
@section('card_title', 'Lista zwrotnic stacji :: '.$station_name)
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="table-responsive" style="overflow: auto">
            <table class="table">
                <thead class=" text-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nazwa</th>
                        <th scope="col">Usuń</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($railroads as $key => $railroad)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$railroad->name}}</td>
                        <td>
                            <form action="{{ route('railroad.destroy', [$station_id, $railroad->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger" type="submit">Usuń</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-6">
        <div class="table-responsive" style="overflow: hidden">
            <table class="table">
                <thead class=" text-primary">
                    <tr>
                        <th scope="col">#Dodaj nową zwrotnicę</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <form method="POST" action="{{ route('railroad.store', $station_id) }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Nazwa zwrotnicy</label>
                                    <div class="col-sm-10">
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Wpisz nazwę zwrotnicy">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Dodaj</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<a href="{{route('railroad.create', $station_id)}}">Nowa zwrotnica</a>
@endsection
