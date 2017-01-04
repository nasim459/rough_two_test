
<?php include("header.php"); ?>
	<!--banner-starts-->
	<!-- <div class="banner"> 
		<div class="container">
			<div class="banner-top">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-text">
								<h3>Certified Tester Community</h3>
								<p>Software Quality Testing</p>
							</div>
						</li>
						<li>
							<div class="banner-text">
								<h3>Certified Tester Community</h3>
								<p>Software Quality Testing</p>
							</div>
						</li>
						<li>
							<div class="banner-text">
								<h3>Certified Tester Community</h3>
								<p>Software Quality Testing</p>
							</div>
						</li>
					</ul>
				</div>
			</section>
			</div>
		</div>
	</div> -->
	<!--banner-end-->
	<!--FlexSlider-->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
	<!--End-slider-script-->
	<!--welcome-starts-->
	<div class="welcome">
		<div class="container">
			<div class="welcome-top">
				<div class="col-md-4 welcome-left heading">
					<h2>Welcome</h2>
					<h5>Certified Tester Community</h5>
					<p>Here you learn by practice. We make tons of efforts to take boredom out of learning 
						and make education a fun experience.
					</p>
				</div>	
				<div class="col-md-4 welcome-left">
					<div class="welcome-one">
						<div class="wel-left">
							<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
						</div>
						<div class="wel-right">
							<h4>Software Quality Testing </h4>
							<p>Software quality assurance consists of a means of monitoring the software engineering processes and methods used to ensure quality.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="welcome-two">
						<div class="wel-left">
							<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
						</div>
						<div class="wel-right">
							<h4>Research Association</h4>
							<p>Software quality assurance consists of a means of monitoring the software engineering processes and methods used to ensure quality</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>	
				<div class="col-md-4 welcome-left">
					<div class="welcome-one">
						<div class="wel-left">
							<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
						</div>
						<div class="wel-right">
							<h4>Research Association</h4>
							<p>Software quality assurance consists of a means of monitoring the software engineering processes and methods used to ensure quality</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="welcome-two">
						<div class="wel-left">
							<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
						</div>
						<div class="wel-right">
							<h4>Quality Assurance</h4>
							<p>Software quality assurance consists of a means of monitoring the software engineering processes and methods used to ensure quality</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>	
				<div class="clearfix"></div>	
			</div>	
		</div>
	</div>
	<!--welcome-end-->
	<!--events-starts-->
	<!-- <div class="events">
		<div class="container">
			<div class="events-top heading">
				<h3>Latest Events</h3>
				<p>Donec egestas nibh eu ipsum euismod cursus. Aliquam et arcu blandit, efficitur ante a, lacinia neque. Pellentesque lectus neque, vehicula vitae massa ac, malesuada dictum velit.</p>
			</div>	
			<div class="events-bottom">
				<div class="col-md-6 event-left">
					<img src="images/e1.jpg" alt="" />
					<div class="event">
						<h4>Vivamus pulvinar lectus eu purus</h4>
						<p> Etiam varius facilisis mauris, vitae consectetur ipsum pellentesque nec. Mauris iaculis mollis ante a sagittis. Sed eu ligula urna. Suspendisse potenti. Donec eu porttitor diam, eget eleifend massa.</p>
					</div>
					<div class="date">
						<p>May 29,2015</p>
					</div>
				</div>	
				<div class="col-md-3 event-right">
					<div class="e-1">
						<img src="images/e2.jpg" alt="" />
						<h4>Morbi et facilisis tellus</h4>
					</div>
					<div class="e-2">
						<img src="images/e3.jpg" alt="" />
						<h4>Morbi et facilisis tellus</h4>
					</div>
				</div>	
				<div class="col-md-3 event-right">
					<div class="e-1">
						<img src="images/e4.jpg" alt="" />
						<h4>Morbi et facilisis tellus</h4>
					</div>
					<div class="e-2">
						<img src="images/e5.jpg" alt="" />
						<h4>Morbi et facilisis tellus</h4>
					</div>
				</div>	
				<div class="clearfix"></div>	
			</div>
		</div>	
	</div> -->	
	<!--events-end-->
	<!--help-starts-->
	<!-- <div class="help">
		<div class="help-left">
			<img src="images/h2.jpg" alt="" />
		</div>
		<div class="help-right heading">
			<h3>We Need Your Help</h3>
			<h5>Mauris iaculis mollis ante a sagittis eget.</h5>
			<p>Praesent iaculis purus at arcu pharetra sodales. Nunc vehicula congue odio ultricies bibendum. Vestibulum vitae varius eros. Curabitur pulvinar tempus pellentesque. Curabitur magna dui, ultricies nec ultrices rutrum, facilisis at augue. Proin laoreet dui gravida dictum euismod. Nullam molestie ante non magna vestibulum imperdiet vitae ac tortor. Praesent sed maximus ligula.</p>
			<div class="tool">
				<a class="tooltips" href="#">
				<span></span></a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div> -->	
	<!--help-end-->
	<!--letter-starts-->
	<div class="letter">
		<div class="container">
			<div class="letter-top heading">
				<h3>Newsletter Subscription</h3>
				<div class="letter-bottom">
					<form>
						<input type="text" value="Enter Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Name';}">
						<input type="text" value="Enter Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Email';}">
						<input type="submit" value="Subscribe">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--letter-end-->
	<!--team-starts-->
	<div class="team">
		<div class="container">
			<div class="team-top heading">
				<h3>Our Donors</h3>
			</div>
			<div class="team-bottom">
				<div class="col-md-3 team-left wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<a href="#">
						<img src="images/t1.jpg" alt="">
						<div class="captn">
							<h4>Rashed Korim</h4>
							<p>ISTQB​ ​Certified Tester</p>
						</div>
						<div class="team-text">
							<h5>Rashed Korim</h5>
							<p>ISTQB​ ​Certified Tester</p>
						</div>
					</a>					
				</div>
				<div class="col-md-3 team-left wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<a href="#">
						<img src="images/t2.jpg" alt="">
						<div class="captn">
							<h4> Suvro </h4>
							<p>ISTQB​ ​Certified Tester</p>
						</div>
						<div class="team-text">
							<h5>Akter Ul Alam Suvro</h5>
							<p>ISTQB​ ​Certified Tester</p>
						</div>
					</a>					
				</div>
				<div class="col-md-3 team-left wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<a href="#">
						<img src="images/touhid.jpg" alt="">
						<div class="captn">
							<h4>Touhid Bhuiyan</h4>
							<p>Associate Professor at DIU</p>
						</div>
						<div class="team-text">
							<h5>Touhid Bhuiyan</h5>
							<p>Head Of SWE</p>
						</div>
					</a>					
				</div>
				<div class="col-md-3 team-left wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<a href="#">
						<img src="images/t3.jpg" alt="">
						<div class="captn">
							<h4>Samiul Siam</h4>
							<p>ISTQB​ ​Certified Tester</p>
						</div>
						<div class="team-text">
							<h5>Samiul Siam</h5>
							<p>ISTQB​ ​Certified Tester</p>
						</div>
					</a>					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
	</div>
	<!--team-end-->
	<!--address-starts-->
	<!-- <div class="address">
		<div class="container">
			<div class="address-top">
				<div class="col-md-4 add-left">
					<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					<p><label>Company name.</label>
						795 Folsom Ave, Suite 600
						San Francisco, CA 94107</p>
				</div>
				<div class="col-md-4 add-left">
					<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
					<p>+122 235 5689 , 
					<br>+132 326 3695</p>
				</div>
				<div class="col-md-4 add-left">
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					<p><a href="mailto:example@email.com">contact@example.com</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div> -->
	<!--address-end-->
<?php include("footer.php"); ?>

