<?php

$name = $_POST['Name'] ?? '';
$email = $_POST['Email'] ?? '';
$subject = $_POST['Subject'] ?? '';
$message = $_POST['Message'] ?? '';

require_once "config.php";

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO feedback_table
        (Name, Email, Subject, Message)
        VALUES
        ('$name', '$email', '$subject', '$message')";

$result = mysqli_query($con, $sql);

if (!$result) {
    die("Failed to insert data: " . mysqli_error($con));
}

echo "<script>
        alert('Feedback submitted successfully!');
        window.location.href='welcome.php';
      </script>";

mysqli_close($con);

?>