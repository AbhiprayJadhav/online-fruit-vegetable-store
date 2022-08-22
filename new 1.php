<?php

$db=mysqli_connect("localhost","root","","store");


if(isset($_POST['Register_btn'])){

$name=mysql_real_escape_string($_POST['name']);
$email=mysql_real_escape_string($_POST['e-mail']);
$password=mysql_real_escape_string($_POST['password']);
$password2=mysql_real_escape_string($_POST['password2']);
$contact=mysql_real_escape_string($_POST['contact']);
$city=mysql_real_escape_string($_POST['city']);
$address=mysql_real_escape_string($_POST['address']);
if($password=$password2){
	
$password=md5($Password);

$sql="INSERT INTO signup(name,email,password,contact,city,address)values('$name','$email','$password','$contact','$city','$address')";

if(mysqli_query($db,$sql))
{

echo "you are now logged in";
header("location: firstpage.html");

}
else
{
	echo "you are not logged in";
}

}
else
{
echo "The two password do not match";


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
<h1>WELCOME TO JEWELLERY SHOP LOGIN </h1>
<div style="background-color: #ffffff; width: 850px;font-family: copperplate gothic light;">
				<!-- Code for Header-->
				<div>
							<img src="w.jpg" width=1000 height=140>
					</div>
					<br>
					
<link rel="stylesheet" type="text/css" href="style.css">
</div>
<form method="post"action="new 1.php">
<table>
<center>
<br>
<tr>
								<td align="right" width="120" style="padding-right:5px">name:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="text" name="name" placeholder="Your Name" required = "true" />
								</td>
							</tr></br>

<tr>
								<td align="right" width="120" style="padding-right:5px">email:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="email" name="e-mail" placeholder="e-mail" required = "true" value=""/>
								</td>
							</tr>


<tr>
								<td align="right" width="120" style="padding-right:5px">password:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="password" name="password" placeholder="Password" required = "true"/>
								</td>
							</tr>

<tr>
								<td align="right" width="120" style="padding-right:5px">password2:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="password" name="password2" placeholder="Password2" required = "true"/>
								</td>
							</tr>






<tr>
								<td align="right" width="120" style="padding-right:5px">contact:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="number" name="contact" placeholder="Ten digit mobile number" required = "true" />
								</td>
							</tr>


<tr>
								<td align="right" width="120" style="padding-right:5px">city:</td>
								<td align="left">
									<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="text" name="city" placeholder="city" required = "true"/>
									
								</td>
							</tr>


<tr>
								<td align="right" width="120" style="padding-right:5px">address:</td>
								<td align="left">
								<textarea name="address" placeholder="address" required = "true"  size = "25">
								</textarea>
									
									
								</td>
							</tr>
<tr>
<td></td>
<td><input type="Submit" Name="Register_btn" value="Register">
</td>
</tr>

</center>
</table>
</form>
</body>
