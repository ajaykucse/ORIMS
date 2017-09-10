<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
       <link rel="icon" type="image/gif/png" href="_/images/url.ico">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Ajay & Jewel">

      <title>ORIMS | PUBLIC</title>

        <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/iHover.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
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
    <body id="page-top">

      <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
               <li><a class="navbar-brand page-scroll" href="#page-top">ORIMS</a></li>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Tourist</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/registation')}}"><span class="glyphicon glyphicon-user glyphicon-sm" style="display: inline;"></span>  Sign Up  </a>
                    </li>
                    <li>
                        <a href="{{URL::to('/signin')}}"><span class="glyphicon glyphicon-log-in glyphicon-sm" style="display: inline;"></span>  Login  </a>
                    </li>
     
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
             <!-- /.container-fluid -->
      </nav>

<!--       <header>
        <div class="header-content">  
          
            <div class="header-content-inner" id="image"> 



          
           
           
























            <!-- <br><br><br><br><br><br><br> -->
            <!-- <h1 class="wow zoomIn" data-wow-duration="3s" id="homeHeading">Online Region Information Management System</h1> -->
            <!-- <hr> -->
             <!--<p class="wow pulse" data-wow-duration="3s" style="font-weight:400;line-height: 1.5em;font-size:18px;font-family:sans-serif;"> Region information is a system where informations are provided to the general people to save their time and decrease hazard. In this project, we have proposed a web based management application which is able to provide all the information on online. Our application has the ability to manage all the information in one place. This application will help us to store and process information easier than earlier system. In this System all types of newspaper such as national, international, technology based news are also found there. In education part both secondary and higher secondary schools, colleges and universities informations are also available there.<br><br>In both the subject wise faculty members and their thesis area information are found there. Anyone can be able to know the number of total students, faculty members, their degree, admission system and teaching facilities are known from the system. From here we can also find the travel agency and restaurants informations. Most important part of this system is health chart. People can find the overall health information of a region at a glance. Specialized doctor’s name, their degrees, appointment schedule, working location and contact number are also available in our system.</p> <br><br>
            </div>
        </div>
      </header> -->
      <section class="bg-primary" id="image">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h3 class="section-welcome wow slideInDown" data-wow-duration="3s">Welcome</h3>
                    <hr class="primary">
                    <p class="text wow zoomIn" data-wow-duration="3s">Our main target is to make our region information system easily and user friendly. People easily can use that and in one place they can get all information together that helps to save their time.</p>
                </div>
            </div>
        </div>
      </section>
       <div class="clearfix"></div>


       <div class="container-fluid" id="about">
       <h3 class="section-heading wow pulse" data-wow-duration="3s">Tourist Area</h3>
       <hr class="primary" id="sundorban_header">
         <div class="row">
         <div class="clearfix"></div>
           <div class="col-md-6">
             <article id="tiger">
                  <a href="http://www.sunderbannationalpark.in/about-sunderban-national-park.html" target="_blank"><img id="img-tiger" class="clearfix wow bounceInLeft" data-wow-duration="3s"" src="_/images/royal-bengal-tiger-sundarban.jpg" class="circle-image"></a> 
              </article>
           </div>
           <div class="col-md-6">
                
             
                 <aside class="sundorban_aside wow bounceInRight" data-wow-duration="3s"">
                    <h3 class="forest_title">Mangrove Forest</h3>
                     <h4 class="forest_title"> The Sundarbans </h4>
                    <p class="sundorban_content">
                        <a class="title" href="https://en.wikipedia.org/wiki/Sundarbans" target="_blank">The Sundarbans </a>mangrove forest, one of the largest such forests in the world (140,000 ha), lies on the delta of the Ganges, Brahmaputra and Meghna rivers on the Bay of Bengal. It is adjacent to the border of India’s Sundarbans World Heritage site inscribed in 1987. The site is intersected by a complex network of tidal waterways, mudflats and small islands of salt-tolerant mangrove forests, and presents an excellent example of ongoing ecological processes. The area is known for its wide range of fauna, including 260 bird species, the Bengal tiger and other threatened species such as the estuarine crocodile and the Indian python.Sundarbans is home to many different species of birds, mammals, insects, reptiles and fish. It is estimated that there may be found more than 120 species of fish and over 260 species of birds and more than fifty species of reptiles and eight amphibians. Many tourists go there to see the Bengal tigers, saltwater crocodiles, leopards and snakes cobra.
                    </p>
                   <a class="title" href="http://bangladeshparjatan.com/khulna-division/" target="_blank"   ><h4>South-Western Region (Khulna Division)</h4></a>
                 </aside>
           </div>
         </div>
       </div>
       


         
         


 
