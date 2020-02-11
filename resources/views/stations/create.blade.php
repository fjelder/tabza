@extends('layouts.app')

@section('title', 'Dodaj nową stację')
@section('card_title', 'Dodaj nową stację')
@section('content')

<form method="POST" action="{{ route('stations.store') }}">
  @csrf
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Stacja</label>
    <div class="col-sm-10">
      <input id="name" name="name" type="text" class="form-control" placeholder="Wpisz nazwę stacji">
    </div>
  </div>
  <div class="form-group row">
    <label for="comments" class="col-sm-2 col-form-label">Uwagi</label>
    <div class="col-sm-10">
      <textarea id="comments" name="comments" class="form-control"  rows="3" placeholder="Dodaj uwagi"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-2">Załączniki</div>
    <div class="col-sm-10">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="attachment" disabled>
        <label class="custom-file-label" for="attachment">Wybierz plik</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Dodaj</button>
      <button type="reset" class="btn btn-primary">Anuluj</button>
    </div>
  </div>
</form>
@endsection
