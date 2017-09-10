<!-- Modal -->
  
  <div class="modal fade" id="insert_ambulance" role="dialog" >
   
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
     <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload Ambulance</h4>
        </div>
        <form action="/ambulance/store" method="post" id="frmDoctor" enctype="multipart/form-data" style="background:#f5f5f5;padding:20px;border-radius:10px;">
          <div class="modal-body">
            <div class="row">
                {{ csrf_field() }}
                <div class="col-lg-4 col-sm-4">
                  <div class="from-group">
                    <input type="text" name="car_no" id="name" placeholder="Car-Number" class="form-control">
                  </div>
                </div>
                 <div class="col-lg-4 col-sm-4">
                  <div class="from-group">
                    <input type="text" name="cantact" id="cantact" placeholder="Contact" class="form-control">
                  </div>
                </div>
                  
                <div class="col-lg-4 col-sm-4">
                <span>Hospital:</span>
                <select style="width: 150px;" class="country" id="country_id">

                  <option value="0" disabled="true" selected="true">-Select-</option>
                  @foreach($data as $value)
                  
                  @endforeach
                </select>
              </div>
            </div>
          </div>
            <div class="modal-footer">
              <input type="submit"  id="save" class="btn btn-primary">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </form>
      </div>
  </div>
</div>

