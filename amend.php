<html>
<title> Cloud computing</title>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="typecase.js"></script>


<body>
<div class="box">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="stylesheet" type="text/css" href="css/button.css">
</div>

<div class="topnav">
<ul>
  <a href="CasePost.html">Case Post</a>
  <a href="lawsearch.php">Law Search</a>
  <a href="lawyersearch.php">Lawyer search</a>
   <a href="casesearch.php">Case search</a>
</ul>
</div>
<div id="main">
   <div id="left">
      <ul id="u1">
       <a href="index.html" style="color: white;"> Back to Home </a><br>
       <a href="amend.php" style="color: white;"> Cases </a><br>
   </ul>

      <form action="index.html"><button>Log out</button> </form> <br>
    
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
<br><br>
</div>

</div>

<div class="footer" >
  <img id="img2" src="5.png">
  
  <div id="list">
  <ul id="ul2">

    </ul>
     <p id="p5">
     Copyright &copy; 2017 Online LAW System | Designed By Sushma Yadav and Shristi Gupta. All Rights Reserved.
     </p>
     </div>
  
</div>
</body>
