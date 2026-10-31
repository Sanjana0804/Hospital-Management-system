<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hospital - Item Management</title>

    <style>

        /* =========================
           RESET
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
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
           MAIN WRAPPER
        ========================= */

        #Main {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }


        /* =========================
           BANNER
        ========================= */

        .banner-wrapper {
            position: relative;
            width: 100%;
            height: 350px;
            overflow: hidden;
        }

        .banner-wrapper img {
            display: block;
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

        .banner-overlay {
            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    90deg,
                    rgba(6, 20, 31, 0.90),
                    rgba(6, 20, 31, 0.35)
                );
        }

        .banner-content {
            position: absolute;

            top: 50%;
            left: 55px;

            transform: translateY(-50%);

            color: #ffffff;
        }

        .banner-small {
            color: #5eead4;

            font-size: 11px;
            font-weight: bold;

            letter-spacing: 4px;

            margin-bottom: 12px;
        }

        .banner-content h1 {
            margin: 0;

            font-size: 42px;
            line-height: 1.2;
        }

        .banner-content h1 span {
            color: #5eead4;
        }

        .banner-content p {
            margin-top: 12px;

            font-size: 14px;
            color: #d1e7ec;
        }


        /* =========================
           NAVIGATION
        ========================= */

        .navigation {
            position: sticky;

            top: 0;
            z-index: 100;

            background: rgba(3, 14, 23, 0.96);

            backdrop-filter: blur(15px);

            border-bottom:
                1px solid
                rgba(94, 234, 212, 0.12);

            padding: 12px 10px;
        }

        .navigation table {
            width: 100%;
            border-collapse: collapse;
        }

        .navigation td {
            padding: 4px;
        }

        .navigation a {
            display: block;

            padding: 11px 8px;

            color: #dbe7eb;

            text-decoration: none;

            font-size: 11px;
            font-weight: bold;

            border-radius: 9px;

            transition:
                background 0.3s ease,
                color 0.3s ease,
                transform 0.3s ease;
        }

        .navigation a:hover {
            background:
                rgba(94, 234, 212, 0.12);

            color: #5eead4;

            transform:
                translateY(-2px);
        }


        /* ACTIVE PAGE */

        .navigation a[href="management.php"] {
            background:
                rgba(94, 234, 212, 0.14);

            color: #5eead4;

            box-shadow:
                inset 0 0 0 1px
                rgba(94, 234, 212, 0.12);
        }


        /* =========================
           WELCOME BAR
        ========================= */

        .welcome-bar {
            height: 34px;

            display: flex;
            align-items: center;

            overflow: hidden;

            background: #031019;

            color: #ffffff;

            border-top:
                1px solid
                rgba(94, 234, 212, 0.12);

            border-bottom:
                1px solid
                rgba(94, 234, 212, 0.12);
        }

        .welcome-bar marquee {
            font-size: 12px;

            letter-spacing: 1px;

            color: #b8d6dc;
        }


        /* =========================
           MAIN CONTENT
        ========================= */

        .main-content {
            padding: 55px 35px 65px;

            background:
                radial-gradient(
                    circle at top right,
                    rgba(20, 184, 166, 0.08),
                    transparent 30%
                ),
                radial-gradient(
                    circle at bottom left,
                    rgba(14, 116, 144, 0.08),
                    transparent 30%
                ),
                #06141f;
        }


        /* =========================
           PAGE HEADING
        ========================= */

        .page-heading {
            text-align: center;

            margin-bottom: 40px;
        }

        .page-tag {
            display: inline-block;

            color: #5eead4;

            font-size: 10px;
            font-weight: bold;

            letter-spacing: 4px;

            margin-bottom: 9px;
        }

        .page-heading h2 {
            margin: 0;

            color: #ffffff;

            font-size: 32px;
        }

        .page-heading p {
            margin: 10px auto 0;

            max-width: 650px;

            color: #8faeb7;

            font-size: 13px;

            line-height: 1.8;
        }

        .heading-line {
            width: 70px;
            height: 3px;

            margin: 17px auto 0;

            border-radius: 20px;

            background:
                linear-gradient(
                    90deg,
                    #14b8a6,
                    #5eead4
                );
        }


        /* =========================
           MANAGEMENT GRID
        ========================= */

        .management-grid {
            display: grid;

            grid-template-columns:
                350px 1fr;

            gap: 25px;

            align-items: stretch;
        }


        /* =========================
           LEFT IMAGE CARD
        ========================= */

        .item-image-card {
            position: relative;

            min-height: 620px;

            overflow: hidden;

            border-radius: 20px;

            background:
                linear-gradient(
                    145deg,
                    rgba(20, 184, 166, 0.20),
                    rgba(6, 20, 31, 0.95)
                );

            border:
                1px solid
                rgba(94, 234, 212, 0.13);

            box-shadow:
                0 20px 50px
                rgba(0, 0, 0, 0.28);

            transition:
                transform 0.35s ease,
                box-shadow 0.35s ease,
                border-color 0.35s ease;
        }

        .item-image-card:hover {
            transform:
                translateY(-5px);

            border-color:
                rgba(94, 234, 212, 0.30);

            box-shadow:
                0 25px 60px
                rgba(0, 0, 0, 0.40);
        }

        .item-image-card::before {
            content: "";

            position: absolute;

            width: 180px;
            height: 180px;

            top: -80px;
            right: -70px;

            border-radius: 50%;

            background:
                rgba(94, 234, 212, 0.10);
        }

        .item-image-card::after {
            content: "";

            position: absolute;

            width: 130px;
            height: 130px;

            bottom: -60px;
            left: -45px;

            border-radius: 50%;

            background:
                rgba(14, 116, 144, 0.18);
        }


        /* =========================
           IMAGE
        ========================= */

        .item-image {
            width: 100%;
            height: 280px;

            display: block;

            object-fit: cover;

            opacity: 0.82;

            transition:
                transform 0.6s ease,
                opacity 0.6s ease;
        }

        .item-image-card:hover .item-image {
            transform:
                scale(1.05);

            opacity: 1;
        }


        /* =========================
           IMAGE CONTENT
        ========================= */

        .image-content {
            position: relative;

            z-index: 2;

            padding: 28px;
        }

        .image-badge {
            display: inline-block;

            padding: 7px 12px;

            border-radius: 30px;

            background:
                rgba(94, 234, 212, 0.10);

            border:
                1px solid
                rgba(94, 234, 212, 0.25);

            color: #5eead4;

            font-size: 9px;
            font-weight: bold;

            letter-spacing: 2px;
        }

        .image-content h3 {
            margin: 18px 0 10px;

            color: #ffffff;

            font-size: 25px;
        }

        .image-content p {
            margin: 0;

            color: #a7c2c9;

            font-size: 12px;

            line-height: 1.8;
        }


        /* =========================
           FEATURES
        ========================= */

        .feature-list {
            margin-top: 20px;

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 10px;
        }

        .feature {
            padding: 11px;

            border-radius: 10px;

            background:
                rgba(255, 255, 255, 0.04);

            border:
                1px solid
                rgba(255, 255, 255, 0.07);

            color: #c9dce1;

            font-size: 10px;

            transition:
                background 0.3s ease,
                transform 0.3s ease,
                border-color 0.3s ease;
        }

        .feature:hover {
            background:
                rgba(94, 234, 212, 0.08);

            border-color:
                rgba(94, 234, 212, 0.18);

            transform:
                translateY(-3px);
        }


        /* =========================
           FORM CARD
        ========================= */

        .item-form {
            position: relative;

            width: 100%;

            padding: 30px;

            background:
                rgba(255, 255, 255, 0.055);

            backdrop-filter: blur(15px);

            border:
                1px solid
                rgba(255, 255, 255, 0.10);

            border-radius: 20px;

            box-shadow:
                0 20px 50px
                rgba(0, 0, 0, 0.25);

            overflow: hidden;
        }

        .item-form::before {
            content: "";

            position: absolute;

            top: 0;
            left: 0;

            width: 100%;
            height: 3px;

            background:
                linear-gradient(
                    90deg,
                    #14b8a6,
                    #5eead4,
                    #0e7490
                );
        }


        /* =========================
           FORM HEADER
        ========================= */

        .form-header {
            margin-bottom: 25px;
        }

        .form-header h3 {
            margin: 0;

            color: #ffffff;

            font-size: 25px;
        }

        .form-header p {
            margin: 7px 0 0;

            color: #8faeb7;

            font-size: 12px;
        }


        /* =========================
           FORM SECTION
        ========================= */

        .form-section {
            margin-bottom: 25px;
        }

        .section-title {
            display: flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 16px;

            color: #5eead4;

            font-size: 12px;

            font-weight: bold;

            text-transform: uppercase;

            letter-spacing: 1.5px;
        }

        .section-title::before {
            content: "";

            width: 4px;
            height: 18px;

            border-radius: 10px;

            background:
                linear-gradient(
                    180deg,
                    #14b8a6,
                    #5eead4
                );
        }


        /* =========================
           FORM GRID
        ========================= */

        .form-grid {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 15px;
        }

        .form-row {
            margin-bottom: 15px;
        }


        /* =========================
           LABEL
        ========================= */

        .form-row label {
            display: block;

            margin-bottom: 7px;

            color: #c9d9de;

            font-size: 11px;

            font-weight: bold;
        }

        .required {
            color: #5eead4;
        }


        /* =========================
           INPUTS
        ========================= */

        .form-row input,
        .form-row textarea,
        .form-row select {
            width: 100%;

            border:
                1px solid
                rgba(255, 255, 255, 0.13);

            border-radius: 10px;

            padding: 0 13px;

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
                border-color 0.25s ease,
                background 0.25s ease,
                box-shadow 0.25s ease,
                transform 0.25s ease;
        }

        .form-row input,
        .form-row select {
            height: 47px;
        }

        .form-row textarea {
            min-height: 110px;

            padding: 12px 13px;

            resize: vertical;
        }

        .form-row input::placeholder,
        .form-row textarea::placeholder {
            color: #708a92;
        }

        .form-row input:hover,
        .form-row textarea:hover,
        .form-row select:hover {
            border-color:
                rgba(94, 234, 212, 0.30);

            background:
                rgba(255, 255, 255, 0.08);
        }

        .form-row input:focus,
        .form-row textarea:focus,
        .form-row select:focus {
            border-color:
                #5eead4;

            background:
                rgba(255, 255, 255, 0.08);

            box-shadow:
                0 0 0 3px
                rgba(94, 234, 212, 0.08);

            transform:
                translateY(-1px);
        }

        .form-row select option {
            background: #06141f;
            color: #ffffff;
        }


        /* PRODUCT ID */

        #f3 {
            color: #5eead4;

            font-weight: bold;

            letter-spacing: 0.5px;

            background:
                rgba(94, 234, 212, 0.07);
        }


        /* HINT */

        .hint {
            display: block;

            margin-top: 6px;

            color: #66848d;

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

            margin-top: 10px;
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

            color: #b9ced3;

            font-size: 13px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.3s ease;
        }

        .reset-btn:hover {
            background:
                rgba(255, 255, 255, 0.09);

            color: #ffffff;

            transform:
                translateY(-2px);
        }


        /* =========================
           SUBMIT BUTTON
        ========================= */

        #btnsubmit {
            width: 100%;

            height: 50px;

            border: none;

            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    #14b8a6,
                    #0e7490
                );

            color: #031019;

            font-size: 14px;

            font-weight: bold;

            letter-spacing: 0.5px;

            cursor: pointer;

            box-shadow:
                0 8px 25px
                rgba(20, 184, 166, 0.20);

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease,
                background 0.3s ease;
        }

        #btnsubmit:hover {
            background:
                linear-gradient(
                    135deg,
                    #5eead4,
                    #14b8a6
                );

            transform:
                translateY(-3px);

            box-shadow:
                0 12px 30px
                rgba(20, 184, 166, 0.30);
        }

        #btnsubmit:active {
            transform:
                translateY(0);
        }


        /* =========================
           VALIDATION
        ========================= */

        .form-row input:invalid:not(:placeholder-shown),
        .form-row textarea:invalid:not(:placeholder-shown) {
            border-color:
                rgba(248, 113, 113, 0.45);
        }


        /* =========================
           FOOTER
        ========================= */

        .footer {
            background:
                rgba(3, 14, 23, 0.98);

            color: #ffffff;

            text-align: center;

            padding: 28px 15px;

            border-top:
                1px solid
                rgba(94, 234, 212, 0.18);
        }

        .footer h3 {
            margin: 0 0 6px;

            color: #5eead4;

            font-size: 17px;
        }

        .footer p {
            margin: 0;

            color: #718b93;

            font-size: 10px;
        }


        /* =========================
           RESPONSIVE 1000px
        ========================= */

        @media screen and (max-width: 1000px) {

            .management-grid {
                grid-template-columns:
                    300px 1fr;
            }

            .main-content {
                padding-left: 25px;
                padding-right: 25px;
            }
        }


        /* =========================
           RESPONSIVE 850px
        ========================= */

        @media screen and (max-width: 850px) {

            .banner-wrapper,
            .banner-wrapper img {
                height: 300px;
            }

            .navigation a {
                font-size: 10px;
                padding: 9px 5px;
            }

            .main-content {
                padding:
                    40px 20px 50px;
            }

            .management-grid {
                grid-template-columns:
                    1fr;
            }

            .item-image-card {
                min-height:
                    auto;
            }

            .item-image {
                height:
                    320px;
            }
        }


        /* =========================
           RESPONSIVE 650px
        ========================= */

        @media screen and (max-width: 650px) {

            .banner-wrapper,
            .banner-wrapper img {
                height:
                    240px;
            }

            .banner-content {
                left:
                    25px;

                right:
                    20px;
            }

            .banner-small {
                font-size:
                    9px;

                letter-spacing:
                    2px;
            }

            .banner-content h1 {
                font-size:
                    28px;
            }

            .banner-content p {
                font-size:
                    12px;
            }

            .navigation table,
            .navigation tbody,
            .navigation tr,
            .navigation td {
                display:
                    block;

                width:
                    100%;
            }

            .navigation a {
                text-align:
                    center;
            }

            .page-heading h2 {
                font-size:
                    26px;
            }

            .page-heading p {
                font-size:
                    12px;
            }

            .item-form {
                padding:
                    23px;

                border-radius:
                    18px;
            }

            .form-grid {
                grid-template-columns:
                    1fr;

                gap:
                    0;
            }

            .item-image {
                height:
                    260px;
            }

            .button-area {
                grid-template-columns:
                    1fr;
            }
        }


        /* =========================
           RESPONSIVE 450px
        ========================= */

        @media screen and (max-width: 450px) {

            .main-content {
                padding:
                    28px 12px 35px;
            }

            .banner-wrapper,
            .banner-wrapper img {
                height:
                    210px;
            }

            .banner-content {
                left:
                    18px;
            }

            .banner-small {
                font-size:
                    8px;
            }

            .banner-content h1 {
                font-size:
                    23px;
            }

            .banner-content p {
                display:
                    none;
            }

            .page-heading h2 {
                font-size:
                    23px;
            }

            .page-heading p {
                font-size:
                    11px;
            }

            .item-form {
                padding:
                    18px;
            }

            .item-form h3 {
                font-size:
                    21px;
            }

            .feature-list {
                grid-template-columns:
                    1fr;
            }

            .image-content {
                padding:
                    20px;
            }
        }

    </style>
