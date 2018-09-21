@extends('admin.layouts.master')
@section('content')<br><br> <br> <br>
 <form method="post" id="frmEditLocation" action="">


  
  {{ method_field('PUT') }}
  
  {{ csrf_field() }}
   
            <div class="row">
                 <div class="col-lg-3 col-sm-3">
                  <div class="from-group">
                    <input type="text" name="name" value="" placeholder="Country Name" class="form-control">
                  </div>
                </div>
                 <div class="col-lg-3 col-sm-3">
                  <div class="from-group">
                    <input type="text" name="code" value="" placeholder="Country Code" class="form-control">
                  </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="Save" id="save" class="btn btn-primary">
        </div>
          </form>
@endsection