<!-- Modal -->
  
  <div class="modal fade" id="insNews" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload News</h4>
        </div>
        <form action="/insert/news" method="post" id="frmLocation" enctype="multipart/form-data" style="background:#f5f5f5;padding:20px;border-radius:10px;">
          <div class="modal-body">
            <div class="row">
                {{ csrf_field() }}
                <div class="col-lg-3 col-sm-3">
                  <div class="from-group">
                    <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                  </div>
                </div>
                 <div class="col-lg-3 col-sm-3">
                  <div class="from-group">
                    <input type="text" name="type" id="type" placeholder="Category" class="form-control">
                  </div>
                </div>
                 <div class="col-lg-3 col-sm-3">
                  <div class="from-group">
                    <input type="text" name="url" id="url" placeholder="URL" class="form-control">
                  </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                      <label>Image:</label>
                      <input type="file" name="file" id="file">
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
 
