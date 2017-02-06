<?php
	require ('db.php');
	$_firstname = $_SESSION['fname'];
	@ $current_email = $_SESSION['email'];
    
 ?>
<!DOCTYPE html>
	<html lang="en">
		<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-compactible" content="IE=edge">
				<title>codexchange</title>

				<!--bootstrap css-->
				<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
				<!--index css-->
				<link rel="stylesheet" type="text/css" href="css/main.css">
				<!---responsive-->
				<link rel="stylesheet" type="text/css" href="css/responsive.css">

		</head>
		<body>
			<div class="body_div">
				<header>
					<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
						<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header navbar-left">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a href="#"><img src="img/codexchange1.png"></a>
							</div>
					
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-ex1-collapse nav_bar">
								
								
								<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="events.php"><b>SESSION</b></a>
									</li>
									<li>
										<a href="login.php"><b>TEACH</b></a>
									</li>

									<li>
									<?php
										if($current_email){
										echo "<a href=\"logout.php\"><b>LOG OUT</b></a>";
									}else{
										echo "<a href=\"login.php\"><b>LOG IN</b></a>";
									}
									?>
									</li>

									<li>
									<?php
										if($current_email){
										
										}else{
										echo "<a href=\"register.php\"><b>SIGN UP</b></a>";
										}
										?>
									</li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div>
					</nav>
				</header>
					
	<!--slider-->
				<div class="carou_slider">
				
				<div id="carousel-id" class="carousel slide" data-ride="carousel">
					<div class="over_lay col-md-12 col-sm-12 col-xs-12 cd text-center">
						<div class="inner container-fluid">
							<div id="text">
								<h1 class="text">LEARN. CODE. DEVELOP</h1>
								<h2 class="text">Let's Code Together</h2>
							</div>
							<div id="slider_div">
								<form method="" action="" id="slider_search">
									<input type="search" name="search" id="s_input" class="form-control control" placeholder="Search sessions by Key Words" title="">
									<select name="select" id="input" class="form-control control" required="required">
										<option value="">Select Location</option>
										<option value="">Abuja</option>
										<option value="">Porthacourt</option>
									</select>
									<button type="button" class="btn btn-default but">SUBMIT</button>
								</form>
							</div>
						</div>	
					</div>
					
				
					<div class="carousel-inner">
						<div class="item">
							<img src="img/red.jpg">
							
						</div>
						<div class="item">
							<img src="img/slider1.jpg">
							
						</div>
						<div class="item active">
							<img src="img/black.jpeg">
						</div>
					</div>
				</div>
				</div>

				

			<!--event-->
			<div id="event-div" class="text-center container-fluid">
			
				<h2 id="event">SESSIONS</h2>
					<div class="row grid-row text-center">
						<div class="thumbnail col-xs-12 col-sm-6 col-md-4 col-lg- grid">
						<a href="">
							<img src="img/html.png">
								<div class="grid-div">
								<p class="grid-text">&lt; html /&gt;</p>
							</div>
						</a>
						</div>
						<div class="thumbnail col-xs-12 col-sm-6 col-md-4 col-lg- grid">
							<a href="">
								<img src="img/css.jpeg">
								<div class="grid-div">
									<p class="grid-text">{css}</p>
								
								</div>
							</a>
						</div>
						<div class="thumbnail col-xs-12 col-sm-6 col-md-4 col-lg- grid">
							<a href="">
								<img src="img/php.jpeg">
								<div class="grid-div">
									<p class="grid-text">&lt;? php ?&gt;</p>
								
								</div>
							</a>
						</div>
					
					
						<div class="thumbnail col-xs-12 col-sm-6 col-md-4 col-lg- grid">
							<a href="">
								<img src="img/javasc.jpeg">
								<div class="grid-div">
									<p class="grid-text">Javascript</p>
								</div>
							</a>
						</div>
						<div class="thumbnail col-xs-12 col-sm-6 col-md-4 col-lg- grid">
							<a href="">
								<img src="img/c++.jpeg">
								<div class="grid-div">
									<p class="grid-text">c++</p>
								</div>
							</a>
						</div>
						<div class="thumbnail col-xs-12 col-sm-6 col-md-4 col-lg- grid">
							<a href="#"><img src="img/java.png">
								<div class="grid-div">
									<p class="grid-text">Java</p>
								</div>
								</a>
						</div>

					</div>
					<a href="events.php"><button type="button" class="btn btn-default but">FIND SESSION</button></a>
				</div>


				<div class="how-it-works container-fluid">
					<div class="row h_i_w">
						<h3>HOW CODEXCHANGE WORKS</h3>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="h_first">
									<img src="img/map.png">
									<h3>SEARCH FOR SESSIONS</h3>
									<h4>Find event around you, apply  and learn a skill</h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="h_first">
									<img src="img/student.png">
									<h3>CREATE AN EVENT</h3>
									<h4>Create an Event and share your skill friends</h4>
								</div>
							</div>	
					</div>
				</div>
				
				<div class="background">
					<div class="over_lay"></div>
				</div>


				<div id="latest-events" class="container-fluid">
					<h3>LATEST SESSIONS</h3>
					<div class="row">
						<div class="thumbnail col-md-6 col-sm-12 col-xs-12 L-events" id="l_events">
							<h4>PHP TUTORIALS FOR BEGINERS</h4>
							<h5>Ugwu Collins php developer works at switch</h5>
							<h5>Venue: ccub, sabo yaba.</h5>
							<h5>Date: 20th jan, 2017.  Time: 9am.</h5>
							<a href="events.php"><button type="button" class="btn btn-default but">APPLY</button></a>
							<span>
								<ul>
									<li><a href="facebook.com"><img src="img/facebook.png"></a></li>
									<li><a href="twitter.com"><img src="img/twitter.png"></a></li>
								</ul>
							</span>

						</div>
						<div class="thumbnail col-md-6 col-sm-12 col-xs-12 L-events">
							<h4>GRAPIC DESIGN FOR BEGINERS</h4>
							<h5>Ugwu Collins php developer works at switch</h5>
							<h5>Venue: ccub, sabo yaba.</h5>
							<h5>Date: 20th jan, 2017.  Time: 9am.</h5>
							<a href="events.php"><button type="button" class="btn btn-default but">APPLY</button></a>
							<span>
								<ul>
									<li><a href="facebook.com"><img src="img/facebook.png"></a></li>
									<li><a href="twitter.com"><img src="img/twitter.png"></a></li>
								</ul>
							</span>
					</div>
				</div>
			</div>	

				<footer id="footer" class="container-fluid">
					<div class="row">
						<div class="f-list col-md-3 col-sm-6 col-xs-12">
							<ul>
								<li><a href="">Go to Top</a></li>
								<li><a href="">Privacy Policy</a></li>
								<li><a href="">Term of Use</a></li>
								<li><a href="">About Us</a></li>
								<li><a href="">FAQ</a></li>
								<li><a href="">&copy; Skillplus 2017.</a></li>
							</ul>
						</div>

						<div id="f-form" class="col-md-3 col-sm-6 col-xs-12">

							<h4>LEAVE A MESSAGE</h4>
							<form class="f-form">
								<input type="text" name="text" id="input" class="form-control" value="" required="required" placeholder="Name">
								<input type="email" name="emil" id="input" class="form-control" value="" required="required" placeholder="Email">
								<textarea name="textarea" id="inputTextarea" class="form-control" rows="3" required="required" placeholder="Message"></textarea>
								<button type="button" class="btn btn-default but">SUBMIT</button>
							</form>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 ">
							<h5>CONTACT US</h5>
							<p>No 10 Alara Street, Sabo Yaba Lagos</p>
							<p>+23491000000</p>
							<p>info@skillplus.com</p>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 f-socials">
							<ul>
								<li><a href="#"><img src="img/facebook.png"></a></li>
								<li><a href="#"><img src="img/twitter.png"></a></li>
								<li><a href="#"><img src="img/youtube.png"></a></li>
								<li><a href="#"><img src="img/whatsapp.png"></a></li>
							</ul>
							
						</div>

					</div>
				</footer>

			</div>






					<!--jquery-->
					<script  src="js/jquery.min.js"></script>
					<!--bootstrap js-->
					<script src="bootstrap/js/bootstrap.min.js"></script>
					<!--js-->
					<script type="text/javascript" src="js/index.js"></script>
			
		</body>
	</html>