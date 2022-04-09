<?php
session_start();
$nme = $_POST['nme'];
$age = $_POST['age'];
$gen = $_POST['Gender'];
$add = $_POST['add'];
$em = $_POST['email'];
$mid = $_POST['mid'];
$link = mysqli_connect('localhost', 'root', '', 'oote');
if(!$link)
{
    die("Cannot connet to the database!!!");
}
$sql = "SELECT * FROM members WHERE email = '$em'";
$result = mysqli_query($link,$sql);

if(mysqli_fetch_row($result)!=null)
{
	$_SESSION['error_msg'] =  "This email already exists";
	session_write_close();
}
else
{
  $sql = "INSERT INTO members (mid,mname,age,gender,address,email) VALUES ('$mid','$nme','$age','$gen','$add','$em')";
   $sql2 = "INSERT INTO meminfo (email) VALUES ('$em')";
   $result = mysqli_query($link,$sql);
  $result2 = mysqli_query($link,$sql2);

    if($result)
    {$_SESSION['msg'] =  "You have successfully created an account!!";
        $_SESSION['mname']=$nme;
        $_SESSION['email']=$em;
     header("location:mainp.php");}
    else
    {
        $_SESSION['error_msg'] = "There was a problem while signing up. Please try again.";
        header("location:Registration.html");
    }
}
?>