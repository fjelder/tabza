@extends('layouts.app') @section('title', 'Lista zwrotnic') @section('content')
<div class="row">
	<div class="col-12 mt-3 p-3 shadow">
		<h5 class="m-0">Istniejące zwrotnice stacji <span style="color:#0a829a;">{{ $station_name }}</span></h5>
				<p class="card-title float-none"><a href="{{ route('stations.show', $station_id)}}">Wróć do szczegółów stacji</a></p>
<!-- 		<div class="form-group row">
			<div class="col-4 col-lg-1">
				<label for="cRow" class="col-form-label d-inline">Ilość wierszy</label>
				<select name="cRow" id="cRow" class="form-control d-inline">
					<option value="10">10</option>
					<option value="20">20</option>
					<option value="30">30</option>
					<option value="40">40</option>
					<option value="50">50</option>
				</select>
			</div>
		</div>
		<div class="row addInput">
		</div><!-- addInput -->	
				
		<form action="" method="post">
    <div class="form-row">
      <div class="form-group col-sm-2">
        <label for="inputState">Ilość rozjazdów</label>
        <select id="cntRow" class="form-control form-control-sm">
          <option value="10" selected>10</option>
          <option value="20">20</option>
          <option value="30">30</option>
          <option value="40">40</option>
          <option value="50">50</option>
        </select>
      </div>
    </div>
    <div class="form-row addRow">
      <div class="form-group col-sm-2">
        <label for="" class="col-form-label col-form-label-sm">#1</label>
        <input name="zwr1" type="text" class="form-control form-control-sm mb-3" value="1/2">
      </div>
      <div class="form-group col-sm-2">
        <label for="" class="col-form-label col-form-label-sm">#2</label>
        <input name="zwr2" type="text" class="form-control form-control-sm" value="3/4">
      </div>
      <div class="form-group col-sm-2">
        <label for="" class="col-form-label col-form-label-sm">#3</label>
        <input name="zwr3" type="text" class="form-control form-control-sm" value="5">
      </div>
      <div class="form-group col-sm-2">
        <label for="" class="col-form-label col-form-label-sm">#4</label>
        <input name="zwr4" type="text" class="form-control form-control-sm" value="6">
      </div>
      <div class="form-group col-sm-2">
        <label for="" class="col-form-label col-form-label-sm">#5</label>
        <input name="zwr5" type="text" class="form-control form-control-sm" value="7/8cd">
      </div>
      <div class="form-group col-sm-2">
        <label for="" class="col-form-label col-form-label-sm">#6</label>
        <input name="zwr6" type="text" class="form-control form-control-sm" value="8ab">
      </div>
      <div class="form-group col-sm-2">
        <label for="" class="col-form-label col-form-label-sm">#7</label>
        <input name="zwr7" type="text" class="form-control form-control-sm" value="9">
      </div>
      <div class="form-group col-sm-2">
        <label for="" class="col-form-label col-form-label-sm">#8</label>
        <input name="zwr8" type="text" class="form-control form-control-sm" value="10">
      </div>
      <div class="form-group col-sm-2">
        <label for="" class="col-form-label col-form-label-sm">#9</label>
        <input name="zwr9" type="text" class="form-control form-control-sm" value="Wk4">
      </div>
      <div class="form-group col-sm-2">
        <label for="" class="col-form-label col-form-label-sm">#10</label>
        <input name="zwr10" type="text" class="form-control form-control-sm" value="14">
      </div>
    </div>




    <button type="submit" class="btn btn-primary">Aktualizuj</button>
    
  </form>
  <button type="" class="btn btn-primary x">Usun</button>
	</div><!-- col-4 -->
</div><!-- row -->


@endsection