@extends('layouts.app')

@section('title', 'Lista stacji')

@section('content')
<table>
  <tr>
    <td>Nazwa stacji:</td>
    <td><input type="text" value="{{$station->name}}"></td>
  </tr>

  <tr>
    <td>Uwagi:</td>
    <td><input type="text" value="{{$station->comments}}"></td>
  </tr>

  <tr>
    <td>Załączniki:</td>
    <td></td>
  </tr>

  <tr>
    <td>Utworzono:</td>
    <td><small>{{$station->created_at}}</small></td>
  </tr>

  <tr>
    <td>Zaaktualizowano:</td>
    <td><small>{{$station->updated_at}}</small></td>
  </tr>

  <tr>
    <td>Zapisz</td>
    <td><small>Anuluj</small></td>
  </tr>
</table>

<div class="row">
  <div class="col-md-8">
    <form>
      <div class="row">
        <div class="col-md-4 pr-1">
          <div class="form-group">
            <label>ID</label>
            <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$station->id}}">
          </div>
        </div>
        <div class="col-md-4 px-1">
          <div class="form-group">
            <label>Nazwa stacji</label>
            <input name="name" type="text" class="form-control" placeholder="Nazwa stacji" value="{{$station->name}}">
          </div>
        </div>
        <div class="col-md-4 pl-1">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" placeholder="Email">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 pr-1">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" placeholder="Company" value="Chet">
          </div>
        </div>
        <div class="col-md-6 pl-1">
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" placeholder="Last Name" value="Faker">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 pr-1">
          <div class="form-group">
            <label>City</label>
            <input type="text" class="form-control" placeholder="City" value="Melbourne">
          </div>
        </div>
        <div class="col-md-4 px-1">
          <div class="form-group">
            <label>Country</label>
            <input type="text" class="form-control" placeholder="Country" value="Australia">
          </div>
        </div>
        <div class="col-md-4 pl-1">
          <div class="form-group">
            <label>Postal Code</label>
            <input type="number" class="form-control" placeholder="ZIP Code">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Komentarz</label>
            <textarea class="form-control textarea">{{$station->comments}}</textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="update ml-auto mr-auto">
          <button type="submit" class="btn btn-primary btn-round">Aktualizuj</button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection
