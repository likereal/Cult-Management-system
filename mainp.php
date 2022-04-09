<?php
session_start();
$email=$_SESSION['email'];
$mname=$_SESSION['mname'];
$link=mysqli_connect('localhost','root','','oote');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Ocult | PROFILE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="m.css">
  </head>
<body>
  <nav>
        <ul>
          <li class="ttle">
          <h3><a class="ttle" href="info.html"> ORACLES OF THE END</a></h3>
          </li>
        <?php
          if(isset($_SESSION['email']))
          {
           
            echo('<li class="l"><a class="lout" href="logout.php" role="button">Log out</a></li>');			
          }
        ?>
        </ul>
    </nav>  <br>
  
          <h1><center>My Profile</center></h1><br><br>
          <center>
            <?php
            $sqlm= "SELECT gender FROM members WHERE email= '$email'";
            $resultm= mysqli_query($link,$sqlm); 
            $gender1= mysqli_fetch_array($resultm);
            $gender= $gender1['gender'];
            if($gender=="male"|| $gender=="MALE"||$gender=="Male")
            {
            echo '<img src="m.png" alt="M" class="avatar" style="width:300px; height:300px; border-radius:50%">  <br><br>';
          }else
          if($gender=="female"|| $gender=="FEMALE"||$gender=="Female")
            {echo '<img src="f.png" alt="F" class="avatar" style="width:300px; height:300px; border-radius:50%">  <br><br>';}
            else {echo '<img src="o.png" alt="O" class="avatar" style="width:300px; height:300px; border-radius:50%">  <br><br>';}
            ?>
          </center>
          <center>
          <div class="info">
              <p> Username : <?php echo " ".$mname;?> </p>
              <p> Email ID : <?php echo " ".$email;?> </p>
             <?php  $sqls="SELECT sidm FROM meminfo where email='$email'";
            $results= mysqli_query($link,$sqls); 
            $sids= mysqli_fetch_array($results);
            $sid= $sids['sidm'];
            if($sid!=null)
            {
            echo ' <p>SECT. id : '.$sid; 
            $sqlz="SELECT sname FROM sect where sid='$sid'";
            $resultz= mysqli_query($link,$sqlz); 
            $sen= mysqli_fetch_array($resultz);
            $senm= $sen['sname'];
            if($sid == '1')
            echo ' <p>Sector name : '.$senm.'&nbsp<a href="s1.html"><div class="mi">*more info*</a></div>';
            
            if($sid == '2')
            echo ' <p>Sector name : '.$senm.'&nbsp<a href="s2.html"><div class="mi">*more info*</a></div>';
            
            if($sid == '3')
            echo ' <p>Sector name : '.$senm.'&nbsp<a href="s3.html"><div class="mi">*more info*</a></div>';
            
            if($sid == '4')
            echo ' <p>Sector name : '.$senm.'&nbsp<a href="s4.html"><div class="mi">*more info*</a></div>'; 
            $sqll="SELECT lname FROM lords where sid='$sid'";
            $resultl= mysqli_query($link,$sqll); 
            $lnmes= mysqli_fetch_array($resultl);
            $lname= $lnmes['lname'];
            echo ' <p>Lord name : '.$lname; 
            echo ' <p><a href="sect.html"><div class="mi">*Wanna Change Sect?*</a></div>';
          }
            else
           {
            echo ' <p>SECT. id : <a href="sect.html">Not selected yet</a>';
            }
            ?>
            <br>
          </div>
          </center>
          
<center><h3><a href="review.html" style="color: aqua;">Member's Reviews</a></h3></center>
</body>
</html>
