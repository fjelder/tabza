@extends('layouts.app')

@section('title', 'Lista zwrotnic')
@section('content')

<div class="col-md-6">
    <div class="card">
        <div class="card-header card-danger card-outline">
            <h5 class="m-0">Istniejące zwrotnice stacji :: <b>{{ $station_name }}</b></h5>
            <p class="card-title float-none"><a href="{{ route('stations.show', $station_id)}}">Wróć do szczegółów stacji</a></p> 
        </div>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{route('railroad.update', [$station_id, null])}}" method="post">
                @csrf
                @method('put')
                @foreach ($railroads as $key => $railroad)
                <div class="form-group row">
                    <label for="zwr1" class="col-sm-2 col-form-label">#{{$key+1}}</label>
                    <div class="col-sm-10">
                      <input name="zwrotnica[{{$railroad->id}}]" type="text" class="form-control"  value="{{ $railroad->name }}">
                    </div>
                </div>
                
                @endforeach
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


<div class="col-md-4">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Dodaj zwrotnicę</h3>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('railroad.store', $station_id) }}">
                @csrf

                <div class="form-group">
                    <label>Nazwa zwrotnicy</label>
                    <input name="name" type="text" class="form-control" placeholder="..." value="" required>
                </div>
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




<!-- <div class="col-lg-6">
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

                        <tr>
                            <td><button type="submit" class="btn btn-primary btn-round">Aktualizuj</button></td>
                        </tr>

                    </form>
                </table>
            </div>
        </div>
    </div>
</div> -->

@endsection
