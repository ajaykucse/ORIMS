<br><br>
@extends('admin.layouts.master')
@section('content')
<div class="panel panel-default">
<div class="panel-headin">
  <div class="well well-sm" style="color: #333;background-color: #4D545D;border-color: #ddd;">
    <h3>Add New Doctor</h3>
  </div>
</div>
<form action="/doctor/store" method="post" id="validator">
  <div class="row">
      {{ csrf_field() }}
    <div class="col-lg-3 col-sm-3">
      <div class="from-group">
        <input type="text" name="name" id="name" placeholder="Name" class="form-control" required>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="from-group">
        <input type="text" name="designation" id="designation" placeholder="Designation" class="form-control" required>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="from-group">
        <input type="text" name="specialist" id="specialist" placeholder="Specialist" class="form-control" required>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="from-group">
        <input type="text" name="chamber" id="url" placeholder="Chamber" class="form-control" required>
      </div>
    </div>
  </div>
      <br>
  <div class="row">
    <div class="col-lg-3 col-sm-3">
      <div class="form-group">
        <input name="degree" id="Degree" class="form-control" placeholder="Degree" required>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="form-group">
        <input name="contact" id="contact" class="form-control" placeholder="Contact" required>
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
          <option value="0" selected="true">-Select-Hospital-</option>
            @foreach($hospitals as $hospital)
              <option value="{{$hospital->id}}">{{$hospital->name}}</option>
            @endforeach
        </select>  
      </div>
    </div>
  </div>
  <input type="submit" name="Save" id="save" class="btn btn-primary">  
</form> 
</div>
@endsection

