<?php
$con= mysqli_connect( "localhost","root","" );
     if (!mysqli_select_db($con,"law"))
     {
      echo 'Databse not selected';
           # code...
     }

   $name= $_POST['name'];
   $username= $_POST['username'];
   $password=$_POST['password'];
   $type=$_POST['u_type'];
     
  if($type=='Lawyer')
  {
  header("Location: signuplawyer.html");
  }
  else
  {
     header("Location: signupcitizen.html");
   
  }
   $sql="INSERT INTO user(cname, username, password,u_type) VALUES ('$name','$username','$password','$type')";
   $result= $con-> query($sql); 
  

  
?>