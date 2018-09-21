<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<link rel="icon" type="image/gif/png" href="_/images/url.ico">
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	@include('admin.includes.head')
</head>
@if (Auth::guest())
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{URL::to('')}}">ORIMS</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{URL::to('/signin')}}"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
				<li><a href="{{URL::to('/registation')}}"><span class="glyphicon glyphicon-user"></span> Register </a></li>
			</ul>
		</div>
	</nav>
@else(Auth::user())
<body style="font-family:FontAwesome;">

<!--header start -->
	@include('admin.includes.header')
<!--header end -->

	<article class="wrapper" >
	    <aside class="sidebar" class="active">
			@include('admin.includes.sidebar')
	    </aside>
	    <section class="main">
	        @yield('content')
	    </section>
	</article>
@endif
@include('admin.includes.footer')
@yield('script')
</body>
</html>

 