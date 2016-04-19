

<?php 
 session_start();
 
 if(!isset($_SESSION['regno'])){
  header("location:form_stu.php");
 }

?>
<html>
<head>
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
          <li>
              <a href="home.php">Logout</a>
              
          </li>
      </ul>
</nav>
  </header>
  <div id="p">
 
  <div class="main">
     <table>
   
   <tr><td>Name of institute:<h3>NATIONAL INSTITUTE OF TECHNOLOGY,DURGAPUR</h3></td></tr>
   <tr><td>Name:<h3><?php echo $_SESSION['name'];?><?php echo $_SESSION['lname'];?></h3></td><td><img src="<?php echo $_SESSION['image'];?>" alt="profile pic" style="width: 200px; height: 200px;"/></td></tr>
   <tr><td>Date Of Birth:<h3><?php echo $_SESSION['dob'];?></h3></td></tr>
   <tr><td>Roll:<h3><?php echo $_SESSION['roll'];?></h3></td><td>Branch:<h3><?php echo $_SESSION['branch'];?></h3></td></tr>
   <tr><td>Address:<h3><?php echo $_SESSION['addr'];?></h3></td></tr>
   <tr><td>Email:<h3><?php echo $_SESSION['email'];?></h3></td><td>contact no:<h3><?php echo $_SESSION['mobno'];?></h3></td></tr>
    <tr><td>10th marks:<h3><?php echo $_SESSION['m10'];?></h3></td><td>12th marks:<h3><?php echo $_SESSION['m12'];?></h3></td></tr>
    
</div>
   </table>
</div>

  <?php 
    mysql_connect('localhost','root','');
    mysql_select_db('registration');

    $regno = $_SESSION['regno'];

    $query = "SELECT id FROM student WHERE regno='$regno'";

    $run = mysql_query($query);

    while($row=mysql_fetch_array($run))
    {
      $user_id = $row['id'];
    

  ?>

  <button style="width: 30%;
    padding: 10px 6% 6px 6%;
    margin: 0 10 20px 190;
    background: rgb(247, 247, 247);
    border: 1px solid rgba(147, 184, 189,0.8);
    box-shadow: 0pt 2px 5px rgba(105, 108, 109, 0.7), 
 0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
    border-radius: 5px;"><?php echo "<a href='updateprofile.php?user_id=$user_id'>Update</a>"; ?></button>
  <?php
  }
  ?>

  </body>
</html>