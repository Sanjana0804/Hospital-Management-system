<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Feedback Management | Hospital Management System</title>

    <style>
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
                radial-gradient(circle at top left, #164e63, transparent 35%),
                radial-gradient(circle at bottom right, #0e7490, transparent 30%),
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

            border-bottom: 1px solid rgba(94, 234, 212, 0.12);
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
            background: rgba(94, 234, 212, 0.12);
        }


        /* =========================
           WELCOME BAR
        ========================= */

        .welcome-bar {
            height: 32px;

            display: flex;
            align-items: center;

            background: rgba(0, 0, 0, 0.55);

            border-bottom: 1px solid rgba(94, 234, 212, 0.08);

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

            font-size: clamp(38px, 6vw, 64px);
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
           FEEDBACK SECTION
        ========================= */

        .feedback-section {
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
           MAIN LAYOUT
        ========================= */

        .feedback-layout {
            max-width: 1150px;
            margin: auto;

            display: grid;
            grid-template-columns: 350px 1fr;

            gap: 25px;
            align-items: stretch;
        }


        /* =========================
           LEFT CARD
        ========================= */

        .side-card {
            overflow: hidden;

            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(12px);

            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;

            transition: 0.35s ease;
        }

        .side-card:hover {
            transform: translateY(-6px);

            border-color: rgba(94, 234, 212, 0.35);

            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.3);
        }

        .side-image {
            width: 100%;
            height: 260px;

            display: block;

            object-fit: cover;

            transition: 0.5s ease;
        }

        .side-card:hover .side-image {
            transform: scale(1.05);
        }

        .side-content {
            padding: 25px;
        }

        .badge {
            display: inline-block;

            padding: 7px 12px;

            border-radius: 20px;

            background: rgba(94, 234, 212, 0.12);
            border: 1px solid rgba(94, 234, 212, 0.2);

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
            grid-template-columns: 1fr 1fr;

            gap: 10px;

            margin-top: 20px;
        }

        .feature {
            padding: 11px;

            border-radius: 10px;

            background: rgba(255, 255, 255, 0.04);

            border: 1px solid rgba(255, 255, 255, 0.06);

            color: #dbe7ed;

            font-size: 11px;

            transition: 0.25s ease;
        }

        .feature:hover {
            background: rgba(94, 234, 212, 0.08);
            border-color: rgba(94, 234, 212, 0.2);
            transform: translateY(-2px);
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

            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(12px);

            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;

            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.18);
        }

        .form-card::before {
            content: "";

            position: absolute;

            top: 0;
            left: 0;

            width: 100%;
            height: 3px;

            background: linear-gradient(
                90deg,
                #5eead4,
                #0e7490
            );
        }

        .form-title {
            margin: 0;

            font-size: 25px;
        }

        .form-subtitle {
            margin: 8px 0 25px;

            color: #8fa3af;

            font-size: 12px;
            line-height: 1.6;
        }


        /* =========================
           SECTION HEADER
        ========================= */

        .section-header {
            display: flex;
            align-items: center;
            gap: 12px;

            margin: 25px 0 18px;
        }

        .section-number {
            width: 30px;
            height: 30px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: rgba(94, 234, 212, 0.12);

            border: 1px solid rgba(94, 234, 212, 0.25);

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

            grid-template-columns: 1fr 1fr;

            gap: 16px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        .form-group label {
            margin-bottom: 7px;

            color: #dce7ec;

            font-size: 11px;
            font-weight: 700;
        }

        .required {
            color: #5eead4;
        }


        /* =========================
           INPUTS
        ========================= */

        .form-group input,
        .form-group textarea {
            width: 100%;

            border: 1px solid rgba(255, 255, 255, 0.13);
            border-radius: 10px;

            padding: 12px 13px;

            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;

            color: #ffffff;

            background: rgba(255, 255, 255, 0.06);

            outline: none;

            transition: 0.25s ease;
        }

        .form-group input {
            height: 47px;
        }

        .form-group textarea {
            min-height: 125px;

            resize: vertical;

            line-height: 1.6;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: #718592;
        }

        .form-group input:hover,
        .form-group textarea:hover {
            border-color: rgba(94, 234, 212, 0.3);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #5eead4;

            box-shadow:
                0 0 0 3px rgba(94, 234, 212, 0.1);

            transform: translateY(-1px);
        }

        .hint {
            margin-top: 6px;

            color: #718592;

            font-size: 10px;
        }


        /* =========================
           RATING BOX
        ========================= */

        .rating-section {
            margin-top: 22px;

            padding: 18px;

            border: 1px dashed rgba(94, 234, 212, 0.25);

            border-radius: 14px;

            background: rgba(255, 255, 255, 0.025);
        }

        .rating-title {
            margin-bottom: 12px;

            color: #dce7ec;

            font-size: 12px;
            font-weight: 700;
        }

        .rating-options {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .rating-option {
            position: relative;
        }

        .rating-option input {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .rating-option label {
            display: block;

            padding: 9px 14px;

            border-radius: 9px;

            border: 1px solid rgba(255, 255, 255, 0.1);

            background: rgba(255, 255, 255, 0.05);

            color: #aebec7;

            font-size: 11px;

            cursor: pointer;

            transition: 0.25s ease;
        }

        .rating-option label:hover {
            color: #5eead4;
            border-color: rgba(94, 234, 212, 0.3);
        }

        .rating-option input:checked + label {
            color: #06141f;

            background: #5eead4;

            border-color: #5eead4;

            font-weight: 700;
        }


        /* =========================
           BUTTONS
        ========================= */

        .button-area {
            display: grid;

            grid-template-columns: 140px 1fr;

            gap: 12px;

            margin-top: 25px;
        }

        .reset-btn,
        .submit-btn {
            height: 50px;

            border-radius: 12px;

            font-size: 12px;
            font-weight: 700;

            cursor: pointer;

            transition: 0.3s ease;
        }

        .reset-btn {
            border: 1px solid rgba(255, 255, 255, 0.12);

            background: rgba(255, 255, 255, 0.05);

            color: #aebec7;
        }

        .reset-btn:hover {
            background: rgba(255, 255, 255, 0.1);

            color: #ffffff;

            transform: translateY(-2px);
        }

        .submit-btn {
            position: relative;
            overflow: hidden;

            border: none;

            background: linear-gradient(
                135deg,
                #5eead4,
                #22d3ee
            );

            color: #06141f;

            box-shadow: 0 10px 25px rgba(34, 211, 238, 0.18);
        }

        .submit-btn::before {
            content: "";

            position: absolute;

            top: 0;
            left: -100%;

            width: 70%;
            height: 100%;

            background: rgba(255, 255, 255, 0.25);

            transform: skewX(-25deg);

            transition: 0.5s ease;
        }

        .submit-btn:hover::before {
            left: 130%;
        }

        .submit-btn:hover {
            transform: translateY(-3px);

            box-shadow:
                0 15px 30px rgba(34, 211, 238, 0.25);
        }

        .submit-btn span {
            position: relative;
            z-index: 2;
        }


        /* =========================
           FOOTER
        ========================= */

        .footer {
            padding: 25px 6%;

            text-align: center;

            background: rgba(0, 0, 0, 0.35);

            border-top: 1px solid rgba(94, 234, 212, 0.1);

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

            .feedback-layout {
                grid-template-columns: 300px 1fr;
            }
        }


        @media (max-width: 850px) {

            .feedback-layout {
                grid-template-columns: 1fr;
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
                padding: 50px 5% 40px;
            }

            .feedback-section {
                padding: 20px 5% 50px;
            }

            .form-card {
                padding: 22px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }

            .button-area {
                grid-template-columns: 1fr;
            }

            .reset-btn,
            .submit-btn {
                width: 100%;
            }

            .feature-list {
                grid-template-columns: 1fr;
            }
        }


        @media (max-width: 450px) {

            .nav-links {
                gap: 3px;
            }

            .nav-links a {
                font-size: 10px;
                padding: 7px 8px;
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

            .rating-options {
                flex-direction: column;
            }

            .rating-option label {
                text-align: center;
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

        <a href="index.php">Home</a>

        <a href="about-us.php">About Us</a>

        <a href="customer.php">Customer</a>

        <a href="shopping.php">Shopping</a>

        <a href="management.php">Item Management</a>

        <a href="bill.php">Bill Management</a>

        <a href="purchase.php">Purchase &amp; Delivery</a>

        <a href="feedback.php" class="active">Feedback</a>

        <a href="login.php">Login</a>

        <a href="contact-us.php">Contact Us</a>

    </div>

</nav>


<!-- =========================
     WELCOME BAR
========================= -->

<div class="welcome-bar">

    <marquee behavior="scroll" direction="left">

        <strong>
            “ Welcome to this System ”
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
        Feedback <span>Management</span>
    </h1>

    <p>
        Share your experience and help us improve our services.
        Your feedback is valuable to us.
    </p>

</header>


<!-- =========================
     FEEDBACK SECTION
========================= -->

<main>

<section class="feedback-section">

    <div class="section-heading">

        <h2>
            Share Your <span>Feedback</span>
        </h2>

        <p>
            Fill in your details and tell us about your experience.
        </p>

    </div>


    <div class="feedback-layout">


        <!-- =========================
             LEFT CARD
        ========================== -->

        <div class="side-card">

            <img
                src="image.jpg"
                alt="Hospital Feedback"
                class="side-image"
            >

            <div class="side-content">

                <span class="badge">
                    CUSTOMER FEEDBACK
                </span>

                <h2>
                    We Value Your Voice
                </h2>

                <p>
                    Your feedback helps us understand your experience
                    and improve the quality of our services.
                </p>


                <div class="feature-list">

                    <div class="feature">
                        <span class="feature-icon">✓</span>
                        Easy Feedback
                    </div>

                    <div class="feature">
                        <span class="feature-icon">✓</span>
                        Quick Process
                    </div>

                    <div class="feature">
                        <span class="feature-icon">✓</span>
                        Your Opinion
                    </div>

                    <div class="feature">
                        <span class="feature-icon">✓</span>
                        Better Service
                    </div>

                </div>

            </div>

        </div>


        <!-- =========================
             FORM CARD
        ========================== -->

        <div class="form-card">

            <h2 class="form-title">
                Submit Your Feedback
            </h2>

            <p class="form-subtitle">
                Enter your information below and share your experience.
                Fields marked with <span class="required">*</span>
                are required.
            </p>


            <form
                id="form1"
                name="form1"
                method="post"
                action="db-feedback.php"
                onsubmit="return validateFeedback();"
            >


                <!-- =========================
                     SECTION 01
                ========================== -->

                <div class="section-header">

                    <div class="section-number">
                        01
                    </div>

                    <h3>
                        Personal Information
                    </h3>

                </div>


                <div class="form-grid">


                    <!-- NAME -->

                    <div class="form-group">

                        <label for="f1">
                            Name <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="f1"
                            id="f1"
                            placeholder="Enter your name"
                            autocomplete="name"
                        >

                    </div>


                    <!-- EMAIL -->

                    <div class="form-group">

                        <label for="f2">
                            Email <span class="required">*</span>
                        </label>

                        <input
                            type="email"
                            name="f2"
                            id="f2"
                            placeholder="Enter your email"
                            autocomplete="email"
                        >

                    </div>


                    <!-- CONTACT -->

                    <div class="form-group full">

                        <label for="f3">
                            Contact <span class="required">*</span>
                        </label>

                        <input
                            type="tel"
                            name="f3"
                            id="f3"
                            placeholder="Enter your contact number"
                            autocomplete="tel"
                        >

                        <div class="hint">
                            Enter a valid contact number.
                        </div>

                    </div>

                </div>


                <!-- =========================
                     SECTION 02
                ========================== -->

                <div class="section-header">

                    <div class="section-number">
                        02
                    </div>

                    <h3>
                        Your Feedback
                    </h3>

                </div>


                <div class="form-grid">

                    <div class="form-group full">

                        <label for="f4">
                            Feedback <span class="required">*</span>
                        </label>

                        <textarea
                            name="f4"
                            id="f4"
                            placeholder="Write your feedback here..."
                        ></textarea>

                        <div class="hint">
                            Tell us about your experience and suggestions.
                        </div>

                    </div>

                </div>


                <!-- =========================
                     RATING
                ========================== -->

                <div class="rating-section">

                    <div class="rating-title">
                        How would you rate your experience?
                    </div>

                    <div class="rating-options">

                        <div class="rating-option">

                            <input
                                type="radio"
                                name="rating"
                                id="rating1"
                                value="Excellent"
                            >

                            <label for="rating1">
                                Excellent
                            </label>

                        </div>


                        <div class="rating-option">

                            <input
                                type="radio"
                                name="rating"
                                id="rating2"
                                value="Good"
                            >

                            <label for="rating2">
                                Good
                            </label>

                        </div>


                        <div class="rating-option">

                            <input
                                type="radio"
                                name="rating"
                                id="rating3"
                                value="Average"
                            >

                            <label for="rating3">
                                Average
                            </label>

                        </div>


                        <div class="rating-option">

                            <input
                                type="radio"
                                name="rating"
                                id="rating4"
                                value="Poor"
                            >

                            <label for="rating4">
                                Poor
                            </label>

                        </div>

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


                    <button
                        type="submit"
                        name="btnsubmit"
                        id="btnsubmit"
                        class="submit-btn"
                    >
                        <span>
                            Submit Feedback →
                        </span>
                    </button>

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

function validateFeedback() {

    var name = document.getElementById("f1").value.trim();
    var email = document.getElementById("f2").value.trim();
    var contact = document.getElementById("f3").value.trim();
    var feedback = document.getElementById("f4").value.trim();


    /* NAME */

    if (name === "") {

        alert("Please enter your name.");

        document.getElementById("f1").focus();

        return false;
    }


    /* EMAIL */

    if (email === "") {

        alert("Please enter your email.");

        document.getElementById("f2").focus();

        return false;
    }


    var emailPattern =
        /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(email)) {

        alert("Please enter a valid email address.");

        document.getElementById("f2").focus();

        return false;
    }


    /* CONTACT */

    if (contact === "") {

        alert("Please enter your contact number.");

        document.getElementById("f3").focus();

        return false;
    }


    /* FEEDBACK */

    if (feedback === "") {

        alert("Please enter your feedback.");

        document.getElementById("f4").focus();

        return false;
    }


    if (feedback.length < 5) {

        alert("Please enter a little more feedback.");

        document.getElementById("f4").focus();

        return false;
    }


    /* SUCCESS MESSAGE */

    alert(
        "Thank you for your valuable feedback!"
    );

    return true;
}

</script>

</body>
</html>