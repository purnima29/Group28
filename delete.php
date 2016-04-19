<?php
mysql_connect('localhost','root','');
mysql_select_db('registration');

$delete_id = $_GET['del'];

$query = "delete from student where id='$delete_id'";

if(mysql_query($query))
{
	echo "<script>window.open('adminpanel.php','_self')</script>";	
}

?>