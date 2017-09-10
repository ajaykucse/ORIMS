<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-lg-4">
		{{form::open(array('url'=>'','files'=>true))}}
		<div class="form-group">
			<label for=""></label>
			<select class="form-control input sm" name="">
				@foreach($region as $reg)
				<option value="{{$reg->location_id}}">{{$reg->city_region}}</option>
				@endforeach
			</select>
		</div>
	</div>
</div>
</body>
</html>