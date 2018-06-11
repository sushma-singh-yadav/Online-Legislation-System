<?php
$con= mysqli_connect( "localhost","root","" );
     if (!mysqli_select_db($con,"law"))
     {
      echo 'Databse not selected';
           # code...
     }

if(isset($_POST['Sub']))
{


   $name= $_POST['Name'];
   $Message= $_POST['Message'];
   $caseName= $_POST['caseName'];

   $sql="INSERT INTO message(message, message_name,case_name) VALUES ('$name','$Message','$caseName')";
   $result= $con-> query($sql); 

   echo "<script type='text/javascript'>alert('Message is saved. Administrator will contact further')</script>";
}

?>

<!DOCTYPE html>
<html>

<div class="box">
<link rel="stylesheet" type="text/css" href="css/signin.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/button.css">
</div>

<div class="topnav">
<ul>
  <a href="lawyer_dashboard.php">Case Details</a>
  <a href="lawsearch2.php">Law Search</a>
  <a href="lawyersearch2.php">Lawyer search</a>
   <a href="casesearch2.php">Case search</a>
</ul>
</div>

<body>

<form method="post">
     <label> Your Name</label>
	<input type="text" name="Name" id="Name" placeholder="Name"></input><br><br><br>

    <label> Case Name</label>
	<input type="text" name="caseName" id="caseName" placeholder=" Case Name"></input><br><br><br>

	<label> Message</label>
	<input type="text" name="Message" id="Message" style=" width: 250px; height: 50px;" placeholder="Message"> </input>
   
    <button id="Sub" name="Sub" value="Submit">Submit</button>
</form>
</body>
</html>