@extends('layout')

@section('content')
  @if(Session::has('success'))

  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-success">
        {{Session::get('success')}}
      </div>
    </div>
  </div>
  @endif
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-info">
      <div class="panel-heading"><h4 style="color: #029F5B;">Register</h4></div>
      <div class="panel-body">
        <form class="form-horizontal" action="/register_action" method="post">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
            <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="name" class="form-control" id="username" placeholder="Username" name="username">

              @if($errors->has('username')) <p>{{$errors->first('username')}}</p> @endif
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
            <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" class="form-control" id="email" placeholder="Email Address" name="email">
              @if($errors->has('email')) <p>{{$errors->first('email')}}</p>@endif
              </div>
            </div>
          </div>
          <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
          <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            @if($errors->has('password')) <p>{{$errors->first('password')}}</p>@endif
            </div>
          </div>
          </div>
          <div class="form-group"> 
            <div class="col-md-6 col-md-offset-4">
            <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword">
                @if($errors->has('cpassword')) <p>{{$errors->first('cpassword')}}</p>@endif
              </div>
            </div>
          </div>
          <center><div class="form-group">
            <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-success">REGISTER NOW</button>
            </div>
            </div>
          </center>
        </form>
        </div> 
        </div>  
      </div>
    </div>
  </div>
<style type="text/css">
  .panel-body{
  border-color: #ccc;
  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  }
</style>
@endsection