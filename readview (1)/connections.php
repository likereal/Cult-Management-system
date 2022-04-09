<?php
session_start();
//Retrieve form parameters
$username = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$repeatpwd = $_POST['repeatpwd'];

// connect to the mysql database
$link = mysqli_connect('localhost', 'root', '', 'practice');
//check if user with same username exists in db
$sql = "SELECT * FROM websiteusers WHERE email = '".$email."';";
$result = mysqli_query($link,$sql);

if(mysqli_fetch_row($result)!=null)
{
	$_SESSION['error_msg'] =  "User with this username already exists. Please sign up with a different username";
	
	session_write_close();
}
else
{
  $sql = "INSERT INTO websiteusers (username, email, pwd, repeatpwd) VALUES 
  ('".$username."', '".$email."', '".$pwd."', '".$repeatpwd."');";
  echo $sql;
  // excecute SQL statement
  $result = mysqli_query($link,$sql);
 
  if ($result){ 
    $_SESSION['msg'] =  "You have successfully created an account!!";
    $_SESSION['page'] = 10;
    header("Location: readview.php");
  }
}


?>