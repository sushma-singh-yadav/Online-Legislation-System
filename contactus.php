<html>
<title> Cloud computing</title>
<body>
<div class="box">
<img id="img4" src="4.jpg" alt="">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/button.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">
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

       
       <form action="signup.html"><button> Sign Up</button> </form> <br>
      <form action="signin.php"> <button>Sign In </button> </form>
      
   </div>

   <div id="right">
     <h1>Contact Us</h1>
     <p id="p7"> Mobile Number: 7027091097 <br> <br>
         Email Address: onlinelawsystem@gmail.com</p>

   <h1 id="h6"> Any Query </h1>
   <form action="" method="post">
     <input id="input1" type="text " id ="name2" name="name2" placeholder="Name "> </input>
     <input id="input2" type="text" id="email2" name="email2" placeholder="Email"></input><br>
     <textarea id="message" name="message" rows="3 " placeholder="Write your query here "></textarea><br>
     <button id="buttonsubmit" name="button" value="submit"> Submit Query </button>
     </form>
   
   
   <?php
$con= mysqli_connect( "localhost","root","" );
     if (!mysqli_select_db($con,"law"))
     {
      echo 'Databse not selected';
           # code...
     }
   if (isset($_POST['button'])) 
   {
   $name2= $_POST['name2'];
   $email2=$_POST['email2'];
   $message=$_POST['message'];
   
   $sql2="INSERT INTO contact(query_name, email, query_desc) VALUES ('$name2','$email2','$message')";
   $result= $con-> query($sql2); 

   if ($result) {
    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}

   }
?>
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