<div style="background-color:#EEEEEE;">
	<div class="row"  id="test"> <!-- .no-gutter .news_content{} -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>
		<nav class="articlelist" role="navigation" style="">			 			
				<div class="navbar-collapse collapse " id="myNavbar">
					<ul class="nav navbar-nav navbar-center" id="myAnchor" class="list-styled list-inline" style="text-align: center;">
						<li class="dropdown" style="display:block;">
							<button  type="button" class="btn btn-default" style="margin: 1px;padding: 5px;">
								Popular		
							</button>
						</li>
						<li class="dropdown" style="display:block;">
							<button  type="button" class="btn btn-info" style="margin: 1px;padding: 5px;">
								New		
							</button>
						</li>
						<li class="dropdown" style="display:block;">
							<button  type="button" class="btn btn-info" style="margin: 1px;padding: 5px;">
								Office		
							</button>
						</li>
						<li class="dropdown" style="display:block;">
							<button  type="button" class="btn btn-info" style="margin: 1px;padding: 5px;">
								News		
							</button>
						</li>
						<li class="dropdown" style="display:block;">
							<button  type="button" class="btn btn-info" style="margin: 1px;padding: 5px;">
								All e-Services		
							</button>
						</li>
						<li class="dropdown" style="display:block;">
							<button  type="button" class="btn btn-info" style="margin: 1px;padding: 5px;">
								Hospoital		
							</button>
						</li>
						<li class="dropdown" style="display:block;">
							<button  type="button" class="btn btn-info" style="margin: 1px;padding: 5px;">
								Market		
							</button>
						</li>
						<li class="dropdown" style="display:block;">
							<button  type="button" class="btn btn-info" style="margin: 1px;padding: 5px;">
								MCC		
							</button>
						</li>
						<li class="dropdown" style="display:block;">
							<button  type="button" class="btn btn-info" style="margin: 1px;padding: 5px;">
								Education		
							</button>
						</li>
					</ul>
			</div>
		</nav> 

	<div class="fullarticle" id="article4">
         @include('layouts.panel.news')
    </div>

    <div class="fullarticle" id="article6">
        <h1>Hospoital </h1>
        @include('layouts.panel.hospital')
    </div>
	<div class="fullarticle" id="article7">
        <h1>Market </h1>
        @include('layouts.panel.market')
	</div>
		 
	</div> 
	</div>
 
 

<script type="text/javascript">
	$('.articlelist ul li').click(function() {
    var i = $(this).index();
    $('.fullarticle').hide();
    $('#article' + (i+1)).show();
});
</script>

		<style type="text/css">
			.fullarticle {
			
			  float: left;
			  position: absolute; top: 35px; left: 0%;
			  display: none;
			}

		</style>

		 
