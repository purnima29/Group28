<?php
session_start();

if(!$_SESSION['username']){

	header('location: adminlogin.php');

}
?>
<html>

<head>
	<title>Admin Panel</title>
<style type="text/css">
.nav{
background-color: cyan;
height: 40px;
width: 100%;
}
.nav ul{
margin: 0;
}
.nav ul li{
list-style: none;
}
.nav ul li a{
text-decoration: none;
float: left;
display: block;
padding: 10px 20px;
color: black;
}
.nav ul li a:hover{
color:white;
}
</style>


  
    <link rel="stylesheet" type="text/css" href="css/login.css">
    
</head>
<body >
 <header>

    <div class="header"><img src="img/logo.jpeg" width="130px" height="130px" id="nitLogo" align="top left">NIT&nbspDURGAPUR </div>
 

<nav>
<ul>
          <li><a href="home.php">Home</a>
          <li><a href="html/About.html">About</a>
            
          </li>
          <li><a href="#">Institute</a>
            <ul>
                <li><a href="html/Campus.html">Campus</a></li>
                <li><a href="html/Institute View.html">Institute View</a></li>
            </ul>
          </li>
          <li><a href="#">Admissions</a>
            <ul>
                <li><a href="html/B.Tech.html">B.Tech</a></li>
                <li><a href="html/M.Tech.html">M.Tech</a></li>
                <li><a href="html/PhD.html">Ph.D</a></li>
            </ul>
          </li>
          <li><a href="#">Departments</a>
            <ul>
                <li><a href="html/IT.html">IT</a></li>
                <li><a href="html/BT.html">BT</a></li>
                <li><a href="html/MME.html">MME</a></li>
                <li><a href="html/CSE.html">CSE</a></li>
                <li><a href="html/CE.html">CE</a></li>
                <li><a href="html/ECE.html">ECE</a></li>
            </ul>
          </li>
          
          <li>
              <a href="logout.php">Logout</a>
              
          </li>
      </ul>
    </nav>
  </header>



<div style="background-color:beige">
	<center><h1><i>USER INFORMATION</i></h1></center>

	<!--<center><font size='6' color='red'><?php echo @$_GET['deleted']; ?></font></center>-->
	<table width="900" align="center" border="10">
		<tr bgcolor="yellow">
			<th>Serial No</th>
			<th>name </th>
			<th>VIEW DETAILS</th>
			<th>ACTION</th>
		</tr>
		<?php
		mysql_connect("localhost","root","");
		mysql_select_db("registration");

		$query = "select * from student";

		$run = mysql_query($query);

		while($row=mysql_fetch_array($run))
		{
			$user_id = $row['id'];
			$user_name = $row['name'];
			$user_regno = $row['regno'];
			$user_valid= $row['valid'];
		?>

		<tr align='center'>
		<td bgcolor="lightgray"><?php echo $user_id; ?></td>
		<td bgcolor="darkgray"><?php echo $user_name; ?></td>
		<td bgcolor="darkgray"><?php echo "<a href='viewdetails.php?user_regno=$user_regno'>View details</a>" ?></td>
		<td bgcolor="gray">
			<?php
			if($user_valid==1)
			{
			?>
				<a href='delete.php?del=<?php echo $user_id ?>'>Delete</a>
			<?php
			}
			else
			{
				echo "<a href='approveuser.php?user_id=$user_id&valid=$user_valid'>Approve</a>";
			}
			?>
		</td>
		</tr>
		<?php
		}
		?>
	</table>
	
</div>	

</body>
</html>