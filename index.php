<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hospital Management System</title>


    <style>

        @import url("style-css.css");


        /* =========================
           GLOBAL
        ========================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            color: #e6f7f5;

            background:
                radial-gradient(
                    circle at top left,
                    rgba(20, 184, 166, 0.12),
                    transparent 35%
                ),
                radial-gradient(
                    circle at bottom right,
                    rgba(14, 116, 144, 0.12),
                    transparent 35%
                ),
                #06141f;
        }

        #Main {
            width: 100%;
            max-width: 1200px;
            margin: auto;
            background: #06141f;
            min-height: 100vh;
        }


        /* =========================
           BANNER
        ========================== */

        .banner-wrapper {
            position: relative;
            width: 100%;
            height: 350px;
            overflow: hidden;
        }

        .banner-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .banner-wrapper::after {
            content: "";
            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    90deg,
                    rgba(3, 14, 23, 0.94),
                    rgba(3, 14, 23, 0.45),
                    rgba(3, 14, 23, 0.82)
                );
        }


        .banner-content {
            position: absolute;
            z-index: 2;

            top: 50%;
            left: 7%;

            transform: translateY(-50%);
        }

        .banner-label {
            color: #5eead4;

            font-size: 11px;
            font-weight: 700;

            letter-spacing: 5px;

            margin-bottom: 12px;
        }

        .banner-content h1 {
            color: #ffffff;

            font-size: 52px;
            line-height: 1.1;

            margin-bottom: 12px;
        }

        .banner-content h1 span {
            color: #5eead4;
        }

        .banner-content p {
            color: #b7c9d1;

            font-size: 14px;
            line-height: 1.7;

            max-width: 570px;
        }


        /* =========================
           NAVBAR
        ========================== */

        .navigation {
            position: sticky;
            top: 0;
            z-index: 1000;

            background: rgba(3, 14, 23, 0.96);

            backdrop-filter: blur(12px);

            border-bottom:
                1px solid rgba(94, 234, 212, 0.12);
        }

        .navigation table {
            width: 100%;
            border-collapse: collapse;
        }

        .navigation td {
            padding: 0;
        }

        .navigation a {
            display: block;

            padding: 17px 7px;

            color: #b7c9d1;

            text-decoration: none;

            text-align: center;

            font-size: 11px;
            font-weight: 600;

            white-space: nowrap;

            transition: all 0.3s ease;
        }

        .navigation a:hover {
            color: #5eead4;

            background:
                rgba(94, 234, 212, 0.08);

            transform: translateY(-2px);
        }

        .navigation a.active {
            color: #06141f;

            background:
                linear-gradient(
                    135deg,
                    #14b8a6,
                    #5eead4
                );
        }


        /* =========================
           WELCOME BAR
        ========================== */

        .welcome-bar {
            height: 38px;

            display: flex;
            align-items: center;

            background: #031019;

            border-bottom:
                1px solid rgba(94, 234, 212, 0.1);

            overflow: hidden;
        }

        .welcome-bar marquee {
            color: #ffffff;

            font-size: 12px;

            letter-spacing: 1px;
        }

        .welcome-bar strong {
            color: #5eead4;
        }


        /* =========================
           HOME CONTENT
        ========================== */

        .main-content {
            padding: 70px 55px 90px;

            background:
                radial-gradient(
                    circle at top right,
                    rgba(20, 184, 166, 0.08),
                    transparent 30%
                ),
                #06141f;
        }


        /* =========================
           PAGE HEADING
        ========================== */

        .page-heading {
            max-width: 760px;

            margin: 0 auto 55px;

            text-align: center;
        }

        .page-tag {
            color: #5eead4;

            font-size: 11px;

            font-weight: 700;

            letter-spacing: 4px;

            margin-bottom: 12px;
        }

        .page-heading h2 {
            color: #ffffff;

            font-size: 42px;

            margin-bottom: 15px;
        }

        .page-heading h2 span {
            color: #5eead4;
        }

        .page-heading p {
            color: #91a7b2;

            font-size: 14px;

            line-height: 1.8;
        }

        .heading-line {
            width: 70px;
            height: 3px;

            margin: 22px auto 0;

            border-radius: 10px;

            background:
                linear-gradient(
                    90deg,
                    #14b8a6,
                    #5eead4
                );
        }


        /* =========================
           HOME GRID
        ========================== */

        .home-grid {
            max-width: 1050px;

            margin: auto;

            display: grid;

            grid-template-columns: 350px 1fr;

            gap: 30px;

            align-items: stretch;
        }


        /* =========================
           IMAGE CARD
        ========================== */

        .image-card {
            position: relative;

            overflow: hidden;

            border-radius: 20px;

            background: rgba(10, 29, 42, 0.9);

            border:
                1px solid rgba(94, 234, 212, 0.15);

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.3);

            transition: all 0.35s ease;
        }

        .image-card:hover {
            transform: translateY(-7px);

            border-color:
                rgba(94, 234, 212, 0.45);

            box-shadow:
                0 25px 60px rgba(0, 0, 0, 0.4);
        }

        .image-card img {
            width: 100%;
            height: 100%;

            min-height: 450px;

            object-fit: cover;

            display: block;

            transition:
                transform 0.5s ease;
        }

        .image-card:hover img {
            transform: scale(1.05);
        }

        .image-overlay {
            position: absolute;

            inset: 0;

            display: flex;

            align-items: flex-end;

            padding: 28px;

            background:
                linear-gradient(
                    transparent 35%,
                    rgba(3, 14, 23, 0.94)
                );
        }

        .image-overlay-content {
            width: 100%;
        }

        .image-badge {
            display: inline-block;

            padding: 6px 10px;

            border-radius: 20px;

            background:
                rgba(94, 234, 212, 0.1);

            border:
                1px solid rgba(94, 234, 212, 0.25);

            color: #5eead4;

            font-size: 9px;

            letter-spacing: 2px;

            font-weight: 700;

            margin-bottom: 12px;
        }

        .image-overlay h3 {
            color: #ffffff;

            font-size: 24px;

            margin-bottom: 7px;
        }

        .image-overlay p {
            color: #b7c9d1;

            font-size: 12px;

            line-height: 1.7;
        }


        /* =========================
           CONTENT CARD
        ========================== */

        .content-card {
            padding: 35px;

            background:
                rgba(10, 29, 42, 0.72);

            border:
                1px solid rgba(94, 234, 212, 0.14);

            border-radius: 20px;

            backdrop-filter: blur(10px);

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.25);
        }

        .content-card h3 {
            color: #ffffff;

            font-size: 28px;

            margin-bottom: 13px;
        }

        .content-card h3 span {
            color: #5eead4;
        }

        .content-card > p {
            color: #91a7b2;

            font-size: 13px;

            line-height: 1.9;

            margin-bottom: 28px;
        }


        /* =========================
           INFORMATION BOXES
        ========================== */

        .info-grid {
            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 14px;

            margin-bottom: 28px;
        }

        .info-box {
            padding: 20px;

            background:
                rgba(3, 14, 23, 0.65);

            border:
                1px solid rgba(94, 234, 212, 0.1);

            border-radius: 13px;

            transition: all 0.3s ease;
        }

        .info-box:hover {
            transform: translateY(-4px);

            border-color:
                rgba(94, 234, 212, 0.35);

            background:
                rgba(20, 184, 166, 0.06);
        }

        .info-number {
            color: #5eead4;

            font-size: 10px;

            letter-spacing: 2px;

            margin-bottom: 9px;
        }

        .info-box h4 {
            color: #ffffff;

            font-size: 14px;

            margin-bottom: 7px;
        }

        .info-box p {
            color: #718894;

            font-size: 11px;

            line-height: 1.7;
        }


        /* =========================
           BUTTON AREA
        ========================== */

        .button-area {
            display: flex;

            flex-wrap: wrap;

            gap: 13px;

            padding-top: 25px;

            border-top:
                1px solid rgba(255, 255, 255, 0.07);
        }

        .home-btn {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            min-width: 190px;

            padding: 13px 20px;

            border-radius: 8px;

            text-decoration: none;

            font-size: 11px;

            font-weight: 800;

            letter-spacing: 0.5px;

            transition: all 0.3s ease;
        }

        .primary-btn {
            color: #06141f;

            background:
                linear-gradient(
                    135deg,
                    #14b8a6,
                    #5eead4
                );
        }

        .secondary-btn {
            color: #5eead4;

            background:
                rgba(94, 234, 212, 0.06);

            border:
                1px solid rgba(94, 234, 212, 0.25);
        }

        .home-btn:hover {
            transform: translateY(-3px);

            box-shadow:
                0 10px 25px rgba(20, 184, 166, 0.18);
        }

        .secondary-btn:hover {
            background:
                rgba(94, 234, 212, 0.12);
        }


        /* =========================
           FOOTER
        ========================== */

        footer {
            padding: 28px 20px;

            text-align: center;

            background: #030e17;

            border-top:
                1px solid rgba(94, 234, 212, 0.12);
        }

        footer h3 {
            color: #ffffff;

            font-size: 16px;

            margin-bottom: 7px;
        }

        footer h3 span {
            color: #5eead4;
        }

        footer p {
            color: #617984;

            font-size: 11px;

            letter-spacing: 1px;
        }


        /* =========================
           TABLET
        ========================== */

        @media (max-width: 1000px) {

            .navigation {
                overflow-x: auto;
            }

            .navigation table {
                min-width: 950px;
            }

            .main-content {
                padding: 60px 35px 75px;
            }

            .home-grid {
                grid-template-columns: 300px 1fr;
            }

            .image-card img {
                min-height: 430px;
            }

        }


        /* =========================
           MOBILE
        ========================== */

        @media (max-width: 850px) {

            .banner-wrapper {
                height: 300px;
            }

            .banner-content {
                left: 6%;
            }

            .banner-content h1 {
                font-size: 42px;
            }

            .home-grid {
                grid-template-columns: 1fr;

                max-width: 650px;
            }

            .image-card img {
                min-height: 350px;

                height: 350px;
            }

        }


        @media (max-width: 650px) {

            .banner-wrapper {
                height: 240px;
            }

            .banner-content h1 {
                font-size: 34px;
            }

            .banner-label {
                font-size: 9px;

                letter-spacing: 3px;
            }

            .banner-content p {
                font-size: 12px;

                max-width: 90%;
            }

            .main-content {
                padding: 45px 20px 60px;
            }

            .page-heading {
                margin-bottom: 40px;
            }

            .page-heading h2 {
                font-size: 34px;
            }

            .content-card {
                padding: 25px 20px;
            }

            .content-card h3 {
                font-size: 24px;
            }

            .image-card img {
                height: 280px;

                min-height: 280px;
            }

            .info-grid {
                grid-template-columns: 1fr 1fr;
            }

            .button-area {
                flex-direction: column;
            }

            .home-btn {
                width: 100%;
            }

        }


        /* =========================
           SMALL MOBILE
        ========================== */

        @media (max-width: 450px) {

            .banner-wrapper {
                height: 210px;
            }

            .banner-content {
                left: 5%;
            }

            .banner-content h1 {
                font-size: 28px;
            }

            .banner-content p {
                font-size: 11px;
            }

            .main-content {
                padding: 35px 15px 50px;
            }

            .page-heading h2 {
                font-size: 29px;
            }

            .page-heading p {
                font-size: 12px;
            }

            .image-card img {
                height: 240px;

                min-height: 240px;
            }

            .image-overlay {
                padding: 20px;
            }

            .image-overlay h3 {
                font-size: 20px;
            }

            .content-card {
                padding: 20px 16px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .content-card > p {
                font-size: 12px;
            }

        }

    </style>

</head>


<body>


<div id="Main">


    <!-- =========================
         BANNER
    ========================== -->

    <div class="banner-wrapper">

        <img
            src="banner.jpg"
            alt="Hospital Management System"
        >

        <div class="banner-content">

            <div class="banner-label">
                HOSPITAL MANAGEMENT SYSTEM
            </div>

            <h1>
                Welcome <span>Home</span>
            </h1>

            <p>
                A simple and efficient system for managing
                customers, products, shopping, billing,
                purchases and deliveries.
            </p>

        </div>

    </div>


    <!-- =========================
         NAVIGATION
    ========================== -->

    <div class="navigation">

        <table>

            <tr>

                <td>
                    <a href="index.php" class="active">
                        Home
                    </a>
                </td>

                <td>
                    <a href="about-us.php">
                        About Us
                    </a>
                </td>

                <td>
                    <a href="customer.php">
                        Customer
                    </a>
                </td>

                <td>
                    <a href="shopping.php">
                        Shopping
                    </a>
                </td>

                <td>
                    <a href="management.php">
                        Item Management
                    </a>
                </td>

                <td>
                    <a href="bill.php">
                        Bill Management
                    </a>
                </td>

                <td>
                    <a href="purchase.php">
                        Purchase &amp; Delivery
                    </a>
                </td>

                <td>
                    <a href="feedback.php">
                        Feedback
                    </a>
                </td>

                <td>
                    <a href="login.php">
                        Login
                    </a>
                </td>

                <td>
                    <a href="contact-us.php">
                        Contact Us
                    </a>
                </td>

            </tr>

        </table>

    </div>


    <!-- =========================
         WELCOME BAR
    ========================== -->

    <div class="welcome-bar">

        <marquee
            behavior="scroll"
            direction="left"
        >

            <strong>“</strong>

            Welcome to Hospital Management System

            <strong>”</strong>

        </marquee>

    </div>


    <!-- =========================
         MAIN CONTENT
    ========================== -->

    <main class="main-content">


        <!-- PAGE HEADING -->

        <div class="page-heading">

            <div class="page-tag">
                OUR SHOPPING SYSTEM
            </div>

            <h2>
                Welcome <span>Home</span>
            </h2>

            <p>
                Manage your scientific products, customers,
                shopping details, billing and deliveries
                through one organized system.
            </p>

            <div class="heading-line"></div>

        </div>


        <!-- =========================
             HOME GRID
        ========================== -->

        <div class="home-grid">


            <!-- =========================
                 IMAGE
            ========================== -->

            <div class="image-card">

                <img
                    src="image.jpg"
                    alt="Shopping System"
                >

                <div class="image-overlay">

                    <div class="image-overlay-content">

                        <span class="image-badge">
                            SHOPPING SYSTEM
                        </span>

                        <h3>
                            Everything Under One Roof
                        </h3>

                        <p>
                            A convenient system for managing
                            scientific materials and store
                            operations.
                        </p>

                    </div>

                </div>

            </div>


            <!-- =========================
                 CONTENT
            ========================== -->

            <div class="content-card">

                <h3>
                    Welcome to our
                    <span>System</span>
                </h3>

                <p>
                    This project is undertaken in the context
                    of partial fulfillment of the degree from
                    IGNOU. The project
                    <strong>“Shopping System”</strong>
                    is designed for the operations of a
                    Scientific Material Store. It can also
                    be used by mega marts and stores that
                    provide everything under one roof.
                </p>


                <!-- INFORMATION -->

                <div class="info-grid">


                    <div class="info-box">

                        <div class="info-number">
                            01
                        </div>

                        <h4>
                            Product Management
                        </h4>

                        <p>
                            Add and manage products and their
                            related information easily.
                        </p>

                    </div>


                    <div class="info-box">

                        <div class="info-number">
                            02
                        </div>

                        <h4>
                            Customer Management
                        </h4>

                        <p>
                            Maintain customer information in
                            an organized way.
                        </p>

                    </div>


                    <div class="info-box">

                        <div class="info-number">
                            03
                        </div>

                        <h4>
                            Shopping &amp; Billing
                        </h4>

                        <p>
                            Manage shopping details and billing
                            information efficiently.
                        </p>

                    </div>


                    <div class="info-box">

                        <div class="info-number">
                            04
                        </div>

                        <h4>
                            Purchase &amp; Delivery
                        </h4>

                        <p>
                            Keep track of purchases and
                            delivery information.
                        </p>

                    </div>


                </div>


                <!-- BUTTONS -->

                <div class="button-area">


                    <a
                        href="test.php"
                        class="home-btn secondary-btn"
                    >
                        BOOK TEST REQUIREMENT NOW
                    </a>


                    <a
                        href="shopping.php"
                        class="home-btn primary-btn"
                    >
                        BUY PRODUCTS NOW
                    </a>


                </div>


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


</div>


</body>

</html>