 <!DOCTYPE html>
<html>

    <head>
		<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Ajay & Jewel">

      <title> ORIMS | PROJECT</title>
      <link rel="shortcut icon" href="img/logo.ico" />


        <!-- Bootstrap Core CSS -->
    <link href= "{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('css/creative.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="http://localhost:8000/">ORIMS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li>
						<a class="page-scroll" href="">Travel</a>
					</li>
					<li>
						<a class="page-scroll" href="">Tour</a>
					</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
             <!-- /.container-fluid -->
    </nav>
    <br>
    <br>
<!-- NATIONAL -->
<!-- INTERNATIONAL -->

  <section class="no-padding" id="portfolio">
	<div class="container">
		<!-- .no-gutter .news_content{} -->
		<div class="col-lg-12">
			<div class="col-md-8">
				<h3>Travel & Tour</h3>
				<hr>
			</div>
			<div class="col-md-4  pull-right" style="padding-top: 30px">
				<form class="navbar-form" role="search" action="/search/news/paper">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search" name="newsPaper">
						<div class="input-group-btn">
							<button class="btn btn-default btn-md" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<br>
	 
</section>

       <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}" ></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}" ></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src= "{{ asset('vendor/scrollreveal/scrollreveal.min.js') }}" ></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}" ></script>

    <!-- Theme JavaScript -->
    <script src= "{{ asset('js/creative.min.js') }}" ></script>
<script>
	$('.item-nav').click(function (event) {
		// Avoid the link click from loading a new page
		event.preventDefault();

		// Load the content from the link's href attribute
		$('.content').load($(this).attr('href'));
	});
</script>

</body>
</html>



<style type="text/css">
	
body{
	background-color: #FFFFFF;
	margin: 0 auto;
	padding: 0 auto;
}
h3{
	color: #FFFFFF;	
}

hr{
	 border-color: #FFFFFF;
    border-width: 3px;
    max-width: 50px;
}

a {
    color: #FFFFFF;
    transition: all 0.35s ease 0s;
}
#pagination {
    display: inline-block;
     
}

#pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
}

#pagination a.active {
    background-color: #4CAF50;
    color: white;
}

#pagination a:hover:not(.active) {background-color: #ddd;}

#services{
	background-color: #808080;
}
#portfolio{
	background-color: #004169; 
}
#contact{
	background-color: #5089CE;
}



</style>