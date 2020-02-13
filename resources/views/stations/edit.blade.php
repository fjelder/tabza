@extends('layouts.app')

@section('title', 'Lista stacji')

@section('content')
<div class="row">
    <div class="col-md-8">
        <form method="POST" action="{{ route('stations.update', $station->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-1 pr-1">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$station->id}}">
                    </div>
                </div>
                <div class="col-md-11 pl-1">
                    <div class="form-group">
                        <label>Nazwa stacji</label>
                        <input name="name" type="text" class="form-control" placeholder="Nazwa stacji" value="{{$station->name}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Komentarz</label>
                        <textarea name="comments" class="form-control textarea">{{$station->comments}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pr-1">
                    <div class="form-group">
                        <label for="created_at">Utworzono</label>
                        <input type="email" class="form-control" value="{{ $station->created_at }}" disabled>
                    </div>
                </div>
                <div class="col-md-6 pl-1">
                    <div class="form-group">
                        <label for="created_at">Zaaktualizowano</label>
                        <input type="email" class="form-control" value="{{ $station->updated_at }}" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="attachments">Lista załączników</label>
                    <ul>
                        <li><a href="#">Plan schematyczny</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary btn-round">Aktualizuj</button>
                    <a href="{{ url()->previous()}}"><button type="button" class="btn btn-danger btn-round">Anuluj</button></a>

                </div>
            </div>
        </form>
    </div>
</div>

@endsection