</head>


<body>

<table width="100%"
       border="0"
       align="center"
       cellpadding="0"
       cellspacing="0">

<tr>

<td align="center"
    valign="top">


<table width="100%"
       border="0"
       id="Main">


<!-- =========================
     BANNER
========================= -->

<tr>
<td>

<div class="banner-wrapper">

    <img src="banner.jpg"
         alt="Hospital Management System">

    <div class="banner-overlay"></div>

    <div class="banner-content">

        <div class="banner-small">
            HOSPITAL MANAGEMENT SYSTEM
        </div>

        <h1>
            Item <span>Management</span>
        </h1>

        <p>
            Manage and organize hospital items easily
        </p>

    </div>

</div>

</td>
</tr>


<!-- =========================
     NAVIGATION
========================= -->

<tr>
<td>

<div class="navigation">

<table border="0"
       cellpadding="0"
       cellspacing="0">

<tr>

<td align="center">
    <a href="index.php">
        Home
    </a>
</td>

<td align="center">
    <a href="about-us.php">
        About Us
    </a>
</td>

<td align="center">
    <a href="customer.php">
        Customer
    </a>
</td>

<td align="center">
    <a href="shopping.php">
        Shopping
    </a>
</td>

<td align="center">
    <a href="management.php">
        Item Management
    </a>
