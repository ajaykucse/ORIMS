<!-- Modal -->



<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>












  
  <div class="modal fade" id="insert_doc_apt" role="dialog" >
   
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
     <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Doctor Appointment</h4>
        </div>
        <form action="/docAppoint/store" method="post" id="frmDoctor" enctype="multipart/form-data" style="background:#f5f5f5;padding:20px;border-radius:10px;">
          <div class="modal-body">
            <div class="row">
                {{ csrf_field() }}
               
       
                  <div class='col-lg-4 col-sm-4'>
                  <span>Start date</span>
                    <input type=datetime-local name="start_time" step=1>
                  </div>
                  <div class='col-lg-4 col-sm-4'>
                      <span>End date</span>
                        <input type=datetime-local name="end_time" step=1>
                  </div>
                <div class="col-lg-2 col-sm-2">
                <span>Hospital:</span>
                <select style="width: 150px;" class="country" id="country_id">
                  <option value="0" disabled="true" selected="true">-Select-</option>
                  @foreach($data as $value)
                  
                  @endforeach
                </select>
                </div>
                <div class="col-lg-2 col-sm-2">
                <span>Doctor:</span>
                <select style="width: 150px;" class="country" id="country_id">
                  <option value="0" disabled="true" selected="true">-Select-</option>
                  @foreach($data as $value)
                  
                  @endforeach
                </select>
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
<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>