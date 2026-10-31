<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bill Management | Hospital Management System</title>

    <style>

        @import url("style-css.css");

        /* =========================
           RESET
        ========================= */

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;

            font-family: Arial, Helvetica, sans-serif;

            background:
                radial-gradient(
                    circle at top left,
                    #164e63,
                    transparent 35%
                ),
                radial-gradient(
                    circle at bottom right,
                    #0e7490,
                    transparent 30%
                ),
                #06141f;

            color: #ffffff;

            min-height: 100vh;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;

            display: flex;
            justify-content: space-between;
            align-items: center;

            gap: 25px;

            padding: 16px 5%;

            background: rgba(6, 20, 31, 0.95);

            backdrop-filter: blur(12px);

            border-bottom:
                1px solid
                rgba(94, 234, 212, 0.12);
        }


        .logo {
            font-size: 23px;
            font-weight: 700;

            white-space: nowrap;

            color: #ffffff;
        }


        .logo span {
            color: #5eead4;
        }


        .nav-links {
            display: flex;

            flex-wrap: wrap;

            justify-content: flex-end;

            gap: 6px;
        }


        .nav-links a {
            color: #cbd5e1;

            text-decoration: none;

            font-size: 12px;

            font-weight: 600;

            padding: 9px 11px;

            border-radius: 8px;

            transition: 0.25s ease;
        }


        .nav-links a:hover,
        .nav-links a.active {
            color: #5eead4;

            background:
                rgba(94, 234, 212, 0.12);
        }


        /* =========================
           WELCOME BAR
        ========================= */

        .welcome-bar {
            height: 32px;

            display: flex;

            align-items: center;

            background:
                rgba(0, 0, 0, 0.55);

            border-bottom:
                1px solid
                rgba(94, 234, 212, 0.08);

            color: #ffffff;

            font-size: 12px;
        }


        .welcome-bar marquee {
            width: 100%;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            padding: 65px 6% 50px;

            text-align: center;
        }


        .hero-label {
            color: #5eead4;

            letter-spacing: 4px;

            font-size: 11px;

            font-weight: 700;

            margin-bottom: 12px;
        }


        .hero h1 {
            margin: 0;

            font-size:
                clamp(38px, 6vw, 64px);

            line-height: 1.1;

            font-weight: 700;
        }


        .hero h1 span {
            color: #5eead4;
        }


        .hero p {
            max-width: 650px;

            margin: 18px auto 0;

            color: #9fb0bd;

            font-size: 14px;

            line-height: 1.7;
        }


        /* =========================
           BILL SECTION
        ========================= */

        .bill-section {
            padding: 25px 6% 70px;
        }


        .section-heading {
            text-align: center;

            margin-bottom: 35px;
        }


        .section-heading h2 {
            margin: 0 0 10px;

            font-size: 30px;
        }


        .section-heading h2 span {
            color: #5eead4;
        }


        .section-heading p {
            margin: 0;

            color: #8fa3af;

            font-size: 13px;
        }


        /* =========================
           BILL LAYOUT
        ========================= */

        .bill-layout {
            max-width: 1150px;

            margin: auto;

            display: grid;

            grid-template-columns:
                350px 1fr;

            gap: 25px;

            align-items: stretch;
        }


        /* =========================
           LEFT CARD
        ========================= */

        .side-card {
            overflow: hidden;

            background:
                rgba(255, 255, 255, 0.06);

            backdrop-filter: blur(12px);

            border:
                1px solid
                rgba(255, 255, 255, 0.1);

            border-radius: 20px;

            transition: 0.35s ease;
        }


        .side-card:hover {
            transform:
                translateY(-6px);

            border-color:
                rgba(94, 234, 212, 0.35);

            box-shadow:
                0 20px 45px
                rgba(0, 0, 0, 0.3);
        }


        .side-image {
            width: 100%;

            height: 260px;

            display: block;

            object-fit: cover;

            transition:
                0.5s ease;
        }


        .side-card:hover .side-image {
            transform:
                scale(1.05);
        }


        .side-content {
            padding: 25px;
        }


        .badge {
            display: inline-block;

            padding: 7px 12px;

            border-radius: 20px;

            background:
                rgba(94, 234, 212, 0.12);

            border:
                1px solid
                rgba(94, 234, 212, 0.2);

            color: #5eead4;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 1px;
        }


        .side-content h2 {
            margin: 15px 0 10px;

            font-size: 25px;
        }


        .side-content p {
            color: #9fb0bd;

            font-size: 13px;

            line-height: 1.7;

            margin: 0;
        }


        /* =========================
           FEATURES
        ========================= */

        .feature-list {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 10px;

            margin-top: 20px;
        }


        .feature {
            padding: 11px;

            border-radius: 10px;

            background:
                rgba(255, 255, 255, 0.04);

            border:
                1px solid
                rgba(255, 255, 255, 0.06);

            color: #dbe7ed;

            font-size: 11px;

            transition:
                0.25s ease;
        }


        .feature:hover {
            background:
                rgba(94, 234, 212, 0.08);

            border-color:
                rgba(94, 234, 212, 0.2);

            transform:
                translateY(-2px);
        }


        .feature-icon {
            color: #5eead4;

            margin-right: 6px;
        }


        /* =========================
           FORM CARD
        ========================= */

        .form-card {
            position: relative;

            overflow: hidden;

            padding: 30px;

            background:
                rgba(255, 255, 255, 0.06);

            backdrop-filter: blur(12px);

            border:
                1px solid
                rgba(255, 255, 255, 0.1);

            border-radius: 20px;

            box-shadow:
                0 15px 40px
                rgba(0, 0, 0, 0.18);
        }


        .form-card::before {
            content: "";

            position: absolute;

            top: 0;
            left: 0;

            width: 100%;
            height: 3px;

            background:
                linear-gradient(
                    90deg,
                    #5eead4,
                    #0e7490
                );
        }


        /* =========================
           FORM HEADER
        ========================= */

        .form-title {
            margin: 0;

            font-size: 25px;
        }


        .form-subtitle {
            margin:
                8px 0 25px;

            color: #8fa3af;

            font-size: 12px;

            line-height: 1.6;
        }


        .required {
            color: #5eead4;
        }


        /* =========================
           SECTION HEADER
        ========================= */

        .section-header {
            display: flex;

            align-items: center;

            gap: 12px;

            margin:
                25px 0 18px;
        }


        .section-number {
            width: 30px;
            height: 30px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background:
                rgba(94, 234, 212, 0.12);

            border:
                1px solid
                rgba(94, 234, 212, 0.25);

            color: #5eead4;

            font-size: 11px;

            font-weight: 700;
        }


        .section-header h3 {
            margin: 0;

            color: #ffffff;

            font-size: 14px;
        }


        /* =========================
           FORM GRID
        ========================= */

        .form-grid {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 16px;
        }


        .form-group {
            display: flex;

            flex-direction: column;
        }


        .form-group.full {
            grid-column:
                1 / -1;
        }


        .form-group label {
            margin-bottom: 7px;

            color: #dce7ec;

            font-size: 11px;

            font-weight: 700;
        }


        /* =========================
           INPUTS
        ========================= */

        .form-group input,
        .form-group select {

            width: 100%;

            height: 47px;

            border:
                1px solid
                rgba(255, 255, 255, 0.13);

            border-radius: 10px;

            padding:
                0 13px;

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            font-size: 13px;

            color: #ffffff;

            background:
                rgba(255, 255, 255, 0.06);

            outline: none;

            transition:
                0.25s ease;
        }


        .form-group input::placeholder {
            color: #718592;
        }


        .form-group input:hover,
        .form-group select:hover {

            border-color:
                rgba(94, 234, 212, 0.3);

            background:
                rgba(255, 255, 255, 0.08);
        }


        .form-group input:focus,
        .form-group select:focus {

            border-color:
                #5eead4;

            box-shadow:
                0 0 0 3px
                rgba(94, 234, 212, 0.1);

            transform:
                translateY(-1px);
        }


        .form-group select option {
            background: #06141f;

            color: #ffffff;
        }


        input[type="date"] {
            color-scheme: dark;
        }


        .hint {
            margin-top: 6px;

            color: #718592;

            font-size: 10px;
        }


        /* =========================
           BUTTON AREA
        ========================= */

        .button-area {
            display: grid;

            grid-template-columns:
                140px 1fr;

            gap: 12px;

            margin-top: 25px;
        }


        /* =========================
           RESET BUTTON
        ========================= */

        .reset-btn {
            height: 50px;

            border:
                1px solid
                rgba(255, 255, 255, 0.12);

            border-radius: 12px;

            background:
                rgba(255, 255, 255, 0.05);

            color: #aebec7;

            font-size: 12px;

            font-weight: 700;

            cursor: pointer;

            transition:
                0.3s ease;
        }


        .reset-btn:hover {
            background:
                rgba(255, 255, 255, 0.1);

            color: #ffffff;

            transform:
                translateY(-2px);
        }


        /* =========================
           SUBMIT BUTTON
        ========================= */

        #btnsubmit {
            position: relative;

            overflow: hidden;

            width: 100%;

            height: 50px;

            border: none;

            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    #5eead4,
                    #22d3ee
                );

            color: #06141f;

            font-size: 12px;

            font-weight: 700;

            cursor: pointer;

            box-shadow:
                0 10px 25px
                rgba(34, 211, 238, 0.18);

            transition:
                0.3s ease;
        }


        #btnsubmit::before {
            content: "";

            position: absolute;

            top: 0;
            left: -100%;

            width: 70%;
            height: 100%;

            background:
                rgba(255, 255, 255, 0.25);

            transform:
                skewX(-25deg);

            transition:
                0.5s ease;
        }


        #btnsubmit:hover::before {
            left: 130%;
        }


        #btnsubmit:hover {
            transform:
                translateY(-3px);

            box-shadow:
                0 15px 30px
                rgba(34, 211, 238, 0.25);
        }


        /* =========================
           FOOTER
        ========================= */

        .footer {
            padding: 25px 6%;

            text-align: center;

            background:
                rgba(0, 0, 0, 0.35);

            border-top:
                1px solid
                rgba(94, 234, 212, 0.1);

            color: #718592;

            font-size: 11px;
        }


        .footer strong {
            color: #5eead4;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1000px) {

            .navbar {
                flex-direction: column;

                align-items: flex-start;
            }

            .nav-links {
                justify-content: flex-start;

                width: 100%;
            }

            .bill-layout {
                grid-template-columns:
                    300px 1fr;
            }
        }


        @media (max-width: 850px) {

            .bill-layout {
                grid-template-columns:
                    1fr;
            }

            .side-card {
                max-width: 600px;

                margin: auto;
            }

            .side-image {
                height: 300px;
            }
        }


        @media (max-width: 650px) {

            .hero {
                padding:
                    50px 5% 40px;
            }


            .bill-section {
                padding:
                    20px 5% 50px;
            }


            .form-card {
                padding: 22px;
            }


            .form-grid {
                grid-template-columns:
                    1fr;
            }


            .form-group.full {
                grid-column: auto;
            }


            .button-area {
                grid-template-columns:
                    1fr;
            }


            .reset-btn,
            #btnsubmit {
                width: 100%;
            }


            .feature-list {
                grid-template-columns:
                    1fr;
            }
        }


        @media (max-width: 450px) {

            .nav-links {
                gap: 3px;
            }


            .nav-links a {
                font-size: 10px;

                padding:
                    7px 8px;
            }


            .hero h1 {
                font-size: 38px;
            }


            .form-card {
                padding: 18px;
            }


            .side-content {
                padding: 20px;
            }


            .section-heading h2 {
                font-size: 24px;
            }
        }

    </style>

