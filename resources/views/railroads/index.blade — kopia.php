@extends('layouts.app')

@section('title', 'Lista zwrotnic')
@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Dodaj zwrotnicę</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('railroad.store', $station_id) }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nazwa zwrotnicy</label>
                                <input name="name" type="text" class="form-control" placeholder="..." value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Dodaj</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Istniejące zwrotnice stacji {{ $station_name }}</h5>
                <a href="{{ route('stations.show', $station_id)}}">Wróć do szczegółów stacji</a>
            </div>
            <div class="card-body">
                <div class="table-responsive" style="overflow: auto">
                    <table class="table">
                        <thead class=" text-primary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nazwa</th>
                                <th scope="col">Usuń</th>
                            </tr>
                        </thead>
                        <form action="{{ route('railroad.update', [$station_id, 1])}}" method="post">
                        @csrf
                        @method('put')
                        <tbody>
                            @foreach ($railroads as $key => $railroad)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td><input type="text" name="name" value="{{$railroad->name}}" class="form-control" /></td>
                                <td>
                                    <form action="{{ route('railroad.destroy', [$station_id, $railroad->id]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                            <tr><td><button type="submit" class="btn btn-primary btn-round">Daktualizuj</button></td></tr>
 
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
