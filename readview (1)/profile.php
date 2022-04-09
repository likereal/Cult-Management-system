<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>READVIEW | PROFILE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  

  <!-- Bootstrap CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  
  <!--Bootstap social CDN-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-social@5.1.1/bootstrap-social.min.css">

  <!--Font Awesome CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--style.css-->
  <link rel="stylesheet" href="stylePage.css" type="text/css">

 <!--Internal style sheet-->
  <style>
    
  body{
      background-image:url(yad/backgroundppas.jpg);
      }
  </style>
</head>
<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top horizontal">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="readview.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactPage.php">Contact Us</a>
          </li>
        </ul>
     
        <?php
          if(isset($_POST['username']))
          {
           
            echo('<li><a class="btn btn-success" href="logout.php" role="button">Log out</a></li>');			
          }
          else
          {
            echo('<li><a class="btn btn-success" href="signIn.html" role="button">Sign In</a></li>');
            echo('<li><a class="btn btn-primary" href="#" role="button">Sign Up</a></li>');
          }
        ?>
      
      </div>
    </nav>


  

  
  <div class="container">
    <div class="jumbotron jumbotron-new">
      <div >
        <div style>
          <h1 class=" text-center" style="font-weight:bold;color : black;text-decoration:underline">My Profile</h1><br><br>
          </div>     

          <div class="row">
            <div class="col-9 col-md-4 offset-3 offset-md-2" style=";align-self:center">
            <img src="yad\guest-user.jpg" alt="Avatar" class="avatar" style="width:200px; height:200px; border-radius:50%">
            <br><br>
            </div >
            <div class="col-10 offset-2  col-md-6 offset-md-0" style="border-left: 1px solid white">
              <div><br>
              <p class="card-text-profile" style="font-size:22px"><i class="fa fa-user fa-lg"></i> Username : <?php echo " ".$_Session['username'];?> </p>
              <p class="card-text-profile" style="font-size:22px"><i class="fa fa-envelope fa-lg"></i> Email ID : <?php echo " ".$email;?> </p>
              </div>
            </div>
          </div>
          <br>
          <hr style='background-color:white;width:50%'><br>
          
          
        </div>
      </div>   
   
  <!--Footer-->
  <footer class="footer bg-light footer-font" style="margin-top: 10px;">
      <div class="container">
          <div class="row" style="margin-bottom: 30px;">

          </div>
          <div class="row" >             
              <div class="col-4 offset-1 col-sm-2">
                  <h5>Links</h5>
                  <ul class="list-unstyled">
                      <li><a href="readview.php">Home</a></li>
                      <li><a href="#">About</a></li> 
                      <li><a href="contact.php">Contact</a></li>
                  </ul>
              </div>
              <div class="col-7 col-sm-5">
                  <h5>Our Address</h5>
                  <address>
                Mangalore<br>
                India<br>
                <i class="fa fa-phone fa-lg"></i>&nbsp;&nbsp;: +91 9765478435<br>
                <i class="fa fa-fax fa-lg"></i>&nbsp;: +91 8965342345<br>
                <i class="fa fa-envelope fa-lg"></i> <a href="mailto:educare@edu.in">readview@gmail.com</a>
            </address>
              </div>
              <div class="col-12 col-sm-4 align-self-center">
                  <div class="text-center">
                      <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                      <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                      <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                      <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                      <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                      <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope fa-lg"></i></a>
                  </div>
              </div>
        </div>
        
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
