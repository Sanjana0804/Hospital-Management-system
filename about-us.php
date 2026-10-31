<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Hospital - About Us</title>

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

            font-family:
                Arial,
                Helvetica,
                sans-serif;

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

            transform:
                translateY(-50%);

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

            background:
                rgba(3, 14, 23, 0.96);

            backdrop-filter:
                blur(15px);

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

        .navigation a[href="about-us.php"] {

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

            padding:
                55px 35px 65px;

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

        .page-heading h2 span {

            color: #5eead4;
        }

        .page-heading p {

            margin:
                10px auto 0;

            max-width: 680px;

            color: #8faeb7;

            font-size: 13px;

            line-height: 1.8;
        }

        .heading-line {

            width: 70px;

            height: 3px;

            margin:
                17px auto 0;

            border-radius: 20px;

            background:

                linear-gradient(
                    90deg,
                    #14b8a6,
                    #5eead4
                );
        }


        /* =========================
           ABOUT GRID
        ========================= */

        .about-grid {

            display: grid;

            grid-template-columns:
                350px 1fr;

            gap: 25px;

            align-items: stretch;
        }


        /* =========================
           LEFT CARD
        ========================= */

        .about-image-card {

            position: relative;

            min-height: 560px;

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

        .about-image-card:hover {

            transform:
                translateY(-5px);

            border-color:
                rgba(94, 234, 212, 0.30);

            box-shadow:

                0 25px 60px
                rgba(0, 0, 0, 0.40);
        }

        .about-image-card::before {

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

        .about-image-card::after {

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
           ABOUT IMAGE
        ========================= */

        .about-image {

            width: 100%;

            height: 280px;

            display: block;

            object-fit: cover;

            opacity: 0.82;

            transition:

                transform 0.6s ease,
                opacity 0.6s ease;
        }

        .about-image-card:hover
        .about-image {

            transform:
                scale(1.05);

            opacity: 1;
        }


        /* =========================
           LEFT CONTENT
        ========================= */

        .image-content {

            position: relative;

            z-index: 2;

            padding: 28px;
        }

        .image-badge {

            display: inline-block;

            padding:
                7px 12px;

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

            margin:
                18px 0 10px;

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
           RIGHT CONTENT CARD
        ========================= */

        .about-content-card {

            position: relative;

            width: 100%;

            padding: 30px;

            background:
                rgba(255, 255, 255, 0.055);

            backdrop-filter:
                blur(15px);

            border:
                1px solid
                rgba(255, 255, 255, 0.10);

            border-radius: 20px;

            box-shadow:

                0 20px 50px
                rgba(0, 0, 0, 0.25);

            overflow: hidden;
        }

        .about-content-card::before {

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
           CONTENT HEADER
        ========================= */

        .content-header {

            margin-bottom: 25px;
        }

        .content-header h3 {

            margin: 0;

            color: #ffffff;

            font-size: 25px;
        }

        .content-header h3 span {

            color: #5eead4;
        }

        .content-header p {

            margin:
                7px 0 0;

            color: #8faeb7;

            font-size: 12px;
        }


        /* =========================
           TEXT SECTIONS
        ========================= */

        .about-section {

            margin-bottom: 24px;

            padding-bottom: 22px;

            border-bottom:
                1px solid
                rgba(255, 255, 255, 0.07);
        }

        .about-section:last-child {

            border-bottom: none;

            margin-bottom: 0;

            padding-bottom: 0;
        }

        .section-title {

            display: flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 12px;

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

        .about-section p {

            color: #a7c2c9;

            font-size: 13px;

            line-height: 1.9;

            margin-bottom: 12px;
        }

        .about-section p:last-child {

            margin-bottom: 0;
        }

        .about-section strong {

            color: #ffffff;
        }


        /* =========================
           INFO BOXES
        ========================= */

        .info-grid {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 12px;

            margin-top: 18px;
        }

        .info-box {

            padding: 17px;

            border-radius: 12px;

            background:
                rgba(255, 255, 255, 0.04);

            border:
                1px solid
                rgba(255, 255, 255, 0.07);

            transition:

                background 0.3s ease,
                transform 0.3s ease,
                border-color 0.3s ease;
        }

        .info-box:hover {

            background:
                rgba(94, 234, 212, 0.07);

            border-color:
                rgba(94, 234, 212, 0.20);

            transform:
                translateY(-3px);
        }

        .info-box h4 {

            color: #5eead4;

            font-size: 13px;

            margin-bottom: 7px;
        }

        .info-box p {

            color: #8faeb7;

            font-size: 11px;

            line-height: 1.6;

            margin: 0;
        }


        /* =========================
           PROJECT NOTE
        ========================= */

        .project-note {

            padding: 18px;

            margin-top: 18px;

            border-radius: 12px;

            background:
                rgba(20, 184, 166, 0.06);

            border:
                1px solid
                rgba(94, 234, 212, 0.12);
        }

        .project-note p {

            margin: 0;

            color: #a7c2c9;

            font-size: 11px;

            line-height: 1.8;
        }


        /* =========================
           FOOTER
        ========================= */

        .footer {

            background:
                rgba(3, 14, 23, 0.98);

            color: #ffffff;

            text-align: center;

            padding:
                28px 15px;

            border-top:
                1px solid
                rgba(94, 234, 212, 0.18);
        }

        .footer h3 {

            margin:
                0 0 6px;

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

            .about-grid {

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

                padding:
                    9px 5px;
            }

            .main-content {

                padding:
                    40px 20px 50px;
            }

            .about-grid {

                grid-template-columns:
                    1fr;
            }

            .about-image-card {

                min-height:
                    auto;
            }

            .about-image {

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

            .about-content-card {

                padding:
                    23px;

                border-radius:
                    18px;
            }

            .info-grid {

                grid-template-columns:
                    1fr;
            }

            .about-image {

                height:
                    260px;
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

            .about-content-card {

                padding:
                    18px;
            }

            .about-content-card h3 {

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
            About <span>Us</span>
        </h1>

        <p>
            Learn more about our hospital management project
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


<!-- =========================
     PAGE HEADING
========================= -->

<div class="page-heading">

    <div class="page-tag">
        WHO WE ARE
    </div>

    <h2>
        About Our <span>Project</span>
    </h2>

    <p>
        A simple and organized system designed to manage
        scientific materials, hospital items, customers,
        purchases, billing and other essential operations.
    </p>

    <div class="heading-line"></div>

</div>


<!-- =========================
     ABOUT GRID
========================= -->

<div class="about-grid">


<!-- =========================
     LEFT IMAGE CARD
========================= -->

<div class="about-image-card">

    <img src="image.jpg"
         class="about-image"
         alt="Hospital Management">

    <div class="image-content">

        <span class="image-badge">
            ABOUT THE PROJECT
        </span>

        <h3>
            Hospital Management
        </h3>

        <p>
            This project provides a structured way to
            manage hospital and scientific material
            store operations through a simple web-based
            management system.
        </p>


        <div class="feature-list">

            <div class="feature">
                ✓ Easy Management
            </div>

            <div class="feature">
                ✓ Item Organization
            </div>

            <div class="feature">
                ✓ Customer Records
            </div>

            <div class="feature">
                ✓ Shopping Management
            </div>

            <div class="feature">
                ✓ Billing System
            </div>

            <div class="feature">
                ✓ Feedback Support
            </div>

        </div>

    </div>

</div>


<!-- =========================
     RIGHT CONTENT
========================= -->

<div class="about-content-card">


<div class="content-header">

    <h3>
        About <span>Us</span>
    </h3>

    <p>
        Understanding the purpose behind this project
    </p>

</div>


<!-- PROJECT -->

<div class="about-section">

    <div class="section-title">
        Project Overview
    </div>

    <p>
        This project work is undertaken in the context
        of partial fulfillment of the
        <strong>IGNOU Degree</strong>.
    </p>

    <p>
        The project,
        <strong>“Shopping System”</strong>,
        is designed for the operations of a
        Scientific Material Store. The system can also
        be adapted for Mega Marts and stores that provide
        different types of products under one roof.
    </p>

</div>


<!-- PURPOSE -->

<div class="about-section">

    <div class="section-title">
        Our Purpose
    </div>

    <p>
        The main purpose of this system is to make
        product management easier and more organized.
        It provides separate sections for customers,
        shopping, item management, billing, purchase
        and delivery, feedback and contact information.
    </p>

</div>


<!-- FEATURES -->

<div class="about-section">

    <div class="section-title">
        System Features
    </div>


    <div class="info-grid">

        <div class="info-box">

            <h4>
                Item Management
            </h4>

            <p>
                Add and organize products with
                category, type, price, discount
                and description.
            </p>

        </div>


        <div class="info-box">

            <h4>
                Customer Management
            </h4>

            <p>
                Maintain important customer
                information in an organized way.
            </p>

        </div>


        <div class="info-box">

            <h4>
                Shopping System
            </h4>

            <p>
                Record shopping information
                and product purchase details.
            </p>

        </div>


        <div class="info-box">

            <h4>
                Billing System
            </h4>

            <p>
                Manage bill information,
                payment mode and delivery details.
            </p>

        </div>

    </div>

</div>


<!-- FUTURE -->

<div class="about-section">

    <div class="section-title">
        Future Scope
    </div>

    <div class="project-note">

        <p>
            This system can be hosted on a domain in the
            future with an appropriate domain name such as
            <strong>scientific-tools.com</strong> or another
            suitable domain. More features can also be
            added as the system grows.
        </p>

    </div>

</div>


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


</body>

</html>