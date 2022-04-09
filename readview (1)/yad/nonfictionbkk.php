<?php
session_start();
//Retrieve form parameters
$bname = $_POST['bname'];
$author = $_POST['author'];

// connect to the mysql database
$link = mysqli_connect('localhost', 'root', '', 'practice');

  $sql = "INSERT INTO nonfiction (bname, author) VALUES ('".$bname."', '".$author."');";
  echo $sql;
  // excecute SQL statement
  $result = mysqli_query($link,$sql);
 
  if ($result){ 
    echo '<script>alert("Your Book has been suggested!!")</script>'; 
  
    $_SESSION['page'] = 10;
    header("Location: nonfiction.html");
  }
  else
  {
    $_SESSION['error_msg'] = "There was a problem while entering the book. Please try again.";
    header("Location: errorPage.php");
    die(mysqli_error());
  
  }



?>