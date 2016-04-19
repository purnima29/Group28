<?php
session_start();
?>
<html>
	<?php

	if(!$_SESSION['regno']){

	header('location: stulog.php');

}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/form_stu.css"></link>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="jquery/jquery-ui.min.css">
<script src="jquery/external/jquery/jquery.js"></script>
<script src="jquery/jquery-ui.min.js"></script>

    
</head>
<body onload="firstfocus()">
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
          <li><a href="logout.php">Logout</a></li>
      </ul>
</nav>
  </header>
    <div class="main">
        <div class="register">
            <div class="regstu"><label><h1>UPDATE STUDENT PROFILE</h1></label>
              <p><font face="Arial" color="Red" size="5">    ** fields are only updatable</font></p>
                <form name="register" action="update.php" method="post" enctype="multipart/form-data" >
          <table>
            <tr>
                        <label>
              <td>Registration Number:<sup style="color:#F00"></sup> </td>
              <td><input type="text" name="regno" id="regno" value="<?php echo $_SESSION['regno'];?>"  readonly="readonly"/ ></td>
              </label>
                    </tr>
            <tr>
              <label>
              <td>First Name:<sup style="color:#F00"></td>
              <td><input type="text" name="name" id="name" value="<?php echo $_SESSION['name'];?>"   readonly/></td>
              </label>
                    </tr>
            <tr>
              <label>
              <td>Last Name:<sup style="color:#F00"></td>
              <td><input type="text" name="lname" id="lname"  value="<?php echo $_SESSION['lname'];?>"   readonly/></td>
              </label>
                    </tr>
            <tr>
              <label>
              <td>Date Of Birth:<sup style="color:#F00"></td>
              <td><input type="text" name="dob" id="dob" value="<?php echo $_SESSION['dob'];?>"  readonly/></td></label>
                    </tr>
           
            <tr>
              <label>
              <td>Date Of Admission:<sup style="color:#F00"></td>
              <td><input type="text" name="yoa" id="yoa" value="<?php echo $_SESSION['yoa'];?>"   readonly/></td></label>
            </tr>
           <tr>
              <label>
                <td>Branch:<sup style="color:#F00"></td>
                <td><input type="text" name="branch" id="branch" value="<?php echo $_SESSION['branch'];?>"  readonly/ ></td>
             
              </label>
            </tr>
            <tr>
              <label>
              <td>Roll:</td>
              <td><input type="text" id="roll" name="roll" value="<?php echo $_SESSION['roll'];?>"   readonly/></td>
              </label>
                    </tr>
            <tr>
              <label>
              <td>Mobile Number:<sup style="color:#F00">**</td>
              <td><input type="text" id="mobno" name="mobno" value="<?php echo $_SESSION['mobno'];?>" onblur="vmobno(document.register.mobno)"/></td>
              </tr> </label></label>
            <tr>
              <label>
              <td>Email:<sup style="color:#F00">**</td>
              <td><input type="email" id="email" name="email" value="<?php echo $_SESSION['email'];?>" onblur="vemail()"/></td>
              </label></label>
            </tr>
            <tr>
                        <label>
                <tr>
              <label>
              <td>Address:<sup style="color:#F00">**</td>
              <td><input type="text" id="addr" name="addr" value="<?php echo $_SESSION['addr'];?>" /></td>
              </label></label>
            </tr>
            <tr>
              <label>
              <td>10th marks:<sup style="color:#F00"></td>
              <td><input type="text" id="m10" name="m10" value="<?php echo $_SESSION['m10'];?>"  readonly /></td>
              </label>
            </tr>
            <tr>
              <label>
              <td>12th marks:<sup style="color:#F00"></td>
              <td><input type="text" id="m12" name="m12" value="<?php echo $_SESSION['m12'];?> "  readonly/></td>
              </label>
            </tr>
              <tr>
              <label>
                <td>Gender:<sup style="color:#F00"></td>
                <td><input type="text" name="gender" id="gender" value="<?php echo $_SESSION['gender'];?>"  readonly/ ></td>
             
              </label>
            </tr>
             <tr>
              <label>
                <td>Nationality:<sup style="color:#F00"></td>
                <td><input type="text" name="nationality" id="nationality" value="<?php echo $_SESSION['nationality'];?>"  readonly/ ></td>
             
              </label>
            </tr>
             
            <tr>
                        <label>
              <td>Password:<sup style="color:#F00">**</td>
              <td><input type="text" id="password" name="password" value="<?php echo $_SESSION['password'];?>"  onblur="vpassword()"/></td>
              </label></label>
            </tr>
              
              
            <tr>
              <label>
              <td ><font size="2">By clicking on the register button,<br> you agree to our <a href="terms.html">terms and conditions</a></button></td>
                        <td><button type="submit" name="update" id="submitForm" class="button">Update</button></td>
              </label>
              
            </tr>
           
          </table>
                </form>
            </div>
        </div>

    <div class="footer">
  Ranganath Kundu<br>
  Administrator,<br>
  NIT Durgapur,<br>
  Contact Number : 8900615424 <br>
    </div>



    <?php
            mysql_connect("localhost","root","");
                            mysql_select_db("registration");

                            $regno=$_SESSION['regno'];

                            $query = "select id from student where regno='$regno'";

                            $run = mysql_query($query);

                            while($row=mysql_fetch_array($run))
                            {
                                $user_id = $row['id'];    
                            }
        ?>
</body>
<script type="text/javascript" src="js/update.js"></script>
</html>
