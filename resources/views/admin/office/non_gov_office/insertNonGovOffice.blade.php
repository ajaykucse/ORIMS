<!-- Modal -->
 
  <div class="modal fade" id="insert_Nongov_office" role="dialog" >
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Non-Goverment Office</h4>
        </div>
        <div class="modal-body custom-height-modal">
          <form action="/insert/NongovOffice" method="post" id="frmNews">
            <div class="row">
                {{ csrf_field() }}
                <div class="col-lg-2 col-sm-2">
                  <div class="from-group">
                    <input type="text" name="type" id="type" placeholder="Name" class="form-control">
                  </div>
                </div>
                 <div class="col-lg-2 col-sm-2">
                  <div class="from-group">
                    <input type="text" name="contact" id="contact" placeholder="Contact" class="form-control">
                  </div>
                </div>
                 <div class="col-lg-2 col-sm-2">
                  <div class="from-group">
                    <input type="text" name="details" id="details" placeholder="URL" class="form-control">
                  </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                <div class="form-group">
                    <textarea name="url" id="url" class="form-control" placeholder="Details"></textarea>
                </div>
                </div>
                <div class="col-lg-2 col-sm-2">
                <div class="form-group">
                  <label class="control-label">Img:</label>
                      <input type="file" name="image" id="image">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                </div>
              <div class="col-lg-1 col-sm-1">
                <span>Country:</span>
                <select style="width: 150px;" class="country" id="country_id">
                  <option value="0" disabled="true" selected="true">-Select-</option>
                  @foreach($data as $val)
                    <option value="{{$val->id}}">{{$val->name}}</option>
                  @endforeach
                </select>

                <span>Region:</span>
                <select style="width: 150px;" class="city" id="city_id" name="location_id">
                  
                  <option value="0" disabled="true" selected="true">-Select-</option>
                    @foreach($data as $val)
                    <option value="{{$val->id}}">{{$val->name}}</option>
                  @endforeach
                </select>
              </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="Save" id="save" class="btn btn-primary">
          <button type="cancel" class="btn btn-dark" data-dismiss="modal" onclick="return false;">Close</button>
        </div>
          </form> 
      </div>
    </div>
  </div>
</div>
 