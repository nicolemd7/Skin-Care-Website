﻿<!DOCTYPE html>
<head>
    <script>
   function validate() {
  var x = document.forms.enquiry.cname.value;
  var y = document.forms.enquiry.cnum.value;
  var z = document.forms.enquiry.email.value;
  if (x == ""){
    alert("please enter name");
    return false;
 }
  if (y == ""){
    alert("please enter contact number");
    return false;
 }
  if (z == ""){
    alert("please enter email id");
    return false;
 }
 if (x.length<4){
 alert("please enter full name");
 return false;}
  if (y.length<9){
 alert("please enter valid contact number");
 return false;}
  if (z.length<5){
 alert("please enter valid email id");
 return false;}
}
   </script>
</head>
    <title>CORIUM</title>
	 <link rel="stylesheet" href="CSS.css"> </head>

<body>
<div id="wrapper">
	<div id="logo-" class="container">
		<h1><a href="project.html">Corium Skincare Pvt.Ltd </a></h1>
		
	</div>
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li><a href="project.html">Home</a></li>
				<li><a href="product.html">Products</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li class="current_page_item"><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
	</div>
	<div align = "center"><table id="cform">
	
	<h1> Get In Touch With Us</h1>
	<form name="enquiry" action="coriumdb.php" onsubmit="return validate()" method="post">
	<tr><td>
	<label for cname> Name</label></td><td>
	<input type = "text" id="cname" name="cname">
	</td></tr>
	<tr><td>
	<label for cnum> Phone</label></td><td>
	<input type = "text" id="cnum" name="cnum">
	</td></tr>
	<tr><td>
	<label for email> Email </label></td><td>
	<input type = "email" id="email" name="email">
	</td></tr>
	<tr><td>
	<label for query> Comments</label></td><td>
	  <textarea name="text" placeholder="Comment..."></textarea>
	  </td></tr>
	  <tr><td>
	<input type= "submit" value = "SUBMIT"></td></tr>
	</form></table>
	</div>
	<div>
	
	<section class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d941.8871163399468!2d72.8650781291959!3d19.214914349188025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sVasant%20Marvel%20Crown%20Building%2C%20Near%20Magathane%20Telephone%20Exchange%2C%20Off%20Westren%20Express%20Highway%2C%20Borivali%20East%2C%20Mumbai%20-400066%2CMaharashtra!5e0!3m2!1sen!2sin!4v1577273672368!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
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
			<li class="first"> <a href="A020.pdf" target="_blank" > Brochure</a></li>&nbsp &nbsp
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