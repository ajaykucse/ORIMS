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
						<a class="page-scroll" href="http://localhost:8000/health-care">Hospital</a>
					</li>
					<li>
						<a class="page-scroll" href="http://localhost:8000/bloodbank">Blood Bank</a>
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

<section class="no-padding" id="">
    <p class="webedesign">WE DESIGN YOUR WEBSITE<br></p><p class="health-care-txt">HEALTH-CARE</p>

    <div class="container-fluid" id="search-health-care">
    <form class="form-inline" role="search" action="{{ url('http://localhost:8000/health-care') }}" method="get" style="margin-left: 75px;">
                    <div class="input-group">
                        <i class="icon-search icon-2x"></i>
                        <input id="searchinput" type="text" class="form-control-clear-input" placeholder="Search " name="s" value="{{ isset($s) ? $s : '' }}" style="height: 38px;width: 300px;">

                        <span id="searchclear" class="glyphicon glyphicon-remove-circle"></span>
                    </div>
                    <div class="form-group">
                            <button class="btn btn-success" type="submit">Search</button>
                    </div>
    </form>
</div>
        <img src="img\banner_health-care.jpg"/ alt='missing'>
</section>
 <br>
<section class="no-padding" id="">
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
 <div class="container">
    @foreach($hospitals as $hospital)
    <div class="row">
            <div class="panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$hospital->name}}</h3>
                </div>
                <div class="panel-body">
                     <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <span class="glyphicon glyphicon-list"></span> Available Doctors
                                        </div>
                                        <div class="panel-body">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="checkbox" />
                                                        <label for="checkbox">
                                                            List group item heading
                                                        </label>
                                                    </div>
                                                <div class="pull-right action-buttons">
                                                    <a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span></a>
                                                    <a href="http://www.jquery2dotnet.com" class="trash"><span class="glyphicon glyphicon-trash">       </span></a>
                                                            <a href="http://www.jquery2dotnet.com" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
                                                </div>
                                                </li>
                                                <li class="list-group-item">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox2" />
                                                        <label for="checkbox2">
                                                            List group item heading 1
                                                        </label>
                                                </div>
                                                <div class="pull-right action-buttons">
                                                    <a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span></a>
                                                    <a href="http://www.jquery2dotnet.com" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                                                    <a href="http://www.jquery2dotnet.com" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
                                                </div>
                                                </li>
                                                <li class="list-group-item">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox3" />
                                                        <label for="checkbox3">
                                                            List group item heading 2
                                                        </label>
                                                </div>
                                                <div class="pull-right action-buttons">
                                                    <a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span></a>
                                                    <a href="http://www.jquery2dotnet.com" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                                                    <a href="http://www.jquery2dotnet.com" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
                                                </div>
                                                </li>
                                                <li class="list-group-item">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox4" />
                                                    <label for="checkbox4">
                                                        List group item heading 3
                                                    </label>
                                                </div>
                                                <div class="pull-right action-buttons">
                                                    <a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span></a>
                                                    <a href="http://www.jquery2dotnet.com" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                                                    <a href="http://www.jquery2dotnet.com" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
                                                </div>
                                                </li>
                                                <li class="list-group-item">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox5" />
                                                    <label for="checkbox5">
                                                        List group item heading 4
                                                    </label>
                                                </div>
                                                <div class="pull-right action-buttons">
                                                <a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span></a>
                                                <a href="http://www.jquery2dotnet.com" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                                                <a href="http://www.jquery2dotnet.com" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
                                                </div>
                                                </li>
                                                </ul>
                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                <div class="col-md-4">
                                                <h6>
                                                    Total Count <span class="label label-info">25</span></h6>
                        </div>
                        <div class="col-md-8">
                            <ul class="pagination pagination-sm pull-right">
                                <li class="disabled"><a href="javascript:void(0)">«</a></li>
                                <li class="active"><a href="javascript:void(0)">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="http://www.jquery2dotnet.com">2</a></li>
                                <li><a href="http://www.jquery2dotnet.com">3</a></li>
                                <li><a href="http://www.jquery2dotnet.com">4</a></li>
                                <li><a href="http://www.jquery2dotnet.com">5</a></li>
                                <li><a href="javascript:void(0)">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



 
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-2">
                                          <h1 style="color: #4885ed;">G</h1>  
                                        </div>
                                        <div class="col-md-2">
                                          <h1 style="color:  #db3236;">o</h1>  
                                        </div>
                                        <div class="col-md-2">
                                            <h1 style="color:#f4c20d;">o</h1>
                                        </div>
                                        <div class="col-md-2">
                                            <h1 style="color:  #4885ed;">g</h1>
                                        </div>
                                        <div class="col-md-2">
                                            <h1 style="color:#3cba54;">l</h1>
                                        </div>
                                        <div class="col-md-2">
                                            <h1 style="color: #db3236;">e</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <center><h2 style="color:#429CD6;">Map</h2></center>         
                                </div>
                                <div class="col-md-4">
                                    <img src="img/google-maps.png" class="pull-left" style="margin-top:15px;">
                                </div>
                            </div>                            
                            <div id="map"></div>
                                <input type="hidden" name="lat" value="{{$hospital->lat}}" id="lat"> 
                                <input type="hidden" name="long" value="{{$hospital->long}}" id="long">
                            <script>
                                function initMap() {
                                    var lat = parseFloat(document.getElementById("lat").value);
                                    var long = parseFloat(document.getElementById("long").value);
                                    var uluru = {lat:lat , lng:long };
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        zoom: 16,
                                        center: uluru
                                    });
                                    var marker = new google.maps.Marker({
                                        position: uluru,
                                        map: map,
                                        animation:google.maps.Animation.BOUNCE
                                        });
                                    marker.setMap(map);

                                    }

                            </script>
                            <script async defer
                                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBM0q4CdZ9OyCNnn-j8IDjaI5V6hRxSeNY&callback=initMap">
                            </script>


                            <h3><a href="{{$hospital->url}}" target="_blank" style="color:#367AC0;">{{$hospital->name}}</a></h3>
                           <center><h4 class="glyphicon glyphicon-earphone" aria-hidden="true">
                                <a class="mobilesOnly" href="tel:{{$hospital->contact}}" style="color:#367AC0;">{{$hospital->contact}}</a>
                            </h4>
                            <h4 style="color:#367AC0;">Address: {{$hospital->address}}</h4>  </center>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row" id="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">doctors of {{$hospital->name}}</h3>
                    <div class="pull-right">
                        <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                            <i class="glyphicon glyphicon-filter"></i>
                        </span>
                        </div>
                </div>
                <div class="panel-body" id="panel-body">
                        <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Search Doctor" />
                </div>
                    <table class="table table-hover" id="dev-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Specialist</th>
                                <th>Chamber</th>
                                <th>Degree</th>
                                <th>Contact</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        @foreach($doctors_info as $doctor) 
                        <tbody>
                            <tr>
                                <td>{{$doctor->name}}</td>
                                <td>{{$doctor->designation}}</td>
                                <td>{{$doctor->specialist}}</td>
                                <td>{{$doctor->chamber}}</td>
                                <td>{{$doctor->degree}}</td>
                                <td>{{$doctor->contact}}</td>
                                <td>{{$doctor->address}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
 <br>
 <br>
 <div class="container">       
 <div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">ambulance of {{$hospital->name}}</h3>
                    <form action="#" method="get" class="pull-right">
                        <div class="input-group">
                                <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                            <input class="form-control" id="system-search" name="q" placeholder="Search" required style="width: 320px;height: 28px;">
                            <span class="input-group-btn" style="display: none;">
                                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search" class="form-control"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                @foreach($ambulances as $ambulance)
                <div class="panel-body" id="panel-bod">
                 <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th>Car No</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Owner</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$ambulance->car_no}}</td>
                            <td>{{$ambulance->contact}}</td>
                            <td>{{$ambulance->address}}</td>
                            <td>{{$ambulance->owner}}</td>
                        </tr>
                    </tbody>
                </table> 
            </div>  
            @endforeach
    </div>
