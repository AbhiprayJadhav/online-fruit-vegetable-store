<!DOCTYPE HTML>
<html>
<!--Title is displayed at the top of the browser tab -->
	<head>
	<title>Fruit and vegetable store Store | Login</title>
	</head>
<body background="IMAGE//680315.jpg">
	<br>
		<center>
			<div style="background-color:#ffffff; width:850px; font-family:copperplate gothic light;" >
				<!-- Code for Header-->
				<div style="width: 850px; height:120px; font-size:1.5em;">
					<div style="float:left; margin:10px 0 0 15px;">
						
<a href="firstpage.html"><img src="IMAGE//ht.jpg" height=120px width=400px><marquee><i>FRUITS AND VEGETABLE STORE!!</i></marquee></a>
					</div>
				</div>
				
				<!-- Code for the body -->
				<div style="width:720px; height:360px; padding-top:20px;">
				<!--Method = POST makes sure that the information that is passed from the form is not displayed to the user-->
				<!-- In action attribute of form, we give the script which this form will call. Right now, we don't need to call any script.-->
				<form action="" method="POST">
					<input type="hidden" name="item" value="">
					<div style="background-color:#EEEEEE; width:310px; float:left; padding-right:20px; height:330px; border-radius:5px;">
						<h2 style="color:#cd15a6; text-align:right;"><center>SIGNUP</center></h2>
						<table border="0" align="center" width = "200" style="font-family:georgia; font-size:15px;">
							<tr>
								<td align="right" width="120" style="padding-right:5px">Name:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="text" name="name" placeholder="Your Name" required = "true" />
								</td>
							</tr>
							<tr>
								<td align="right" width="120" style="padding-right:5px">E-mail:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="text" name="e-mail" placeholder="E-mail" required = "true" value=""/>
								</td>
							</tr>
							<tr>
								<td align="right" width="120" style="padding-right:5px">Password:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="password" name="password" placeholder="Password" required = "true"/>
								</td>
							</tr>
							<tr>
								<td align="right" width="120" style="padding-right:5px">Contact:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="text" name="contact" placeholder="Ten digit mobile number" required = "true" />
								</td>
							</tr>
							<tr>
								<td align="right" width="120" style="padding-right:5px">City:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="text" name="city" placeholder="City" required = "true"/>
									
								</td>
							</tr>
							<tr>
								<td align="right" width="120" style="padding-right:5px">Address:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="text" name="address" placeholder="Address" required = "true"/>
									
								</td>
							</tr>
							<tr>
								<td colspan = "2">
								<center>	<input type="submit" name="submit" value = "Sign Up!" style=" background:#cd15a6; border:none; color:white; font-family:georgia; font-size:14px; height:25px; width:100px; border-radius:5px; position:relative; left:150px; top:10px;"></center>
								</td>
							</tr>
						</table>
					</div>
				</form>

				<!--Method = POST makes sure that the information that is passed from the form is not displayed to the user-->
				<!-- In action attribute of form, we give the script which this form will call. Right now, we don't need to call any script.-->
				<form action="" method="POST">
					<input type="hidden" name="item" value="">	
					<div style="background-color:#EEEEEE; float:right; width:310px; padding-right:20px; margin-right:20px; border-radius:5px;">
						<h2 style="color:#cd15a6; text-align:right;"><center>LOGIN<center></h2>
						<table border="0" align="center" width = "200" style="font-family:georgia; font-size:15px;">
							<tr>
								<td align="right" width="120" style="padding-right:5px">E-mail:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="text" name="e-mail" placeholder="E-mail" required = "true"/>
								</td>
							</tr>
							<tr>
								<td align="right" width="120" style="padding-right:5px">Password:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="password" name="password" placeholder="Password" required = "true"/>
								</td>
							</tr>
							<tr>
								<td colspan = "2">
									<center><input type="submit" name="submit" value = "Login!" style=" background:#cd15a6; border:none; color:white; font-family:georgia; font-size:14px; height:25px; width:100px; border-radius:5px; position:relative; left:150px; top:10px;"></center>
								</td>
							</tr>
							 <tr>
								<td colspan = "2">
									<br>
								</td>
							</tr>
							 <tr>
								<td colspan = "2" align="left" style="padding-left:10px; padding-top:10px;">
									<a href="#" style="color:black; font-family:georgia; font-size:15px;">Forgot Password</a>
								</td>
							</tr>
						</table>
						<br>
					</div>
<center><a href=firstpage.html>back</a></center>
					</form>
				</div>
			<hr size="2" color="c0c0c0" width="95%" style="clear:both;">
			<br>
			</div>
		</center>



	</body>
</html>


<?php

$db=mysqli_connect("localhost","root","","store");

if(!$db)
{
	die("failed");
}
else
{
	echo 'connected';
}

if(isset($_POST['Register_btn'])){

$Name=mysql_real_escape_string($_POST['Name']);
$email=mysql_real_escape_string($_POST['email']);
$Password=mysql_real_escape_string($_POST['Password']);
$Password2=mysql_real_escape_string($_POST['Password2']);
$Contact=mysql_real_escape_string($_POST['Contact']);
$City=mysql_real_escape_string($_POST['City']);
$Address=mysql_real_escape_string($_POST['Address']);
if($Password=$Password2)
{
	
$Password=md5($Password);

$sql="INSERT INTO signup (name,email,password,contact,city,address) values ('$Name','$email','$Password','$Contact','$City','$Address')";

if(mysqli_query($db,$sql))
{

echo "you are now logged in";

}
else
{
	echo "you are not logged in";
}

}
else
{
echo "The two password do not match";

header("location: firstpage.html");
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title>
</head>
<body>
<div class="header">
<h1>FRUITS AND VEGETABLE STORE </h1>
<div style="background-color: #ffffff; width: 850px;font-family: copperplate gothic light;">
				<!-- Code for Header-->
				<div>
							<img src="ht.jpg" width=1000 height=140>
					</div>
					<br>
					
<link rel="stylesheet" type="text/css" href="style.css">
</div>
<form method="post"action="Register.php">
<table>
<center>
<br>
<tr>
<td>Name:</td>
<td><input type="text" Name="Name" class="textinput"></td>
</tr></br>
<tr>
<td>email:</td>
<td><input type="email" Name="email" class="textinput"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="Password" Name="Password" class="textinput"></td>
</tr>

<tr>
<td>Password2:</td>
<td><input type="Password" Name="Password2" class="textinput"></td>
</tr>


<tr>
<td>Contact:</td>
<td><input type="Contact" Name="Contact" class="number_format"></td>
</tr>

<tr>
<td>City:</td>
<td><input type="City" Name="City" class="textinput"></td>
</tr>

<tr>
<td>Address:</td>
<td><input type="Address" Name="Address" class="textinput"></td>
</tr>

<tr>
<td></td>
<td><input type="Submit" Name="Register_btn" value="Register"></td>
</tr>

</center>
</table>
</form>
</body>
