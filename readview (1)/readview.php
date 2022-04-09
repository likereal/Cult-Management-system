<?php
session_start();
error_reporting(0);required
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Readview, an online book review</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link rel="stylesheet" href="yad/ext.css" type="text/css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
    
   
    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    
    /* Set a style for all buttons */
   .loginbtn  {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    
    .loginbtn:hover {
      opacity: 0.8;
    }
    
    /* Extra styles for the cancel button */
    .cancelbtn1 {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }
    
    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }
    
    img.avatar {
      width: 40%;
      border-radius: 50%;
    }
    
    /* .container {
      padding: 16px;
    } */
    
    span.psw {
      float: right;
      padding-top: 16px;
    }
    
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: relative; 
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top: 60px;
      padding-bottom: 0%;
      margin-bottom: 0%;
    }
    
    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin-top: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border-top: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
    }
    
    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }
    #oor {
      position: relative;
  margin-top: -15%;
  margin-left: 10vw;
  margin-right: 10vw;
  
}

    
    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }
    
    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)} 
      to {-webkit-transform: scale(1)}
    }
      
    @keyframes animatezoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
    }
    
    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
      .cancelbtn {
         width: 100%;
      }
    }
    
    input[type=text], input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }
    
    /* Add a background color when the inputs get focus */
    input[type=text]:focus, input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }
    
    /* Set a style for all buttons */
    .ggaa,.signupbtn {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      
      border: auto;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }
    
    .ggaa, .signupbtn:hover {
      opacity:1;
    }
    
    /* Extra styles for the cancel button */
    .cancelbtn {
      padding: 14px 20px;
      background-color: #f44336;
    }
    
    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn, .signupbtn {
      float: left;
      width: 50%;
    }
    
    /* Add padding to container1 elements */
    .container1 {
      padding: 5px;
    }
    
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: #474e5d;
      padding-top: 50px;
    }
    
    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
    }
    
    /* Style the horizontal ruler */
    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }
     
    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 35px;
      top: 15px;
      font-size: 40px;
      font-weight: bold;
      color: #f1f1f1;
    }
    
    .close:hover,
    .close:focus {
      color: #f44336;
      cursor: pointer;
    }
    
    /* Clear floats */
    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }
    
    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
      .cancelbtn, .signupbtn {
         width: 100%;
      }
    }
    
   .fa {
     padding: 15px;
     font-size: 30px;
     width: 50px;
     text-align: center;
     text-decoration: none;
     margin: 5px 2px;
     border-radius: 50%;
   }
   
   .fa:hover {
       opacity: 0.7;
   }
   
   .fa-facebook {
     background: #3B5998;
     color: white;
   }
   
   .fa-twitter {
     background: #55ACEE;
     color: white;
   }
   .fa-linkedin {
    background: #007bb5;
    color: white;
    }
    .fa-instagram {
    background: #eb14c775;
    color: white;
    }

    </style>
   
  </head>
<body>
 
 
 
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <a class="navbar-brand mb-0" href="#" style="font-size: 30px;">
        <img src="yad/logo1.jpg" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
        ReadView
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
    
      </a>
         <ul class="navbar-nav mr-auto">
           
        <li class="nav-item active" id="cols">
              <a class="nav-link" href="#abot">About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active" id="cols">
              <a class="nav-link" href="#botw">Genres <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#botws">BOTW <span class="sr-only">(current)</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#social">Social media <span class="sr-only">(current)</span></a>
              </li>
            
            
       
              <?php
          if(isset($_POST['register_user']))
          {
            echo('<li><a class="btn btn-info" href="profile.php" role="button">My Profile</a></li>');
            echo('<li><a class="btn btn-success" href="logout.php" role="button">Log out</a></li>');			
          }
          else
          {
            echo('<li><a class="btn btn-success" href="validation.html" role="button">Sign up</a></li>');
           
          }
        ?>
         
         
    </ul>
                <form class="form-inline my-2 my-lg-0" action="https://www.google.com" role="search"  >
            <input class="form-control mr-sm-2" type="search" id="query" name="q" placeholder="Search Google" aria-label="Search through site content ">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
                </div>
      </nav>
               <header>
    <div class="mainbg">
        <img src="yad/image.jpg" width="100%" />
        <div class="maintxt">ReadView</div>
        <div class="down">Scroll down</div>
        <div id="para1">
          <u>Book review and feedback</u><br />
          <p>An online site that helps you to interpret novels and books. Here, you can leave your thoughts and feedback for other readers!</p>
         <p>You first need to <a id="linki" href="signup.php">create an account</a> inorder to write reviews or <a id="linki" href="login.php">login</a> to our page to continue.</p>
        </div>
      </div>
       
   </header>
  <div id="abot" >
 <div class="container">
    <img src="yad/bookopening.jpg" alt="Notebook" style="width:100%;">
    <div class="content">
      <h2>About us:</h2>
      <p> Many of us have special memories of the books that have inspired us, and have learned the profound effect that reading the right book can have at the right moment.  If you’re short on time, reading some quotes about books is the next best thing.
      Books have the power to transport us to new worlds and different times, but they can also take us back to the important moments in our own lives.
      We love connecting with people who share our love of reading.</p>
    </div>
  </div>
   </div>
   <img src="yad/b8100499c22520f18cc08c4d7ec5ab06.png" width="10%" height="20%" id="botw">
