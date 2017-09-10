<!-- Modal -->
 
  <div class="modal fade" id="edit_hospital" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Hospital</h4>
        </div>
        <div class="modal-body">
          <form method="post" id="frmEditLocation" action="edit<?php echo $data->location_id?>">
            <div class="row">
                {{ csrf_field() }}
                <div class="col-lg-3 col-sm-3">
                  <div class="from-group">
                    <input type="text" id="country_code" placeholder="Country Code" class="form-control" name="country_code" value="<?php echo $data->country_code?>">
                  </div>
                </div>
                 <div class="col-lg-3 col-sm-3">
                  <div class="from-group">
                    <input type="text" name="country" id="country" placeholder="Country Name" class="form-control" value="<?php echo $data->country?>">
                  </div>
                </div>
                 <div class="col-lg-3 col-sm-3">
                  <div class="from-group">
                    <input type="text" name="city_region" id="city_region" placeholder="City Region" class="form-control" value="<?php echo $data->city_region?>">
                  </div>
                </div>
                 <div class="col-lg-3 col-sm-3">
                  <div class="from-group">
                    <input type="text" name="zip" id="zip" placeholder="Zip Code" class="form-control" value="<?php echo $data->zip?>">
                  </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="Save" id="save" class="btn btn-primary">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
          </form> 
      </div>
      
    </div>
  </div>