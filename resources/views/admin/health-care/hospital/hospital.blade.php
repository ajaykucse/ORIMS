<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Hospital</title>
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
 		 	<h3>Add New Hospital</h3>
 		 </div>
 	</div>
 	<div class="pull-left">
 		<form class="navbar-form" role="search">
 			<button type="button" class="btn btn-primary" id="ap">
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
 		@include('admin.health-care.hospital.insertHospital')
 		@if(isset($hospitals))
 		<table class="table table-bordered table-striped table table-hover">
 			<tr>
 				<td>Name</td>
 				<td>Contact</td>
 				<td>URL</td>
 				<td>Details</td>
 				<td colspan="2">Action</td>
 			</tr>
 			<tbody>
 			@foreach($hospitals as $value)
	 			<tr>
	 				<td>{{ $value->name }}</td>
	 				<td>{{ $value->contact }}</td>
	 				<td>{{ $value->url }}</td>
	 				<td>{{ $value->details}}</td>
	 			 	<td>
	 					<a href=""><button class="btn btn-success btn-edit">Edit</button></a>&nbsp;
	 					<a href="/delete/{{ $value->id }}">
	 					<button class="btn btn-danger btn-delete">Delete</button></a>
	 				</td>
	 			 
	 			</tr>
 			@endforeach
 			</tbody>
 		</table>
 		{!! $hospitals->render() !!}
 		@endif

 	</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> -->


<script type="text/javascript">
	$('#ap').on('click',function(){
		$('#insert_hospital').modal('show');
	})
</script>
<script type="text/javascript">
  
  $(".dropdown-menu li a").click(function(){

  $(this).parents(".btn-group").find('.selection').text($(this).text());
  $(this).parents(".btn-group").find('.selection').val($(this).text());


});
</script>
 <script type="text/javascript">
 	$(document).ready(function(){
 		$(document).on('change','.country',function(){
 			console.log('Hmm its change');

 			var country_id=$(this).val();
 			console.log(country_id);
 		});
 	});
 </script>
</body>
</html>