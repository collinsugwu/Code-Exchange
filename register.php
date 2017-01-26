 <?php
require ('db.php');
if(isset($_POST['Submit'])){
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$password=$_POST['password'];
	$com_password =$_POST['com_password'];
	$checkbox =$_POST['checkbox'];

		if($password == $com_password){
			$fname = mysql_escape_string($fname);
			$email = mysql_escape_string($email);
			$tel = mysql_escape_string($tel);
			$password = mysql_escape_string($password);
			$com_password = mysql_escape_string($com_password);
			$checkbox = mysql_escape_string($checkbox);
			

		$msql=  mysql_query("INSERT INTO `user_register` (`id`, `firstname`, `email`, `phone`, `password`) VALUES (NULL, '$fname', '$email', '$tel', '$password')");
		if ($msql) {

			$_SESSION['fname'] = $fname;
			$_SESSION['email'] = $email;

			$_firstname = $_SESSION['fname'];
			 $current_email = $_SESSION['email'];
			if (isset($_SESSION['fname'])) {
				
				header("Location: userpage.php");
			}else{
				echo mysql_error();
				echo "<script>alert('error')</script>";
		}

			
		}
	  		
		
		

		}else{
			

			}
			
}
	
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

	</head>

	<body>
	<!--header-->
			<header>
					<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header navbar-left">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a href="index.php"><img src="img/codexchange1.png"></a>
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
										<a href="login.php"><b>LOG IN</b></a>
									</li>
									<li>
										<button type="button" class="btn btn-default"><a href="register.php"><b>SIGN UP</b></a></button>
									</li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div>
					</nav>
				</header>

				<nav class="navbar navbar-default navbar-static-top" role="navigation">
					<div class="container">
						<h3>SIGN UP</h3>
					</div>
				</nav>

				<div class="container-fluid text-center reg-body">
					<div class="row text-center">
						<form action="register.php" method="POST" role="form" class="r-form text-center" name="myform" onsubmit="validate();">
							<div class="col-md-6 l-form">
								<div class="col-md-12">
									<input type="text" name="fname" id="input" class="form-control" value="" required="required" placeholder="Username">

									<input type="email" name="email" id="input" class="form-control" value="" required="required" placeholder="Email">

									<input type="tel" name="tel" id="inputTel" class="form-control" value="" required="required" placeholder="Phone Number" onkeypress="validatePhone();"><span id="phoneerror"> </span><br/>

									<input type="password" name="password" id="input" class="form-control" required="required" placeholder="Password" onkeypress="validatePhone();"><span id="passworderror"> </span><br/>

									<input type="password" name="com_password" id="inputPassword" class="form-control" required="required" placeholder="Comfirm Password">
								
								<div class="checkbox">
									<label>
										<input type="checkbox" name="checkbox" value="" id="check">
										I agree to codexchange <a href="#">Terms</a> and <a href="#">Condition</a>
									</label>
								</div>
									<button type="submit" class="btn btn-primary but" name="Submit" disabled="disabled" id="submit">Submit</button>

								</div>
							</div>
						</form>

						<div class="col-md-6 regAlt">
							<div class="row">
								<div class="col-md-12">
									<h4><b> LOG IN WITH</b></h4>
								</div>
							</div>
							
							<div class="col-md-12 facebook">
									<button type="button" class="btn btn-default"><img src="img/facebook.png">Facebook</button>
									
							</div>

							<div class="col-md-12 twitter">
									<button type="button" class="btn btn-default"><img src="img/twitter.png">Twitter</button>
									
							</div>
						</div>

					</div>
				</div>
		

				<footer id="footer" class="container-fluid">
					<div class="row">
						<div class="f-list col-md-3">
							<ul>
								<p><a href="">Go to Top</a></p>
								<p><a href="">Privacy Policy</a></p>
								<p><a href="">Term of Use</a></p>
								<p><a href="">About Us</a></p>
								<p><a href="">FAQ</a></p>
								<p><a href="">&copy codexchange 2017.</a></p>
							</ul>
						</div>

						<div id="f-form" class="col-md-3">

							<h4>LEAVE A MESSAGE</h4>
							<form class="f-form">
								<input type="text" name="text" id="input" class="form-control" value="" required="required" placeholder="Name">
								<input type="email" name="emil" id="input" class="form-control" value="" required="required" placeholder="Email">
								<textarea name="textarea" id="inputTextarea" class="form-control" rows="3" required="required" placeholder="Message"></textarea>
							</form>
						</div>

						<div class="col-md-3 f-socials">
							<ul>
								<li><a href="#"><img src="img/facebook.png"></a></li>
								<li><a href="#"><img src="img/twitter.png"></a></li>
								<li><a href="#"><img src="img/youtube.png"></a></li>
								<li><a href="#"><img src="img/whatsapp.png"></a></li>
							</ul>
							<button type="button" class="btn btn-default but">SUBMIT</button>
						</div>
						<div class="col-md-3">
							<h5>CONTACT US</h5>
							<p>No 10 Alara Street, Sabo Yaba Lagos</p>
							<p>+23491000000</p>
							<p>info@skillplus.com</p>
						</div>

					</div>
				</footer>
				<!--jquery-->
				<script  src="js/jquery.min.js"></script>
				<!--bootstrap js-->
				<script src="bootstrap/js/bootstrap.min.js"></script>
				<!--js-->
				<script type="text/javascript" src="js/index.js"></script>
		
	</body>
</html>