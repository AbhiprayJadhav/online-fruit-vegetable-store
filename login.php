








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
						<h2 style="color:#cd15a6; text-align:right;">SIGNUP</h2>
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
									<input type="submit" name="submit" value = "Sign Up!" style=" background:#cd15a6; border:none; color:white; font-family:georgia; font-size:14px; height:25px; width:100px; border-radius:5px; position:relative; left:150px; top:10px;">
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
						<h2 style="color:#cd15a6; text-align:right;">LOGIN</h2>
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
									<a href=secondpage.html>log in</a>
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

session_start();
$mail = "";
$pass = "";
$msg = "";
$forgot="";
require "config/config.php"	;
/* for($i=4;$i<=20;$i++)
{
	$j=md5($i);
	mysql_query("INSERT INTO users VALUES('NULL',0,'$i','$j','CM','student','FY')");
}
for(;$i<=40;$i++)
{
	$j=md5($i);
mysql_query("INSERT INTO users VALUES('NULL',0,'$i','$j','CM','student','SY')");
}
for(;$i<=60;$i++)
{
	$j=md5($i);
mysql_query("INSERT INTO users VALUES('NULL',0,'$i','$j','CM','student','TY')");
}
for(;$i<=80;$i++)
{
	$j=md5($i);
mysql_query("INSERT INTO users VALUES('NULL',0,'$i','$j','IF','student','FY')");
}
for(;$i<=100;$i++)
{
	$j=md5($i);
mysql_query("INSERT INTO users VALUES('NULL',0,'$i','$j','IF'','student','SY')");
}
for(;$i<=120;$i++)
{
	$j=md5($i);
mysql_query("INSERT INTO users VALUES('NULL',0,'$i','$j','IF','student','TY')");
}*/
if (isset($_POST['login']))
{
	$user	=	$_POST['mail'];
	$pass	=	md5($_POST['pass']);

	$res = mysql_query("SELECT * FROM login WHERE mail='$mail' AND pass='$pass'");
	if($res)
	{
	if(mysql_num_rows($res) == 1)
	{
		$re = mysql_fetch_assoc($res);
		$db_mail = $re['mail'];
		$db_pass =	$re['pass'];
		$db_post = $re['post'];

		if($mail == $db_mail and $pass == $db_pass)
		{
			if($db_post == 'admin')
			{
				session_start();
				$_SESSION['mail'] = $mail;
				$_SESSION['admin'] = "log";
				mysql_close($db_handle);
				header("Location: admin.php");
				break;
			}
			else if($db_post == 'cmhod')
						{
								session_start();
								$_SESSION['mail'] = $mail;
								$_SESSION['cmhod'] = "log";
								mysql_close($db_handle);
								header("Location: cmhod.php");
								break;
							
							
						}
					}
					else
					{
						$msg =  "Wrong username or password.";
						$forgot= "Forgot Password? Contact your teacher.";
					}
				}
				else
				{
					$msg =  "Wrong username or password.";
					$forgot= "Forgot Password? Contact your teacher.";
				}
		mysql_close($db_handle);
}

?>