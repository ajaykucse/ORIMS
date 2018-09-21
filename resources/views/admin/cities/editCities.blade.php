@extends('admin.layouts.master')
@section('content')<br><br> <br> <br>
 <form method="post" id="frmEditLocation" action="/dashboard/cities/update/{{$city->id}}">
            <div class="row">
                {{ csrf_field() }}

                 <div class="col-lg-3 col-sm-3">
                  <div class="from-group" >
                      <select name="country_id" class="form-control">
                          <option value="">Choose Country</option>
                          @foreach($country_list as $country)

                              <option <?php if ($country->id == $city->country_id)
                                      {?>
                                      selected = 'selected'
                                      <?php } ?> value="<?php echo $country->id;?>">
                                  <?php echo $country->name; ?>
                              </option>

                          @endforeach
                      </select>
                  </div>
                </div>
                 <div class="col-lg-3 col-sm-3">
                  <div class="from-group">
                    <input type="text" name="city_name" id="city_name" placeholder="City Name" class="form-control" value="{{$city->name}}">
                  </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="Save" id="save" class="btn btn-primary">
        </div>
          </form>
@endsection