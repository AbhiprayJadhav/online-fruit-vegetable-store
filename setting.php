

<?php
/* connect database test */
$link = mysqli_connect("localhost", "root", "", "store");

/* check connection */
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* Set Variable a */
mysqli_query($link, "SET @a:=1");

/* reset all and select a new database */
mysqli_change_user($link, "root", "Password", "signup");

if ($result = mysqli_query($link, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    printf("Default database: %s\n", $row[0]);
    mysqli_free_result($result);
}

if ($result = mysqli_query($link, "SELECT @a")) {
    $row = mysqli_fetch_row($result);
    if ($row[0] === NULL) {
        printf("Value of variable a is NULL\n");
    }
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>












<!DOCTYPE HTML>
<html>
<!--Title is displayed at the top of the browser tab -->
	<head>
	<title>FRUITS AND VEGETABLE STORE | Settings</title>
	</head>
	<br>
	<body background="IMAGE//680315.jpg">
		<center>
		<div style="background-color: #ffffff; width: 850px;font-family: copperplate gothic light;">
			<!-- Code for Header-->
			<div style="width: 840px;">
				<div style="float: left;margin: 20px 0 0 20px;">
						<a href="firstpage.html"><img src="IMAGE//ht.jpg" height=120px width=300px><marquee><i>FRUITS AND VEGETABLE STORE!!</a></marquee></a>
				</div>
				<div style="width:80px; float: right; height:25px; margin:40px 35px 30px 0px; padding-top:5px; background-color:white; border-radius:5px;">
					<a href=" LOGOUT.HTML">Logout!</a>
				</div>
		
			</div>
			<hr size="2" color="white" width="95%" style="clear:both;">
			<br>
			<div style="min-height:200px; width:600px;">
				<!--Method = POST makes sure that the information that is passed from the form is not displayed to the user-->
				<!-- In action attribute of form, we give the script which this form will call. Right now, we don't need to call any script. We will add this in the second assignment-->
				<form action="" method="POST">
				<table style="font-family:candara;">
					<tr>
						<td colspan="2">
							Change password:
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<br>
						</td>
					</tr>
					<tr>
						<td align="right" width="200" style="padding-right:5px">Old Password:</td>
						<td align="left">
							<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="password" name="old-password" placeholder="Old Password" required = "true"/>
						</td>
					</tr>
					<tr>
						<td align="right" width="200" style="padding-right:5px">New Password:</td>
						<td align="left">
							<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="password" name="password" placeholder="New Password" required = "true"/>
						</td>
					</tr>
					<tr>
						<td align="right" width="200" style="padding-right:5px">Retype New Password:</td>
						<td align="left">
							<input style = "height:25px; padding-left:10px; border-radius:5px;" size = "25" type="password" name="password1" placeholder="Retype New Password" required = "true"/>
						</td>
					</tr>
					<tr>
						<td align="left" style="color: red;">
						</td>
						<td>
							<input type="submit" name="submit" value = "Submit!" style="background:#cd15a6; border:none; color:white; font-family:georgia; font-size:14px; height:25px; width:100px; border-radius:5px; position:relative; left:80px; top:10px;">
						
							</td>
					</tr>
				</table>
				</form>	
			</div>
			
			<hr size="2" color="c0c0c0" width="95%" style="clear: both;">
			<br>
		</div>
		</center>
	</body>
</html>