<?php
$con= mysqli_connect( "localhost","root","" );
     if (!mysqli_select_db($con,"law"))
     {
      echo 'Databse not selected';
           # code...
     }

   $lawyername= $_POST['lawyername'];
   $Lawyertype=$_POST['Lawyertype'];
   $Location=$_POST['Location'];
   $Qualification= $_POST['Qualification'];
   $Experience= $_POST['Experience'];
   
   $sql2="INSERT INTO lawyer(name, type, location, qualification, Experience) VALUES ('$lawyername','$Lawyertype','$Location','$Qualification','$Experience')";
   $result= $con-> query($sql2); 
  
header("location: lawyer_dashboard.php");
  
?>