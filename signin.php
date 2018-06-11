<?php
$con= mysqli_connect( "localhost","root","" );
     if (!mysqli_select_db($con,"law"))
     {
      echo 'Databse not selected';
           # code...
     }

if(isset($_POST['button']))
{
   $username= $_POST['username'];
   $password=$_POST['password'];
   
   $sql="SELECT * FROM user where username='$username' AND password='$password'";
     $result= $con-> query($sql);
 
    
          $get2=mysqli_fetch_assoc($result);
          $id=$get2['uid']; 
           echo "$id"; 

         // $get3=mysqli_fetch_assoc($result);
          $u_type=$get2['u_type']; 
           echo "$u_type";     


          $now=mysqli_num_rows($result);
         


    if($now==1)
       {
           if( $u_type == 'Citizen')
              {   header("Location: casePost.html?uid=$id");         } 
           else
            {
           header("Location: lawyer_dashboard.php");      }
       }

     else
     {  echo "<script type='text/javascript'>alert('Enter correct username and password')</script>";     } 
   
   
}  //button end                   
?>





<html>
<title> Cloud computing</title>
<body>
<div class="box">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/signin.css">
<link rel="stylesheet" type="text/css" href="css/button.css">
</div>

<div class="topnav">
<ul>
	<a href="index.html">Home</a>
	<a href="about.html">About</a>
	<a href="amendments.php">Amendments</a>
	<a href="contactus.php">Contact</a>
</ul>
</div>
<div id="main">
   <div id="left">
       <form action="signup.html"><button> Sign Up </button> </form>
   </div>

   <div>
   	    <form class="form-signin" action="signin.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" id="username" name="username" class="form-control" placeholder="Email address" required autofocus> <br>
        <input type="password" id="password" name="password" class="form-control" placeholder="******" required> <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="button" name="button" value="submit">Sign in</button>
      </form>
   </div>
</div>

<div class="footer" >
	<img id="img2" src="5.png">
	
	<div id="list">
	<ul id="ul2">
		<a href="index.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="amendments.php">Amendments</a>
        <a href="contactus.php">Contact Us</a>
    </ul>
     <p id="p5">
     Copyright &copy; 2017 Online LAW System | Designed By Sushma Yadav and Shristi Gupta. All Rights Reserved.
     </p>
     </div>
	
</div>
   </body>
   </html>