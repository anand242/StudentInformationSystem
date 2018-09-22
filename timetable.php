
<?php

$d=date('l');
include('dbconnection.php');
         $sql = "SELECT $d FROM s1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
 
        
       echo "<table border='1'>

<tr class='tr1'>

<th>9:00-9:50 AM</th>

<th>9:50-10:40 AM</th>

<th>11:00-11:50 AM</th>

<th>11:50-12:40 PM</th>


<th>12:40-1:30 PM</th>


<th>1:30-2:20 PM</th>

<th>2:20-3:10 PM</th>

<th>3:20-4:10 PM</th>

<th>4:10-5:00 PM</th>


</tr>";

 

while($row = $result->fetch_assoc())

  { 
  	
  echo "<td>" . $row[$d] . "</td>"; 
     
  }

echo "</table>";

 
       
} else {
    echo "0 results";
}
?>