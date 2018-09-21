@extends('admin.layouts.master')
@section('content')
<br><br>
<div class="panel panel-default">
 	<div class="panel-headin">
 		 <div class="well well-sm" style="color: #333;background-color: #4D545D;border-color: #ddd;">
 		 	<h3>Add New Doctor</h3>
 		 </div>
 	</div>
 	<div class="pull-left">
 		<form class="navbar-form" role="search">
 			<a type="button" class="btn btn-primary" href="/dashboard/doctor/create" >
 				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
 				Add
 			</a>
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
 		@if(isset($doctors))
 		<table class="table table-bordered table-striped table table-hover">
 			<tr>
 				<td>Name</td>
 				<td>Designation</td>
 				<td>Specialist</td>
 				<td>Chamber</td>
 				<td>Degree</td>
 				<td>Contact</td>
 				<td>Address</td>
 				<td colspan="2">Action</td>
 			</tr>
 			<tbody>
 			@foreach($doctors as $value)
	 			<tr>
	 				<td>{{ $value->name }}</td>
	 				<td>{{ $value->designation }}</td>
	 				<td>{{ $value->specialist }}</td>
	 				<td>{{ $value->chamber}}</td>
	 				<td>{{ $value->degree}}</td>
	 				<td>{{ $value->contact}}</td>
	 				<td>{{ $value->address}}</td>
	 			 	<td>
	 					<a href="">
	 						<button class="btn btn-success btn-sm">Edit</button>
	 					</a> &nbsp;
	 					<a href="/dashboard/delete/{{ $value->id }}">
	 						<button class="btn btn-danger btn-sm">Delete</button>
	 					</a>
	 				</td>
	 			 
	 			</tr>
 			@endforeach
 			</tbody>
 		</table>
 		{!! $doctors->render() !!}
 		@endif

 	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


 

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
@endsection