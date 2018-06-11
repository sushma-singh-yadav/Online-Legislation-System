<?php

$con= mysqli_connect( "localhost","root","" );
     if (!mysqli_select_db($con, "law"))
     {
      echo 'Databse not selected';
           # code...
     }

$fname2=$_POST['fname2'];

//echo "$fname";


 $result = $con->query("SELECT * FROM lawyer where type LIKE '%$fname2%' ");

if ($result->num_rows > 0) {
    print "<table border=2 width=100%> <thead> <tr><th>Name</th><th>Lawyer Type</th><th>Location</th><th>Qualification</th><th>Experience</th></tr></thead><tbody>";
    // output data of each row
      while($row=$result->fetch_assoc())
      { 
        print "<tr> <td>";
        echo  $row["name"];
        print " </td> <td>". $row["type"] ."</td> </td>";
        print " </td> <td>". $row["location"]."</td> </td>";
        print " </td> <td>". $row["qualification"]."</td> </td>";
        print " </td> <td>". $row["Experience"]."</td> </tr>";
      }
     print "</tbody></table>";

   	} //if end

    else {
    echo "0 results";
    }

?>