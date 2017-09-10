<!-- Modal -->
  
  <div class="modal fade" id="insert_doc" role="dialog" >
   
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
     <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload Doctor Information</h4>
        </div>
        <form action="/doctor/store" method="post" id="frmDoctor" enctype="multipart/form-data" style="background:#f5f5f5;padding:20px;border-radius:10px;">
          <div class="modal-body">
            <div class="row">
                {{ csrf_field() }}
                <div class="col-lg-3 col-sm-3">
                  <div class="from-group">
                    <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                  </div>
                </div>
                 <div class="col-lg-2 col-sm-2">
                  <div class="from-group">
                    <input type="text" name="specialist" id="specialist" placeholder="Specialist" class="form-control">
                  </div>
                </div>
                 <div class="col-lg-2 col-sm-2">
                  <div class="from-group">
                    <input type="text" name="degree" id="degree" placeholder="Degree" class="form-control">
                  </div>
                </div>
                 <div class="col-lg-3 col-sm-3">
                  <div class="from-group">
                    <input type="text" name="contact" id="contact" placeholder="Contact" class="form-control">
                  </div>
                </div>
                <div class="col-lg-2 col-sm-2">
                <span>Hospital:</span>
                <select style="width: 100px;" class="city" id="city_id" name="id">
                  
                  <option value="0" disabled="true" selected="true">-Select-</option>
                    @foreach($hospitals as $req)
                    <option value="{{$req->id}}">{{$req->name}}</option>
                  @endforeach
                </select>
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