</head>


<body>


<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar">

    <div class="logo">
        Hospital<span>Care</span>
    </div>


    <div class="nav-links">

        <a href="index.php">
            Home
        </a>

        <a href="about-us.php">
            About Us
        </a>

        <a href="customer.php">
            Customer
        </a>

        <a href="shopping.php">
            Shopping
        </a>

        <a href="management.php">
            Item Management
        </a>

        <a href="bill.php" class="active">
            Bill Management
        </a>

        <a href="purchase.php">
            Purchase &amp; Delivery
        </a>

        <a href="feedback.php">
            Feedback
        </a>

        <a href="login.php">
            Login
        </a>

        <a href="contact-us.php">
            Contact Us
        </a>

    </div>

</nav>


<!-- =========================
     WELCOME BAR
========================= -->

<div class="welcome-bar">

    <marquee
        behavior="scroll"
        direction="left">

        <strong>
            “ Welcome to Hospital Management System ”
        </strong>

    </marquee>

</div>


<!-- =========================
     HERO
========================= -->

<header class="hero">

    <div class="hero-label">
        HOSPITAL MANAGEMENT SYSTEM
    </div>


    <h1>
        Bill <span>Management</span>
    </h1>


    <p>
        Create and manage hospital bills easily
    </p>

</header>


