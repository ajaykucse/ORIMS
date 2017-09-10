<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create News</title>
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
 		 	<h3>Upload News </h3>
 		 </div>
 	</div>
 	<div class="pull-left">
 		<form class="navbar-form" role="search">
 			<button type="button" class="btn btn-primary" id="adnews">
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
 		@include('admin.news.insertNews')

 		@if(isset($news))
 		<table class="table table-bordered table-striped table table-hover">
 			<tr>
 				<td>Title</td>
 				<td>Category</td>
 				<td>Url</td>
 				<td colspan="2">Action</td>
 			</tr>
 			<tbody>
 			@foreach($news as $value)
	 			<tr>
	 				<td>{{ $value->name }}</td>
	 				<td>{{ $value->type }}</td>
	 				<td>{{ $value->url }}</td>
	 				<td>
	 					<a href="#"><button class="btn btn-success btn-edit" id="edit">Edit</button></a>&nbsp;
	 					<a href="/delete/{{$value->news_id}}">
	 					<button class="btn btn-danger btn-delete">Delete</button></a>
	 				</td>
	 			</tr>
 			@endforeach
 			</tbody>
 		</table>
 		{!! $news->render() !!}
 		@endif
 	</div>
 	</div>
 </div>
<script type="text/javascript">
	$('#adnews').on('click',function(){
		$('#insNews').modal('show');
	})


	// editNews
</script>
</body>
</html>