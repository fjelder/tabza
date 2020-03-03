@extends('layouts.app')
@section('title', 'Lista stacji')
@section('content')
<div class="col-md-12">
    <div class="card card-danger card-outline">
        <div class="card-header">
            <h5 class="card-title">Zakłady Linii Kolejowych</h5>

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
        <div class="card-body table-responsive p-0">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Nazwa</th>
                        <th>Adres</th>
                        <th>Edytuj</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($izs as $iz)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $iz->name }}</td>
                        <td>{{ $iz->street }} {{$iz->number}},
                            @php
                            $postcode[0] = substr($iz->postcode, 0, 2);
                            $postcode[1] = substr($iz->postcode, 2);
                            echo $postcode[0].'-'.$postcode[1].' '.$iz->city;
                            @endphp
                        </td>
                        <td>
                            <a href="{{ route('iz.edit', $iz->id) }}" class="btn btn-float btn-outline-primary btn-sm" role="button"><i class="far fa-edit"></i></a>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

@endsection