<!-- =========================
     MAIN
========================= -->

<main>

<section class="bill-section">


    <!-- =========================
         SECTION HEADING
    ========================== -->

    <div class="section-heading">

        <h2>
            Manage Hospital <span>Bills</span>
        </h2>

        <p>
            Create accurate customer bills with billing,
            payment and delivery information.
        </p>

    </div>


    <!-- =========================
         BILL LAYOUT
    ========================== -->

    <div class="bill-layout">


        <!-- =========================
             LEFT CARD
        ========================== -->

        <div class="side-card">

            <img
                src="image.jpg"
                alt="Hospital Billing"
                class="side-image"
            >


            <div class="side-content">

                <span class="badge">
                    BILL MANAGEMENT
                </span>


                <h2>
                    Hospital Billing
                </h2>


                <p>
                    Create and organize customer bills with
                    complete billing, payment and delivery
                    information in one place.
                </p>


                <div class="feature-list">

                    <div class="feature">
                        <span class="feature-icon">✓</span>
                        Easy Bill Creation
                    </div>


                    <div class="feature">
                        <span class="feature-icon">✓</span>
                        Customer Details
                    </div>


                    <div class="feature">
                        <span class="feature-icon">✓</span>
                        Payment Tracking
                    </div>


                    <div class="feature">
                        <span class="feature-icon">✓</span>
                        Delivery Details
                    </div>


                    <div class="feature">
                        <span class="feature-icon">✓</span>
                        Accurate Amount
                    </div>


                    <div class="feature">
                        <span class="feature-icon">✓</span>
                        Organized Billing
                    </div>

                </div>

            </div>

        </div>


        <!-- =========================
             FORM CARD
        ========================== -->

        <div class="form-card">


            <h2 class="form-title">
                Create New Bill
            </h2>


            <p class="form-subtitle">
                Enter complete customer billing information below.
                Fields marked with
                <span class="required">*</span>
                are required.
            </p>


            <form
                id="form1"
                name="form1"
                method="post"
                action="db-bill.php"
                onsubmit="return validateBill();"
            >


                <!-- =========================
                     BILL INFORMATION
                ========================== -->

                <div class="section-header">

                    <div class="section-number">
                        01
                    </div>

                    <h3>
                        Bill Information
                    </h3>

                </div>


                <div class="form-grid">


                    <!-- BILL NO -->

                    <div class="form-group">

                        <label for="f1">
                            Bill No.
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="f1"
                            id="f1"
                            placeholder="Enter bill number"
                            autocomplete="off"
                            required
                        >

                    </div>


                    <!-- CUSTOMER ID -->

                    <div class="form-group">

                        <label for="f2">
                            Customer ID
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="f2"
                            id="f2"
                            placeholder="Enter customer ID"
                            autocomplete="off"
                            required
                        >

                    </div>


                    <!-- CUSTOMER NAME -->

                    <div class="form-group">

                        <label for="f3">
                            Customer Name
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="f3"
                            id="f3"
                            placeholder="Enter customer name"
                            autocomplete="name"
                            required
                        >

                    </div>


                    <!-- BILL DATE -->

                    <div class="form-group">

                        <label for="f4">
                            Date of Bill
                            <span class="required">*</span>
                        </label>

                        <input
                            type="date"
                            name="f4"
                            id="f4"
                            required
                        >

                    </div>


                    <!-- AMOUNT -->

                    <div class="form-group">

                        <label for="f5">
                            Amount
                            <span class="required">*</span>
                        </label>

                        <input
                            type="number"
                            name="f5"
                            id="f5"
                            placeholder="Enter amount"
                            min="0.01"
                            step="0.01"
                            required
                        >

                    </div>


                </div>


                <!-- =========================
                     PAYMENT & DELIVERY
                ========================== -->

                <div class="section-header">

                    <div class="section-number">
                        02
                    </div>

                    <h3>
                        Payment &amp; Delivery
                    </h3>

                </div>


                <div class="form-grid">


                    <!-- PAYMENT -->

                    <div class="form-group">

                        <label for="f6">
                            Mode of Payment
                            <span class="required">*</span>
                        </label>

                        <select
                            name="f6"
                            id="f6"
                            required
                        >

                            <option value="">
                                Select payment mode
                            </option>

                            <option value="Cash">
                                Cash
                            </option>

                            <option value="UPI">
                                UPI
                            </option>

                            <option value="Debit Card">
                                Debit Card
                            </option>

                            <option value="Credit Card">
                                Credit Card
                            </option>

                            <option value="Net Banking">
                                Net Banking
                            </option>

                        </select>

                    </div>


                    <!-- DELIVERY DATE -->

                    <div class="form-group">

                        <label for="f7">
                            Date of Delivery
                            <span class="required">*</span>
                        </label>

                        <input
                            type="date"
                            name="f7"
                            id="f7"
                            required
                        >

                    </div>


                </div>


                <!-- =========================
                     BUTTONS
                ========================== -->

                <div class="button-area">


                    <button
                        type="reset"
                        class="reset-btn"
                    >
                        Clear Form
                    </button>


                    <input
                        name="btnsubmit"
                        type="submit"
                        id="btnsubmit"
                        value="Create Bill →"
                    >

                </div>


            </form>

        </div>

    </div>