</td>

<td align="center">
    <a href="bill.php">
        Bill Management
    </a>
</td>

<td align="center">
    <a href="purchase.php">
        Purchase &amp; Delivery
    </a>
</td>

<td align="center">
    <a href="feedback.php">
        Feedback
    </a>
</td>

<td align="center">
    <a href="login.php">
        Login
    </a>
</td>

<td align="center">
    <a href="contact-us.php">
        Contact Us
    </a>
</td>

</tr>

</table>

</div>

</td>
</tr>


<!-- =========================
     WELCOME BAR
========================= -->

<tr>
<td>

<div class="welcome-bar">

<marquee behavior="scroll"
         direction="left">

<strong>
    “ Welcome to Hospital Management System ”
</strong>

</marquee>

</div>

</td>
</tr>


<!-- =========================
     MAIN CONTENT
========================= -->

<tr>
<td>

<div class="main-content">


<!-- PAGE HEADING -->

<div class="page-heading">

    <div class="page-tag">
        HOSPITAL INVENTORY
    </div>

    <h2>
        Manage Hospital Items
    </h2>

    <p>
        Add and organize medicines, medical equipment,
        surgical supplies and other hospital items
        through our simple management system.
    </p>

    <div class="heading-line"></div>

</div>


<!-- =========================
     MANAGEMENT GRID
