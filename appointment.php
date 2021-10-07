<!DOCTYPE html>
<head>
   
    <title>CORIUM</title>
	 <link rel="stylesheet" href="CSS.css">
	 <style>
	 input[type=date]{
margin: 10px 0;
border: 3px #bd8c7d;
border-radius: 8px;
 height:50px;
  width : 550px;
font-family:georgia;
box-shadow:4px 4px 10px #bd8c7d;
text-align:left;
font-size:24px
}
	 </style>
</head>
<body>
<?php
$nameErr = $emailErr = $phoneErr = $dateErr= "";
$aname = $email =$date= $anum = $service = $doc = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["aname"])) {
    $nameErr = "Please Enter Name";
  } else {
    $name = test_input($_POST["aname"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }else
{
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["date"])) {
    $dateErr = "Date is required";
  }else
{
    $date = test_input($_POST["date"]);
  }
  if (empty($_POST["anum"])) {
    $phoneErr = "Please enter contact number";
  } 
  else {
    $anum = test_input($_POST["anum"]);
  }}function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div id="wrapper">
	<div id="logo" class="container">
		<h1><a href="project.html">Corium Skincare Pvt.Ltd </a></h1>
		
	</div>
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li ><a href="project.html">Home</a></li>
				<li><a href="product.html">Products</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
	</div>
	<div>
	<h1> Appointment</h1>
	<div align = "center">
	<table id="cform">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	<tr><td>
	<label for cname> Name</label></td><td>
	<input type = "text" id="aname" name="aname">
	<span class="error">*<?php echo $nameErr; ?></span>
	</td></tr>
	<tr><td>
	<label for cnum> Phone</label></td><td>
	<input type = "text" id="anum" name="anum">
	 <span class="error">*<?php echo $phoneErr; ?></span>
	</td></tr>
	<tr><td>
	<label for email> Email </label></td><td>
	<input type = "email" id="email" name="email">
	 <span class="error">*<?php echo $emailErr; ?></span>
	</td></tr>
	<tr><td>
	<label for date> Date of Appointment </label></td><td>
	<input type = "date" id="date" name="date">
	 <span class="error">*<?php echo $dateErr; ?></span>
	</td></tr>
	  <tr><td>
	  <label for service> Service</label></td>
	  <td><select id="service" name="service">
                        <option></option>
                        <option value="facial">Facials</option>
                        <option value="peel">Peels</option>
                        <option value="therapy"> Herbal Therapy</option>
                      </select>

	  </td></tr>
	  <tr><td>
	  <label for doctor> Doctor</label></td>
	  <td><select id="doctor" name="doc">
                        <option></option>
                        <option value="DMR">Dr Mishka Rathod</option>
                        <option value="DSD">Dr Sanika Dandekar</option>
                        <option value="DNN">Dr Nachiket Nadkarni</option>
                      </select>
 </td></tr>
	  <tr><td>
	<input type= "submit" value = "SUBMIT"></td></tr>
	</form>
	</table>
	<?php
	
$aname = $_POST['aname'];
$anum = $_POST['anum'];
$email = $_POST['email'];
$date = $_POST['date'];
echo "<h3> Hello $name,your email $email and  phone no $anum has been recorded we will get back to you confirming the appointment on $date soon</h3>";

?>
	
	</div>
	

	<div id="footer-bg">
	<div id="footer-content" class="container">
		<div id="column1">
			<h2>Address</h2>
			<ul class="list-style2">
				<li class="first"> Shop no 20,XYZ building,
Off Western Express Highway, Borivali East,
Mumbai -400066,Maharashtra<br>
                                         <br>
                                     
                                    </p><h2>Office Locations</h2>
									<p>
									Tokyo,Japan<br>
									Tbilisi,Georgia<br>
									Baikady,India<br></p></li>
			</ul>
		</div>
		<div id="column2">
			<h2>Contact us</h2>
			 <p>
                                        Email : info@coriumindia.in<br>
                                       
                                     Contact : (Sales) +91 987654321  <br>
                                       (Membership) +91 987654321 <br>
                                       (Group Discounts) +91 987654321 
                                    </p>
									
									</div>
			<div id="column3"><h2>Social Media</h2>
		<ul class="list-style2">
			<li class="first"> <a href="images/Maheshwari Adhesives.pdf" target="_blank" class="call1 blink_me"> Brochure</a></li>&nbsp &nbsp
					<li><a href="https://www.facebook.com" target="_blank"> Facebook</a></li>&nbsp 
                   <li> <a href="http://linkedin.com" target="_blank"> LinkedIn</a></li>&nbsp
                   <li> <a href="https://api.whatsapp.com/send?phone=+918655060005" target="_blank">Whatsapp</a></li>&nbsp

                   <li> <a href="mailto:coriumindia@yahoo.com" target="_blank">Email</a></li>
				   </ul>
				   	</div>
	</div>
</div>
<div id="footer">
      <p class="pull-left">© Copyright Corium Skincare PVT.LTD 2019 . All right reserved.</p></div>

</body>


</html>