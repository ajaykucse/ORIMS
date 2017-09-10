<!-- Modal -->
  
  <div class="modal fade" id="editNews" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update News</h4>
        </div>
        <div class="modal-body">
          <form action="/insert" method="post" id="frmLocation">
            <div class="row">
                {{ csrf_field() }}
                <div class="col-lg-4 col-sm-4">
                  <div class="from-group">
                    <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                  </div>
                </div>
                 <div class="col-lg-4 col-sm-4">
                  <div class="from-group">
                    <input type="text" name="type" id="type" placeholder="Langauge" class="form-control">
                  </div>
                </div>
                 <div class="col-lg-4 col-sm-4">
                  <div class="from-group">
                    <input type="text" name="url" id="url" placeholder="URL" class="form-control">
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
 