<br><br>
@extends('admin.layouts.master')
@section('content')
<div class="panel panel-default">
<div class="panel-headin">
  <div class="well well-sm" style="color: #333;background-color: #4D545D;border-color: #ddd;">
    <h3>Add New Blood Group</h3>
  </div>
</div>
<div class="container">
  @if(session()->has('notif'))
    <div class="row">
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" 
        aria-hidden="true">&times;
        </button>
        <strong>Notification</strong>{{ session()->get('notif')}}
      </div>
    </div>
  @endif
</div>
<form action="/dashboard/bloodbgroup/store" method="post" id="validator">
  <div class="row">
      {{ csrf_field() }}
    <div class="col-lg-4 col-sm-4">
      <div class="from-group">
        <select name="blood_group" class="form-control" aria-describedby="month-addon">
          <option value="0" selected="true">-Select-Blood-Group-</option>
          <option>O+</option>                            
          <option>A+</option>                            
          <option>B+</option>
          <option>AB+</option>
          <option>O-</option>
          <option>A-</option>
          <option>B-</option>                     
          <option>AB-</option>     
        </select>
      </div>
    </div>
    <div class="col-lg-4 col-sm-4">
      <div class="from-group">
        <input type="text" name="qty" id="qty" placeholder="Quantity" class="form-control" required>  
      </div>
    </div>
      <div class="col-lg-4 col-sm-4">
        <div class="from-group">
          <select class="bloodbank form-control" name="bloodbank_id" required>
            <option value="0" selected="true">-Select-Blood-Bank-Name-</option>
              @foreach($bloodbanks as $bloodbank)
            <option value="{{$bloodbank->id}}">{{$bloodbank->name}}</option>
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

