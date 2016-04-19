<?php 
session_start();

?>
<html>
<head>
<title></title>
    <link rel="stylesheet" type="text/css" href="css/form_stu.css"></link>
    <link rel="stylesheet" type="text/css" href="css/login.css">
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
      <div class="regstu"><label><h2>LOGIN ADMIN</h2></label>
        <form name="register" method="post">
          <table>
            <tr>
              <td>Username</td>
              <td><input type="text" name="username"  ></td>
            </tr>
            <tr>
              <td>password</td>
              <td><input type="password" name="password"   ></td>
            </tr>
            <tr>
                      <td><button type="submit" name="submit" >Login</button></td>
                        </tr>
          </table>
        </div>
        </div>
        </div>

<?php
    mysql_connect('localhost','root','');
    mysql_select_db('registration');
    if(isset($_POST['submit']))
    {

      $username = $_POST['username'];
      $password = $_POST['password'];
      if($username!=''&&$password!='')
      { 
          $query=mysql_query("select * from reg_admin where admin_username='$username' and admin_password='$password'");

          

          if(mysql_num_rows($query)>0)
          {
            $_SESSION['username'] = $username;

            header('location: adminpanel.php');
          }
          else{
            echo "<script>alert('Incorrect username or password!!!!!!')</script>";
          } 
        }
        else{
          echo "<script>alert('Please fill all fields!!!!!!!!!!')</script>";
        }
      }   
  ?>


</body>
<!--<script type="text/javascript" src="js/form_stu.js"></script>-->
</html>