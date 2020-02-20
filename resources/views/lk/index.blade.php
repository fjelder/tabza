@extends('layouts.app')
@section('title', 'Lista linii kolejowych')
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card card-danger card-outline border">
            <div class="card-header">
                <h3 class="card-title">Linie kolejowe</h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table class="table table-hover table-sm lk-list">
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
                            <td><b>{{ $lk->nameA }} - {{ $lk->nameB }}</b>
                                <ul>
                                    @foreach($lk->stations as $station)
                                    <li>
                                        <a href="{{route('stations.show', $station->id)}}">{{$station->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{ $lk->number }}</td>
                            <td>
                                <a href="{{ route('lk.edit', $lk->id) }}" class="btn btn-float btn-outline-primary btn-sm" role="button"><i class="far fa-edit"></i></a>
                            </td>
                        </tr>
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
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Dodaj nową linie kolejową</h5>
                <h6 class="card-subtitle mb-2 text-muted">Uzupelnij formularz poniżej</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>

</div>
<!--row-->
@endsection