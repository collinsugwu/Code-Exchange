 <?php 
   require "db.php";
 $_firstname = $_SESSION['fname'];
 $current_email = $_SESSION['email'];
  $teach_id = $_SESSION['id'];

?>


<!DOCTYPE>
<html>
<head>
  <title>view list</title>
</head>
<body>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>LIST OF APPLICANTS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
<?php
        $sql = mysql_query("SELECT * FROM  `teach_apply` WHERE teach_id = '$teach_id'");

            $row = mysql_num_rows($sql); 

              for($j=0; $j < $row; ++$j){
              $result = mysql_fetch_assoc($sql);
              $result2 = $result['user_email'];
              $subsql = mysql_query("SELECT * FROM `user_register` WHERE email = '$result2'"); 
                $result3 = mysql_fetch_assoc($subsql);
           ?>          
          <td><?php echo $result3['firstname']."<br>";?></td>
          <?php
        }
        ?>
        </tr>
      </tbody>
    </table>
</body>
</html>