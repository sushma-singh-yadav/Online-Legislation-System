<?php

$con= mysqli_connect( "localhost","root","" );
     if (!mysqli_select_db($con, "law"))
     {
      echo 'Databse not selected';
           # code...
     }

$fname=$_POST['fname'];

//echo "$fname";


 $result = $con->query("SELECT * FROM laws where Name LIKE '%$fname%' ");

if ($result->num_rows > 0) {
    print "<table border=2 width=100%> <thead> <tr><th>Name</th><th>Description</th></tr></thead><tbody>";
    // output data of each row
      while($row=$result->fetch_assoc())
      { 
        print "<tr> <td>";
        echo  $row["Name"];
        print " </td> <td><a href='". $row["Description"] ."'>".$row["Description"]."</a></td> </tr>";
      }
     print "</tbody></table>";

   	} //if end

    else {
    echo "0 results";
    }

?>