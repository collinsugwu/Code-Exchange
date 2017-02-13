 <?php
	require "db.php";
 	@$_firstname = $_SESSION['fname']; 
    @$current_email = $_SESSION['email'];
   if($_firstname){
   	header("location: userpage.php");
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
			<!--events css-->
			<link rel="stylesheet" type="text/css" href="css/events.css">
			

	</head>

	<body>
	<!--header-->
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
					

				<nav class="navbar navbar-inverse">
				  <div class="container">
				    <div class="navbar-header">
				     <span> SESSIONS</span>
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

				<!--events-->
				<div class="container-fluid events">
					<div class="row">
						<div class="col-md-3">
							<div class="row c-events">
								<div class="col-md-12 thumbnail">
									<ul class="nav nav-tabs nav-stacked text-center" role="tablist">
						                <li role="presentation" class="active"><a href="#allevents" aria-controls="allevents" role="tab" data-toggle="tab">ALL SESSIONS</a></li>
						                <li role="presentation"><a href="" aria-controls="" role="tab" data-toggle="tab">TRENDING</a></li>
						                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">ACTIVE TEACHERS</a></li>
						                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">SESSIONS CLOSE TO YOU</a></li>
						            </ul>
												
								</div>
								
							</div>
							
						</div>
						<div class="col-md-9">
							<div class="row tab-content">
								<div role="tabpanel" class="tab-pane fade active in" id="allevents">
							
									<?php
										$sql = mysql_query("SELECT * FROM `teach` ORDER BY `id` DESC");
										if(mysql_num_rows($sql) > 0 ){
								
								while($row = mysql_fetch_assoc($sql)){
								?>
							

								<div class="col-md-12 thumbnail L-events">
										<h4><a href="#modal-id" data-toggle="modal"><?php echo $row['topic'];?></a></h4>
										<h5><b><?php echo strtoupper($row['fullname']);?></b></h5>
										<h5>VENUE: <?php echo $row['venue'];?></h5>
										<h5>DATE: <?php echo $row['date']."  &nbsp; &nbsp; "."TIME:". $row['time'];?></h5>
										<button type="button" class="btn btn-default but"><a href="login.php">APPLY</a></button>
									<span>
										<ul>
											<li><a href="facebook.com"><img src="img/facebook.png"></a></li>
											<li><a href="twitter.com"><img src="img/twitter.png"></a></li>
										</ul>
									</span>
								</div>

								<?php 
								}
									}				
								?>	
								<div class="col-md-12 thumbnail L-events">
							<h4><a href="#modal-id" data-toggle="modal">CSS3 FOR BEGINERS</a></h4>
							<h5>Ugwu Collins php developer works at switch</h5>
							<h5>Venue: ccub, sabo yaba.</h5>
							<h5>Date: 20th jan, 2017.  Time: 9am.</h5>
							<button type="button" class="btn btn-default but">APPLY</button>
							<span>
								<ul>
									<li><a href="facebook.com"><img src="img/facebook.png"></a></li>
									<li><a href="twitter.com"><img src="img/twitter.png"></a></li>
								</ul>
							</span>
							</div>


								<div class="col-md-12 thumbnail L-events">
							<h4><a href="#modal-id" data-toggle="modal">RUBY FOR BEGINERS</a></h4>
							<h5>Ugwu Collins php developer works at switch</h5>
							<h5>Venue: ccub, sabo yaba.</h5>
							<h5>Date: 20th jan, 2017.  Time: 9am.</h5>
							<button type="button" class="btn btn-default but">APPLY</button>
							<span>
								<ul>
									<li><a href="facebook.com"><img src="img/facebook.png"></a></li>
									<li><a href="twitter.com"><img src="img/twitter.png"></a></li>
								</ul>
							</span>
							</div>
						</div>	
						  	<div role="tabpanel" class="tab-pane fade" id="messages">
			                  
			                </div>
						</div>
					</div>		
				</div>

					<div class="text-center">
						<ul class="pagination">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>

						

				<div class="modal fade" id="modal-id">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
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