<section id="services">
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
        <h3 class="section-heading">At Your Service</h3>
          <hr class="primary" id="sundorban_header">
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4" id="one-third">
      <div class="circle wow bounceInLeft" data-wow-duration="3s"  onclick="toggle_div_fun('sectiontohideS');">
        <td><i class="fa fa-cog fa-spin" aria-hidden="true"></i></td>
      </div>
      <h3>Services</h3>
      <div id="sectiontohideS" style="background-color: #F0F0F0; border: 1px solid black; width: 350px; height: 234px; display: none;"> 
      <p>
      <ol style="font-family: 'NikoshLightBan'; font-size: 18px;">
      <li class="list_style"> 
        <a target="_blank" href="http://www.bangladesh.gov.bd/redirector.php?url=https://services.nidw.gov.bd/&id=4a1cddcb-4911-49ea-95fa-9ed214bb5511">জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরন</a>
      </li>
      <li class="list_style">
        <a target="_blank" href="http://www.bangladesh.gov.bd/redirector.php?url=http://bris.lgd.gov.bd/pub/?pg=application_form&id=1663d183-93dd-41b8-a2ab-ac3d24fcca02">জন্ম ও মৃত্যু নিবন্ধন</a>
      </li>
      <li class="list_style">
        <a target="_blank" href="http://www.educationboardresults.gov.bd/lite/index.php">এসএসসি, দাখিল ও সমমানের পরীক্ষার ফলাফল</a>
      </li>
      <li class="list_style">
        <a target="_blank" href="http://www.bmet.gov.bd/BMET/onlinaVisaCheckAction">অনলাইন ভিসা যাচাই</a>
      </li>
      <li class="list_style">
        <a target="_blank" href="http://www.dip.gov.bd/site/page/f2d015a9-1132-4426-8eef-147f1c4bac8a">অনলাইনে পাসপোর্টের আবেদন</a>
      </li>
      <li class="list_style">
        <a target="_blank" href="http://www.educationboardresults.gov.bd/lite/index.php">বাংলাদেশ সেনা বাহিনী</a>
      </li>
      
    </ol>
    </p>
    </div>
  </div>
  <div class="col-md-4" id="one-third">
      <div class="circle wow bounceInDown" data-wow-duration="3s" onclick="toggle_div_fun('sectiontohideP');">
        <td><i class="fa fa-refresh fa-spin" aria-hidden="true"></i></td>
      </div>
      <h3>Pages</h3>
      <div id="sectiontohideP" style="background-color: #F0F0F0; border: 1px solid black; width: 350px; height: 234px; display: none;">
        <p>
        <ol style="font-family: 'NikoshLightBan';">
          <li class="list_style">
            <a target="_blank" href="http://www.molwa.gov.bd/site/page/75815f65-6afd-4dd6-9235-ead92cdf9ad0/%E0%A6%B2%E0%A6%BE%E0%A6%B2-%E0%A6%AE%E0%A7%81%E0%A6%95%E0%A7%8D%E0%A6%A4%E0%A6%BF%E0%A6%AC%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE%E0%A6%AD%E0%A7%81%E0%A6%95%E0%A7%8D%E0%A6%A4-%E0%A6%AE%E0%A7%81%E0%A6%95%E0%A7%8D%E0%A6%A4%E0%A6%BF%E0%A6%AF%E0%A7%8B%E0%A6%A6%E0%A7%8D%E0%A6%A7%E0%A6%BE">লাল মুক্তিবার্তাভুক্ত বীর মুক্তিযোদ্ধা। ...</a>
          </li>
          <li class="list_style">
            <a target="_blank" href="http://www.bangladesh.gov.bd/redirector.php?url=http://bris.lgd.gov.bd/pub/?pg=application_form&id=1663d183-93dd-41b8-a2ab-ac3d24fcca02">জন্ম ও মৃত্যু নিবন্ধন</a>
          </li>
          <li class="list_style">
            <a target="_blank" href="http://www.dip.gov.bd/site/page/389cbca1-6356-4fb7-b1a1-8f1d67e85463/%E0%A6%AE%E0%A7%87%E0%A6%B6%E0%A6%BF%E0%A6%A8-%E0%A6%B0%E0%A6%BF%E0%A6%A1%E0%A7%87%E0%A6%AC%E0%A6%B2-%E0%A6%AA%E0%A6%BE%E0%A6%B8%E0%A6%AA%E0%A7%8B%E0%A6%B0%E0%A7%8D%E0%A6%9F-(MRP)-%E0%A6%AB%E0%A6%BF-(%E0%A6%AC%E0%A6%BE%E0%A6%82%E0%A6%B2%E0%A6%BE%E0%A6%A6%E0%A7%87%E0%A6%B6)">মেশিন রিডেবল পাসপোর্ট (MRP) ফি (বাংলাদেশ...</a>
          </li>
          <li class="list_style">
            <a target="_blank" href="http://www.dyd.gov.bd/site/page/e9efa743-be59-4719-9666-0124791a4610/%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%B6%E0%A6%BE%E0%A6%B8%E0%A6%A8-%E0%A6%93-%E0%A6%85%E0%A6%B0%E0%A7%8D%E0%A6%A5-%E0%A6%B6%E0%A6%BE%E0%A6%96%E0%A6%BE">প্রশাসন ও অর্থ | Department of Youth Dev...</a>
          </li>
          <li class="list_style">
            <a target="_blank" href="http://www.dwa.gov.bd/site/view/notices">নোটিশ | Department of Women Affairs-Gove..</a>
          </li>
          <li class="list_style">
            <a target="_blank" href="http://www.mopme.gov.bd/site/view/notification_circular/%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%9C%E0%A7%8D%E0%A6%9E%E0%A6%BE%E0%A6%AA%E0%A6%A8">পরিপত্র | Ministry of Primary and Mass E...</a>
          </li>     
        </ol>
        </p>
    </div> 
  </div>
  <div class="col-md-4" id="one-third">
      <div  class="circle wow bounceInRight" data-wow-duration="3s" onclick="toggle_div_fun('sectiontohidePor');">
        <td><i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i></td>
      </div>
      <h3>Portals</h3>
      <div class="border-top-0" id="sectiontohidePor" style="background-color: #F0F0F0; border: 1px solid black; width: 350px; height: 234px; display: none;"> 
      <p>
         <ol>
          <li class="list_style">
            <a target="_blank" href="http://bhbfc.gov.bd/">bhbfc.gov.bd</a>
          </li>
          <li class="list_style">
            <a target="_blank" href="http://mopme.gov.bd/">mopme.gov.bd</a>
          </li>
          <li class="list_style">
            <a target="_blank" href="http://dip.gov.bd/">dip.gov.bd</a>
          </li>
          <li class="list_style">
            <a target="_blank" href="http://dae.gov.bd/">dae.gov.bd</a>
          </li>
          <li class="list_style">
            <a target="_blank" href="http://dme.gov.bd">dme.gov.bd</a>
          </li>
          <li class="list_style">
            <a target="_blank" href="http://bangladesh.gov.bd">bangladesh.gov.bd</a>
          </li>     
         </ol>
      </p>
    </div>
  </div>
  </div>
  </div>
  </section>
   
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
              
                <div id="tiger" class="col-lg-4 col-sm-6 wow bounceInLeft " data-wow-duration="3s">
                      
                    <a href="http://localhost:8000/news" class="portfolio-box">
                        <img id="img-tiger" src="img/portfolio/thumbnails/news.jpg" class="img-responsive" alt="">
                      </a>
                        <div class="portfolio-box-caption" data-toggle="modal" data-target="#yModal">
                            <div class="portfolio-box-caption-content">
                                <div class="overlay">
                                <div class="content">
                                  News <a class="a" href="http://localhost:8000/news">see more </a> 
                                </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
                 
                <div id="tiger" class="col-lg-4 col-sm-6 wow bounceInDown" data-wow-duration="3s">
                  
                    <a href="http://localhost:8000/health-care" class="portfolio-box">
                        <img id="img-tiger" src="img/portfolio/thumbnails/health-care.jpg" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="overlay">
                                <div class="content">
                                    Health-Care <a class="a" href="http://localhost:8000/health-care">see more</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    
                  </div>
                 
                <div id="tiger" class="col-lg-4 col-sm-6 wow bounceInRight" data-wow-duration="3s">
                    <a href="http://localhost:8000/office" class="portfolio-box">
                        <img id="img-tiger" src="img/portfolio/thumbnails/office.jpg" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="overlay">
                                <div class="content">
                                  Office<a class="a" href="http://localhost:8000/office">see more</a>
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div id="tiger" class="col-lg-4 col-sm-6 wow bounceInLeft" data-wow-duration="3s">
                    <a href="http://localhost:8000/hotel-restaurant" class="portfolio-box">
                        <img id="img-tiger" src="img/portfolio/thumbnails/hotel.jpg" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="overlay">
                                <div class="content">
                                    Hotel & Restaurant <a class="a" href="http://localhost:8000/hotel-restaurant">see more</a>
                                  </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div id="tiger" class="col-lg-4 col-sm-6 wow bounceInUp" data-wow-duration="3s">
                    <a href="http://localhost:8000/travel-tour" class="portfolio-box">
                        <img id="img-tiger" src="img/portfolio/thumbnails/travel.jpg" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="overlay">
                                <div class="content">
                                    Travel & Tour <a class="a" href="http://localhost:8000/travel-tour">see more</a>
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div id="tiger" class="col-lg-4 col-sm-6 wow bounceInRight" data-wow-duration="3s">
                    <a href="http://localhost:8000/education" class="portfolio-box">
                        <img id="img-tiger" src="img/portfolio/thumbnails/education.jpg" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="overlay">
                                <div class="content">
                                    Education <a class="a" href="http://localhost:8000/education">see more</a>
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <aside class="bg-dark wow fadeOut" data-wow-duration="3s">
        <div class="container text-center">
            <div class="call-to-action">
                <div class="row">
            <div class="col-md-12" id="footer1">
            </div>
          </div>
            </div>
        </div>
    </aside>
    <section class="no-padding" id="contact">
      <div class="container-fluid footer_section">
        <div class="row">
          <footer class="footer-inner">
            <div class="col-md-4">
              <section class="one-third wow bounceInLeft" data-wow-duration="3s" id="footer-third">
                <h3>Contact Us</h3>
                  <p class="footercontact">Ajay Kumar Yadav<br><b class="phone">01687430392</b><br>Zaheer Jewel<br>Khulna University Khulna-9208<br><b>Bangladesh</b></p>
              </section>
              </div>
              <div class="col-md-4">
                <section class="wow bounceInDown" data-wow-duration="3s""  id="footer-third">
                  <h3>Social</h3>
                    <ul class="social">
                      <li>
                        <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      </li>
                    </ul> 
                </section>
              </div>
                <div class="col-md-4">
                  <section class="wow bounceInRight" data-wow-duration="3s" id="one-third">
                    <h3>Pages</h3>
                    <h5 id="footer-third3">
                      <a href="">Home</a> -
                      <a href="">About</a> -
                      <a href="">Contact</a>
                    </h5>
                  </section>
                  
              </div>
            </footer>
            <footer class="second">
              <p class="wow bounceInRight" data-wow-duration="3s"> Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 110253,12032:2017 All Rights Reserved. </p>
            </footer>
          </div>
        </div>
        </section>





    <script type="text/javascript" src="js/wow.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>



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

   
  </body>
</html>
 

 <script type="text/javascript">
   // function result(){
   //      alert("OK");

  function toggle_div_fun(id){
    var divelement = document.getElementById(id);
    if(divelement.style.display=='none')
      divelement.style.display ='block';
    else
      divelement.style.display ='none';
  }

$('.fa-cog').hover(function() {
    $(this).addClass('fa-spin');
}, function() {
    $(this).removeClass('fa-spin');
});
$('.fa-circle-o-notch').hover(function() {
    $(this).addClass('fa-spin');
}, function() {
    $(this).removeClass('fa-spin');
});
$('.fa-refresh').hover(function() {
    $(this).addClass('fa-spin');
}, function() {
    $(this).removeClass('fa-spin');
});

 </script>

 <style type="text/css">
     {
      background-image: url('_/images/footer_top_bg.png');
      
    }
    .bg-dark{
      background-image: url('_/images/footer_top_bg (1).png');
      background-color: #F0F0F0;
    }

#tiger{  
  cursor: pointer;
  overflow: hidden;
}
#img-tiger{
  transition: all 1s linear;
}
span{
   
  color: #FFF;
   
   
  font-family: sans-serif;
   
  transform: translateY(50px);
  opacity: 1;
  transition: all 1s ease-in;
  

}
#tiger:hover span{
  transform: translateY(200px);
  
  opacity: 1;
  transition: all 1s ease-in;
}
#tiger:hover #img-tiger{
  transform: scale(1.4);
  transition: all 1s linear;
  filter: brightness(.7);
}
.wrapper{
  font-family: sans-serif;
  width: 80%;
  margin: 0 auto;
  position: relative;
}
.content{
  position: absolute;
  top: 45%;
  left: 50%;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
  text-transform: uppercase;
  font-size: 40px;
  color: #FFF;
  white-space: nowrap;
  overflow: hidden;
}
.content .a{
  font-size: 24px;
  display: block;
  color: #FFF;
  background-color: #405580;
  text-align: center;
  padding: 6px;
  cursor: pointer;
}
.overlay{
  opacity: 0
}

#tiger:hover .overlay{
  opacity: 1;
}
#image{
  color:#222FDD;
  background-color: #F0F0F0;
}
.text{
  color: #555555;
}
.section-welcome{
  color:#555555;
}
    /*#image{background-image:url("img/portfolio/thumbnails/p.jpg")}*/
 </style>
<!-- 
      Govt jobs 2017 notification regarding central and state Government companies & its Job vacancies across various sectors like Banking Employment, Defence, Railway Jobs, Teaching, Financial Institutions, Government College Jobs 2017 and many more. Below list contains the current Live 1,688 Govt Jobs Vacancies across various Government companies in India. Latest Govt Jobs 2017-2018 Vacancies List
-->