<div id="spce">
       <p id="gen" ><h1><u>Genre</u></h1></p>
       <p id="l1"><a href="yad/romance.html" >Romance</a></p>
       <p id="l2"><a href="yad/young_adult.html" >Young Adult</a></p>
       <p id="l3"><a href="yad/mystery.html" >Mystery</a></p>
       <p id="l4"><a href="yad/classics.html" >Classics</a></p>
       <p id="l5"><a href="yad/fantasy.html" >Fantasy</a></p>
       <p id="l6"><a href="yad/nonfiction.html" >Non-Fiction</a></p>

      </div>
<img src="yad/open-book-clipart-03.png" width="10%" height="20%" id="botws">
       <div>
          <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"> Book of the week </h1>
       </div>
       <div class="card mb-3" style="max-width: width 100%; height: 30%; margin: 2.5%;">
        <div class="row no-gutters">
          <div class="col-md-3">
            <img src="yad/kingsolmine.jpg" class="card-img" alt="..." ;>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-title" style="font-size: xx-large ;"><b>King Solomon's Mines</b></p>
              <p class="card-text" style="line-height: 2;" "><b>Author:</b> Rider H. Haggard (1856-1925)<br><b>Published on:</b>  1885<br><b>Country:</b> United Kingdom <br><b>About the Author:</b> Sir Henry Rider Haggard was born in England, and spent six years in South Africa as a government official. He wrote over 30 adventure novels, the best of which are set in Africa.
            <br> <b>Summary:</b> King Solomon's Mines is a popular novel by the English Victorian adventure writer and fabulist Sir H. Rider Haggard. It tells of a search of an unexplored region of Africa by a group of adventurers led by Allan Quatermain for the missing brother of one of the party.
                 
          </p>
              
            </div>
          </div>
        </div>
      </div>



<h1>Some of our personal Favourites!!</h1>

      <div class="row row-cols-1 row-cols-sm-3 g-3">
  <div class="col">
    <div class="card">
      <img src="yad/shee.jpg" class="card-img-top" alt="..." style="width:15vw; margin-left:25%">
      <div class="card-body">
        <h5 class="card-title">She</h5>
        <p class="card-text">The story is a first-person narrative which follows the journey of Horace Holly and his ward Leo Vincey to a lost kingdom in the African interior. They encounter a primitive race of natives and a mysterious white queen named Ayesha who reigns as the all-powerful "She" or "She-who-must-be-obeyed". Haggard developed many of the conventions of the lost world genre which countless authors have emulated.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="yad\anneofgreengab.jpg" class="card-img-top" alt="..." style="width:16vw; margin-left:25%">
      <div class="card-body">
        <h5 class="card-title">Anne of Green Gables</h5>
        <p class="card-text">Anne of Green Gables is a 1908 novel by Canadian author Lucy Maud Montgomery. Written for all ages, it has been considered a classic children's novel since the mid-twentieth century. Set in the late 19th century, the novel recounts the adventures of Anne Shirley, an 11-year-old orphan girl, who is mistakenly sent to two middle-aged siblings, Matthew and Marilla Cuthbert, who had originally intended to adopt a boy to help them on their farm.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="yad\chariots.jpg" class="card-img-top" alt="..." style="width:14vw; margin-left:25%">
      <div class="card-body">
        <h5 class="card-title">Chariots of the Gods?</h5>
        <p class="card-text">Chariots of the Gods? Unsolved Mysteries of the Past is a book written in 1968 by Erich von Däniken and translated from the original German by Michael Heron. It involves the hypothesis that the technologies and religions of many ancient civilizations were given to them by ancient astronauts who were welcomed as gods.</p>
      </div>
    </div>
  </div>
</div>
     
  <!-- <div id="sign">
     <form class="modal-content animate" action="signUp.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="yad/loginmain.png" alt="Avatar" class="avatar">
      </div>
  
      <div class="container1">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
  
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pwd" required>
          
        <button type="submit" class="loginbtn">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
  
      <div class="container1" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn1">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
    




<div id="oor">
     <h2 style="text-align: center;">OR</h2>

    <button class="ggaa" onclick="document.getElementById('id01').style.display='block'" style="max-width: width 100%;">Sign Up</button>
    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <form class="modal-content" action="connectivity-sign-up.wphp" method="POST">
        <div class="container1">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
    
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pwd" required>
    
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="repeatpwd" required>
          
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
    
          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    
          <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
    </div>
    </div> -->
<!-- <script> -->
  <!-- // Get the modal
  var modal = document.getElementById('id01');
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  } -->
  <!-- </script>
     </div> -->







     
     <div id ="social">
   <footer class="fter bg-dark" style="margin-top: 5vw;margin-left:0;color:white;">
    <p ><u>Let's keep in touch!</u><br>
    We welcome you to be a part of us by joining us on this adventure!
    <div>
    <h4>readview@gmail.com</h4>
    <h4>+91-9998887776</h4></p>
    <h4>Manglore,Karnataka</h4>
    <h4>575002 </h4>
    </div>
        <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
    <a href="https://twitter.com/?lang=en" class="fa fa-twitter"></a>
    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
    <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>     
   
  </footer></div>
</body>

</html>
