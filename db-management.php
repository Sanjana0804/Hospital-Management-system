<?php

$f1 = $_POST['f1'] ?? '';
$f2 = $_POST['f2'] ?? '';
$f3 = $_POST['f3'] ?? '';
$f4 = $_POST['f4'] ?? '';
$f5 = $_POST['f5'] ?? '';
$f6 = $_POST['f6'] ?? '';
$f7 = $_POST['f7'] ?? '';

require_once "config.php";

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO item_table
        (Category, Type, Product_Id, Amount, Images, Discount, Description)
        VALUES
        ('$f1', '$f2', '$f3', '$f4', '$f5', '$f6', '$f7')";

$result = mysqli_query($con, $sql);

if (!$result) {
    die("Failed: " . mysqli_error($con));
}

mysqli_close($con);

header("Location: welcome.php");
exit();

?>
