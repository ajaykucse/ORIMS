@extends('admin.layouts.master')
@section('content')
  <br> <br><br><br><br>
  <form action="/insert/location" method="post" id="frmLocation">
    <div class="row">
      {{ csrf_field() }}
      <div class="col-lg-4 col-sm-4">
        <div class="from-group">
          <input type="text" name="name" id="name" placeholder="Country Name" class="form-control">
        </div>
      </div>
      <div class="col-lg-4 col-sm-4">
        <div class="from-group">
          <input type="text" name="code" id="code" placeholder="Country Code" class="form-control">
        </div>
      </div>
      <input type="submit" class="btn btn-info" value="Submit">
    </div>

  </form>
@endsection

