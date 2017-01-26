<?php
    require "db.php";
 $_firstname = $_SESSION['fname'];

    if (!$_firstname) {
        header("location: login.php");
    }


?>


<!DOCTYPE html>
<html>
<head>
	<title>new</title>

	<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>






<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            
            <a class="navbar-brand" href="index.php">
                <img src="img/codexchange1.png" alt="LOGO"">
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav"> 

                 <li class="nav text-center top-nav signed_user"><h4><b><?php echo $_firstname;?></b></h4></li> 

            <li class="dropdown">
                <a href="#" class="dropdown-toggle navbar-right" data-toggle="dropdown">PROFILE<b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                
                    <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
            <li class="nav navbar-right top-nav signeduser"><a href="userpage.php">BACK</a></li> 
            </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav" class="nav nav-tabs nav-stacked text-center" role="tablist">
                <li>
                    <a data-toggle="collapse" data-target="#submenu-1"> SESSIONS</a>

                    <ul id="submenu-1" class="collapse" class="nav nav-tabs nav-stacked text-center" role="tablist">

                        <li role="presentation" class="active"><a href="#top" aria-controls="top" role="tab" data-toggle="tab">CURRENT</a></li>

                        <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"> PREVIOUS</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i> TEACH <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">

                        <li role="presentation"><a href="#to_teach" aria-controls="to_teach" role="tab" data-toggle="tab"><i class="fa fa-angle-double-right"></i> TO TEACH</a></li>

                        <li role="presentation"><a href="#taught" aria-controls="taught" role="tab" data-toggle="tab"><i class="fa fa-angle-double-right"></i> TAUGHT</a></li>

                        <li><a href="#"><i class="fa fa-angle-double-right"></i> ACTIVE STUDENTS</a></li>

                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div>
            <!-- Page Heading -->
            <div class="row tab-content">
                <div class="col-sm-12 col-md-9 well" id="content">
                    <div role="tabpanel" class="tab-pane fade active in tag" id="top">
                        <center><h4><b>CURRENT SESSIONS</b></h4></center>
                        
                        <table class="table table-hover stripe">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>SESSIONS</th>
                                    <th>DATE</th>
                                    <th>TIME</th>
                                     <th>VENUE</th>
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <tr scope="row">
                                    <td>1</td>
                                    <td>Ruby on rails tutorials</td>
                                    <td>21-7-2017</td>
                                    <td>9am</td>
                                     <th>cchub</th>
                                    

                                </tr>
                                <tr scope="row">
                                    <td>2</td>
                                    <td>Ruby on rails tutorials</td>
                                    <td>21-7-2017</td>
                                    <td>9am</td>
                                     <th>cchub</th>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                
                <div role="tabpanel" class="tab-pane fade tag" id="home">
                    <center><h4><b>PREVIOUS SESSIONS</b></h4></center>
                    <table class="table table-hover stripe">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>SESSIONS</th>
                                    <th>DATE</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr scope="row">
                                    <td>1</td>
                                    <td>Ruby on rails tutorials</td>
                                    <td>21-7-2017</td>
                                   
                                </tr>
                                <tr scope="row">
                                    <td>2</td>
                                    <td>Ruby on rails tutorials</td>
                                    <td>21-7-2017</td>
                                    
                                </tr>
                            </tbody>
                        </table>
                </div>
                
                <div role="tabpane2" class="tab-pane fade tag" id="to_teach">
                    <center><h4><b>TO TEACH</b></h4></center>
                     <table class="table table-hover stripe">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>SESSIONS</th>
                                    <th>DATE</th>
                                    <th>TIME</th>
                                    <th>VENUE</th>
                                    <th>EDIT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr scope="row">
                                    <td>1</td>
                                    <td>css3 Tutorials</td>
                                    <td>21-7-2017</td>
                                    <td>10am</td>
                                    <td>cchub</td>
                                   <td class="glyphicon glyphicon-pencil"></td>
                                </tr>
                                <tr scope="row">
                                    <td>2</td>
                                    <td><a>Ruby on rails tutorials</a></td>
                                    <td>21-7-2017</td>
                                    <td>10am</td>
                                    <td>alara street sabo</td>
                                   <a href="teachreg.php"><td><img src="img/edit.png"></td></a>
                                </tr>
                            </tbody>
                        </table>
                </div>

                  <div role="tabpane2" class="tab-pane fade tag" id="taught">
                    <center><h4><b>TAUGHT</b></h4></center>
                     <table class="table table-hover stripe">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>SESSIONS</th>
                                    <th>DATE</th>
                                    <th>TIME</th>
                                    <th>VENUE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr scope="row">
                                    <td>1</td>
                                    <td>css3 Tutorials</td>
                                    <td>21-7-2017</td>
                                    <td>10am</td>
                                    <td>cchub</td>
                                </tr>
                                <tr scope="row">
                                    <td>2</td>
                                    <td>Ruby on rails tutorials</td>
                                    <td>21-7-2017</td>
                                    <td>10am</td>
                                    <td>alara street sabo</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->

				<!--jquery-->
				<script  src="js/jquery.min.js"></script>
				<!--bootstrap js-->
				<script src="bootstrap/js/bootstrap.min.js"></script>
				<!--js-->
				<script type="text/javascript" src="js/index.js"></script>
</body>
</html>