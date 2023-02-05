<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Best Cars</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="styla.css">
        <script src="functions.js" defer></script>
    </head>
  


    <body>
        <header>
            <div class="mymenu">
                <a class="active" href="./index.php">Home</a>
                <a href="./Bookings.html">Bookings</a>
                <a href="./BookCar.html">Book Car</a>
                <a href="./addcustomer.html">Add Customer</a>
                
            </div>
        </header>
           
        <div class="form-container">
            <h1> The Current Avaiable Cars are:</h1>
            <table class = "table">
            <thead>
                <th>CarID</th>
                <th>Make</th>
                <th>Model</th>
                <th>Mileage</th>
                <th>Color</th>
                <th>Typecar</th>
                <th> Daily Price </th>
            </thead>
            <?php
                require "php/create_connection.php";
                $SQLQuery = "SELECT IDCar, make, model, mileage, color, typecar, carpriceperday FROM vehicle\n"
                . "WHERE vehicle.IDCar NOT IN (SELECT IDCar FROM contract);";


                if (!$QueryResults = mysqli_query($conn, $SQLQuery)) {
                    die("Query Processing Failed: \n" . mysqli_error($conn));
                }
                $counter = 1;
                foreach ($QueryResults as $invoiceRow) {
                    $CarID =  "" . $invoiceRow['IDCar'] . "\n";
                    $QMake = "" . $invoiceRow['make'] . "\n";
                    $QModel = "" . $invoiceRow['model'] . "\n";
                    $QMilage = "" . $invoiceRow['mileage'] . "\n";
                    $QColor = "" . $invoiceRow['color'] . "\n";
                    $QTypecar = "" . $invoiceRow['typecar'] . "\n"; 
                    $QCarDPrice = "" . $invoiceRow['carpriceperday'] . "\n";
                    echo "<tr>
                            <th>$CarID</th>
                            <th>$QMake</th>
                            <th>$QModel</th>
                            <th>$QColor</th>
                            <th>$QMilage</th>
                            <th>$QTypecar</th>
                            <th>$QCarDPrice</th>
                            </tr>";
        
                };
                mysqli_close($conn);
                ?>





            </table>
        </div>

    </body>

    <footer>
        <div class="Footer">
        <p>This is the creation of Masked Alkindi</p>
        </div>
    </footer>