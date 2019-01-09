<?php
include('dbcon.php');
$sql = "SELECT id, TrainNo, TraniName, StartingStation, DepartureTime, ArrivalStation, ArrivalTime FROM trainservice";
$result = $conn->query($sql);
echo '
<h1 style="text-align:center;">All Train Schedule Table</h1>
<table border="1" align="center";>
<tr>
<th>id</th>
<th>TrainNo</th>
<th>TrainName</th>
<th>Starting Station</th>
<th>DepartureTime</th>
<th>ArrivalStation</th>
<th>ArrivalTime</th>
</tr>';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo '<tr>';
        $id =$row["id"];
        $trainno= $row["TrainNo"];
        $trainname=$row["TraniName"];
        $startinstation=$row["StartingStation"];
        $departuretime=$row["DepartureTime"];
        $arrivalstation=$row["ArrivalStation"];
        $arrivaltime=$row["ArrivalTime"];
       echo '<td>';
       echo $id;
       echo '</td>

       <td>';

       echo $trainno;
       echo '</td>

       <td>';
       echo $trainname;
       echo '</td>

       <td>';
       echo $startinstation;
       echo '</td>

      <td>';
       echo $departuretime;
       echo '</td>

       <td>';
       echo $arrivalstation;
       echo '</td>

       <td>';
       echo $arrivaltime;
       echo '</td>
        </tr>';

    }
} else {
    echo "0 results";
}

echo '</table>';
$conn->close();

echo '
<a href="index1.php">Go To Previous Page</a>
';
?>
