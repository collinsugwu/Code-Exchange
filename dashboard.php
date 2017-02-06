<?php
    require "db.php";
 $_firstname = $_SESSION['fname'];
 $current_email = $_SESSION['email'];
  $teach_id = $_SESSION['id'];
    if (!$_firstname) {
        header("location: login.php");

    }else{
    		if(isset($_POST['apply'])) {
    			$teach_id = $_POST['teach_id'];
    			$sql = mysql_query("INSERT INTO `teach_apply` (`id`, `teach_id`, `user_email`) VALUES (NULL, '$teach_id', '$current_email')");	

    			
    			header('location:  complain.php');
    		}
    }


?>


<!DOCTYPE html>
<html>
        <head>
        	<title>new</title>

        	<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
        	 <link rel="stylesheet" type="text/css" href="css/main.css">
           
           <link rel="stylesheet" type="text/css" href="css/dashboard.css">

        </head>
        <body>

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
                            
                        </nav>
                    </div>

                    <div class="container-fluid dasdiv">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-12 side_barlist thumbnail">
                                        <ul class="nav nav-tabs nav-stacked" role="tablist">
                                            <li role="presentation" class="active"><a href="#session" aria-controls="#session" role="tab" data-toggle="tab">SESSION</a></li>
                                            <li role="presentation"><a href="#teach" aria-controls="teach" role="tab" data-toggle="tab">TEACH</a></li>
                                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">ACTIVE TEACHERS</a></li>
                                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">SESSIONS CLOSE TO YOU</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-9 body_list">
                                <div class="row tab-content">
                                    
                                    <div role="tabpanel" class="tab-pane active in" id="session">
                                            <!-- Nav tabs -->
                                        <div class="col-md-12 ">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">CURRENT</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">PREVIOUS</a>
                                                </li>

                                            <!-- Tab panes -->
                                            <div class="tab-content">

                                                <div role="tabpanel" class="tab-pane active" id="home">
                                                    <table class="table table-hover">
                                                        <thead>

                                                            <tr>
                                                                <th>SESSIONS APPLIED</th>
                                                                <th>DATE</th>
                                                                <th>TIME</th>
                                                                <th>VENUE</th>
                                                                <th>DELETE</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                       

                                                         
                                        <?php 
                                       
                                        	$sql = mysql_query("SELECT * FROM  `teach_apply` WHERE user_email = '$current_email'");

                                        		$row = mysql_num_rows($sql); 

                                        				for($j=0; $j < $row; ++$j){
                                                   $result = mysql_fetch_assoc($sql);
                                                   	       $result2 = $result['teach_id'];
                                                   		$subsql = mysql_query("SELECT * FROM `teach` WHERE id = '$result2'");	
                                                   			$result3 = mysql_fetch_assoc($subsql);
                                                   			
                                                   		
                                             		
                                             				?>
                                             				<tr>
                                                                <td><?php echo $result3['topic']; ?></td>
                                                                <td><?php echo $result3['date']; ?></td>
                                                                <td><?php echo $result3['time']; ?></td>
                                                                <td><?php echo $result3['venue']; ?></td>
                                                               <td><a href="" class="glyphicon glyphicon-trash"></a></td>

                                                            </tr>
                                            				

                                             			<?php
                                             			}
                                             		
                                                	
                                                    ?>       
 													

                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div role="tabpanel" class="tab-pane" id="tab">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>SESSIONS ATTENDED</th>
                                                                <th>DATE</th>
                                                                <th>TIME</th>
                                                                <th>VENUE</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div> 
                                   </div>


                                   <div role="tabpanel" class="tab-pane" id="teach">
                                    <div class="col-md-12">
                                      <!-- Nav tabs -->
                                         <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active in">
                                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">CURRENT</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">PREVIOUS</a>
                                                </li>
                                         </ul>
                                       
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="home">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>SESSIONS TO TEACH</th>
                                                                <th>DATE</th>
                                                                <th>TIME</th>
                                                                <th>VENUE</th>
                                                                <th>EDIT</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                      <?php
                                                             $current_email = $_SESSION['email'];

                                                                $sql = mysql_query("SELECT * FROM `teach` WHERE `posted_by` = '$current_email'");
                                                                if(mysql_num_rows($sql) > 0 ){
                                                                        
                                                       while($row = mysql_fetch_assoc($sql)){
                                                        ?>
                                                        
                                                            <tr>
                                                               <td><?php echo $row['topic']; ?></td>
                                                               <td><?php echo $row['date']; ?></td>
                                                                <td><?php echo $row['time']; ?></td>
                                                                <td><?php echo $row['venue']; ?></td>
                                                               <td><a href="" class="glyphicon glyphicon-pencil"></a></td> 
                                                               <td><a href="view.php">view</a></td> 
                                                            </tr>
                                                        
                                                        <?php  
                                                       }
                                                           }               
                                                        ?> 
                                                        </tbody>
                                                    </table>
                                                </div>

                                        
                                                <div role="tabpanel" class="tab-pane" id="">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>SESSIONS ATTENDED</th>
                                                                <th>DATE</th>
                                                                <th>TIME</th>
                                                                <th>VENUE</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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