========================= -->

<div class="management-grid">


<!-- =========================
     LEFT IMAGE CARD
========================= -->

<div class="item-image-card">

    <img src="image.jpg"
         class="item-image"
         alt="Hospital Items">

    <div class="image-content">

        <span class="image-badge">
            ITEM MANAGEMENT
        </span>

        <h3>
            Hospital Inventory
        </h3>

        <p>
            Keep your hospital products organized,
            updated and easy to manage. Add complete
            item information using the form.
        </p>

        <div class="feature-list">

            <div class="feature">
                ✓ Easy Item Entry
            </div>

            <div class="feature">
                ✓ Automatic Product ID
            </div>

            <div class="feature">
                ✓ Price Management
            </div>

            <div class="feature">
                ✓ Discount Details
            </div>

            <div class="feature">
                ✓ Product Description
            </div>

            <div class="feature">
                ✓ Organized Inventory
            </div>

        </div>

    </div>

</div>


<!-- =========================
     FORM CARD
========================= -->

<div class="item-form">

<div class="form-header">

    <h3>
        Add New Item
    </h3>

    <p>
        Enter complete details of the hospital item below.
    </p>

</div>


<form id="form1"
      name="form1"
      method="post"
      action="db-management.php"
      onsubmit="return validateItem();">


<!-- =========================
     PRODUCT INFORMATION
