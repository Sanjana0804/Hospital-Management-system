<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "config.php";

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<pre>";
print_r($_POST);
echo "</pre>";

?>