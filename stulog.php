<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/student_login.css"></link>
    <link rel="stylesheet" type="text/css" href="css/style.css">
   
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
          <li><a href="#">Login</a>
            <ul>
                <li><a href="stulog.php">Student</a></li>
                <li><a href="admlog.php">Admin</a></li>
            </ul>
          </li>
          <li>
              <a href="#">Register</a>
              <ul>
                  <li><a href="form_stu.php">Student</a></li>
                  <!-- <li><a href="form_adm.html">Teacher</a></li> -->
              </ul>
          </li>
      </ul>
</nav>
  </header>
	<div class="main">
		<div class="register">
			<div class="regstu"><label><h2>LOGIN STUDENT</h2></label>
				<form name="register" method="post">
					<table>
						<tr>
							<td>Registration Number</td>
							<td><input type="text" name="regno"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password"></td>
						</tr>
						
						<tr>
              				<td><button type="submit" name="submit">Login</button></td>
                        </tr>
                        <td class="change_link">
          Not a member yet ?
          <a href="form_stu.php" class="to_register">Register</a>
        </td>
					</table>
				</div>
				</div>
				</div>


<?php
    mysql_connect('localhost','root','');
        mysql_select_db('registration');
    if(isset($_POST['submit']))
    {
        
        $regno=$_POST['regno'];
        $password=$_POST['password'];
        if($regno!=''&&$password!='')
        {
            $query=mysql_query("select * from student where regno='$regno' and password='$password'");

            if(mysql_num_rows($query)>0)
            {
                $_SESSION['regno'] = $regno;
                while($res=mysql_fetch_array($query))
                {
                    $regno=$res['regno'];
                    $name=$res['name'];
                    $lname=$res['lname'];
                    $email=$res['email'];
                    $mobno=$res['mobno'];
                    $roll=$res['roll'];
                    $dob=$res['dob'];
                    $yoa=$res['yoa'];
                    $gender=$res['gender'];
                    $branch=$res['branch'];
                    $m10=$res['m10']; 
                    $m12=$res['m12'];  
                    $addr=$res['addr']; 
                    $nationality=$res['nationality'];               
                    $user_valid=$res['valid'];
                    $image=$res['image'];
                
                }
                if($user_valid==0)
                {
                    echo "<script>alert('Approval required!')</script>";
                }
                
                else
                {
                $count=mysql_num_rows($query);
                if($count==1)
                {
                   $_SESSION['regno']=$regno;
                  $_SESSION['name']=$name;
                  $_SESSION['lname']=$lname;
                   $_SESSION['email']=$email;
                   $_SESSION['mobno']=$mobno;
                   $_SESSION['roll']=$roll;
                    $_SESSION['gender']=$gender;
                   $_SESSION['branch']=$branch;
                   $_SESSION['dob']=$dob;
                    $_SESSION['yoa']=$yoa;
                   $_SESSION['m10']=$m10;
                   $_SESSION['m12']=$m12;
                   $_SESSION['addr']=$addr;
                    $_SESSION['nationality']=$nationality;
                   $_SESSION['image']=$image;

                 $_SESSION['password']=$password;


                 header('location: pr_stud.php');
                 }
                 }
                }
            else
            {
                echo "<script>alert('Incorrrect username or password!!!')</script>";
            }
        }
        else{
            echo "<script>alert('Fill all the fields!!!!!')</script>";   
        }
    }
?>



</body>
<!--<script type="text/javascript" src="js/form_stu.js"></script>-->
</html>