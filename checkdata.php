<?php
include('dbcon.php');

$sourcestation = $_REQUEST['StartStation'];
$destinationstation = $_REQUEST['ArrivalStation'];

//GoogleMap add in this section
echo '

<!DOCTYPE html>
<html>

<head>
    
    <style>
    .section{margin-left:360px;}
    </style>
</head>

<body>

<div class="section"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15417693.59349188!2d167.1909137!3d-76.3579321!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adaaed80e18ba7%3A0xf2d28e0c4e1fc6b!2sBangladesh!5e0!3m2!1sen!2sbd!4v1496551010419" width="630" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>


</body>
</html>


';


$sql = "SELECT id, TrainNo, TraniName, StartingStation, DepartureTime, ArrivalStation, ArrivalTime FROM trainservice";
$result = $conn->query($sql);

echo '<table border="1" align="center">';

    		echo '<tr>;
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
    	$id =$row["id"];
        $trainno= $row["TrainNo"];
        $trainname=$row["TraniName"];
        $startinstation=$row["StartingStation"];
        $departuretime=$row["DepartureTime"];
        $arrivalstation=$row["ArrivalStation"];
        $arrivaltime=$row["ArrivalTime"];

    	//echo $startstaion;
    	//echo $arivalstation;

    	if($sourcestation==$startinstation && $destinationstation==$arrivalstation)
    	{
    		

    		echo '<tr>';

    		echo '<td>
    		<html>
    		<body>
    		<form>
    		<button type="submit" formaction="ticketform.php">';
    		echo  $trainno;
    		echo '</form>';
    		echo '</button>';
    		echo '</body>';
    		echo '</html>';
    		
    		echo '</td>';

    		echo '<td>';
             echo  $trainname;
    		echo '</td>';

    		echo '<td>';
    		echo  $startinstation;
    		echo '</td>';

    		echo '<td>';
    		echo $departuretime;
    		echo '</td>';

    		echo '<td>';
    		echo $arrivalstation;
    		echo '</td>';

    		echo '<td>';
    		echo $arrivaltime;
    		echo '</td>';

    		echo '</tr>';

    		
    	}
    	else
    	{

    		//echo "wrong";
    	}
    }

}
 else 
    {
      echo "0 results";
    }
    echo '</table>';

    echo '<html>
    <head>
<link rel="stylesheet" type="text/css" href="checkdata.css" />
    </head>
    <body><h3>Click on TrainNo if you want to buy ticket.</h3></body>
    <a href="search.php">Go To Previous Page</a>
    </html>';

?>