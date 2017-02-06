<?php
require ('db.php');
 $teach_id = $teach_row['id'];


$sql= mysql_query("SELECT * FROM `teach` WHERE `id` = 'teach_apply.teach.id'");

if(mysql_num_rows($sql) > 0){
	while ($teach_row = mysql_fetch_assoc($sql)) {
		echo $teach_row['fullname'];
	}
	
}


?> 