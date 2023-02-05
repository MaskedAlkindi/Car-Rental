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
            <a href="/lospollos/Bookings.html">Bookings</a>
          </div>
    </header>
<body style = "margin: 50px;">
    <br>
    <div class="regbody">
    <h1> Invoice </h1>
        <table class = "table">
            <thead> 
                    <tr>
                        <th>Contract ID</th>
                        <th>Customer ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>Phone</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>make</th>
                        <th>model</th>
                        <th>color</th>
                        <th>mileage</th>
                        <th>typecar</th>
                    </tr>
                </thead> 
            <tbody> 
                
            </tbody>
    <?php
    require "create_connection.php";
    // INSERTING
    $customerID = $_GET['customerID'];


    $SQLQuery = "SELECT `IDContract`, `FNC`, `LNC`, `City`, `Phone`,`startdate`, `enddate`,`make`, `model`, `color`, `mileage`, `typecar`, `carpriceperday` FROM `customer`, `contract`, `vehicle`\n"

    . "WHERE `customer`.`IDC` = `contract`.`IDC`\n"

    . "AND `contract`.`IDCar` = `vehicle`.`IDCar`\n"
    . "AND `customer`.`IDC` = {$customerID};";

    if (!$QueryResults = mysqli_query($conn, $SQLQuery)) {
        die("Query Processing Failed: \n" . mysqli_error($conn));
    }

    $counter = 1;
    $myfile = fopen("invoice.txt", "w");
    foreach ($QueryResults as $invoiceRow) {
        $QCN = "" . $invoiceRow['IDContract'] . "\n"; 
        $QFNC = "" . $invoiceRow['FNC'] . "\n";
        $QLNC = "" . $invoiceRow['LNC'] . "\n";
        $QC = "" . $invoiceRow['City'] . "\n";
        $QP = "" . $invoiceRow['Phone'] . "\n";
        $QSD = "" . $invoiceRow['startdate'] . "\n";
        $QED = "" . $invoiceRow['enddate'] . "\n";
        $QMake = "" . $invoiceRow['make'] . "\n";
        $QModel = "" . $invoiceRow['model'] . "\n";
        $QMilage = "" . $invoiceRow['mileage'] . "\n";
        $QColor = "" . $invoiceRow['color'] . "\n";
        $QTypecar = "" . $invoiceRow['typecar'] . "\n";
        echo "<tr>
                <th>$QCN</th>
                <th>$customerID</th>
                <th>$QFNC</th>
                <th>$QLNC</th>
                <th>$QC</th>
                <th>$QP</th>
                <th>$QSD</th>
                <th>$QED</th>
                <th>$QMake</th>
                <th>$QModel</th>
                <th>$QColor</th>
                <th>$QMilage</th>
                <th>$QTypecar</th>
                </tr>";
    };

        


    mysqli_close($conn);
    ?>
            
        </table>
    </div>
    <div class="regbody2">
    <table class = "table">
            <thead> 
                    <tr>
                        <th>make</th>
                        <th>model</th>
                        <th>color</th>
                        <th>mileage</th>
                        <th>typecar</th>
                        <th>Car Daily Price</th> 
                    </tr>
                </thead> 
            <tbody> 
                
            </tbody>
    <?php
    require "create_connection.php";
    // INSERTING
    $customerID = $_GET['customerID'];


    $SQLQuery = "SELECT `IDContract`, `FNC`, `LNC`, `City`, `Phone`,`startdate`, `enddate`,`make`, `model`, `color`, `mileage`, `typecar`, `carpriceperday` FROM `customer`, `contract`, `vehicle`\n"

    . "WHERE `customer`.`IDC` = `contract`.`IDC`\n"

    . "AND `contract`.`IDCar` = `vehicle`.`IDCar`\n"
    . "AND `customer`.`IDC` = {$customerID};";

    if (!$QueryResults = mysqli_query($conn, $SQLQuery)) {
        die("Query Processing Failed: \n" . mysqli_error($conn));
    }

    $counter = 1;
    $myfile = fopen("invoice.txt", "w");
    foreach ($QueryResults as $invoiceRow) {
        $QMake = "" . $invoiceRow['make'] . "\n";
        $QModel = "" . $invoiceRow['model'] . "\n";
        $QMilage = "" . $invoiceRow['mileage'] . "\n";
        $QColor = "" . $invoiceRow['color'] . "\n";
        $QTypecar = "" . $invoiceRow['typecar'] . "\n"; 
        $QCarDPrice = "" . $invoiceRow['carpriceperday'] . "\n";
        echo "<tr>
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
    </div>

    <footer>
            <div class="Footer">
            <p>This is the creation of Masked Alkindi</p>
            </div>
    </footer>
</body>
</html>








    