========================= -->

<div class="form-section">

<div class="section-title">
    Product Information
</div>


<div class="form-grid">


<!-- CATEGORY -->

<div class="form-row">

<label for="f1">

    Category

    <span class="required">*</span>

</label>

<select name="f1"
        id="f1"
        onchange="updateTypes();"
        required>

    <option value="">
        Select category
    </option>

    <option value="Medicines">
        Medicines
    </option>

    <option value="Medical Equipment">
        Medical Equipment
    </option>

    <option value="Surgical Supplies">
        Surgical Supplies
    </option>

    <option value="Diagnostic Equipment">
        Diagnostic Equipment
    </option>

    <option value="Laboratory Supplies">
        Laboratory Supplies
    </option>

    <option value="Emergency Supplies">
        Emergency Supplies
    </option>

    <option value="First Aid">
        First Aid
    </option>

    <option value="Personal Care">
        Personal Care
    </option>

    <option value="Hospital Furniture">
        Hospital Furniture
    </option>

    <option value="Injections">
        Injections
    </option>

</select>

</div>


<!-- TYPE -->

<div class="form-row">

<label for="f2">

    Type

    <span class="required">*</span>

</label>

<select name="f2"
        id="f2"
        onchange="updateProductId();"
        required
        disabled>

    <option value="">
        Select type
    </option>

