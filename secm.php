<?php
session_start();
$sidm= $_POST['sidm'];
$email= $_SESSION['email'];
$link = mysqli_connect('localhost', 'root', '', 'oote');
$sqlm = "UPDATE meminfo SET sidm = $sidm WHERE email = '$email'";
$result = mysqli_query($link,$sqlm);
if($result)
    {$_SESSION['msg'] =  "Welcome to sector-".$sidm;
     header("Location:mainp.php");
}
?>