<?php
require ('db.php');


if (isset($_POST['submit'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];
	$password_hash = md5($password);


	$email = mysql_escape_string($_POST['email']);
	$password = mysql_escape_string($_POST['password']);

	$sql = mysql_query("SELECT * FROM `user_register` WHERE `email` = '$email' AND `password` = '$password'");
				if(mysql_num_rows($sql) > 0){

					//setcookie('email', $email, time()+60*60*24);
					
					 //we also put the user_id and user_name values in the $_SESSION, so we can use it at various pages
                    while($row = mysql_fetch_assoc($sql))
                    {
                        $_SESSION['id']    = $row['id'];
                        $_SESSION['email']  = $row['email'];
                        $_SESSION['password'] = $row['password'];
                        $_SESSION['fname'] = $row['firstname'];
                        

                         $current_email = $_SESSION['email'];
                        
                         $current_id = $_SESSION['id'];

                        $_firstname = $_SESSION['fname'];

                       

                      header("Location: userpage.php");
                    }

	 				

			}else
			 {
	  				//header("Location: login.php");
			 	die('invalid email or password');
			}
			
	}else{
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
						<h3>LOG IN</h3>

					</div>
				</nav>
			<!--form-->
				<form action="" method="POST" role="form" class="text-center form-l">

					<div class="form-group l-form">
						<input type="email" name="email" id="inputEmail" class="form-control" value="" required="required" placeholder="Email">
						<input type="password" name="password" id="inputPassword" class="form-control" required="required" placeholder="Password">
					</div>
				
					
				
					<button type="submit" class="btn btn-primary but" name="submit">LOG IN</button>
				</form>

				<div class="text-center l-text">
					<span id="span">
						<h4>OR</h4>
						<h3><b>LOG IN WITH</b></h3>
						<a href=""><img src="img/facebook.png"></a>
						<a href=""><img src="img/twitter.png"></a>
					</span>
						
						<p><input type="checkbox" value="">
							Keep me signed in.
						</p>
						<p>
							<a data-toggle="modal" href='#modal-id'>forgot password?</a>.
						</p>
						<p>
							FIRST TIME HERE? <a href="register.php">Create an Account</a>
						</p>
				</div>

				
				<div class="modal fade" id="modal-id">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title"><img src="img/codexchange1.png"></h4>
							</div>
							<div class="modal-body">
								<input type="email" name="email" id="inputEmail" class="form-control" value="" required="required" placeholder="Email">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">RETRIVE</button>
							</div>
						</div>
					</div>
				</div>




				<!--jquery-->
				<script  src="js/jquery.min.js"></script>
				<!--bootstrap js-->
				<script src="bootstrap/js/bootstrap.min.js"></script>
				<!--js-->
				<script type="text/javascript" src="js/index.js"></script>
		
	</body>
</html>
