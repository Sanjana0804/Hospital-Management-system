<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Hospital Management System</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #07111f, #102a43, #164e63);
            color: #fff;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            width: 100%;
            background: rgba(0, 0, 0, 0.45);
            backdrop-filter: blur(12px);
            padding: 18px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(255,255,255,0.12);
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .logo span {
            color: #5eead4;
        }

        .nav-links {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            padding: 9px 13px;
            border-radius: 8px;
            font-size: 14px;
            transition: 0.3s;
        }

        .nav-links a:hover,
        .nav-links .active {
            background: #5eead4;
            color: #06202a;
        }


        /* =========================
           MAIN
        ========================= */

        .main {
            min-height: calc(100vh - 78px);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px 20px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 1000px;
            min-height: 560px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 25px 70px rgba(0,0,0,0.35);
            backdrop-filter: blur(15px);
        }


        /* =========================
           LEFT SIDE
        ========================= */

        .login-image {
            position: relative;
            min-height: 560px;
            background:
                linear-gradient(
                    rgba(0,0,0,0.35),
                    rgba(0,0,0,0.75)
                ),
                url("image.jpg") center/cover no-repeat;

            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 45px;
        }

        .login-image h1 {
            font-size: 42px;
            margin-bottom: 12px;
        }

        .login-image h1 span {
            color: #5eead4;
        }

        .login-image p {
            color: #d5e1e7;
            line-height: 1.7;
            font-size: 15px;
            max-width: 400px;
        }


        /* =========================
           RIGHT SIDE
        ========================= */

        .login-box {
            padding: 55px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-icon {
            width: 65px;
            height: 65px;
            border-radius: 18px;
            background: rgba(94,234,212,0.15);
            border: 1px solid rgba(94,234,212,0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            margin-bottom: 22px;
        }

        .login-box h2 {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .login-box .subtitle {
            color: #aab8c2;
            margin-bottom: 35px;
            font-size: 14px;
        }


        /* =========================
           FORM
        ========================= */

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 9px;
            color: #e8f1f5;
        }

        .input-box {
            position: relative;
        }

        .input-box span {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #7f929d;
            font-size: 17px;
        }

        .input-box input {
            width: 100%;
            height: 52px;
            padding: 0 45px;
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 12px;
            outline: none;
            background: rgba(0,0,0,0.25);
            color: #fff;
            font-size: 15px;
            transition: 0.3s;
        }

        .input-box input::placeholder {
            color: #82929b;
        }

        .input-box input:focus {
            border-color: #5eead4;
            box-shadow: 0 0 0 3px rgba(94,234,212,0.12);
        }


        /* =========================
           BUTTON
        ========================= */

        .login-btn {
            width: 100%;
            height: 52px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #5eead4, #22d3ee);
            color: #06202a;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 8px;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(34,211,238,0.25);
        }

        .login-btn:active {
            transform: translateY(0);
        }


        /* =========================
           REGISTER MESSAGE
        ========================= */

        .register-text {
            text-align: center;
            margin-top: 25px;
            color: #9caeb8;
            font-size: 14px;
        }

        .register-text a {
            color: #5eead4;
            text-decoration: none;
            font-weight: bold;
        }

        .register-text a:hover {
            text-decoration: underline;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            text-align: center;
            padding: 18px;
            background: rgba(0,0,0,0.35);
            color: #91a2ac;
            font-size: 13px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 850px) {

            .navbar {
                flex-direction: column;
                gap: 15px;
            }

            .login-wrapper {
                grid-template-columns: 1fr;
            }

            .login-image {
                min-height: 300px;
            }

            .login-box {
                padding: 40px 30px;
            }
        }


        @media (max-width: 550px) {

            .nav-links {
                gap: 3px;
            }

            .nav-links a {
                font-size: 12px;
                padding: 7px 8px;
            }

            .main {
                padding: 25px 12px;
            }

            .login-wrapper {
                border-radius: 18px;
            }

            .login-image {
                min-height: 230px;
                padding: 25px;
            }

            .login-image h1 {
                font-size: 30px;
            }

            .login-box {
                padding: 35px 22px;
            }

            .login-box h2 {
                font-size: 27px;
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
            Hospital<span>System</span>
        </div>

        <nav class="nav-links">

            <a href="index.php">Home</a>

            <a href="about-us.php">About Us</a>

            <a href="customer.php">Customer</a>

            <a href="shopping.php">Shopping</a>

            <a href="management.php">Item Management</a>

            <a href="bill.php">Bill Management</a>

            <a href="purchase.php">Purchase</a>

            <a href="feedback.php">Feedback</a>

            <a href="login.php" class="active">Login</a>

            <a href="contact-us.php">Contact</a>

        </nav>

    </header>


    <!-- =========================
         LOGIN
    ========================= -->

    <main class="main">

        <div class="login-wrapper">

            <!-- LEFT -->

            <section class="login-image">

                <h1>
                    Welcome <span>Back!</span>
                </h1>

                <p>
                    Login to access your shopping management
                    system and manage your account securely.
                </p>

            </section>


            <!-- RIGHT -->

            <section class="login-box">

                <div class="login-icon">
                    🔐
                </div>

                <h2>Login</h2>

                <p class="subtitle">
                    Enter your registered User ID and password.
                </p>


                <form
                    id="loginForm"
                    name="loginForm"
                    method="post"
                    action="db-login.php"
                    onsubmit="return validateLogin();"
                >

                    <!-- USER ID -->

                    <div class="form-group">

                        <label for="name">
                            User ID
                        </label>

                        <div class="input-box">

                            <span>👤</span>

                            <input
                                type="text"
                                name="name"
                                id="name"
                                placeholder="Enter your User ID"
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

                        <label for="password">
                            Password
                        </label>

                        <div class="input-box">

                            <span>🔑</span>

                            <input
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Enter your password"
                                required
                                minlength="4"
                                maxlength="100"
                                autocomplete="current-password"
                            >

                        </div>

                    </div>


                    <!-- SUBMIT -->

                    <button
                        type="submit"
                        class="login-btn"
                    >
                        Login to Account
                    </button>

                </form>


                <div class="register-text">
                    Don't have an account?
                    <a href="customer.php">Register here</a>
                </div>

            </section>

        </div>

    </main>


    <footer>
        © 2026 Shopping Management System. All Rights Reserved.
    </footer>


    <script>

        function validateLogin() {

            const userId =
                document.getElementById("name").value.trim();

            const password =
                document.getElementById("password").value;

            if (userId === "") {
                alert("Please enter your User ID.");
                document.getElementById("name").focus();
                return false;
            }

            if (userId.length < 3) {
                alert("User ID must contain at least 3 characters.");
                document.getElementById("name").focus();
                return false;
            }

            if (password === "") {
                alert("Please enter your password.");
                document.getElementById("password").focus();
                return false;
            }

            if (password.length < 4) {
                alert("Password must contain at least 4 characters.");
                document.getElementById("password").focus();
                return false;
            }

            return true;
        }

    </script>

</body>
</html>