</select>

</div>


<!-- PRODUCT ID -->

<div class="form-row">

<label for="f3">

    Product ID

    <span class="required">*</span>

</label>

<input
    type="text"
    name="f3"
    id="f3"
    placeholder="Auto generated"
    readonly
    required>

<span class="hint">
    Product ID is generated automatically.
</span>

</div>


<!-- AMOUNT -->

<div class="form-row">

<label for="f4">

    Amount

    <span class="required">*</span>

</label>

<input
    type="number"
    name="f4"
    id="f4"
    placeholder="Enter amount"
    min="0.01"
    step="0.01"
    required>

</div>


<!-- IMAGE -->

<div class="form-row">

<label for="f5">

    Image Name

    <span class="required">*</span>

</label>

<input
    type="text"
    name="f5"
    id="f5"
    placeholder="e.g. microscope.jpg"
    autocomplete="off"
    required>

<span class="hint">
    Enter the image file name.
</span>

</div>


<!-- DISCOUNT -->

<div class="form-row">

<label for="f6">

    Discount

    <span class="required">*</span>

</label>

<input
    type="text"
    name="f6"
    id="f6"
    placeholder="e.g. 10%"
    autocomplete="off"
    required>

<span class="hint">
    Enter discount from 0% to 100%.
</span>

</div>

</div>

</div>


<!-- =========================
     DESCRIPTION
========================= -->

<div class="form-section">

<div class="section-title">
    Item Description
</div>

<div class="form-row">

<label for="f7">

    Description

    <span class="required">*</span>

</label>

<textarea
    name="f7"
    id="f7"
    placeholder="Enter product description"
    required></textarea>

</div>

</div>


<!-- =========================
     BUTTONS
========================= -->

<div class="button-area">

<button
    type="reset"
    class="reset-btn"
    onclick="resetManagementForm();">

    Clear Form

</button>

<input
    name="btnsubmit"
    type="submit"
    id="btnsubmit"
    value="Add Item →">

</div>


</form>

</div>

</div>

</div>

</td>
</tr>


<!-- =========================
     FOOTER
========================= -->

<tr>
<td>

<div class="footer">

<h3>
    Hospital Management System
</h3>

<p>
    All Rights Reserved
</p>

</div>

</td>
</tr>


</table>

</td>

</tr>

</table>


<!-- =========================
     JAVASCRIPT
========================= -->

<script>


/* =========================
   TYPE DATA
========================= */

const typeData = {

    "Medicines": [
        "Tablets",
        "Capsules",
        "Syrup",
        "Injection",
        "Cream",
        "Ointment",
        "Drops"
    ],

    "Medical Equipment": [
        "Wheelchair",
        "Patient Monitor",
        "Oxygen Concentrator",
        "BP Monitor",
        "ECG Machine",
        "Nebulizer"
    ],

    "Surgical Supplies": [
        "Surgical Instrument",
        "Surgical Gloves",
        "Surgical Mask",
        "Surgical Blade",
        "Sutures"
    ],

    "Diagnostic Equipment": [
        "Diagnostic Device",
        "X-Ray Machine",
        "Ultrasound Machine",
        "CT Scan",
        "Blood Analyzer"
    ],

    "Laboratory Supplies": [
        "Test Tubes",
        "Microscope",
        "Petri Dish",
        "Lab Gloves",
        "Sample Container"
    ],

    "Emergency Supplies": [
        "Emergency Kit",
        "Oxygen Mask",
        "Emergency Bandage",
        "First Response Kit"
    ],

    "First Aid": [
        "Bandage",
        "Cotton",
        "Antiseptic",
        "First Aid Kit",
        "Gauze"
    ],

    "Personal Care": [
        "Hand Sanitizer",
        "Face Mask",
        "Hand Gloves",
        "Soap",
        "Disinfectant"
    ],

    "Hospital Furniture": [
        "Hospital Bed",
        "Examination Table",
        "Patient Chair",
        "Bedside Locker",
        "IV Stand"
    ],

    "Injections": [
        "Injection"
    ]

};


