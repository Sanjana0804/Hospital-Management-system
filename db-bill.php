<?php

$f1 = $_POST['f1'] ?? '';
$f2 = $_POST['f2'] ?? '';
$f3 = $_POST['f3'] ?? '';
$f4 = $_POST['f4'] ?? '';
$f5 = $_POST['f5'] ?? '';
$f6 = $_POST['f6'] ?? '';
$f7 = $_POST['f7'] ?? '';


// Connect to database
require_once "config.php";


// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


// Insert data
$sql = "INSERT INTO bill_table
        (Bill_No, Customer_id, Customer_Name, Date_of_shop, Amount, Mode_of_payment, Date_of_delievery)
        VALUES
        ('$f1', '$f2', '$f3', '$f4', '$f5', '$f6', '$f7')";


// Execute query
$result = mysqli_query($con, $sql);


// Check query
if (!$result) {
    die("Failed: " . mysqli_error($con));
}


// Close connection
mysqli_close($con);


// Redirect
header("Location: welcome.php");
exit();

?>
