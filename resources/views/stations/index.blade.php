@extends('layouts.app')
@section('title', 'Lista stacji')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title">Lista stacji</h5>
                <h6 class="card-subtitle mb-2 text-muted">Wykaz wszystkich stacji w systemie</h6>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0 table-responsive">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nazwa stacji</th>
                            <th class="d-none d-lg-table-cell">Linia kolejowa</th>
                            <th class="d-none d-lg-table-cell">Zakład linii kolejowych</th>
                            <th class="d-none d-lg-table-cell">Ostatnia aktualizacja</th>
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
                            <td class="d-none d-lg-table-cell">Linia Kolejowa nr 15</td>
														<td class="d-none d-lg-table-cell"><a href="{{route('iz.index')}}">{{$station->izs->name}}</a></td>
                            <td class="d-none d-lg-table-cell">{{$station->updated_at}}</td>
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
    </div>
    <!-- row -->
@endsection
