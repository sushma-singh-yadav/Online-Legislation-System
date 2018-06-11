<?php


$con= mysqli_connect( "localhost","root","" );
     if (!mysqli_select_db($con,"law"))
     {
      echo 'Databse not selected';
     }

   $citizen_name= $_POST['citizenname'];
   $case_name= $_POST['case_name'];
   $case_type=$_POST['case_type'];
   $Description=$_POST['Description'];
    $ContactNumber=$_POST['ContactNumber'];

   $sql="INSERT INTO case_posted(name, case_name, case_type, case_text, contactnumber) VALUES ('$citizen_name','$case_name','$case_type','$Description','$ContactNumber')";
   $result= $con-> query($sql); 
  

  ?>

  <!DOCTYPE html>
  <html>

<div class="box">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/signin.css">
<link rel="stylesheet" type="text/css" href="css/button.css">
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</div>


<body background="6.jpg">

<div class="topnav">
<ul>
  <a href="CasePost.html">Case Post</a>
  <a href="lawsearch.php">Law Search</a>
  <a href="lawyersearch.php">Lawyer search</a>
   <a href="casesearch.php">Case search</a>
</ul>
</div>

<div id="main">
<div id="right">
  <p style="color:brown; text-align: center; margin-top: 100px; font-size: 40px; ">
    Case Posted Successfully <br>
    Check in Amendments Page.
  </p>
  </div>

  <div id="left">
 <ul id="u1">

  <a href="amend.php" style="color: white;"> Cases </a><br>
  
     
</ul>
</div> </div>

  </body>
  </html>