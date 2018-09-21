@extends('admin.layouts.master')
@section('content')
<br><br>
<div class="panel panel-default">
 	<div class="panel-headin">
 		 <div class="well well-sm" style="color: #333;background-color: #4D545D;border-color: #ddd;">
 		 	<h3> Add New City </h3>
 		 </div>
 	</div>
 	<div class="pull-left">
 		<form class="navbar-form" role="search">
 			<a type="button" class="btn btn-primary" href="/dashboard/cities/create">
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
 		<table class="table table-bordered table-striped table table-hover" id="country">
 			<tr>
 				<td>Country Name</td>
 				<td>City Name</td>
 				<td colspan="2">Action</td>
 			</tr>
 			<tbody>
 			@foreach($countries as $country)
	 			<tr>
	 				<td>{{ $country->country_name }}</td>
	 				<td>{{$country->name}}</td>
	 				<td>
	<a href="/dashboard/cities/edit/{{$country->id}}" class="btn btn-success btn-edit" id="edit">Edit</a>&nbsp;
	 				<a href="/delete/{{$country->id}}">
	 					<button class="btn btn-danger btn-delete">Delete</button>
	 				</a>
	 				</td>
	 			</tr>
 			@endforeach
 			</tbody>
 		</table>
 	</div>
 </div>
<!-- <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script> -->

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!-- <script type="text/javascript" src="datatable/js/dataTables.bootstrap.min.js"></script> -->

<script type="text/javascript">
	$(document).ready(function(){
    $('#country').DataTable();
});
</script>


@endsection