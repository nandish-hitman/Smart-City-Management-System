<!DOCTYPE html>
<html>
<head>
     <title>SMARTCITY MANAGEMENT SYSTEM
	        TUMAKURU SMARTCITY</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">		
</head><style>
::placeholder {
  color: black;
  opacity: 1; 
}

</style>

<body>
     <header>
	      <div class="main">
		        <div class="logo">
					<img src="logo.png">
				</div>	
		      <ul>
			       <li ><a href="index.html">HOME</a></li>
				   <li><a href="about.html">ABOUT</a></li>
				   <li><a href="projects.html">PROJECTS</a></li>
				   <li><a href="tenders.html">TENDERS</a></li>
				   <li class="active"><a href="#">SMART COMPLENTS</a></li>
				</ul>   
			</div>	
			<div class="title">
			     <h2>SMARTCITY MANAGEMENT SYSTEM</h2>
			</div>	
			</div>	
			<div class="title3">
			     <h1>COMPLAINTS</h1>
			</div>	
	 </header>
	 <div class="title2">

	 <div style="text-align: center;">
  <div style="display: inline-block; text-align: left;">
 
  <h2><p style="color:orange;">Connect with us</p></h2>
  <p style="color:orange;">if you have any complaints? we're happy to solve</p>
   <form action="save.php" method="post">
    <br><br>
 <input type="text" name="name" id="txt_name" placeholder="Name">
    
   <input type="email" id="txt_email" name="email" placeholder="Email Address">  <br><br>
  
   <input type="text" name="area" id="txt_area" placeholder="area">
   
   <input type="tel" id="txt_phone" name="phone" placeholder="Mobile number">

    <br><br>  
    <textarea name="complaints" placeholder="eg:water problem,street clean" style="width:400px; height:70px;"></textarea><br><br>


   <input type="submit" value="Submit"> <br><br> 
    
</form>
</div>

</div>
</div>
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtArea = $_POST['area'];
$txtPhone = $_POST['phone'];
$txtComplaint = $_POST['complaints'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact`(name,email,area,mobile,complaints) VALUES ('$txtName', '$txtEmail', '$txtArea', '$txtPhone', '$txtComplaint')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo"Complaint successfully registered";
}
else
{
	echo"Something went wrong";
}

?>
</body>

</html>			
