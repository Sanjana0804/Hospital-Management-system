<?php

$con = mysqli_connect(
    "YOUR_HOST",
    "YOUR_USERNAME",
    "YOUR_PASSWORD",
    "YOUR_DATABASE"
);

if (!$con) {
    die("Database connection failed.");
}

?>