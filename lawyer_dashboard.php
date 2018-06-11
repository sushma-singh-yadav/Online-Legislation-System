<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<div class="box">
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



<body id="sh" background="232.jpg">
<div id="main">
<div id="left"> 

<a href="index.html" style="text-decoration: none;">
<button>Log out</button> </a>

</div>


<div id="right" style="margin-left: 200px; font-size:25px; "  >
   <?php

$con= mysqli_connect( "localhost","root","" );
     if (!mysqli_select_db($con, "law"))
     {
      echo 'Databse not selected';
           # code...
     }


 $result = $con->query("SELECT * FROM case_posted ");

if ($result->num_rows > 0) {
   
     print "<table border=2 width=95% > <tbody>";
    // output data of each row
      while($row=$result->fetch_assoc())
      { 
        print "<tr> <td>";
        print "Case Name: ". $row["case_name"] ."<br>"; 
        print "Person case: ". $row["name"] ."<br>"; 
        print "Case Type: ". $row["case_type"] ."<br>";
        print "Description:  ". $row["case_text"]."<br>";
        print "Contact Number: ". $row["contactnumber"]."<br>";
        print "<br><br>";
        $id=$row['case_name']; 
        ?>

        <form action="message.php?name=$id"><button id="message"> Click to Contact Further!  </button></form>
      
      <?php  print "</td> </tr>";
      }
    print "</tbody></table>";

    } //if end

    else {
    echo "0 results";
    }

?>
</div></div>

</body>
</html>
