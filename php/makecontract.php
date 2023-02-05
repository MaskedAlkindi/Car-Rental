<?php
require "create_connection.php";

// INSERTING
$customerID = $_GET['customerID'];
$carID = $_GET['carID'];
$startdate = $_GET['StartDate'];
$enddate = $_GET['EndDate'];



$SQLQuery = "INSERT INTO `contract`(`IDContract`, `startdate`, `enddate`, `IDC`, `IDCar`) VALUES (Null,'{$startdate}','{$enddate}','{$customerID}','{$carID}');";

if (!mysqli_query($conn, $SQLQuery)) {
    die("SQL query processing failed: " . mysqli_error($conn));
} else {
echo "Customer Added Successfully!";
}



mysqli_close($conn);
?>