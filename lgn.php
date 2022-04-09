<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
	<link rel="stylesheets" href="e.css"
</head>
<body>
<?php
session_start();
$email=$_POST['email'];
$mid=$_POST['mid'];

if($email==null && $mid==null)
{

    header("location:login.html");
}
$link = mysqli_connect('localhost', 'root', '', 'oote');
if(!$link)
{
    die("Cannot connet to the database!!!");
}
$sql="SELECT * from members where email = '$email'and mid = '$mid'";
$result = mysqli_query($link,$sql);
if(mysqli_fetch_row($result)==null)
{
	$_SESSION['error_msg'] =  "The email or password is wrong. Please enter the correct email and password";
	header("Location: errorPage.php");
	session_write_close();
}
else

{
	$sql2="SELECT * from members where email = '$email' and mid = '$mid'";
	$result2=mysqli_query($link,$sql2);
	if(mysqli_fetch_row($result2)!=null)
	{
	$sql3="SELECT mname from members where email = '$email' and mid = '$mid'";
	echo $sql3;
	$result3=mysqli_query($link,$sql3);
	$mname1 = mysqli_fetch_array($result3);
	$mname2= $mname1['mname'];
	$_SESSION['mname']= $mname2;
	$_SESSION['email']= $email;
	header("Location: mainp.php");
	}
	else
	{$_SESSION['mname']=$mname; 
		$_SESSION['error_msg'] =  "Wrong mid please try again.";
		header("Location: mainp.php");}
}
?>
</body>
</html>