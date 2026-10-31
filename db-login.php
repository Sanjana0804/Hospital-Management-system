<?php

session_start();

$name = trim($_POST['name'] ?? '');
$password = $_POST['password'] ?? '';


/* =========================
   VALIDATION
========================= */

if ($name === '' || $password === '') {
    header("Location: login.php?error=empty");
    exit();
}


/* =========================
   DATABASE CONNECTION
========================= */

require_once "config.php";
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}


/* =========================
   CHECK USER
========================= */

$sql = "SELECT name, password
        FROM login_table
        WHERE name = ?
        LIMIT 1";

$stmt = mysqli_prepare($con, $sql);

if (!$stmt) {
    die("Database error: " . mysqli_error($con));
}

mysqli_stmt_bind_param($stmt, "s", $name);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$user = mysqli_fetch_assoc($result);


/* =========================
   LOGIN CHECK
========================= */

if ($user && $password === $user['password']) {

    $_SESSION['user_id'] = $user['name'];

    mysqli_stmt_close($stmt);
    mysqli_close($con);

    header("Location: welcome.php");
    exit();

} else {

    mysqli_stmt_close($stmt);
    mysqli_close($con);

    header("Location: login.php?error=invalid");
    exit();
}

?>