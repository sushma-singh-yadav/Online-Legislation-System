<?php
$con= mysqli_connect( "localhost","root","" );
     if (!mysqli_select_db($con,"law"))
     {
      echo 'Databse not selected';
           # code...
     }

   $cname= $_POST['cname'];
   $Address=$_POST['Address'];
   $Occupation=$_POST['Occupation'];
   $contactnumber= $_POST['ContactNumber'];
   
   $sql2="INSERT INTO citizen( name, location, occupation, contactno) VALUES ('$cname','$Address','$Occupation','$contactnumber')";
   $result= $con-> query($sql2); 
  
  header("Location: CasePost.html");
  
?>