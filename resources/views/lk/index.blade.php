@extends('layouts.app')
@section('title', 'Lista linii kolejowych')
@section('content')
<div class="col-lg-12">
    <div class="card card-danger card-outline">
        <div class="card-header">
            <h3 class="card-title">Linie kolejowe</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Wyszukaj">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Linia relacji</th>
                        <th>Numer</th>
                        <th>Edytuj</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lks as $lk)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><b>{{ $lk->nameA }} - {{ $lk->nameB }}</b></td>
                        <td>{{ $lk->number }}</td>
                        <td>
                            <a href="{{ route('lk.edit', $lk->id) }}" class="btn btn-float btn-outline-primary btn-sm" role="button"><i class="far fa-edit"></i></a>
                        </td>
                    </tr>
                    @isset($lk->stations[0]->name)
                    <tr style="border-top-style: hidden">
                        <td>#</td>
                            <td colspan="3">
                                <ul>
                        @foreach($lk->stations as $station)
                        <li>
                            <a href="{{route('stations.show', $station->id)}}">{{$station->name}}</a>
                        </li>
                        @endforeach
                                </ul>
                            </td>
                        </tr>
                        @endisset
                    @endforeach
                    

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <a name="" id="" class="btn btn-primary" href="#" role="button">Dodaj nową</a>
        </div>
    </div>
    <!-- /.card -->
</div>

@endsection