<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/form_stu.css"></link>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="jquery/jquery-ui.min.css">
<script src="jquery/external/jquery/jquery.js"></script>
<script src="jquery/jquery-ui.min.js"></script>

     <script>
$(document).ready(function(){
  $("#others").click(funtion(){
    $("#pq").fadeToggle(500);
  });
 });
</script>
    
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
			<div class="regstu"><label><h2>REGISTER STUDENT</h2></label>
				<form name="register" action="insert.php" method="post" enctype="multipart/form-data" >
          <table>
            <tr>
    					<label>
              <td>Registration Number:<sup style="color:#F00">*</sup> </td>
              <td><input type="text" name="regno" id="regno" minlength="8"  placeholder="Enter Registration Number" required onblur="allDigits(document.register.regno)"/ ></td>
              </label>
  					</tr>
            <tr>
              <label>
              <td>First Name:<sup style="color:#F00">*</td>
              <td><input type="text" name="name" id="name" placeholder="Enter First Name" onblur="allLetter()"/></td>
              </label>
  					</tr>
            <tr>
              <label>
              <td>Last Name:<sup style="color:#F00">*</td>
              <td><input type="text" name="lname" id="lname"  placeholder="Enter Last Name" onblur="allLetters()"/></td>
              </label>
  					</tr>
            <tr>
              <label>
              <td>Date Of Birth:<sup style="color:#F00">*</td>
              <td><input type="date" name="dob" id="dob" placeholder="Enter Date Of Birth" onblur="vdob()"/></td></label>
  					</tr>
            <tr>
              <label>
              <td>Age:</td>
              <td><input type="text" name="age" id="age" disabled></td></label>
            </tr>
            <tr>
              <label>
              <td>Date Of Admission:<sup style="color:#F00">*</td>
              <td><input type="date" name="yoa" id="yoa" placeholder="Enter Admission Year" onblur="vdoa()"/></td></label>
            </tr>
            <tr>
              <label>
              <td>Branch:<sup style="color:#F00">*</td>
              <td>
              <select name="branch" id="branch" onblur="branchselect()">
               <option value="">-- select one --</option>
                <option value="IT">IT</option>
                <option value="BT">BT</option>
                <option value="CSE">CSE</option>
                <option value="MME">MME</option>
                <option value="ME">ME</option>
                <option value="CE">CE</option>
                <option value="CHE">CHE</option>
                <option value="ECE">ECE</option>
                <option value="EE">EE</option>
              </select>
              </td>
              </label>
            </tr>
            <tr>
              <label>
              <td>Roll:</td>
              <td><input type="text" id="roll" name="roll" placeholder="Enter Roll Number" onblur="vrollno()"/></td>
              </label>
  					</tr>
            <tr>
              <label>
              <td>Mobile Number:<sup style="color:#F00">*</td>
              <td><input type="text" id="mobno" name="mobno" minlength="10"  placeholder="Enter Mobile Number" required onblur="vmobno(document.register.mobno)"/></td>
              </label>
            </tr>
            <tr>
    		  <label>
              <td>Email:<sup style="color:#F00">*</td>
              <td><input type="email" id="email" name="email" placeholder="Enter Email" onblur="vemail()"/></td>
              </label>
            </tr>
            <tr>
    					<label>
                <tr>
              <label>
              <td>Address:<sup style="color:#F00">*</td>
              <td><input type="text" id="addr" name="addr" placeholder="Enter address" /></td>
              </label>
            </tr>
            <tr>
              <label>
              <td>10th marks:<sup style="color:#F00">*</td>
              <td><input type="text" id="m10" name="m10" placeholder="Enter class 10 marks" /></td>
              </label>
            </tr>
            <tr>
              <label>
              <td>12th marks:<sup style="color:#F00">*</td>
              <td><input type="text" id="m12" name="m12" placeholder="Enter class 12 marks "/></td>
              </label>
            </tr>
              <td>Gender:<sup style="color:#F00">*</td>
              <td><input type="radio" name="gender" id="gender" value="male" onblur="vgender()"/>Male
              <input type="radio" name="gender" id="gender" value="female">Female</td>
              </label>
            </tr>
            <tr>
    					<label>
              <td>Nationality:</td>
              <td>
              <select name="nationality" id="nationality" onblur="nationalityselect()">
                  <option value="">-- select one --</option>
                  <option value="afghan">Afghan</option>
                  <option value="albanian">Albanian</option>
                  <option value="algerian">Algerian</option>
                  <option value="american">American</option>
                  <option value="andorran">Andorran</option>
                  <option value="angolan">Angolan</option>
                  <option value="antiguans">Antiguans</option>
                  <option value="argentinean">Argentinean</option>
                  <option value="armenian">Armenian</option>
                  <option value="australian">Australian</option>
                  <option value="austrian">Austrian</option>
                  <option value="azerbaijani">Azerbaijani</option>
                  <option value="bahamian">Bahamian</option>
                  <option value="bahraini">Bahraini</option>
                  <option value="bangladeshi">Bangladeshi</option>
                  <option value="barbadian">Barbadian</option>
                  <option value="barbudans">Barbudans</option>
                  <option value="batswana">Batswana</option>
                  <option value="belarusian">Belarusian</option>
                  <option value="belgian">Belgian</option>
                  <option value="belizean">Belizean</option>
                  <option value="beninese">Beninese</option>
                  <option value="bhutanese">Bhutanese</option>
                  <option value="bolivian">Bolivian</option>
                  <option value="bosnian">Bosnian</option>
                  <option value="brazilian">Brazilian</option>
                  <option value="british">British</option>
                  <option value="bruneian">Bruneian</option>
                  <option value="bulgarian">Bulgarian</option>
                  <option value="burkinabe">Burkinabe</option>
                  <option value="burmese">Burmese</option>
                  <option value="burundian">Burundian</option>
                  <option value="cambodian">Cambodian</option>
                  <option value="cameroonian">Cameroonian</option>
                  <option value="canadian">Canadian</option>
                  <option value="cape verdean">Cape Verdean</option>
                  <option value="central african">Central African</option>
                  <option value="chadian">Chadian</option>
                  <option value="chilean">Chilean</option>
                  <option value="chinese">Chinese</option>
                  <option value="colombian">Colombian</option>
                  <option value="comoran">Comoran</option>
                  <option value="congolese">Congolese</option>
                  <option value="costa rican">Costa Rican</option>
                  <option value="croatian">Croatian</option>
                  <option value="cuban">Cuban</option>
                  <option value="cypriot">Cypriot</option>
                  <option value="czech">Czech</option>
                  <option value="danish">Danish</option>
                  <option value="djibouti">Djibouti</option>
                  <option value="dominican">Dominican</option>
                  <option value="dutch">Dutch</option>
                  <option value="east timorese">East Timorese</option>
                  <option value="ecuadorean">Ecuadorean</option>
                  <option value="egyptian">Egyptian</option>
                  <option value="emirian">Emirian</option>
                  <option value="equatorial guinean">Equatorial Guinean</option>
                  <option value="eritrean">Eritrean</option>
                  <option value="estonian">Estonian</option>
                  <option value="ethiopian">Ethiopian</option>
                  <option value="fijian">Fijian</option>
                  <option value="filipino">Filipino</option>
                  <option value="finnish">Finnish</option>
                  <option value="french">French</option>
                  <option value="gabonese">Gabonese</option>
                  <option value="gambian">Gambian</option>
                  <option value="georgian">Georgian</option>
                  <option value="german">German</option>
                  <option value="ghanaian">Ghanaian</option>
                  <option value="greek">Greek</option>
                  <option value="grenadian">Grenadian</option>
                  <option value="guatemalan">Guatemalan</option>
                  <option value="guinea-bissauan">Guinea-Bissauan</option>
                  <option value="guinean">Guinean</option>
                  <option value="guyanese">Guyanese</option>
                  <option value="haitian">Haitian</option>
                  <option value="herzegovinian">Herzegovinian</option>
                  <option value="honduran">Honduran</option>
                  <option value="hungarian">Hungarian</option>
                  <option value="icelander">Icelander</option>
                  <option value="indian">Indian</option>
                  <option value="indonesian">Indonesian</option>
                  <option value="iranian">Iranian</option>
                  <option value="iraqi">Iraqi</option>
                  <option value="irish">Irish</option>
                  <option value="israeli">Israeli</option>
                  <option value="italian">Italian</option>
                  <option value="ivorian">Ivorian</option>
                  <option value="jamaican">Jamaican</option>
                  <option value="japanese">Japanese</option>
                  <option value="jordanian">Jordanian</option>
                  <option value="kazakhstani">Kazakhstani</option>
                  <option value="kenyan">Kenyan</option>
                  <option value="kittian and nevisian">Kittian and Nevisian</option>
                  <option value="kuwaiti">Kuwaiti</option>
                  <option value="kyrgyz">Kyrgyz</option>
                  <option value="laotian">Laotian</option>
                  <option value="latvian">Latvian</option>
                  <option value="lebanese">Lebanese</option>
                  <option value="liberian">Liberian</option>
                  <option value="libyan">Libyan</option>
                  <option value="liechtensteiner">Liechtensteiner</option>
                  <option value="lithuanian">Lithuanian</option>
                  <option value="luxembourger">Luxembourger</option>
                  <option value="macedonian">Macedonian</option>
                  <option value="malagasy">Malagasy</option>
                  <option value="malawian">Malawian</option>
                  <option value="malaysian">Malaysian</option>
                  <option value="maldivan">Maldivan</option>
                  <option value="malian">Malian</option>
                  <option value="maltese">Maltese</option>
                  <option value="marshallese">Marshallese</option>
                  <option value="mauritanian">Mauritanian</option>
                  <option value="mauritian">Mauritian</option>
                  <option value="mexican">Mexican</option>
                  <option value="micronesian">Micronesian</option>
                  <option value="moldovan">Moldovan</option>
                  <option value="monacan">Monacan</option>
                  <option value="mongolian">Mongolian</option>
                  <option value="moroccan">Moroccan</option>
                  <option value="mosotho">Mosotho</option>
                  <option value="motswana">Motswana</option>
                  <option value="mozambican">Mozambican</option>
                  <option value="namibian">Namibian</option>
                  <option value="nauruan">Nauruan</option>
                  <option value="nepalese">Nepalese</option>
                  <option value="new zealander">New Zealander</option>
                  <option value="ni-vanuatu">Ni-Vanuatu</option>
                  <option value="nicaraguan">Nicaraguan</option>
                  <option value="nigerien">Nigerien</option>
                  <option value="north korean">North Korean</option>
                  <option value="northern irish">Northern Irish</option>
                  <option value="norwegian">Norwegian</option>
                  <option value="omani">Omani</option>
                  <option value="pakistani">Pakistani</option>
                  <option value="palauan">Palauan</option>
                  <option value="panamanian">Panamanian</option>
                  <option value="papua new guinean">Papua New Guinean</option>
                  <option value="paraguayan">Paraguayan</option>
                  <option value="peruvian">Peruvian</option>
                  <option value="polish">Polish</option>
                  <option value="portuguese">Portuguese</option>
                  <option value="qatari">Qatari</option>
                  <option value="romanian">Romanian</option>
                  <option value="russian">Russian</option>
                  <option value="rwandan">Rwandan</option>
                  <option value="saint lucian">Saint Lucian</option>
                  <option value="salvadoran">Salvadoran</option>
                  <option value="samoan">Samoan</option>
                  <option value="san marinese">San Marinese</option>
                  <option value="sao tomean">Sao Tomean</option>
                  <option value="saudi">Saudi</option>
                  <option value="scottish">Scottish</option>
                  <option value="senegalese">Senegalese</option>
                  <option value="serbian">Serbian</option>
                  <option value="seychellois">Seychellois</option>
                  <option value="sierra leonean">Sierra Leonean</option>
                  <option value="singaporean">Singaporean</option>
                  <option value="slovakian">Slovakian</option>
                  <option value="slovenian">Slovenian</option>
                  <option value="solomon islander">Solomon Islander</option>
                  <option value="somali">Somali</option>
                  <option value="south african">South African</option>
                  <option value="south korean">South Korean</option>
                  <option value="spanish">Spanish</option>
                  <option value="sri lankan">Sri Lankan</option>
                  <option value="sudanese">Sudanese</option>
                  <option value="surinamer">Surinamer</option>
                  <option value="swazi">Swazi</option>
                  <option value="swedish">Swedish</option>
                  <option value="swiss">Swiss</option>
                  <option value="syrian">Syrian</option>
                  <option value="taiwanese">Taiwanese</option>
                  <option value="tajik">Tajik</option>
                  <option value="tanzanian">Tanzanian</option>
                  <option value="thai">Thai</option>
                  <option value="togolese">Togolese</option>
                  <option value="tongan">Tongan</option>
                  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                  <option value="tunisian">Tunisian</option>
                  <option value="turkish">Turkish</option>
                  <option value="tuvaluan">Tuvaluan</option>
                  <option value="ugandan">Ugandan</option>
                  <option value="ukrainian">Ukrainian</option>
                  <option value="uruguayan">Uruguayan</option>
                  <option value="uzbekistani">Uzbekistani</option>
                  <option value="venezuelan">Venezuelan</option>
                  <option value="vietnamese">Vietnamese</option>
                  <option value="welsh">Welsh</option>
                  <option value="yemenite">Yemenite</option>
                  <option value="zambian">Zambian</option>
                  <option value="zimbabwean">Zimbabwean</option>
                </select></td>
              </label>
            </tr>
             <td>Hobbies</td>
   <td><input type="checkbox" name="hobbies[]" value="Drawing">Drawing
     <input type="checkbox" name="hobbies[]" value="Singing">Singing
     <input type="checkbox" name="hobbies[]" value="Dancing">Dancing
     <input type="checkbox"  id="others" value="1" >Others
     <textarea id="pq" name = "hobbies[]" rows=3 cols=25 style="display: none;"></textarea></td>
     </tr>
            <tr>
    					<label>
              <td>Password:<sup style="color:#F00">*</td>
              <td><input type="password" id="password" name="password" placeholder="Enter Password" onblur="vpassword()"/></td>
              </label>
            </tr>
              <label>
              <td>Confirm Password:<sup style="color:#F00">*</td>
              <td><input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" onblur="vcpassword()"/></td>
              </label>
            </tr>
            <label>
              <td>Image Upload</td>
              <td><input type="file" class="input-field" id="uploadedimage" name="uploadedimage" accept="image/*" onchange="loadFile(event)" onblur="vimage" /></td>
              <td><img id="output"/></td>
                <script>
                var loadFile = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                };
                </script></label>
            </tr>
            <tr>
              <label>
              <td ><font size="2">By clicking on the register button,<br> you agree to our <a href="terms.html">terms and conditions</a></button></td>
    					<td><button type="submit" id="submitForm" class="button">Register</button></td>
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
</body>
<script type="text/javascript" src="js/form_stu.js"></script>
</html>
