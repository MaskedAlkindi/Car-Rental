
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="phpstyling.css">
</head>
<header>
        <div class="mymenu">
            <a href="/lospollos/index.php">Home</a>
            <a href=".lospollos/Bookings.html">Bookings</a>
          </div>
</header>


<div class="regbody2">
<?php
require "create_connection.php";

// INSERTING
$customerID = $_POST['customerID'];
$firstNameCustomer = $_POST['firstNameCustomer'];
$lastNameCustomer = $_POST['lastNameCustomer'];
$City = $_POST['City'];
$PhoneNumber = $_POST['PhoneNumber'];

$SQLQuery = "INSERT INTO customer(IDC, FNC, LNC, City, Phone) VALUES ('{$customerID}', '{$firstNameCustomer}', '{$lastNameCustomer}', '{$City}', '{$PhoneNumber}');";

if (!mysqli_query($conn, $SQLQuery)) {
    die("SQL query processing failed: " . mysqli_error($conn));
} else {
    echo "Customer Added Successfully!";
}
mysqli_close($conn);
?>

</div>

</html>