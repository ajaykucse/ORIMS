<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Doctor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="panel panel-default">
 	<div class="panel-headin">
 		 <div class="well well-sm" style="color: #333;background-color: #4D545D;border-color: #ddd;">
 		 	<h3>Add New Doctor</h3>
 		 </div>
 	</div>
 	<div class="pull-left">
 		<form class="navbar-form" role="search">
 			<button type="button" class="btn btn-primary" id="doc">
 				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
 				Add
 			</button>
 		</form>		
 	</div>
	<div class="pull-right">
	    <form class="navbar-form" role="search">
	        <div class="input-group">
	            <input type="text" class="form-control" placeholder="Search" name="q">
	            <div class="input-group-btn">
	                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
	            </div>
	        </div>
	    </form>
	</div>
 	<div class="panel-body">
 		@include('admin.health-care.doctor.insertDoctor')
 		@if(isset($doctor))
 		<table class="table table-bordered table-striped table table-hover">
 			<tr>
 				<td>Name</td>
 				<td>Specialist</td>
 				<td>Degree</td>
 				<td>Contact</td>
 				<td colspan="2">Action</td>
 			</tr>
 			<tbody>
 			@foreach($doctor as $value)
	 			<tr>
	 				<td>{{ $value->name }}</td>
	 				<td>{{ $value->specialist }}</td>
	 				<td>{{ $value->degree }}</td>
	 				<td>{{ $value->contact }}</td>
	 			 	<td>
	 					<a href=""><button class="btn btn-success btn-edit">Edit</button></a>&nbsp;
	 					<a href="{{url('/delete')}}/{{$value->docid}}">
	 					<button class="btn btn-danger btn-delete">Delete</button></a>
	 				</td>
	 			 
	 			</tr>
 			@endforeach
 			</tbody>
 		</table>
 		{!! $doctor->render() !!}
 		@endif
	 

 	</div>
<script type="text/javascript">
	$('#doc').on('click',function(){
		$('#insert_doc').modal('show');
	})
</script>
<script type="text/javascript">
  
  $(".dropdown-menu li a").click(function(){

  $(this).parents(".btn-group").find('.selection').text($(this).text());
  $(this).parents(".btn-group").find('.selection').val($(this).text());


});
</script>
</body>
</html>