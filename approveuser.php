<?php
mysql_connect('localhost','root','');
mysql_select_db('registration');

$user_id = $_GET['user_id'];
$valid = $_GET['valid'];

if($type==0){
	mysql_query("UPDATE student SET valid=1 WHERE id='$user_id'");
	header('location: adminpanel.php?valid=user');	
}

?>