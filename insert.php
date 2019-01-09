<?php 
include('dbcon.php');

 $sql = "INSERT INTO TrainService (TrainNo, TraniName, WeeklyOffDay, StartingStation, DepartureTime, ArrivalStation, ArrivalTime)
VALUES (716, 'Sundorbon Express', 'Monday', 'Dhaka', '08:00', 'Khulna', '14:00')";




if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>