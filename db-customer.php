<?php

$f1 = $_POST['f1'] ?? '';
$f2 = $_POST['f2'] ?? '';
$f3 = $_POST['f3'] ?? '';
$f4 = $_POST['f4'] ?? '';
$f5 = $_POST['f5'] ?? '';
$f6 = $_POST['f6'] ?? '';
$f7 = $_POST['f7'] ?? '';
$f8 = $_POST['f8'] ?? '';
$f9 = $_POST['f9'] ?? '';
$f10 = $_POST['f10'] ?? '';

require_once "config.php";

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO customer_table
        (f1, f2, f3, f4, f5, f6, f7, f8, f9, f10)
        VALUES
        ('$f1', '$f2', '$f3', '$f4', '$f5', '$f6', '$f7', '$f8', '$f9', '$f10')";

$result = mysqli_query($con, $sql);

if (!$result) {
    die("Failed: " . mysqli_error($con));
}

header("Location: welcome.php");
exit();

?>