<!DOCTYPE html>
<html lang="en">
<head>
  <title>ORIMS</title>
  <link rel="icon" type="image/gif/png" href="_/images/url.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost:8000">ORIMS</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{URL::to('/signin')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="{{URL::to('/registation')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
@yield('content')
</div>

</body>
</html>