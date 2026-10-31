<?php

$f1 = $_POST['Name'] ?? '';
$f2 = $_POST['Test_Type'] ?? '';
$f3 = $_POST['Date_of_Test'] ?? '';
$f4 = $_POST['Time'] ?? '';
$f5 = $_POST['Amount'] ?? '';
$f6 = $_POST['Username'] ?? '';
$f7 = $_POST['Email'] ?? '';
$f8 = $_POST['Phone'] ?? '';
$f9 = $_POST['Address'] ?? '';
$f10 = $_POST['City'] ?? '';
$f11 = $_POST['Payment_mode'] ?? '';
$f12 = $_POST['Bank_Name'] ?? '';
$f13 = $_POST['DD_Cheque_Card_No'] ?? '';
$f14 = $_POST['CVV'] ?? '';

require_once "config.php";

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO test_table
(name, test_type, date_of_test, test_time, amount, username, email, phone, address, city, payment_mode, bank_name, dd_cheque_card_no, cvv)
VALUES
('$f1', '$f2', '$f3', '$f4', '$f5', '$f6', '$f7', '$f8',
 '$f9', '$f10', '$f11', '$f12', '$f13', '$f14')";

$result = mysqli_query($con, $sql);

if (!$result) {
    die("Failed: " . mysqli_error($con));
}

header("Location: welcome.php");
exit();

?>