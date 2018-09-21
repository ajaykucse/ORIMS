<br><br>
@extends('admin.layouts.master')
@section('content')
<div class="panel panel-default">
<div class="panel-headin">
  <div class="well well-sm" style="color: #333;background-color: #4D545D;border-color: #ddd;">
    <h3>Add New Doctor Appointment</h3>
  </div>
</div>
<form action="/doctor/store" method="post" id="validator">
  <div class="row">
      {{ csrf_field() }}
    <div class="col-lg-4 col-sm-4">
      <div class="from-group">
        <select class="country form-control" name="doctor_id" required>
          <option value="0" selected="true">-Select-Doctor-Name-</option>
          @foreach($doctors as $doctor)
              <option value="{{$doctor->id}}">{{$doctor->name}}</option>
          @endforeach
        </select>  
      </div>
    </div>
    <div class="col-lg-8 col-sm-8">
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
  <div class="row">
    <div class="col-lg-3 col-sm-3">
      <div class="from-group">
        <select name="control-month" class="form-control" aria-describedby="month-addon">
          <option value="0" selected="true">-Select-Month-</option>
          <option>January</option>                            
          <option>February</option>                            
          <option>March</option>
          <option>April</option>
          <option>May</option>
          <option>June</option>
          <option>July</option>
          <option>August</option>
          <option>September</option>
          <option>Octomber</option>
          <option>November</option>
          <option>December</option>
        </select>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="from-group">
        <select name="control-month" class="form-control" aria-describedby="month-addon">
          <option value="0" selected="true">-Select-Day-</option>
          <option>Sunday</option>                            
          <option>Monday</option>                            
          <option>Tuesday</option>
          <option>Wednesday</option>
          <option>Thursday</option>
          <option>Friday</option>
          <option>Saturday</option>                          
        </select>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="from-group">
        <input type="text" name="startTime" id="startTime" placeholder="Start Time" class="form-control" required>
      </div>
    </div>
    <div class="col-lg-3 col-sm-3">
      <div class="from-group">
        <input type="text" name="EndTime" id="EndTime" placeholder="End Time" class="form-control" required>
      </div>
    </div>  
  </div>
  <br>
  <input type="submit" name="Save" id="save" class="btn btn-primary">  
</form> 
</div>
@endsection

