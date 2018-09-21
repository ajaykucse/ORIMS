<br><br>
@extends('admin.layouts.master')
@section('content')
<div class="panel panel-default">
<div class="panel-headin">
     <div class="well well-sm" style="color: #333;background-color: #4D545D;border-color: #ddd;">
      <h3>Add New Hospital</h3>
     </div>
  </div>
          <form action="/hospital/store" method="post" id="validator">
            <div class="row">
                {{ csrf_field() }}
                <div class="col-lg-4 col-sm-4">
                  <div class="from-group">
                    <input type="text" name="name" id="name" placeholder="Name" class="form-control" required>
                  </div>
                </div>
                 <div class="col-lg-4 col-sm-4">
                  <div class="from-group">
                    <input type="text" name="contact" id="contact" placeholder="Contact" class="form-control" required>
                  </div>
                </div>
                 <div class="col-lg-4 col-sm-4">
                  <div class="from-group">
                    <input type="text" name="url" id="url" placeholder="URL" class="form-control" required>
                  </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                <div class="form-group">
                    <textarea name="address" id="details" class="form-control" placeholder="Address" required></textarea>
                </div>
                </div>
                <div class="col-lg-2 col-sm-2">
                  <div class="from-group">
                    <input type="text" name="lat" id="lat" placeholder="Latitude" class="form-control" required>
                  </div>
                </div>
                <div class="col-lg-2 col-sm-2">
                  <div class="from-group">
                    <input type="text" name="long" id="long" placeholder="Longitude" class="form-control" required>
                  </div>
                </div>
              <div class="col-lg-2 col-sm-2">
                <select style="width: 150px;" class="country form-control" name="country_id" required>
                  <option value="0" selected="true">-Select-Country-</option>
                    @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="col-lg-2 col-sm-2">
                  <select class="form-control" name="city_id" required>
                      <option>--- Select City ---</option>
                  </select>
              </div>
            </div>
          <input type="submit" name="Save" id="save" class="btn btn-primary">   
        </form> 
      </div>
@endsection
@section('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
    $("select[name='country_id']").change(function(){
        var country_id = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('select-ajax') ?>",
            method: 'POST',
            data: {
                country_id:country_id,
                _token:token
            },
            success: function(data) {
                $("select[name='city_id']").html('');
                $("select[name='city_id']").html(data.options);
            }
        });
    });
</script>
@endsection
