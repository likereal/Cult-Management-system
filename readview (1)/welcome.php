<html>
<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "ggaa";  
  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

$link = mysqli_connect("localhost", "root", "", "ggaa");
 



$password = mysqli_real_escape_string($link, $_REQUEST['psw']);

$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 

$sql = "INSERT INTO signup (email, psw) VALUES ('$email','$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>
</html>