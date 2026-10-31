<?php

// ========================================
// DATABASE CONNECTION
// ========================================

require_once "config.php";

if (!$con) {
    die(
        "Database connection failed: " .
        mysqli_connect_error()
    );
}


// ========================================
// CHECK REQUEST METHOD
// ========================================

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    die("Invalid request.");
}


// ========================================
// GET FORM DATA
// ========================================

$category = $_POST['f1'] ?? '';

$type = $_POST['f2'] ?? '';

$product_id = $_POST['f3'] ?? '';

$amount = $_POST['f4'] ?? '';

$date_of_shopping = $_POST['f5'] ?? '';

$username = $_POST['f6'] ?? '';

$email = $_POST['f7'] ?? '';

$phone = $_POST['f8'] ?? '';

$address = $_POST['f9'] ?? '';

$city = $_POST['f10'] ?? '';

$payment_mode = $_POST['f11'] ?? '';

$bank_name = $_POST['f12'] ?? '';

$dd_cheque_card_no = $_POST['f13'] ?? '';


// ========================================
// REMOVE EXTRA SPACES
// ========================================

$category = trim($category);

$type = trim($type);

$product_id = trim($product_id);

$amount = trim($amount);

$date_of_shopping = trim($date_of_shopping);

$username = trim($username);

$email = trim($email);

$phone = trim($phone);

$address = trim($address);

$city = trim($city);

$payment_mode = trim($payment_mode);

$bank_name = trim($bank_name);

$dd_cheque_card_no = trim($dd_cheque_card_no);


// ========================================
// CHECK REQUIRED DATA
// ========================================

if ($category === '') {
    die("ERROR: Category is missing.");
}

if ($type === '') {
    die("ERROR: Type is missing.");
}

if ($product_id === '') {
    die("ERROR: Product ID is missing.");
}

if ($amount === '') {
    die("ERROR: Amount is missing.");
}

if ($date_of_shopping === '') {
    die("ERROR: Shopping Date is missing.");
}

if ($username === '') {
    die("ERROR: Username is missing.");
}

if ($email === '') {
    die("ERROR: Email is missing.");
}

if ($phone === '') {
    die("ERROR: Phone is missing.");
}

if ($address === '') {
    die("ERROR: Address is missing.");
}

if ($city === '') {
    die("ERROR: City is missing.");
}

if ($payment_mode === '') {
    die("ERROR: Payment Mode is missing.");
}


// ========================================
// INSERT QUERY
// ========================================

$sql = "
INSERT INTO booked_item
(
    Category,
    Type,
    Product_Id,
    Amount,
    Date_of_Shopping,
    Username,
    Email,
    Phone,
    Address,
    City,
    Payment_mode,
    Bank_name,
    dd_cheque_card_no
)
VALUES
(
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
)
";


// ========================================
// PREPARE
// ========================================

$stmt = mysqli_prepare($con, $sql);

if (!$stmt) {

    die(
        "SQL Prepare Error: " .
        mysqli_error($con)
    );
}


// ========================================
// BIND PARAMETERS
// ========================================

mysqli_stmt_bind_param(
    $stmt,
    "sssssssssssss",
    $category,
    $type,
    $product_id,
    $amount,
    $date_of_shopping,
    $username,
    $email,
    $phone,
    $address,
    $city,
    $payment_mode,
    $bank_name,
    $dd_cheque_card_no
);


// ========================================
// EXECUTE
// ========================================

if (mysqli_stmt_execute($stmt)) {

    ?>

    <!DOCTYPE html>

    <html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>Purchase Successful</title>

        <style>

            body {
                font-family: Arial, sans-serif;
                background: #06141f;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                margin: 0;
            }

            .success-box {
                width: 90%;
                max-width: 500px;
                background: #102d3c;
                padding: 35px;
                border-radius: 15px;
                text-align: center;
                box-shadow: 0 10px 30px rgba(0,0,0,0.4);
            }

            h1 {
                color: #5eead4;
                margin-bottom: 15px;
            }

            p {
                line-height: 1.7;
            }

            .details {
                text-align: left;
                margin-top: 20px;
                padding: 20px;
                background: #173b4d;
                border-radius: 10px;
            }

            .details p {
                margin: 8px 0;
            }

        </style>

    </head>

    <body>

        <div class="success-box">

            <h1>
                Purchase Successful!
            </h1>

            <p>
                Your purchase data has been inserted
                into the database.
            </p>

            <div class="details">

                <p>
                    <strong>Product ID:</strong>
                    <?php echo htmlspecialchars($product_id); ?>
                </p>

                <p>
                    <strong>Type:</strong>
                    <?php echo htmlspecialchars($type); ?>
                </p>

                <p>
                    <strong>Username:</strong>
                    <?php echo htmlspecialchars($username); ?>
                </p>

                <p>
                    <strong>Amount:</strong>
                    <?php echo htmlspecialchars($amount); ?>
                </p>

                <p>
                    <strong>Date:</strong>
                    <?php echo htmlspecialchars($date_of_shopping); ?>
                </p>

            </div>

            <script>

                setTimeout(function() {

                    window.location.href = "welcome.php";

                }, 3000);

            </script>

        </div>

    </body>

    </html>

    <?php

} else {

    die(
        "Insert Error: " .
        mysqli_stmt_error($stmt)
    );
}


// ========================================
// CLOSE
// ========================================

mysqli_stmt_close($stmt);

mysqli_close($con);

?>