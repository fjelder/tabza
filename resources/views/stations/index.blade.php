@extends('layouts.app')
@section('title', 'Lista stacji')
@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Lista stacji</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0 table-responsive">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nazwa stacji</th>
                        <th>Linia kolejowa</th>
                        <th>Zakład linii kolejowych</th>
                        <th>Ostatnia aktualizacja</th>
                        <th>Akcja</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stations as $key => $station)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>
                            <a href="{{route('stations.show', $station->id)}}">{{$station->name}}</a>
                        </td>
                        <td>Linia Kolejowa nr 15</td>
                        <td>Zakład Linii Kolejowych w Poznaniu</td>
                        <td>{{$station->updated_at}}</td>
                        <td>
                            <form action="{{ route('stations.destroy', $station->id) }}" method="POST">
                                @csrf @method('delete')
                                <a href="{{route('stations.edit', $station->id)}}"
                                    class="btn btn-float btn-outline-primary btn-sm" role="button"><i
                                        class="far fa-edit"></i></a>
                                <button class="btn btn-float btn-outline-danger btn-sm" type="submit">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <a href="{{route('stations.create')}}" class="btn btn-primary btn-float">Dodaj nową stację</a>
        </div>
    </div>
    <!-- /.card -->
</div>
@endsection