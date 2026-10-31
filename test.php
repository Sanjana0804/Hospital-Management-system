<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test Requirement - Hospital Management System</title>

    <style>
        @import url("style-css.css");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, Geneva, sans-serif;
            background:
                radial-gradient(circle at top left, rgba(20, 184, 166, 0.12), transparent 35%),
                radial-gradient(circle at bottom right, rgba(14, 116, 144, 0.15), transparent 35%),
                #06141f;
            color: #ffffff;
            min-height: 100vh;
        }

        /* =========================
           NAVBAR
        ========================== */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
            background: rgba(3, 14, 23, 0.96);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(94, 234, 212, 0.15);
        }

        .nav-container {
            max-width: 1400px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px 20px;
            overflow-x: auto;
        }

        .nav-container a {
            color: #dbeafe;
            text-decoration: none;
            padding: 10px 14px;
            margin: 2px;
            border-radius: 8px;
            font-size: 13px;
            white-space: nowrap;
            transition: all 0.3s ease;
        }

        .nav-container a:hover {
            background: rgba(94, 234, 212, 0.12);
            color: #5eead4;
            transform: translateY(-2px);
        }

        .nav-container a.active {
            background: linear-gradient(
                135deg,
                #14b8a6,
                #5eead4
            );
            color: #031019;
            font-weight: bold;
            box-shadow: 0 6px 20px rgba(20, 184, 166, 0.25);
        }

        /* =========================
           WELCOME BAR
        ========================== */

        .welcome-bar {
            background: #031019;
            border-bottom: 1px solid rgba(94, 234, 212, 0.12);
            height: 34px;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .welcome-bar marquee {
            color: #ffffff;
            font-size: 13px;
            width: 100%;
        }

        /* =========================
           BANNER
        ========================== */

        .banner {
            position: relative;
            height: 350px;
            overflow: hidden;
        }

        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            filter: brightness(0.55);
            transition: transform 0.7s ease;
        }

        .banner:hover img {
            transform: scale(1.04);
        }

        .banner::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(
                    90deg,
                    rgba(3, 14, 23, 0.85),
                    rgba(3, 14, 23, 0.35),
                    rgba(3, 14, 23, 0.8)
                );
        }

        .banner-content {
            position: absolute;
            z-index: 2;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 90%;
        }

        .banner-label {
            color: #5eead4;
            letter-spacing: 5px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .banner-content h1 {
            font-size: 48px;
            margin-bottom: 12px;
        }

        .banner-content h1 span {
            color: #5eead4;
        }

        .banner-content p {
            color: #d1d5db;
            font-size: 15px;
        }

        /* =========================
           MAIN
        ========================== */

        .main {
            max-width: 1250px;
            margin: auto;
            padding: 60px 25px;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 45px;
        }

        .section-heading .tag {
            color: #5eead4;
            font-size: 11px;
            letter-spacing: 4px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .section-heading h2 {
            font-size: 36px;
            margin-bottom: 12px;
        }

        .section-heading h2 span {
            color: #5eead4;
        }

        .section-heading p {
            color: #94a3b8;
            font-size: 14px;
        }

        .heading-line {
            width: 70px;
            height: 3px;
            background: linear-gradient(
                90deg,
                #14b8a6,
                #5eead4
            );
            margin: 20px auto 0;
            border-radius: 10px;
        }

        /* =========================
           TEST LAYOUT
        ========================== */

        .test-container {
            display: grid;
            grid-template-columns: 0.9fr 1.4fr;
            gap: 35px;
            align-items: stretch;
        }

        /* IMAGE CARD */

        .image-card {
            position: relative;
            min-height: 600px;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(94, 234, 212, 0.15);
            background: #0b1d2a;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
        }

        .image-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }

        .image-card:hover img {
            transform: scale(1.06);
        }

        .image-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 35px;
            background: linear-gradient(
                transparent 35%,
                rgba(3, 14, 23, 0.95)
            );
        }

        .image-overlay .small-title {
            color: #5eead4;
            font-size: 11px;
            letter-spacing: 4px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .image-overlay h3 {
            font-size: 30px;
            line-height: 1.2;
        }

        .image-overlay p {
            color: #cbd5e1;
            font-size: 13px;
            line-height: 1.7;
            margin-top: 12px;
        }

        /* FORM CARD */

        .form-card {
            background: rgba(11, 29, 42, 0.85);
            border: 1px solid rgba(94, 234, 212, 0.14);
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(10px);
            transition: all 0.35s ease;
        }

        .form-card:hover {
            border-color: rgba(94, 234, 212, 0.35);
            transform: translateY(-4px);
            box-shadow: 0 25px 60px rgba(20, 184, 166, 0.08);
        }

        .form-title {
            margin-bottom: 25px;
        }

        .form-title h3 {
            font-size: 24px;
            margin-bottom: 8px;
        }

        .form-title p {
            color: #94a3b8;
            font-size: 13px;
        }

        /* =========================
           FORM
        ========================== */

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        .form-group label {
            color: #cbd5e1;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid rgba(148, 163, 184, 0.2);
            border-radius: 9px;
            outline: none;
            background: rgba(3, 14, 23, 0.8);
            color: #ffffff;
            font-size: 13px;
            transition: all 0.3s ease;
        }

        .form-group input::placeholder {
            color: #64748b;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #5eead4;
            box-shadow: 0 0 0 3px rgba(94, 234, 212, 0.08);
            transform: translateY(-1px);
        }

        .form-group select option {
            background: #06141f;
            color: #ffffff;
        }

        /* AMOUNT */

        .amount-box input {
            color: #5eead4;
            font-weight: bold;
            font-size: 15px;
            background: rgba(20, 184, 166, 0.06);
        }

        /* SUBMIT */

        .submit-area {
            margin-top: 25px;
            text-align: center;
        }

        .submit-btn {
            border: none;
            cursor: pointer;
            padding: 13px 35px;
            border-radius: 10px;
            background: linear-gradient(
                135deg,
                #14b8a6,
                #5eead4
            );
            color: #031019;
            font-weight: bold;
            font-size: 13px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(20, 184, 166, 0.18);
        }

        .submit-btn:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 35px rgba(20, 184, 166, 0.28);
        }

        .submit-btn:active {
            transform: scale(0.98);
        }

        /* =========================
           FOOTER
        ========================== */

        footer {
            background: #030e17;
            border-top: 1px solid rgba(94, 234, 212, 0.12);
            text-align: center;
            padding: 28px 20px;
            color: #64748b;
            font-size: 12px;
        }

        footer h3 {
            color: #ffffff;
            font-size: 18px;
            margin-bottom: 8px;
        }

        footer h3 span {
            color: #5eead4;
        }

        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 1000px) {

            .nav-container {
                justify-content: flex-start;
            }

            .test-container {
                grid-template-columns: 1fr;
            }

            .image-card {
                min-height: 350px;
            }
        }

        @media (max-width: 850px) {

            .banner {
                height: 300px;
            }

            .banner-content h1 {
                font-size: 40px;
            }

            .main {
                padding: 45px 20px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }
        }

        @media (max-width: 650px) {

            .banner {
                height: 240px;
            }

            .banner-content h1 {
                font-size: 32px;
            }

            .banner-content p {
                font-size: 12px;
            }

            .section-heading h2 {
                font-size: 28px;
            }

            .form-card {
                padding: 25px 18px;
            }

            .image-card {
                min-height: 300px;
            }

            .image-overlay {
                padding: 25px;
            }

            .image-overlay h3 {
                font-size: 24px;
            }
        }

        @media (max-width: 450px) {

            .banner {
                height: 210px;
            }

            .banner-content h1 {
                font-size: 27px;
            }

            .banner-label {
                font-size: 9px;
                letter-spacing: 3px;
            }

            .main {
                padding: 35px 15px;
            }

            .section-heading h2 {
                font-size: 25px;
            }

            .form-card {
                padding: 20px 15px;
            }
        }
    </style>

    <script>
        /*
         * Test Type -> Amount
         */
        function updateAmount() {

            var testType = document.getElementById("Test_Type");
            var amount = document.getElementById("Amount");

            var prices = {
                "Blood Test": 500,
                "X-Ray": 800,
                "MRI Scan": 2500,
                "CT Scan": 2000,
                "ECG": 600
            };

            if (testType.value === "") {
                amount.value = "";
            } else {
                amount.value = prices[testType.value];
            }
        }
    </script>

