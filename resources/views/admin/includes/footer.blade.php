<script src="{{asset('custom-css/bootstrap.min.js')}}"></script>
<script src="{{asset('custom-js/jquery.min.js')}}"></script>
<script type="text/javascript">
    $(".wrapper").toggleClass("toggled");
    $(".sidebar-toggle").click(function(e) {
        e.preventDefault();
        $(".wrapper").toggleClass("toggled");
    });


</script>
<script type="text/javascript">
    $('#add').on('click',function(){
        $('#locations').modal('show');
    })
</script>

<script type="text/javascript">
    $('#ad').on('click',function(){
        $('#news').modal('show');
    })
</script>
<script type="text/javascript">
    $('#doc').on('click',function(){
        $('#insert_doc').modal('show');
    })
</script>
<script type="text/javascript">
    $('#doc').on('click',function(){
        $('#insert_doc').modal('show');
    })
</script>
