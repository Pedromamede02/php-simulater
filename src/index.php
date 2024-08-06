<?php


$con = new mysqli('mysql_db', 'root','root','mysql');



?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Meghna One page parallax responsive HTML Template ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Muhammad Morshed">
		
        <title>Connectify | Welcome </title>
		
		<link rel="icon" type="image/jpg" href="/img/Icone7.jpg">
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

		
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Owl Carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Grid Component css -->
        <link rel="stylesheet" href="css/component.css">
		<!-- Slit Slider css -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- Media Queries -->
        <link rel="stylesheet" href="css/media-queries.css">
		

		<!--
		Google Font
		=========================== -->                    
		
		<!-- Oswald / Title Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
		<!-- Ubuntu / Body Font -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		
		<!-- Modernizer Script for old Browsers -->		
        <script src="js/modernizr-2.6.2.min.js"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">


		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-54152927-1', 'auto');
		  ga('send', 'pageview');
		
		</script>
	
    </head>
	
    <body id="body">
	    <!--
	    Start Preloader
	    ==================================== -->
		<div id="loading-mask">
			<div class="loading-img">
				<img alt="Meghna Preloader" src="img/preloader.gif"  />
			</div>
		</div>
        <!--
        End Preloader
        ==================================== -->
		
        <!--
        Welcome Slider
        ==================================== -->
		<section id="home">	    
		
            <div id="slitSlider" class="sl-slider-wrapper">
				<div class="sl-slider">
					
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
						<div class="carousel-caption">
							<div class="idiomas" style="position: fixed; right: 100px; margin-top: 7px;">
								<ul style="display: flex; list-style-type: none; padding: 0;">
									<li style="padding-left: 20px;"><a href="/portugues.html"><img src="/img/portugal.png" style="width: 20px;">PT</a></li>
									<li style="padding-left: 20px;"><a href="/espanhol.html"><img src="/img/espanha.png" style="width: 20px;">ES</a></li>
									<li style="padding-left: 20px;"><a href="/index.html"><img src="/img/reino-unido.png" style="width: 20px;">IN</a></li>
							</div>
							<div>
								<img class="wow fadeInUp" src="img/connectify-grande-ingles.png" alt="Connectify">
								
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInDown">The company</h2>
								<h3 class="animated fadeInUp">Dedicated to leveraging your businesse</h3>
								<a class="btn btn-green animated fadeInUp" href="https://api.whatsapp.com/send?phone=351920152491">Get Started</a>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInRight">contact us</h2>
								<h3 class="animated fadeInLeft">See the power in being .com</h3>
								<a class="btn btn-green animated fadeInUp" href="https://api.whatsapp.com/send?phone=351920152491">Get Started</a>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->

				</div><!-- /sl-slider -->
				
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		<!--/#home section-->
		
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                   
					<!-- /logo -->
                </div>

				<!-- main nav -->
				<style>
					@media only screen and (min-width: 800px) {
						.idioma2{
							margin-left: 120px;
						}
						#espa{
					     margin-left: 50px;

						}

						html, body {
                        touch-action: auto;
                         overflow-y: auto; /* Permite a rolagem vertical */
                        }

						
					}

					@media only screen and (min-width: 10px) and ((max-width: 1200px) ) {

						#idioma{
						  display: none;
						}

					

					}

					html, body {
                      touch-action: auto;
                       overflow-y: auto; /* Permite a rolagem vertical */
                    }

				</style>
           

		   <div style="display: flex; align-items: center;">
			<nav class="collapse navbar-collapse navbar-right" role="Navigation">
				<ul id="nav" class="nav navbar-nav">
					<li style="display: flex; align-items: center;" id="conectado">
						<img src="/img/connectify-definity.png" id="conectado" alt="" style="width: 4em; margin-right: 10px; margin-top: 3px;">
						<h2 id="conectado" style="font-size: 24px; letter-spacing: 10px; font-family: Russo One; color: #ffffff; ">CONNECTIFY</h2>
					</li>	
							<li class="current" id="espa"><a href="#body">Home</a></li>
							<li><a href="#services">Services</a></li>
							<li><a href="#our-team">Team</a></li>
							<li><a href="#contact-us">Contact</a></li>
							<li id="idioma" class="idioma2" style="padding-left: 10px;"><a href="/portugues.html"><img src="/img/portugal.png" style="width: 20px;"> PT</a></li>
							<li id="idioma" class="idioma" style="padding-left: 10px;"><a href="/espanhol.html"><img src="/img/espanha.png" style="width: 20px;">ES</a></li>
							<li id="idioma" class="idioma" style="padding-left: 10px;"><a href="/index.html"><img src="/img/reino-unido.png" style="width: 20px;">IN</a></li>
						</ul>
					</nav>
				</div>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<!--
		Start About Section
		==================================== -->
		
		<!--
		Start Main Features
		==================================== -->
		<section id="main-features">
			<div class="container">
				<div class="row">
					
					<!-- features item -->
					<div id="features">
						<div class="item">
							
							<div class="features-item">
								
								<!-- features media -->
								<div class="col-md-6 feature-media media-wrapper wow fadeInUp" data-wow-duration="500ms">
									<video controls>
										 <video src="/img/Video-portugues-connectify.mov" controls></video>
								</div>
								<!-- /features media -->
								
								<!-- features content -->
								<div class="col-md-6 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
									<h3>Connectify</h3>
									<p>Hiring a marketing company is crucial to achieving business success today. With expertise and personalized strategies, they can maximize your online visibility, increase customer engagement and boost your sales. Additionally, a specialized team can keep up with market trends and adapt your strategies as needed, ensuring your brand remains relevant and competitive.</p>
									<a href="https://api.whatsapp.com/send?phone=351920152491" class="btn btn-transparent">Learn More</a>
								</div>
								<!-- /features content -->
								
							</div>
						</div>
						
			
		</section>   <!-- End section -->
		
		<!--
		Start Counter Section
		==================================== -->
		
		<section id="counter" class="parallax-section">
			<div class="container">
				<div class="row">
				
					<!-- first count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="64">0</span>
							</div>
							<i class="fa fa-users fa-3x"></i>
							<h3>Happy Clients</h3>
						</div>
					</div>
					<!-- end first count item -->
				
					<!-- second count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="565">0</span>
							</div>
							<i class="fa fa-check-square fa-3x"></i>
							<h3>Projects completed</h3>
						</div>
					</div>
					<!-- end second count item -->
				
					<!-- third count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="97">0</span>
								<span>%</span>
							</div>
							<i class="fa fa-thumbs-up fa-3x"></i>
				            <h3>Positive feedback</h3>
							
						</div>
					</div>
					<!-- end third count item -->
					
					<!-- fourth count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="counters-item kill-margin-bottom">
							<div>
							    <span data-speed="3000" data-to="23">0</span>
							</div>
							<i class="fa fa-users fa-3x"></i>
							<h3>Clients active</h3>
						</div>
					</div>
					<!-- end fourth count item -->
					
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->
		
		
		<!-- Start Services Section
		==================================== -->
		
	
		
		<!-- Start Team Skills
		=========================================== -->
		
		<section id="team-skills" class="parallax-section">
			<div class="container" id="services">
				<div class="row wow fadeInDown" data-wow-duration="500ms">
				
					<!-- section title -->
					<div class="title text-center">
						<h2>Our <span class="color">Skills</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="80">
								<span class="percent"></span>
							</span>
							<h3><i class="fa fa-wordpress"></i> Wordpress</h3>
							<p> O WordPress development involves creating websites using the WordPress platform.</p>
						</div>
					</div>
					<!-- end skill set -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="90">
								<span class="percent">86</span>
							</span>
							<h3><i class="fa fa-html5"></i>HTML 5</h3>
							<p>With its modern and flexible structure, HTML5 allows the creation of interactive and responsive web experiences for users.</p>
						</div>
					</div>
					<!-- end skill set -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="85">
								<span class="percent"></span>
							</span>
							<h3><i class="fa fa-android"></i> Android</h3>
							<p>Android development refers to creating applications for mobile devices that use the Android operating system.</p>
						</div>
					</div>
					<!-- end skill set -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="70">
								<span class="percent"></span>
							</span>
							<h3><i class="fa fa-apple"></i> IOS</h3>
							<p>
								iOS development refers to creating applications for Apple devices.</p>
						</div>
					</div>
					<!-- end skill set -->
					
				</div>  		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!-- Start Our Team
		=========================================== -->
		
		<section id="our-team">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
						<h2>Our <span class="color">Team</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- team member -->
					<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms">
                       <article class="team-mate">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="/img/foto-wladi.DNG" alt="Meghna">
								<!-- /member photo -->
								
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Wladimir Eduardo Araujo</h3>
								<span>CEO/Founder</span>
							</div>
							<!-- /member name & designation -->
							
							<!-- about member -->
                           <div class="member-info">
                               <p>Paid traffic manager</p>
                           </div>
						   <!-- /about member -->
						   
                       </article>
                    </div>
					<!-- end team member -->
					
					<!-- team member -->
					<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
                       <article class="team-mate">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="/img/formal.png" alt="Pedro Mamede">
								<!-- /member photo -->
								
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Pedro Mamede</h3>
								<span>Manager</span>
							</div>
							<!-- /member name & designation -->
							
							<!-- about member -->
                           <div class="member-info">
                               <p>Programmer and software developer.</p>
                           </div>
						   <!-- /about member -->
						</article>
                    </div>
					<!-- end team member -->
					
					<!-- team member -->
					<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
                       <article class="team-mate">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="/img/Social-Media.png" alt="Meghna" >
								<!-- /member photo -->
								
								
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Thiago Saraiva</h3>
								<span>Paid traffic</span>
							</div>
							<!-- /member name & designation -->
							
							<!-- about member -->
                           <div class="member-info">
                               <p>manages company leverage announcements</p>
                           </div>
						   <!-- /about member -->
                       </article>
                    </div>
					<!-- end team member -->
					
					
					
						
                    </div>
					<!-- end team member -->
					
				</div>  	<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		
		<!-- Start Twitter Feed
		=========================================== -->
		
		<section id="twitter-feed" class="parallax-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
					
						<!-- twitter bird -->
						<div class="twitter-bird wow fadeInDown" data-wow-duration="500ms">
							<span>
								<a href="https://api.whatsapp.com/send?phone=351920152491" >	<i class="bi bi-whatsapp" style="font-size: 4.5rem;color: #6CB670;"></i></a>
							</span>
						</div>
						<!-- /fetching tweet -->
						
						<!-- follow us button -->
						<a href="https://api.whatsapp.com/send?phone=351920152491" title="Follow Us" target="_blank" class="btn btn-transparent wow fadeInUp" data-wow-duration="500ms">Contact</a>						
						<!-- /follow us button -->
						
					</div>
				</div>       <!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!-- Start Pricing section
		=========================================== -->
		
		
		
		
		<!--
		Start Blog Section
		=========================================== -->
		
		<!-- Srart Contact Us
		=========================================== -->		
		<section id="contact-us">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Get In <span class="color">Touch</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- Contact Details -->
					<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
						<h3>Contact Details</h3>
						<p>We're here to help you propel your business to digital success. With an experienced team passionate about what we do, we are ready to offer personalized solutions and effective strategies to achieve your goals. Contact us today and discover how we can transform your online presence and drive the growth of your business.".</p>
						<div class="contact-details">
							<div class="con-info clearfix">
								<i class="fa fa-home fa-lg"></i>
								<span>Ed. Brigantia Ecopark, Av. Cidade de León 506, 5300-358 Bragança</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-phone fa-lg"></i>
								<span>Phone: +(351) 920.152.491</span>
							</div>
							
							
							<div class="con-info clearfix">
								<i class="fa fa-envelope fa-lg"></i>
								<span>Email: marketing@connectify.pics</span>
							</div>
						</div>
					</div>
					<!-- / End Contact Details -->
						
					<!-- Contact Form -->
					<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
						<form id="contact-form" method="post" action="sendmail.php" role="form">
						
							<div class="form-group">
								<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
							</div>
							
							<div class="form-group">
								<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
							</div>
							
							<div class="form-group">
								<input type="text" placeholder="Telemovel" class="form-control" name="subject" id="subject">
							</div>
							
							<div class="form-group">
								<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
							</div>
							
							<div id="mail-success" class="success">
								Thank you. The Mailman is on His Way :)
							</div>
							
							<div id="mail-fail" class="error">
								Sorry, don't know what happened. Try later :(
							</div>
							
							<div id="cf-submit">
								<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
							</div>						
							
						</form>
					</div>
					<!-- ./End Contact Form -->
				
				</div> <!-- end row -->
			</div> <!-- end container -->
			
			<!-- Google Map -->
			<div class="mapa">
				<h1 style="text-align: center;">Our Location</h1>
			<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11010.821360474534!2d-6.750322585954915!3d41.8188747725367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd3a361fd893e7b1%3A0x88f5420618e9e5f7!2sMontesino!5e0!3m2!1spt-PT!2spt!4v1709633055642!5m2!1spt-PT!2spt" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>

			<!-- /Google Map -->
			
		</section> <!-- end section -->
		
		<!-- end Contact Area
		========================================== -->
		
		<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">
						
						<!-- Footer Social Links -->
						<div class="social-icon">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
						<br>
						
						<!--/. End Footer Social Links -->

						<!-- copyright -->
                    
		
							<p style="text-align: center;">Developed by Pedro Mamede <a href="" style="color: aquamarine;"> </a>. Copyright &copy; 2019. All Rights Reserved.</p>
						<!-- /copyright -->
						
					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer --> 
		
		<!-- Back to Top
		============================== -->
		<a href="javascript:;" id="scrollUp">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>
		
		<!-- end Footer Area
		========================================== -->
		
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Slitslider -->
		<script src="js/jquery.slitslider.js"></script>
		<script src="js/jquery.ba-cond.min.js"></script>
		<!-- Parallax -->
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Portfolio Filtering -->
		<script src="js/jquery.mixitup.min.js"></script>
		<!-- Custom Scrollbar -->
		<script src="js/jquery.nicescroll.min.js"></script>
		<!-- Jappear js -->
		<script src="js/jquery.appear.js"></script>
		<!-- Pie Chart -->
		<script src="js/easyPieChart.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing-1.3.pack.js"></script>
		<!-- tweetie.min -->
		<script src="js/tweetie.min.js"></script>
		<!-- Google Map API -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Highlight menu item -->
		<script src="js/jquery.nav.js"></script>
		<!-- Sticky Nav -->
		<script src="js/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script src="js/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script src="js/wow.min.js"></script>
		<!-- For video responsive -->
		<script src="js/jquery.fitvids.js"></script>
		<!-- Grid js -->
		<script src="js/grid.js"></script>
		<!-- Custom js -->
		<script src="js/custom.js"></script>

    </body>
</html>