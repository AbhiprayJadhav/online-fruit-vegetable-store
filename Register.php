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
j
<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title>
</head>
<body>
<div class="header">
<h1>FRUITS AND VEGETABLE STORE </h1>

<div style="background-color: "aqua"; width: 850px;font-family: copperplate gothic light;">
<body style="background-color:#666666;">
				<!-- Code for Header-->
				<div>
							<img src="IMAGE/abcd.jpg" width=1300 height=300px>
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
