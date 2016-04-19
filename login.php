<?php

session_start();

$email=$_POST['email'];
$password=$_POST['password'];

if($email&&$password)
{
	$connect = mysql_connect("localhost","root","") or die("Couldn't connect to the databse");
	mysql_select_db("reg_stu") or die("Couldn't find database");

	$query = mysql_query("select * from reg_student where email='$email'");

	$numrows = mysql_num_rows($query);

	if($numrows!==0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			dbusername=$row['email'];
			dbpassword=$row['password'];
		}

		if($email==$dbusername&&($password)==$dbpassword)
		{
			echo"You are logged in";
			@$_SESSION['email']=$email;

		}
		else
			echo"Your password is incorrect";
	}
	else
		die("User doesn't exist");

else
	die("Please enter valid username and password");
}
	
?>
