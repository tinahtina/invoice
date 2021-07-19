<?php
    print_r($_POST);
    $company = $_POST["company"];
    $address = $_POST["address"];
    $itemno = $_POST["itemno"];
    $itemname = $_POST["itemname"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $itemtotal = $_POST["itemtotal"];
    $subtotal = $_POST["subtotal"];
    $taxrate = $_POST["taxrate"];
    $taxamount = $_POST["taxamount"];
    $total = $_POST["total"];
    $amountpaid = $_POST["amountpaid"];
    $amountdue = $_POST["amountdue"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "christine";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn)                                        
    die("Connection failed: " . mysqli_connect_error());
    

    $sql = "INSERT INTO invoice (company, address, itemno, itemname, quantity, price, itemtotal, subtotal, taxrate, taxamount, total, amountpaid, amountdue )
    VALUES ('$company','$address','$itemno','$itemname','$quantity','$price','$itemtotal','$subtotal','$taxrate','$taxamount', '$total','$amountpaid','$amountdue')";

    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Location:create_invoice.php")
?>