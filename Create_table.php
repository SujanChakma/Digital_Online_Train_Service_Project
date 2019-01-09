<?php 
include('dbcon.php');

// sql to create table
$sql = "CREATE TABLE TrainService (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
TrainNo INT(6) NOT NULL,
TraniName VARCHAR(50) NOT NULL,
WeeklyOffDay VARCHAR(50) NOT NULL,
StartingStation VARCHAR(50) NOT NULL,
DepartureTime VARCHAR(10) NOT NULL,
ArrivalStation VARCHAR(50) NOT NULL,
ArrivalTime VARCHAR(10) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Student created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();



?>