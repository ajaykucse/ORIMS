 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js"></script>
 
      			<div class="slide-wrap">
    				<section class="slider">
    					<ul class="slider1">
    						<li><img src="_/images/news.jpg"></li>
    						<li><img src="_/images/hospital.jpg"></li>
    						<li><img src="_/images/education.jpg"></li>
    					</ul>
    				</section>
    			</div>
    			<script type="text/javascript">
    				$('.slider1').bxSlider({
    					mode:'fade',
    					captions:false,
    					auto:true,
    					pager:false,
    				});
    				$('.slider2').bxSlider({
    					pager:false,
    					captions:true,
    					maxSlider:3,
    					minSlider:1,
    					SlideWidth:230,
    					SlideMargin:10
    				});
    				$('.slider3').bxSlider({
    					mode:'fade',
    					captions:false,
    					auto:true,
    					pager:false,
    					controls:false,
    				});
    			</script>

<style type="text/css">
	
 
/*#####################
Additional Styles (required)
#####################*/
#myCarousel .carousel-indicators {
    bottom: 0;
    left: 10px;
    margin-left: 5px;
    width: 100%;
}
#myCarousel .carousel-indicators li {
    border: medium none;
    border-radius: 0;
    float: left;
    height: 44px;
    margin-bottom: 5px;
    margin-left: 0;
    margin-right: 5px !important;
    margin-top: 0;
    width: 120px;
}
#myCarousel .carousel-indicators img {
    border: 2px solid #FFFFFF;
    float: left;
    height: 44px;
    left: 0;
    width: 120px;
}
#myCarousel .carousel-indicators .active img {
    border: 2px solid #39b3d7;
}
table, th, td {
    border: 1px solid black;

}

tr:hover {background-color: #f5f5f5}

}
tr:nth-child(even) {background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}

.sidebar_link{
	margin-left: 12.5%;
}

.sidebar_link img {
  margin-bottom: 3px;
}

.sidebar_link img:hover {
  background-color:  #4CAF50;
  opacity: 0.5;
}

.carousel .carousel-inner .item img:hover{
	background-color:  #999;
  	opacity: 0.5;
  	cursor: pointer;
}

@media (max-width:960px)
{
	  .sidebar_link{
		margin-left: 5%;
	}

}

</style>


<script type="text/javascript">
	
	$('#myCarousel').carousel({
		interval:   3000
	});
</script>

  
