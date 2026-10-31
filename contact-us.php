<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us - Hospital Management System</title>

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
                radial-gradient(
                    circle at top left,
                    rgba(20, 184, 166, 0.12),
                    transparent 35%
                ),
                radial-gradient(
                    circle at bottom right,
                    rgba(14, 116, 144, 0.15),
                    transparent 35%
                ),
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
            height: 34px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #031019;
            border-bottom: 1px solid rgba(94, 234, 212, 0.12);
        }

        .welcome-bar marquee {
            width: 100%;
            color: #ffffff;
            font-size: 13px;
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
            max-width: 1200px;
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
           CONTACT LAYOUT
        ========================== */

        .contact-grid {
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 35px;
            align-items: stretch;
        }

        /* =========================
           IMAGE CARD
        ========================== */

        .image-card {
            position: relative;
            min-height: 480px;
            overflow: hidden;
            border-radius: 20px;
            border: 1px solid rgba(94, 234, 212, 0.15);
            background: #0b1d2a;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
        }

        .image-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
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
                transparent 30%,
                rgba(3, 14, 23, 0.95)
            );
        }

        .image-overlay .small-title {
            color: #5eead4;
            font-size: 11px;
            letter-spacing: 4px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .image-overlay h3 {
            font-size: 30px;
            line-height: 1.25;
        }

        .image-overlay p {
            color: #cbd5e1;
            font-size: 13px;
            line-height: 1.7;
            margin-top: 12px;
        }

        /* =========================
           CONTACT CARD
        ========================== */

        .contact-card {
            background: rgba(11, 29, 42, 0.85);
            border: 1px solid rgba(94, 234, 212, 0.14);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(10px);
            transition: all 0.35s ease;
        }

        .contact-card:hover {
            border-color: rgba(94, 234, 212, 0.35);
            transform: translateY(-4px);
            box-shadow: 0 25px 60px rgba(20, 184, 166, 0.08);
        }

        .contact-card h3 {
            font-size: 28px;
            margin-bottom: 12px;
        }

        .contact-card h3 span {
            color: #5eead4;
        }

        .contact-card > p {
            color: #94a3b8;
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        /* =========================
           CONTACT ITEMS
        ========================== */

        .contact-item {
            display: flex;
            align-items: center;
            gap: 18px;
            padding: 20px;
            margin-bottom: 18px;
            background: rgba(3, 14, 23, 0.65);
            border: 1px solid rgba(148, 163, 184, 0.12);
            border-radius: 14px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            transform: translateX(7px);
            border-color: rgba(94, 234, 212, 0.35);
            background: rgba(20, 184, 166, 0.06);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            min-width: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: linear-gradient(
                135deg,
                #14b8a6,
                #5eead4
            );
            color: #031019;
            font-size: 20px;
            font-weight: bold;
        }

        .contact-info small {
            display: block;
            color: #5eead4;
            font-size: 10px;
            letter-spacing: 2px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .contact-info strong {
            color: #ffffff;
            font-size: 16px;
        }

        /* =========================
           NOTE BOX
        ========================== */

        .note-box {
            margin-top: 28px;
            padding: 20px;
            border-radius: 14px;
            background: rgba(94, 234, 212, 0.05);
            border-left: 3px solid #5eead4;
        }

        .note-box p {
            color: #94a3b8;
            font-size: 12px;
            line-height: 1.7;
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

            .contact-grid {
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

            .contact-card {
                padding: 30px;
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

            .contact-card {
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

            .contact-card {
                padding: 20px 15px;
            }

            .contact-item {
                padding: 15px;
                gap: 12px;
            }

            .contact-icon {
                width: 43px;
                height: 43px;
                min-width: 43px;
                font-size: 17px;
            }

            .contact-info strong {
                font-size: 14px;
            }
        }
    </style>

</head>

<body>

    <!-- =========================
         NAVBAR
    ========================== -->

    <nav class="navbar">

        <div class="nav-container">

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

            <a href="bill.php">
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

            <a href="contact-us.php" class="active">
                Contact Us
            </a>

        </div>

    </nav>


    <!-- =========================
         WELCOME BAR
    ========================== -->

    <div class="welcome-bar">

        <marquee behavior="scroll" direction="left">

            <strong>
                “ Welcome to Hospital Management System — Contact Us ”
            </strong>

        </marquee>

    </div>


    <!-- =========================
         BANNER
    ========================== -->

    <section class="banner">

        <img
            src="banner.jpg"
            alt="Hospital Management System"
        >

        <div class="banner-content">

            <div class="banner-label">
                HOSPITAL MANAGEMENT SYSTEM
            </div>

            <h1>
                Contact <span>Us</span>
            </h1>

            <p>
                We're here to help with your queries and requirements
            </p>

        </div>

    </section>


    <!-- =========================
         MAIN CONTENT
    ========================== -->

    <main class="main">

        <div class="section-heading">

            <div class="tag">
                GET IN TOUCH
            </div>

            <h2>
                Contact <span>Us</span>
            </h2>

            <p>
                For any query or assistance, please contact us
            </p>

            <div class="heading-line"></div>

        </div>


        <div class="contact-grid">


            <!-- =========================
                 IMAGE CARD
            ========================== -->

            <div class="image-card">

                <img
                    src="image.jpg"
                    alt="Hospital Management System"
                >

                <div class="image-overlay">

                    <div class="small-title">
                        SUPPORT
                    </div>

                    <h3>
                        We're Here
                        <br>
                        To Help
                    </h3>

                    <p>
                        Have a question or need assistance?
                        Get in touch with our support team
                        for more information.
                    </p>

                </div>

            </div>


            <!-- =========================
                 CONTACT CARD
            ========================== -->

            <div class="contact-card">

                <h3>
                    For any <span>Query</span>
                </h3>

                <p>
                    If you have any questions, requirements,
                    or need additional information about the
                    system, you can contact us using the
                    details below.
                </p>


                <!-- TOLL FREE -->

                <div class="contact-item">

                    <div class="contact-icon">
                        ☎
                    </div>

                    <div class="contact-info">

                        <small>
                            TOLL FREE NUMBER
                        </small>

                        <strong>
                            1800 180 789
                        </strong>

                    </div>

                </div>


                <!-- DIVISION -->

                <div class="contact-item">

                    <div class="contact-icon">
                        ✦
                    </div>

                    <div class="contact-info">

                        <small>
                            DEPARTMENT
                        </small>

                        <strong>
                            IGNOU Student Division
                        </strong>

                    </div>

                </div>


                <!-- NOTE -->

                <div class="note-box">

                    <p>
                        For any further query, please contact
                        the administrator of this system.
                        Our team will be happy to assist you.
                    </p>

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

</body>

</html>