<html>
<title> Cloud computing</title>
<body>
<div class="box">
<img id="img4" src="4.jpg" alt="">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/style2.css">
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
      
       <form action="signup.html"><button> Sign Up</button> </form> <br>
      <form action="signin.php"> <button>Sign In </button> </form>
      
   </div>

<div id="right">
<br><br><br>
   <?php

$con= mysqli_connect( "localhost","root","" );
     if (!mysqli_select_db($con, "law"))
     {
      echo 'Databse not selected';
           # code...
     }




 $result = $con->query("SELECT * FROM case_posted ");

if ($result->num_rows > 0) {
    print "<table border=2 width=95% > <thead> <tr><th> Case Name</th><th> Person Name</th><th>Case Type</th><th>Description</th><th>Contact Number</th></tr></thead><tbody>";
    // output data of each row
      while($row=$result->fetch_assoc())
      { 
        print "<tr> <td>";
        echo  $row["case_name"];
        print " </td> <td>". $row["name"] ."</td> </td>";
        print " </td> <td>". $row["case_type"] ."</td> </td>";
        print " </td> <td>". $row["case_text"]."</td> </td>";
        print " </td> <td>". $row["contactnumber"]."</td> </tr>";
      }
     print "</tbody></table>";

    } //if end

    else {
    echo "0 results";
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