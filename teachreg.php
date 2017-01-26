<?php
	require ('db.php');
	$_firstname = $_SESSION['fname'];
    $current_email = $_SESSION['email'];
   


	 if(!$_firstname){
	 	header("location: login.php");
	 }

		else if(isset($_POST['submit'])){
			$fullname = $_POST['fullname'];
			$topic = $_POST['topic'];
			$category =$_POST['category'];
			$venue =$_POST['venue'];
			$date =$_POST['date'];
			$time =$_POST['time'];
			$gender = $_POST['radio'];
			$applicants =$_POST['applicants'];
			$textarea =$_POST['textarea'];

				$fullname = mysql_escape_string($fullname);
				$topic = mysql_escape_string($topic);
				$category = mysql_escape_string($category);
				$venue = mysql_escape_string($venue);
				$date = mysql_escape_string($date);
				$time = mysql_escape_string($time);
				$gender = mysql_escape_string($gender);
				$applicants = mysql_escape_string($applicants);
				$textarea = mysql_escape_string($textarea);

			$sql = mysql_query("INSERT INTO `teach` (`id`, `fullname`, `topic`, `category`, `venue`, `date`, `time`, `gender`, `applicants`, `description`) VALUES (NULL, '$fullname', '$topic', '$category', '$venue', '$date', '$time', '$gender', '$applicants', '$textarea')");

			if($sql){
					setcookie('fullname', $fullname, time()+300000000);
					setcookie('topic', $topic, time()+300000000);
					setcookie('category',$category, time()+300000000);
					setcookie('venue', $venue, time()+300000000);
					setcookie('date', $date, time()+300000000);
					setcookie('time', $time, time()+300000000);
					setcookie('gender', $gender, time()+300000000);
					setcookie('applicants', $applicants, time()+300000000);
					setcookie('textarea', $textarea, time()+300000000);

					header("location: userpage.php");
					
			}else{
				die(mysql_error());
			}
		}
		
	
	




?>





<!DOCTYPE html>
<html lang="en">
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-compactible" content="IE=edge">
			<title>skillplus</title>

			<!--bootstrap css-->
			<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
			<!--index css-->
			<link rel="stylesheet" type="text/css" href="css/main.css">
			<!--events css-->
			<link rel="stylesheet" type="text/css" href="css/events.css">
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
										<a href="userpage.php"><b>SESSION</b></a>
									</li>
									<li>
										<a href="dashboard.php"><b>DASHBOARD</b></a>
									</li>
									<li>
										<a href="#"><b>LOG OUT</b></a>
									</li>
									
								</ul>
							</div><!-- /.navbar-collapse -->
						</div>
					</nav>
				</header>	

				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
				    <div class="navbar-header">
				     <span> TEACH A SKILL</span>
				     </div>
				     <div class="navbar-header pull-right">
				     <span><img src="img/Tonto.jpg"></span>
				     </div>
				    <form class="navbar-form navbar-left pull-right">
				      <div class="input-group">
				        <input type="text" class="form-control" placeholder="Search">
				        <div class="input-group-btn">
				          <button class="btn btn-default" type="submit">
				            <i class="glyphicon glyphicon-search"></i>
				          </button>
				        </div>
				      </div>
				    </form>
				  </div>
				</nav>

				<div class="container-fluid reg-body">
					<div class="row">
						<div class="col-md-12">
							<form action="" method="POST" role="form" class="tregform">
								
									<label for="">FULL NAME</label>
									<input type="text" class="form-control put" id="" placeholder="" name="fullname">
									<label for="">TOPIC</label>
									<input type="text" class="form-control put" id="" placeholder="" name="topic">
									<label for="">CATEGORY</label>
									<select name="category" id="input" class="form-control put" required="required">
										<option >Select a Category</option>
										<option value="php">php</option>
										<option value="html">html</option>
										<option value="css">css</option>
										<option value="javascritp">javascript</option>
										<option value="bootstrap">bootstrap</option>
										<option value="java">java</option>
										<option value="c++">c++</option>
									</select>
									<label for="">VENUE</label>
									<input type="text" name="venue" id="input" class="form-control put" value="" required="required">
									<label for="">DATE</label>
									<input type="date" name="date" id="input" class="form-control put" value="" required="required" title="">
									<label for="">TIME</label>
									<input type="time" name="time" id="input" class="form-control put" value="" required="required" title="">

									<label for="">GENDER</label>
									<div class="radio">
									
										<label>
											<input type="radio" name="radio" id="input" value="Male" class="male">
											Male
										</label>
										<label>
											<input type="radio" name="radio" id="input" value="Female" class="female">
											Female
										</label>
										<label>
											<input type="radio" name="radio" id="input" value="All GENDER" class="Both">
											Both
										</label>
									</div>
											<label for="">NUMBER OF APLLICANTS</label>
									<input type="number" name="applicants" id="input" class="form-control put" value="" required="required">
											<label for="">FULL DESCRIPTION</label>
									<textarea name="textarea" id="inputTextarea" class="form-control" rows="3" required="required" cols="50" rows="10"></textarea>
								
							
								
							
								<button type="submit" class="btn btn-primary but" name="submit">Submit</button>
							</form>
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
								<p><a href="">&copy Skillplus 2017.</a></p>
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