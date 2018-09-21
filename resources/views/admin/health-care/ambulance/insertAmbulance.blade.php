<br><br>
@extends('admin.layouts.master')
@section('content')
<div class="panel panel-default">
<div class="panel-headin">
  <div class="well well-sm" style="color: #333;background-color: #4D545D;border-color: #ddd;">
    <h3>Add New Ambulance</h3>
  </div>
</div>
<form action="/dashboard/ambulance/store" method="post" id="validator">
  <div class="row">
      {{ csrf_field() }}
    <div class="col-lg-2 col-sm-2">
      <div class="from-group">
        <input type="text" name="car_no" id="car_no" placeholder="Car No" class="form-control" required>  
      </div>
    </div>
    <div class="col-lg-2 col-sm-2">
      <div class="from-group">
        <input type="text" name="owner" id="owner" placeholder="Owner Name" class="form-control" required>  
      </div>
    </div>
    <div class="col-lg-2 col-sm-2">
      <div class="from-group">
        <input type="text" name="contact" id="contact" placeholder="Contact" class="form-control" required>  
      </div>
    </div> 
    <div class="col-lg-3 col-sm-3">
      <div class="from-group">
        <input type="text" name="address" id="address" placeholder="Address" class="form-control" required>  
      </div>
    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="from-group">
        <select class="country form-control" name="hospital_id" required>
          <option value="0" selected="true">-Select-Hospital-Name-</option>
          @foreach($hospitals as $hospital)
            <option value="{{$hospital->id}}">{{$hospital->name}}</option>
          @endforeach
        </select>  
      </div>
    </div>  
  </div>
  <br>
  <input type="submit" name="Save" id="save" class="btn btn-primary">  
</form> 
</div>
@endsection