</div>
</div>
</div>
        <center>
            <tr>
                <td colspan="2">
                    <div class="pagination">{!! str_replace('/?', '?', $hospitals->appends(['s' => $s])->render()) !!}</div>      
                </td>
            </tr>
        </center>
    @endforeach
 </div>
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
<script type="text/javascript">
    $("#searchclear").click(function(){
    $("#searchinput").val('');
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
    var activeSystemClass = $('.list-group-item.active');
    //something is entered in search form
    $('#system-search').keyup( function() {
       var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                    + $(that).val()
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //hide rows
                tableRowsClass.eq(i).hide();
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
        }
    });
});
</script>
 <script type="text/javascript">
    (function(){
    'use strict';
    var $ = jQuery;
    $.fn.extend({
        filterTable: function(){
            return this.each(function(){
                $(this).on('keyup', function(e){
                    $('.filterTable_no_results').remove();
                    var $this = $(this), 
                        search = $this.val().toLowerCase(), 
                        target = $this.attr('data-filters'), 
                        $target = $(target), 
                        $rows = $target.find('tbody tr');
                        
                    if(search == '') {
                        $rows.show(); 
                    } else {
                        $rows.each(function(){
                            var $this = $(this);
                            $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
                        })
                        if($target.find('tbody tr:visible').size() === 0) {
                            var col_count = $target.find('tr').first().find('td').size();
                            var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
                            $target.find('tbody').append(no_results);
                        }
                    }
                });
            });
        }
    });
    $('[data-action="filter"]').filterTable();
})(jQuery);

$(function(){
    // attach table filter plugin to inputs
    $('[data-action="filter"]').filterTable();
    
    $('.container').on('click', '.panel-heading span.filter', function(e){
        var $this = $(this), 
            $panel = $this.parents('.panel');
        
        $panel.find('.panel-body').slideToggle();
        if($this.css('display') != 'none') {
            $panel.find('.panel-body input').focus();
        }
    });
    $('[data-toggle="tooltip"]').tooltip();
})
</script>
</body>
</html>
<style type="text/css">	
    
    #search-health-care{
            position: absolute;
            top: 207px;
            left: 407px;
    }
    .webedesign{
            position: absolute;
            top: 140px;
            left: 62px;
            color:#555555;
            font-family:TimesNewRoman;
            text-align: justify;
            font-size: 26px;
            font-style: normal;
            font-variant: normal;
            font-weight: 500;
            line-height: 40px;
        }
    .health-care-txt{
            position: absolute;
            top: 185px;
            left: 115px;
            color:#555555;
            font-family:TimesNewRoman;
            text-align: justify;
            font-size: 26px;
            font-style: normal;
            font-variant: normal;
            font-weight: 500;
            line-height: 40px;

        }
    #row{
            margin-top:40px;
            padding: 0 10px;
        }
        .clickable{
            cursor: pointer;   
        }

        .panel-heading div {
            margin-top: -18px;
            font-size: 15px;
        }
        .panel-heading div span{
            margin-left:5px;
        }
        #panel-body{
            display: none;
        }

.icon-search {
    color:white;
    background-color:black;
}
#searchinput {
    width: 200px;
}
#searchclear {
    position: absolute;
    right: 5px;
    top: 0;
    bottom: 0;
    height: 14px;
    margin: auto;
    font-size: 14px;
    cursor: pointer;
    color: #ccc;
}
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