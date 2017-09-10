<!-- Modal -->
 
  <div class="modal fade" id="insert_gov_office" role="dialog" >
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Goverment Office</h4>
        </div>
        <div class="modal-body custom-height-modal">
          <form action="/insert/govOffice" method="post" enctype="multipart/form-data" id="frmNews" style="background:#f5f5f5;padding:0px;border-radius:0px;">
            <div class="row">
                {{ csrf_field() }}
                <div class="col-lg-2 col-sm-2">
                  <div class="from-group">
                    <input type="text" name="type" id="name" placeholder="Name" class="form-control">
                  </div>
                </div>
                 <div class="col-lg-2 col-sm-2">
                  <div class="from-group">
                    <input type="text" name="contact" id="contact" placeholder="Contact" class="form-control">
                  </div>
                </div>
                 <div class="col-lg-2 col-sm-2">
                  <div class="from-group">
                    <input type="text" name="url" id="url" placeholder="URL" class="form-control">
                  </div>
                </div>
                <div class="col-lg-2 col-sm-2">
                <div class="form-group">
                    <textarea name="details" id="details" class="form-control" placeholder="Details"></textarea>
                </div>
                </div>
                <div class="col-lg-2 col-sm-2">
                      <label>Image:</label>
                      <input type="file" name="image" id="image">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                </div>
              <div class="col-lg-2 col-sm-2">
                <span>Country:</span>
                <select style="width: 100px;" class="country" id="country_id">

                  <option value="0" disabled="true" selected="true">-Select-</option>
                  @foreach($data as $val)
                    <option value="{{$val->location_id}}">{{$val->country}}</option>
                  @endforeach
                </select>

                <span>Region:</span>
                <select style="width: 100px;" class="city" id="city_id" name="location_id">
                  
                  <option value="0" disabled="true" selected="true">-Select-</option>
                    @foreach($data as $val)
                    <option value="{{$val->location_id}}">{{$val->city_region}}</option>
                  @endforeach
                </select>
              </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="Save" id="save" value="Submit" class="btn btn-primary">
          <button type="cancel" class="btn btn-dark" data-dismiss="modal" onclick="return false;">Close</button>
        </div>
          </form> 
      </div>
    </div>
  </div>
</div>
