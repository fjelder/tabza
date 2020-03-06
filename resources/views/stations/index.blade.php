@extends('layouts.app')
@section('title', 'Lista stacji')
@section('content')
<div class="row">
    <div class="col-12">
                <h5>Lista stacji</h5>
                <h6 class="text-muted">Wykaz wszystkich stacji w systemie</h6>

                <table class="table table-hover text-nowrap table-striped">
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
                            <td class="d-none d-lg-table-cell">{{$station->updated_at->format('d.m.Y')}}r.</td>
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

                    <a href="{{route('stations.create')}}" class="btn btn-primary btn-float">Dodaj nową stację</a>

        </div>
    </div>
    <!-- row -->
@endsection
