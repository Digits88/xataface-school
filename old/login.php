<?php

$host = 'localhost';
$user = 'root';
$mypassword = '';
$dbname = 'school';

$message="";
if(count($_POST)>0) {
$con = mysqli_connect($host, $user, $mypassword, $dbname); 
//mysqli_select_db("school",$con);

$username = $_POST["username"];
$password = $_POST["password"];

$result = mysqli_query($con, "SELECT * FROM homework WHERE username='$username' AND password='$password'");
$count  = mysqli_num_rows($result);
if($count==0) {
$message = "Invalid Username or Password!";
} else {
$message = "You are successfully authenticated!";

$result = mysqli_query($con, "SELECT * FROM homework WHERE username='$username' AND password='$password'");
$result = mysqli_fetch_array($result);
print_r($result);
json_encode($result);
}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" >
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" >
</head>
<body>
<form action="" method="post" name="frmUser" >
<div class="message"><?php if($message!=""){echo $message;} ?></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" >
<tr class="tableheader" >
<td align="center" colspan="2" >Enter Login Details</td>
</tr>
<tr class="tablerow" >
<td align="right">Username</td>
<td><input type="text" name="username"></td>
</tr>
<tr class="tablerow" >
<td align="right" >Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" >
</td>
</tr>
</table>
</form>
</body>
</html>