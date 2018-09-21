<br><br>
<link rel="icon" type="image/gif/png" href="_/images/url.ico">
@extends('admin.layouts.master')
@section('content')
<div class="panel panel-default">
<div class="panel-headin">
     <div class="well well-sm" style="color: #333;background-color: #4D545D;border-color: #ddd;">
      <h3> Add New City </h3>
     </div>
  </div>
          <form action="/store/cities" method="post" id="frmLocation">
            <div class="row">
                {{ csrf_field() }}
                
                  <div class="col-md-2 col-sm-2">
                    <span class="form-control">Country:</span>
                  </div>
                 <div class="col-md-4 col-sm-4">
                      <select class="form-control selcls" data-style="btn-primary" id="" name="country_id">
                        <option value="0" disabled="true" selected="true">-Select-</option>
                          @foreach($countries as $key=>$country)
                        <option value="{{$country['id']}}">{{$country['name']}}</option>
                          @endforeach
                      </select>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="from-group">
                    <input type="text" name="city_name" id="name" placeholder="Name" class="form-control">
                  </div>
                    
                  </div>
                    <div class="col-md-2 col-sm-2">
                     <input type="submit" name="Save" id="save" class="btn btn-primary pull-left">
                  </div>
                   
            </div>
        </form> 
        </div>
@endsection