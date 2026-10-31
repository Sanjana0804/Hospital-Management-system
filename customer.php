<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer Registration | Shopping System</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            background:
                radial-gradient(circle at top left, #164e63, transparent 35%),
                radial-gradient(circle at bottom right, #0e7490, transparent 30%),
                #06141f;
            color: #ffffff;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            width: 100%;
            padding: 18px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;

            background: rgba(0, 0, 0, 0.45);
            backdrop-filter: blur(15px);

            border-bottom: 1px solid rgba(255, 255, 255, 0.12);

            position: sticky;
            top: 0;
            z-index: 100;
        }


        .logo {
            font-size: 25px;
            font-weight: 700;
            letter-spacing: 1px;
            white-space: nowrap;
        }

        .logo span {
            color: #5eead4;
        }


        .nav-links {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            flex-wrap: wrap;
        }


        .nav-links a {
            color: #e7f5f7;
            text-decoration: none;

            padding: 9px 12px;

            border-radius: 8px;

            font-size: 13px;

            transition: all 0.3s ease;
        }


        .nav-links a:hover {
            background: rgba(94, 234, 212, 0.15);
            color: #5eead4;
        }


        .nav-links a.active {
            background: #5eead4;
            color: #06202a;
            font-weight: 600;
        }


        /* =========================
           MAIN
        ========================= */

        .main {
            width: 100%;
            min-height: calc(100vh - 75px);

            padding: 55px 20px;

            display: flex;
            justify-content: center;
            align-items: center;
        }


        .registration-card {
            width: 100%;
            max-width: 1100px;

            display: grid;
            grid-template-columns: 42% 58%;

            overflow: hidden;

            border-radius: 26px;

            background: rgba(255, 255, 255, 0.07);

            border: 1px solid rgba(255, 255, 255, 0.14);

            box-shadow:
                0 30px 80px rgba(0, 0, 0, 0.45);

            backdrop-filter: blur(18px);
        }


        /* =========================
           LEFT IMAGE
        ========================= */

        .visual-section {
            position: relative;

            min-height: 760px;

            background:
                linear-gradient(
                    180deg,
                    rgba(0, 0, 0, 0.05),
                    rgba(0, 0, 0, 0.88)
                ),
                url("image.jpg") center center / cover no-repeat;

            display: flex;
            align-items: flex-end;

            padding: 45px;
        }


        .visual-section::before {
            content: "";

            position: absolute;

            width: 180px;
            height: 180px;

            border-radius: 50%;

            background: rgba(94, 234, 212, 0.13);

            top: 50px;
            right: 30px;

            filter: blur(3px);
        }


        .visual-content {
            position: relative;
            z-index: 2;
        }


        .small-label {
            color: #5eead4;

            font-size: 12px;

            font-weight: bold;

            letter-spacing: 4px;

            text-transform: uppercase;

            margin-bottom: 15px;
        }


        .visual-content h1 {
            font-size: 44px;

            line-height: 1.1;

            margin-bottom: 18px;
        }


        .visual-content h1 span {
            color: #5eead4;
        }


        .visual-content p {
            color: #d1dde2;

            line-height: 1.8;

            font-size: 15px;

            max-width: 400px;
        }


        .features {
            margin-top: 30px;

            display: flex;

            flex-direction: column;

            gap: 12px;
        }


        .feature {
            display: flex;

            align-items: center;

            gap: 12px;

            color: #dbe9ed;

            font-size: 14px;
        }


        .feature-icon {
            width: 30px;
            height: 30px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: rgba(94, 234, 212, 0.13);

            color: #5eead4;
        }


        /* =========================
           FORM SECTION
        ========================= */

        .form-section {
            padding: 45px 50px;

            background: rgba(4, 17, 27, 0.45);
        }


        .form-header {
            margin-bottom: 30px;
        }


        .form-header .label {
            color: #5eead4;

            font-size: 12px;

            font-weight: bold;

            letter-spacing: 3px;

            text-transform: uppercase;

            margin-bottom: 10px;
        }


        .form-header h2 {
            font-size: 31px;

            margin-bottom: 8px;
        }


        .form-header p {
            color: #91a6af;

            font-size: 14px;

            line-height: 1.6;
        }


        /* =========================
           FORM GRID
        ========================= */

        .form-grid {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 18px;
        }


        .form-group {
            display: flex;

            flex-direction: column;

            gap: 8px;
        }


        .form-group.full {
            grid-column: 1 / -1;
        }


        .form-group label {
            font-size: 13px;

            color: #dce8eb;

            font-weight: 600;
        }


        .required {
            color: #5eead4;
        }


        .input-wrapper {
            position: relative;
        }


        .input-icon {
            position: absolute;

            left: 14px;

            top: 50%;

            transform: translateY(-50%);

            color: #718994;

            font-size: 15px;

            pointer-events: none;
        }


        .form-control {
            width: 100%;

            height: 48px;

            border-radius: 10px;

            border: 1px solid rgba(255, 255, 255, 0.13);

            background: rgba(0, 0, 0, 0.25);

            color: #ffffff;

            outline: none;

            padding: 0 15px;

            font-size: 14px;

            transition: all 0.3s ease;
        }


        .has-icon .form-control {
            padding-left: 42px;
        }


        .form-control::placeholder {
            color: #71828b;
        }


        .form-control:focus {
            border-color: #5eead4;

            box-shadow:
                0 0 0 3px rgba(94, 234, 212, 0.09);

            background: rgba(0, 0, 0, 0.35);
        }


        select.form-control {
            cursor: pointer;
        }


        select.form-control option {
            background: #102a36;

            color: #ffffff;
        }


        textarea.form-control {
            height: 85px;

            padding-top: 13px;

            resize: vertical;
        }


        /* =========================
           PASSWORD
        ========================= */

        .password-wrapper {
            position: relative;
        }


        .password-wrapper .form-control {
            padding-right: 48px;
        }


        .show-password {
            position: absolute;

            right: 14px;

            top: 50%;

            transform: translateY(-50%);

            border: none;

            background: transparent;

            color: #78909b;

            cursor: pointer;

            font-size: 15px;
        }


        .show-password:hover {
            color: #5eead4;
        }


        /* =========================
           PASSWORD STRENGTH
        ========================= */

        .password-strength {
            font-size: 11px;

            color: #7f939d;

            margin-top: -3px;
        }


        /* =========================
           BUTTON
        ========================= */

        .submit-btn {
            width: 100%;

            height: 52px;

            margin-top: 25px;

            border: none;

            border-radius: 11px;

            background:
                linear-gradient(
                    135deg,
                    #5eead4,
                    #22d3ee
                );

            color: #06202a;

            font-size: 15px;

            font-weight: 700;

            cursor: pointer;

            transition: all 0.3s ease;
        }


        .submit-btn:hover {
            transform: translateY(-2px);

            box-shadow:
                0 12px 28px rgba(34, 211, 238, 0.25);
        }


        .submit-btn:active {
            transform: translateY(0);
        }


        /* =========================
           LOGIN LINK
        ========================= */

        .login-text {
            text-align: center;

            margin-top: 20px;

            color: #8ea2ab;

            font-size: 13px;
        }


        .login-text a {
            color: #5eead4;

            text-decoration: none;

            font-weight: bold;
        }


        .login-text a:hover {
            text-decoration: underline;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            text-align: center;

            padding: 18px;

            background: rgba(0, 0, 0, 0.35);

            color: #80949e;

            font-size: 12px;

            border-top: 1px solid rgba(255,255,255,0.08);
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 950px) {

            .navbar {
                flex-direction: column;

                padding: 15px 20px;
            }


            .nav-links {
                width: 100%;
            }


            .registration-card {
                grid-template-columns: 1fr;
            }


            .visual-section {
                min-height: 350px;
            }

        }


        @media (max-width: 650px) {

            .main {
                padding: 25px 12px;
            }


            .visual-section {
                min-height: 300px;

                padding: 30px;
            }


            .visual-content h1 {
                font-size: 34px;
            }


            .form-section {
                padding: 35px 22px;
            }


            .form-grid {
                grid-template-columns: 1fr;
            }


            .form-group.full {
                grid-column: auto;
            }


            .nav-links a {
                font-size: 11px;

                padding: 7px 8px;
            }


            .logo {
                font-size: 21px;
            }

        }

    </style>

</head>


<body>


<!-- =========================
     NAVBAR
========================= -->

<header class="navbar">

    <div class="logo">
        Hospital Management<span> System</span>
    </div>


    <nav class="nav-links">

        <a href="index.php">
            Home
        </a>

        <a href="about-us.php">
            About Us
        </a>

        <a href="customer.php" class="active">
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
            Purchase
        </a>

        <a href="feedback.php">
            Feedback
        </a>

        <a href="login.php">
            Login
        </a>

        <a href="contact-us.php">
            Contact
        </a>

    </nav>

</header>



<!-- =========================
     MAIN
========================= -->

<main class="main">


    <div class="registration-card">


        <!-- =========================
             LEFT SIDE
        ========================= -->

        <section class="visual-section">

            <div class="visual-content">

                <div class="small-label">
                    Hospital Management System
                </div>


                <h1>
                    Create Your
                    <span>Account</span>
                </h1>


                <p>
                    Register as a customer and get access to
                    our complete shopping management system.
                    Enter your details carefully to create your account.
                </p>


                <div class="features">

                    <div class="feature">

                        <div class="feature-icon">
                            ✓
                        </div>

                        <span>
                            Quick and simple registration
                        </span>

                    </div>


                    <div class="feature">

                        <div class="feature-icon">
                            ✓
                        </div>

                        <span>
                            Secure account access
                        </span>

                    </div>


                    <div class="feature">

                        <div class="feature-icon">
                            ✓
                        </div>

                        <span>
                            Easy shopping management
                        </span>

                    </div>

                </div>

            </div>

        </section>



        <!-- =========================
             FORM
        ========================= -->

        <section class="form-section">


            <div class="form-header">

                <div class="label">
                    Customer Registration
                </div>

                <h2>
                    Create Account
                </h2>

                <p>
                    Fill in the information below to register.
                </p>

            </div>



            <form
                id="registrationForm"
                name="registrationForm"
                method="post"
                action="db-customer.php"
                onsubmit="return validateRegistration();"
            >


                <div class="form-grid">


                    <!-- USER ID -->

                    <div class="form-group">

                        <label for="f1">
                            User ID <span class="required">*</span>
                        </label>

                        <div class="input-wrapper has-icon">

                            <span class="input-icon">
                                👤
                            </span>

                            <input
                                type="text"
                                name="f1"
                                id="f1"
                                class="form-control"
                                placeholder="Enter User ID"
                                required
                                minlength="3"
                                maxlength="50"
                                pattern="[A-Za-z0-9_]+"
                                title="User ID must contain only letters, numbers and underscore."
                                autocomplete="username"
                            >

                        </div>

                    </div>



                    <!-- PASSWORD -->

                    <div class="form-group">

                        <label for="f2">
                            Password <span class="required">*</span>
                        </label>

                        <div class="input-wrapper password-wrapper">

                            <input
                                type="password"
                                name="f2"
                                id="f2"
                                class="form-control"
                                placeholder="Create password"
                                required
                                minlength="6"
                                maxlength="100"
                                autocomplete="new-password"
                            >

                            <button
                                type="button"
                                class="show-password"
                                onclick="togglePassword('f2', this)"
                            >
                                👁
                            </button>

                        </div>

                        <div class="password-strength" id="passwordStrength">
                            Minimum 6 characters
                        </div>

                    </div>



                    <!-- EMAIL -->

                    <div class="form-group">

                        <label for="f3">
                            Email <span class="required">*</span>
                        </label>

                        <div class="input-wrapper has-icon">

                            <span class="input-icon">
                                ✉
                            </span>

                            <input
                                type="email"
                                name="f3"
                                id="f3"
                                class="form-control"
                                placeholder="example@email.com"
                                required
                                maxlength="100"
                                autocomplete="email"
                            >

                        </div>

                    </div>



                    <!-- SECURITY QUESTION -->

                    <div class="form-group">

                        <label for="f4">
                            Security Question <span class="required">*</span>
                        </label>

                        <select
                            name="f4"
                            id="f4"
                            class="form-control"
                            required
                        >

                            <option value="">
                                Select a question
                            </option>

                            <option value="pet">
                                What was your first pet's name?
                            </option>

                            <option value="school">
                                What was your first school's name?
                            </option>

                            <option value="city">
                                What city were you born in?
                            </option>

                            <option value="friend">
                                What was your childhood friend's name?
                            </option>

                        </select>

                    </div>



                    <!-- ANSWER -->

                    <div class="form-group">

                        <label for="f5">
                            Answer <span class="required">*</span>
                        </label>

                        <div class="input-wrapper">

                            <input
                                type="text"
                                name="f5"
                                id="f5"
                                class="form-control"
                                placeholder="Enter your answer"
                                required
                                minlength="2"
                                maxlength="100"
                            >

                        </div>

                    </div>



                    <!-- PHONE -->

                    <div class="form-group">

                        <label for="f6">
                            Phone <span class="required">*</span>
                        </label>

                        <div class="input-wrapper has-icon">

                            <span class="input-icon">
                                ☎
                            </span>

                            <input
                                type="tel"
                                name="f6"
                                id="f6"
                                class="form-control"
                                placeholder="10-digit mobile number"
                                required
                                maxlength="10"
                                pattern="[6-9][0-9]{9}"
                                title="Enter a valid 10-digit Indian mobile number."
                                inputmode="numeric"
                                autocomplete="tel"
                            >

                        </div>

                    </div>



                    <!-- ADDRESS -->

                    <div class="form-group full">

                        <label for="f7">
                            Address <span class="required">*</span>
                        </label>

                        <textarea
                            name="f7"
                            id="f7"
                            class="form-control"
                            placeholder="Enter your complete address"
                            required
                            minlength="5"
                            maxlength="250"
                        ></textarea>

                    </div>



                    <!-- CITY -->

                    <div class="form-group">

                        <label for="f8">
                            City <span class="required">*</span>
                        </label>

                        <div class="input-wrapper has-icon">

                            <span class="input-icon">
                                📍
                            </span>

                            <input
                                type="text"
                                name="f8"
                                id="f8"
                                class="form-control"
                                placeholder="Enter city"
                                required
                                minlength="2"
                                maxlength="50"
                                pattern="[A-Za-z ]+"
                                title="Please enter a valid city using letters and spaces only."
                            >

                        </div>

                    </div>



                    <!-- CREDIT CARD -->

                    <div class="form-group">

                        <label for="f9">
                            Payment Reference
                        </label>

                        <div class="input-wrapper">

                            <input
                                type="text"
                                name="f9"
                                id="f9"
                                class="form-control"
                                placeholder="Optional reference"
                                maxlength="100"
                            >

                        </div>

                    </div>



                    <!-- CONTACT -->

                    <div class="form-group full">

                        <label for="f10">
                            Contact No
                        </label>

                        <div class="input-wrapper has-icon">

                            <span class="input-icon">
                                ☎
                            </span>

                            <input
                                type="tel"
                                name="f10"
                                id="f10"
                                class="form-control"
                                placeholder="Enter contact number"
                                maxlength="10"
                                pattern="[6-9][0-9]{9}"
                                title="Enter a valid 10-digit Indian mobile number."
                                inputmode="numeric"
                            >

                        </div>

                    </div>


                </div>



                <!-- SUBMIT -->

                <button
                    type="submit"
                    name="btnsubmit"
                    id="btnsubmit"
                    class="submit-btn"
                >
                    Create My Account
                </button>


            </form>



            <div class="login-text">

                Already have an account?

                <a href="login.php">
                    Login here
                </a>

            </div>


        </section>

    </div>

</main>



<!-- =========================
     FOOTER
========================= -->

<footer>

    © 2026 Hospital Management System.
    All Rights Reserved.

</footer>



<!-- =========================
     JAVASCRIPT VALIDATION
========================= -->

<script>


    /* =========================
       PASSWORD SHOW / HIDE
    ========================= */

    function togglePassword(inputId, button) {

        const input = document.getElementById(inputId);

        if (input.type === "password") {

            input.type = "text";

            button.textContent = "🙈";

        } else {

            input.type = "password";

            button.textContent = "👁";

        }

    }



    /* =========================
       PASSWORD STRENGTH
    ========================= */

    document.getElementById("f2").addEventListener(
        "input",
        function () {

            const password = this.value;

            const strength =
                document.getElementById("passwordStrength");


            if (password.length === 0) {

                strength.textContent =
                    "Minimum 6 characters";

            }

            else if (password.length < 6) {

                strength.textContent =
                    "Password is too short";

            }

            else if (
                /[A-Z]/.test(password) &&
                /[a-z]/.test(password) &&
                /[0-9]/.test(password)
            ) {

                strength.textContent =
                    "Strong password ✓";

            }

            else {

                strength.textContent =
                    "Good password";

            }

        }
    );



    /* =========================
       FORM VALIDATION
    ========================= */

    function validateRegistration() {


        const userId =
            document.getElementById("f1").value.trim();


        const password =
            document.getElementById("f2").value;


        const email =
            document.getElementById("f3").value.trim();


        const question =
            document.getElementById("f4").value;


        const answer =
            document.getElementById("f5").value.trim();


        const phone =
            document.getElementById("f6").value.trim();


        const address =
            document.getElementById("f7").value.trim();


        const city =
            document.getElementById("f8").value.trim();


        const contact =
            document.getElementById("f10").value.trim();



        /* USER ID */

        if (!/^[A-Za-z0-9_]{3,50}$/.test(userId)) {

            alert(
                "User ID must contain 3-50 letters, numbers or underscore."
            );

            document.getElementById("f1").focus();

            return false;
        }



        /* PASSWORD */

        if (password.length < 6) {

            alert(
                "Password must contain at least 6 characters."
            );

            document.getElementById("f2").focus();

            return false;
        }



        /* EMAIL */

        const emailPattern =
            /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


        if (!emailPattern.test(email)) {

            alert(
                "Please enter a valid email address."
            );

            document.getElementById("f3").focus();

            return false;
        }



        /* SECURITY QUESTION */

        if (question === "") {

            alert(
                "Please select a security question."
            );

            document.getElementById("f4").focus();

            return false;
        }



        /* ANSWER */

        if (answer.length < 2) {

            alert(
                "Please enter a valid security answer."
            );

            document.getElementById("f5").focus();

            return false;
        }



        /* PHONE */

        if (!/^[6-9][0-9]{9}$/.test(phone)) {

            alert(
                "Please enter a valid 10-digit Indian mobile number."
            );

            document.getElementById("f6").focus();

            return false;
        }



        /* ADDRESS */

        if (address.length < 5) {

            alert(
                "Please enter your complete address."
            );

            document.getElementById("f7").focus();

            return false;
        }



        /* CITY */

        if (!/^[A-Za-z ]{2,50}$/.test(city)) {

            alert(
                "Please enter a valid city name."
            );

            document.getElementById("f8").focus();

            return false;
        }



        /* CONTACT - OPTIONAL */

        if (
            contact !== "" &&
            !/^[6-9][0-9]{9}$/.test(contact)
        ) {

            alert(
                "Please enter a valid 10-digit contact number."
            );

            document.getElementById("f10").focus();

            return false;
        }



        return true;

    }

</script>


</body>

</html>