</head>

<body>

    <!-- =========================
         NAVBAR
    ========================== -->

    <nav class="navbar">

        <div class="nav-container">

            <a href="index.php">Home</a>

            <a href="about-us.php">About Us</a>

            <a href="customer.php">Customer</a>

            <a href="shopping.php">Shopping</a>

            <a href="management.php">Item Management</a>

            <a href="bill.php">Bill Management</a>

            <a href="purchase.php">Purchase &amp; Delivery</a>

            <a href="feedback.php">Feedback</a>

            <a href="login.php">Login</a>

            <a href="contact-us.php">Contact Us</a>

        </div>

    </nav>


    <!-- =========================
         WELCOME BAR
    ========================== -->

    <div class="welcome-bar">

        <marquee behavior="scroll" direction="left">
            <strong>
                “ Welcome to Hospital Management System — Test Requirement Module ”
            </strong>
        </marquee>

    </div>


    <!-- =========================
         BANNER
    ========================== -->

    <section class="banner">

        <img src="banner.jpg" alt="Hospital Management System">

        <div class="banner-content">

            <div class="banner-label">
                HOSPITAL MANAGEMENT SYSTEM
            </div>

            <h1>
                Test <span>Requirement</span>
            </h1>

            <p>
                Book your required medical test quickly and easily
            </p>

        </div>

    </section>


    <!-- =========================
         MAIN CONTENT
    ========================== -->

    <main class="main">

        <div class="section-heading">

            <div class="tag">
                TEST MODULE
            </div>

            <h2>
                TEST <span>Requirement</span>
            </h2>

            <p>
                Select your test and enter your personal details
            </p>

            <div class="heading-line"></div>

        </div>


        <div class="test-container">


            <!-- =========================
                 IMAGE
            ========================== -->

            <div class="image-card">

                <img src="image.jpg" alt="Medical Test">

                <div class="image-overlay">

                    <div class="small-title">
                        MEDICAL TEST
                    </div>

                    <h3>
                        Book Your Test
                        <br>
                        With Ease
                    </h3>

                    <p>
                        Choose your required test, check the automatically
                        calculated amount and submit your requirement.
                    </p>

                </div>

            </div>


            <!-- =========================
                 FORM
            ========================== -->

            <div class="form-card">

                <div class="form-title">

                    <h3>
                        Test Requirement Form
                    </h3>

                    <p>
                        Please enter the required information below.
                    </p>

                </div>


                <form
                    id="form1"
                    name="form1"
                    method="post"
                    action="db-test.php"
                >

                    <div class="form-grid">


                        <!-- NAME -->

                        <div class="form-group">

                            <label for="Name">
                                Name
                            </label>

                            <input
                                type="text"
                                name="Name"
                                id="Name"
                                placeholder="Enter your name"
                                required
                            >

                        </div>


                        <!-- TEST TYPE -->

                        <div class="form-group">

                            <label for="Test_Type">
                                Test Type
                            </label>

                            <select
                                name="Test_Type"
                                id="Test_Type"
                                onchange="updateAmount()"
                                required
                            >

                                <option value="">
                                    Select Test
                                </option>

                                <option value="Blood Test">
                                    Blood Test
                                </option>

                                <option value="X-Ray">
                                    X-Ray
                                </option>

                                <option value="MRI Scan">
                                    MRI Scan
                                </option>

                                <option value="CT Scan">
                                    CT Scan
                                </option>

                                <option value="ECG">
                                    ECG
                                </option>

                            </select>

                        </div>


                        <!-- DATE -->

                        <div class="form-group">

                            <label for="Date_of_Test">
                                Date of Test
                            </label>

                            <input
                                type="date"
                                name="Date_of_Test"
                                id="Date_of_Test"
                                required
                            >

                        </div>


                        <!-- TIME -->

                        <div class="form-group">

                            <label for="Time">
                                Time
                            </label>

                            <input
                                type="time"
                                name="Time"
                                id="Time"
                                required
                            >

                        </div>


                        <!-- AMOUNT -->

                        <div class="form-group amount-box">

                            <label for="Amount">
                                Amount
                            </label>

                            <input
                                type="text"
                                name="Amount"
                                id="Amount"
                                placeholder="Automatically filled"
                                readonly
                                required
                            >

                        </div>


                        <!-- USERNAME -->

                        <div class="form-group">

                            <label for="Username">
                                Username
                            </label>

                            <input
                                type="text"
                                name="Username"
                                id="Username"
                                placeholder="Enter username"
                                required
                            >

                        </div>


                        <!-- EMAIL -->

                        <div class="form-group">

                            <label for="Email">
                                Email
                            </label>

                            <input
                                type="email"
                                name="Email"
                                id="Email"
                                placeholder="Enter email"
                                required
                            >

                        </div>


                        <!-- PHONE -->

                        <div class="form-group">

                            <label for="Phone">
                                Phone
                            </label>

                            <input
                                type="tel"
                                name="Phone"
                                id="Phone"
                                placeholder="Enter phone number"
                                required
                            >

                        </div>


                        <!-- ADDRESS -->

                        <div class="form-group">

                            <label for="Address">
                                Address
                            </label>

                            <input
                                type="text"
                                name="Address"
                                id="Address"
                                placeholder="Enter address"
                                required
                            >

                        </div>


                        <!-- CITY -->

                        <div class="form-group">

                            <label for="City">
                                City
                            </label>

                            <input
                                type="text"
                                name="City"
                                id="City"
                                placeholder="Enter city"
                                required
                            >

                        </div>


                        <!-- PAYMENT MODE -->

                        <div class="form-group">

                            <label for="Payment_mode">
                                Payment Mode
                            </label>

                            <select
                                name="Payment_mode"
                                id="Payment_mode"
                                required
                            >

                                <option value="">
                                    Select Payment Mode
                                </option>

                                <option value="Cash">
                                    Cash
                                </option>

                                <option value="Card">
                                    Card
                                </option>

                                <option value="UPI">
                                    UPI
                                </option>

                                <option value="Bank Transfer">
                                    Bank Transfer
                                </option>

                            </select>

                        </div>


                        <!-- BANK NAME -->

                        <div class="form-group">

                            <label for="Bank_Name">
                                Bank Name
                            </label>

                            <input
                                type="text"
                                name="Bank_Name"
                                id="Bank_Name"
                                placeholder="Enter bank name"
                            >

                        </div>


                        <!-- DD / CHEQUE / CARD -->

                        <div class="form-group">

                            <label for="DD_Cheque_Card_No">
                                DD / Cheque / Card No
                            </label>

                            <input
                                type="text"
                                name="DD_Cheque_Card_No"
                                id="DD_Cheque_Card_No"
                                placeholder="Enter number"
                            >

                        </div>


                        <!-- CVV -->

                        <div class="form-group">

                            <label for="CVV">
                                CVV
                            </label>

                            <input
                                type="text"
                                name="CVV"
                                id="CVV"
                                placeholder="Enter CVV"
                            >

                        </div>

                    </div>


                    <!-- SUBMIT -->

                    <div class="submit-area">

                        <button
                            type="submit"
                            name="btnsubmit"
                            id="btnsubmit"
                            class="submit-btn"
                        >
                            SUBMIT TEST REQUIREMENT
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </main>


    <!-- =========================
         FOOTER
    ========================== -->

    <footer>

        <h3>
            Hospital <span>Management System</span>
        </h3>

        <p>
            © 2026 All Rights Reserved
        </p>

    </footer>

</body>

</html>