/* =========================
   CATEGORY PREFIX
========================= */

const categoryPrefix = {

    "Medicines": "MED",
    "Medical Equipment": "EQU",
    "Surgical Supplies": "SUR",
    "Diagnostic Equipment": "DIA",
    "Laboratory Supplies": "LAB",
    "Emergency Supplies": "EMR",
    "First Aid": "FAD",
    "Personal Care": "PER",
    "Hospital Furniture": "FUR",
    "Injections": "INJ"

};


/* =========================
   UPDATE TYPE
========================= */

function updateTypes() {

    const category =
        document.getElementById("f1").value;

    const typeSelect =
        document.getElementById("f2");

    typeSelect.innerHTML =
        '<option value="">Select type</option>';

    document.getElementById("f3").value = "";

    if (category && typeData[category]) {

        typeData[category].forEach(function(type) {

            const option =
                document.createElement("option");

            option.value = type;

            option.textContent = type;

            typeSelect.appendChild(option);

        });

        typeSelect.disabled = false;

    } else {

        typeSelect.disabled = true;

    }

}


/* =========================
   AUTOMATIC PRODUCT ID
========================= */

function updateProductId() {

    const category =
        document.getElementById("f1").value;

    const type =
        document.getElementById("f2").value;

    const productId =
        document.getElementById("f3");


    if (
        category &&
        type &&
        categoryPrefix[category]
    ) {

        const prefix =
            categoryPrefix[category];

        const typeCode =
            type
                .replace(/[^a-zA-Z]/g, "")
                .substring(0, 3)
                .toUpperCase();

        productId.value =
            prefix +
            "-" +
            typeCode +
            "-001";

    } else {

        productId.value = "";

    }

}


/* =========================
   VALIDATE ITEM
========================= */

function validateItem() {

    const category =
        document.getElementById("f1").value.trim();

    const type =
        document.getElementById("f2").value.trim();

    const productId =
        document.getElementById("f3").value.trim();

    const amount =
        parseFloat(
            document.getElementById("f4").value
        );

    const image =
        document.getElementById("f5").value.trim();

    const discount =
        document.getElementById("f6").value.trim();

    const description =
        document.getElementById("f7").value.trim();


    if (category === "") {

        alert("Please select a category.");

        document.getElementById("f1").focus();

        return false;
    }


    if (type === "") {

        alert("Please select a type.");

        document.getElementById("f2").focus();

        return false;
    }


    if (productId === "") {

        alert("Product ID could not be generated.");

        return false;
    }


    if (
        isNaN(amount) ||
        amount <= 0
    ) {

        alert(
            "Please enter a valid amount greater than 0."
        );

        document.getElementById("f4").focus();

        return false;
    }


    if (image === "") {

        alert(
            "Please enter the image name."
        );

        document.getElementById("f5").focus();

        return false;
    }


    let discountValue =
        discount
            .replace("%", "")
            .trim();

    discountValue =
        parseFloat(discountValue);


    if (
        isNaN(discountValue) ||
        discountValue < 0 ||
        discountValue > 100
    ) {

        alert(
            "Discount must be between 0% and 100%."
        );

        document.getElementById("f6").focus();

        return false;
    }


    if (description.length < 5) {

        alert(
            "Please enter a proper item description."
        );

        document.getElementById("f7").focus();

        return false;
    }


    return confirm(
        "Are you sure you want to add this item?"
    );

}


/* =========================
   RESET FORM
========================= */

function resetManagementForm() {

    setTimeout(function() {

        document.getElementById("f2").innerHTML =
            '<option value="">Select type</option>';

        document.getElementById("f2").disabled =
            true;

        document.getElementById("f3").value =
            "";

    }, 10);

}

</script>

</body>

</html>