</section>

</main>


<!-- =========================
     FOOTER
========================= -->

<footer class="footer">

    <p>
        © 2026
        <strong>HospitalCare</strong>.
        All Rights Reserved.
    </p>

</footer>


<!-- =========================
     JAVASCRIPT
========================= -->

<script>


/* =========================
   SET TODAY'S DATE
========================= */

window.addEventListener(
    "load",
    function () {

        const today =
            new Date()
            .toISOString()
            .split("T")[0];


        const billDate =
            document.getElementById("f4");

        const deliveryDate =
            document.getElementById("f7");


        billDate.value = today;

        billDate.max = today;


        deliveryDate.min = today;

    }
);


/* =========================
   UPDATE DELIVERY DATE
========================= */

document
    .getElementById("f4")
    .addEventListener(
        "change",
        function () {

            const billDate =
                this.value;

            const deliveryDate =
                document.getElementById("f7");


            deliveryDate.min =
                billDate;


            if (
                deliveryDate.value &&
                deliveryDate.value < billDate
            ) {

                deliveryDate.value =
                    billDate;

            }

        }
    );


/* =========================
   BILL VALIDATION
========================= */

function validateBill() {


    const billNo =
        document
        .getElementById("f1")
        .value
        .trim();


    const customerId =
        document
        .getElementById("f2")
        .value
        .trim();


    const customerName =
        document
        .getElementById("f3")
        .value
        .trim();


    const billDate =
        document
        .getElementById("f4")
        .value;


    const amount =
        parseFloat(
            document
            .getElementById("f5")
            .value
        );


    const paymentMode =
        document
        .getElementById("f6")
        .value;


    const deliveryDate =
        document
        .getElementById("f7")
        .value;


    /* BILL NUMBER */

    if (billNo === "") {

        alert(
            "Please enter the bill number."
        );

        document
            .getElementById("f1")
            .focus();

        return false;
    }


    /* CUSTOMER ID */

    if (customerId === "") {

        alert(
            "Please enter the customer ID."
        );

        document
            .getElementById("f2")
            .focus();

        return false;
    }


    /* CUSTOMER NAME */

    if (customerName === "") {

        alert(
            "Please enter the customer name."
        );

        document
            .getElementById("f3")
            .focus();

        return false;
    }


    /* BILL DATE */

    if (billDate === "") {

        alert(
            "Please select the date of bill."
        );

        document
            .getElementById("f4")
            .focus();

        return false;
    }


    /* AMOUNT */

    if (
        isNaN(amount) ||
        amount <= 0
    ) {

        alert(
            "Please enter a valid amount greater than 0."
        );

        document
            .getElementById("f5")
            .focus();

        return false;
    }


    /* PAYMENT */

    if (paymentMode === "") {

        alert(
            "Please select a payment mode."
        );

        document
            .getElementById("f6")
            .focus();

        return false;
    }


    /* DELIVERY DATE */

    if (deliveryDate === "") {

        alert(
            "Please select the delivery date."
        );

        document
            .getElementById("f7")
            .focus();

        return false;
    }


    /* DATE COMPARISON */

    if (deliveryDate < billDate) {

        alert(
            "Delivery date cannot be before the bill date."
        );

        document
            .getElementById("f7")
            .focus();

        return false;
    }


    /* CONFIRMATION */

    return confirm(
        "Are you sure you want to create this bill?"
    );

}

</script>


</body>

</html>