<?php

$con= mysqli_connect( "localhost","root","" );
     if (!mysqli_select_db($con, "law"))
     {
      echo 'Databse not selected';
           # code...
     }

$fname=$_POST['fname'];

//echo "$fname";


 $result = $con->query("SELECT * FROM case_posted where case_name LIKE '%$fname%' ");

if ($result->num_rows > 0) {
    print "<table border=2 width=100%> <thead> <tr><th> Case Name</th><th> Person Name</th><th>Case Type</th><th>Description</th><th>Contact Number</th></tr></thead><tbody>";
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