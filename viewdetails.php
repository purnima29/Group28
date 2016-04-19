<html>
<head>

<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/form_stu.css">

</head>

<body>

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
  <?php
session_start();

if(!$_SESSION['username']){

	header('location: adminlogin.php');

}
?>

<html>
	<head><title>User Details</title></head>
	<body background="p.jpg">
<?php
mysql_connect('localhost','root','');
mysql_select_db('registration');

$user_regno = $_GET['user_regno'];
//$user_image = $_GET['user_image'];
$query = "select * from student where regno='$user_regno'";


$run = mysql_query($query);

		while($row=mysql_fetch_array($run))
		{

			$user_name = $row['name'];
			$user_roll = $row['roll'];
			$user_addr = $row['addr'];
			$user_regno = $row['regno'];
			$user_image = $row['image'];		
      $lname=$row['lname'];
      $email=$row['email'];
      $mobno=$row['mobno'];
      $gender=$row['gender'];
      $branch=$row['branch'];
      $dob=$row['dob'];
      $yoa=$row['yoa'];
      $m10=$row['m10'];
      $m12=$row['m12'];
      $nationality=$row['nationality'];
      	
?>
<center><b>
<font size="15" face = "verdana" style="font-family:cursive;">
<u style="text-align: left;">STUDENT DETAILS</u></b><br></center>
<center>
<div id="p">
 
  <div class="main">
     <table>
   
   <tr><td>Name of institute:<h3>NATIONAL INSTITUTE OF TECHNOLOGY,DURGAPUR</h3></td></tr>
   <tr><td>Name:<h3><?php echo $user_name;?><?php echo $lname;?></h3></td><td><img src="<?php echo $user_image;?>" alt="profile pic" style="width: 200px; height: 200px;"/></td></tr>
   <tr><td>Date Of Birth:<h3><?php echo $dob;?></h3></td></tr>
   <tr><td>Roll:<h3><?php echo $user_roll;?></h3></td><td>Branch:<h3><?php echo $branch;?></h3></td></tr>
   <tr><td>Address:<h3><?php echo $user_addr;?></h3></td></tr>
   <tr><td>Email:<h3><?php echo $email;?></h3></td><td>contact no:<h3><?php echo $mobno;?></h3></td></tr>
    <tr><td>10th marks:<h3><?php echo $m10;?></h3></td><td>12th marks:<h3><?php echo $m12;?></h3></td></tr>
    
</div>
   </table>

<?php
}
?>


        
</font>
</center>
</body>
</html>