<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shopping Management | Medical Store</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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


        /* =================================
           NAVBAR
        ================================= */

        .navbar {

            width: 100%;

            padding: 17px 5%;

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;

            background:
                rgba(0, 0, 0, 0.45);

            backdrop-filter: blur(15px);

            border-bottom:
                1px solid rgba(255,255,255,0.12);

            position: sticky;

            top: 0;

            z-index: 1000;
        }


        .logo {

            font-size: 25px;

            font-weight: bold;

            letter-spacing: 1px;

            white-space: nowrap;
        }


        .logo span {

            color: #5eead4;
        }


        .nav-links {

            display: flex;

            justify-content: center;

            align-items: center;

            flex-wrap: wrap;

            gap: 5px;
        }


        .nav-links a {

            text-decoration: none;

            color: #e5f2f4;

            font-size: 13px;

            padding: 9px 12px;

            border-radius: 8px;

            transition:
                0.3s ease;
        }


        .nav-links a:hover {

            color: #5eead4;

            background:
                rgba(94,234,212,0.12);
        }


        .nav-links a.active {

            background: #5eead4;

            color: #06202a;

            font-weight: bold;
        }


        /* =================================
           HERO
        ================================= */

        .hero {

            max-width: 1200px;

            margin: auto;

            padding:
                70px 25px 45px;

            text-align: center;
        }


        .hero-label {

            color: #5eead4;

            font-size: 12px;

            letter-spacing: 4px;

            text-transform: uppercase;

            font-weight: bold;

            margin-bottom: 14px;
        }


        .hero h1 {

            font-size: 48px;

            line-height: 1.15;

            margin-bottom: 18px;
        }


        .hero h1 span {

            color: #5eead4;
        }


        .hero p {

            max-width: 650px;

            margin: auto;

            color: #9fb1b9;

            font-size: 15px;

            line-height: 1.8;
        }


        /* =================================
           SEARCH
        ================================= */

        .search-area {

            max-width: 650px;

            margin:
                30px auto 0;

            position: relative;
        }


        .search-area input {

            width: 100%;

            height: 52px;

            padding:
                0 20px 0 48px;

            border-radius: 14px;

            border:
                1px solid rgba(255,255,255,0.13);

            background:
                rgba(255,255,255,0.07);

            color: #ffffff;

            outline: none;

            font-size: 14px;

            backdrop-filter: blur(10px);

            transition: 0.3s;
        }


        .search-area input:focus {

            border-color: #5eead4;

            box-shadow:
                0 0 0 3px rgba(94,234,212,0.08);
        }


        .search-area input::placeholder {

            color: #71848d;
        }


        .search-icon {

            position: absolute;

            left: 18px;

            top: 50%;

            transform:
                translateY(-50%);

            color: #5eead4;

            font-size: 18px;
        }


        /* =================================
           PRODUCT SECTION
        ================================= */

        .products-section {

            max-width: 1200px;

            margin: auto;

            padding:
                15px 25px 70px;
        }


        .section-heading {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 25px;

            gap: 20px;
        }


        .section-heading h2 {

            font-size: 25px;
        }


        .section-heading p {

            color: #7f949e;

            font-size: 13px;
        }


        /* =================================
           PRODUCT GRID
        ================================= */

        .product-grid {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 25px;
        }


        /* =================================
           PRODUCT CARD
        ================================= */

        .product-card {

            position: relative;

            overflow: hidden;

            border-radius: 20px;

            background:
                rgba(255,255,255,0.065);

            border:
                1px solid rgba(255,255,255,0.12);

            backdrop-filter: blur(12px);

            transition:
                transform 0.35s ease,
                box-shadow 0.35s ease,
                border-color 0.35s ease;
        }


        .product-card:hover {

            transform:
                translateY(-8px);

            border-color:
                rgba(94,234,212,0.35);

            box-shadow:
                0 20px 45px
                rgba(0,0,0,0.35);
        }


        /* =================================
           IMAGE
        ================================= */

        .product-image {

            height: 270px;

            overflow: hidden;

            background:
                #ffffff;

            position: relative;
        }


        .product-image img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            display: block;

            transition:
                transform 0.5s ease;
        }


        .product-card:hover
        .product-image img {

            transform:
                scale(1.06);
        }


        /* =================================
           BADGE
        ================================= */

        .product-badge {

            position: absolute;

            top: 15px;

            left: 15px;

            padding:
                7px 11px;

            border-radius: 20px;

            background:
                rgba(6,20,31,0.85);

            color: #5eead4;

            font-size: 11px;

            font-weight: bold;

            border:
                1px solid rgba(94,234,212,0.25);

            backdrop-filter: blur(8px);
        }


        /* =================================
           PRODUCT CONTENT
        ================================= */

        .product-content {

            padding: 22px;
        }


        .product-code {

            color: #5eead4;

            font-size: 11px;

            font-weight: bold;

            letter-spacing: 1px;

            margin-bottom: 8px;
        }


        .product-content h3 {

            font-size: 21px;

            margin-bottom: 8px;

            color: #ffffff;
        }


        .product-description {

            color: #879aa3;

            font-size: 13px;

            line-height: 1.6;

            min-height: 42px;

            margin-bottom: 18px;
        }


        .product-bottom {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 15px;
        }


        .price {

            font-size: 22px;

            font-weight: bold;

            color: #ffffff;
        }


        .price small {

            font-size: 11px;

            color: #81949d;

            font-weight: normal;
        }


        .book-btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            text-decoration: none;

            padding:
                11px 18px;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    #5eead4,
                    #22d3ee
                );

            color: #06202a;

            font-size: 13px;

            font-weight: bold;

            transition:
                0.3s ease;
        }


        .book-btn:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 8px 20px
                rgba(34,211,238,0.22);
        }


        /* =================================
           INFO SECTION
        ================================= */

        .info-section {

            max-width: 1200px;

            margin: 0 auto 60px;

            padding: 0 25px;
        }


        .info-box {

            display: grid;

            grid-template-columns:
                repeat(3,1fr);

            gap: 18px;

            padding: 25px;

            border-radius: 18px;

            background:
                rgba(255,255,255,0.045);

            border:
                1px solid rgba(255,255,255,0.09);
        }


        .info-item {

            text-align: center;

            padding: 15px;
        }


        .info-icon {

            width: 45px;

            height: 45px;

            margin:
                0 auto 12px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            background:
                rgba(94,234,212,0.1);

            color: #5eead4;

            font-size: 20px;
        }


        .info-item h4 {

            font-size: 15px;

            margin-bottom: 6px;
        }


        .info-item p {

            color: #788c96;

            font-size: 12px;

            line-height: 1.5;
        }


        /* =================================
           NO RESULT
        ================================= */

        .no-result {

            display: none;

            text-align: center;

            padding: 50px;

            color: #8da0a9;
        }


        /* =================================
           FOOTER
        ================================= */

        footer {

            text-align: center;

            padding: 20px;

            color: #71858f;

            background:
                rgba(0,0,0,0.35);

            border-top:
                1px solid rgba(255,255,255,0.08);

            font-size: 12px;
        }


        /* =================================
           RESPONSIVE
        ================================= */

        @media (max-width: 1000px) {

            .navbar {

                flex-direction: column;

                padding:
                    15px 20px;
            }


            .product-grid {

                grid-template-columns:
                    repeat(2, 1fr);
            }

        }


        @media (max-width: 650px) {

            .hero {

                padding:
                    45px 18px 30px;
            }


            .hero h1 {

                font-size: 36px;
            }


            .products-section {

                padding:
                    10px 15px 50px;
            }


            .product-grid {

                grid-template-columns:
                    1fr;
            }


            .product-image {

                height: 250px;
            }


            .section-heading {

                flex-direction: column;

                align-items: flex-start;
            }


            .info-section {

                padding:
                    0 15px;
            }


            .info-box {

                grid-template-columns:
                    1fr;
            }


            .nav-links a {

                font-size: 11px;

                padding:
                    7px 8px;
            }

        }


        @media (max-width: 400px) {

            .hero h1 {

                font-size: 31px;
            }


            .product-bottom {

                flex-direction: column;

                align-items: stretch;
            }


            .book-btn {

                width: 100%;
            }


            .price {

                text-align: center;
            }

        }

    </style>

</head>


<body>


<!-- =================================
     NAVBAR
================================= -->

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

        <a href="customer.php">
            Customer
        </a>

        <a href="shopping.php" class="active">
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



<!-- =================================
     HERO
================================= -->

<section class="hero">

    <div class="hero-label">
        Medical Shopping
    </div>


    <h1>
        Find What You
        <span>Need</span>
    </h1>


    <p>
        Browse our collection of medical equipment,
        diagnostic tools and healthcare products.
        Select an item and book it through our
        simple purchase system.
    </p>


    <div class="search-area">

        <span class="search-icon">
            🔍
        </span>

        <input
            type="text"
            id="searchInput"
            placeholder="Search products by name or code..."
            onkeyup="searchProducts()"
        >

    </div>

</section>



<!-- =================================
     PRODUCTS
================================= -->

<section class="products-section">


    <div class="section-heading">

        <div>

            <h2>
                Featured Products
            </h2>

            <p>
                Quality healthcare products at reasonable prices
            </p>

        </div>

    </div>



    <div class="product-grid" id="productGrid">


        <!-- =================================
             PRODUCT 1
        ================================= -->

        <div
            class="product-card"
            data-name="microscope p001"
        >

            <div class="product-image">

                <img
                    src="microscope.jpg"
                    alt="Microscope"
                >

                <div class="product-badge">
                    Diagnostic
                </div>

            </div>


            <div class="product-content">

                <div class="product-code">
                    PRODUCT CODE: P001
                </div>


                <h3>
                    Microscope
                </h3>


                <p class="product-description">
                    Professional laboratory microscope
                    suitable for medical and diagnostic use.
                </p>


                <div class="product-bottom">

                    <div class="price">
                        ₹2,999
                        <small>/-</small>
                    </div>


                    <a
                        href="purchase.php"
                        class="book-btn"
                    >
                        BOOK NOW →
                    </a>

                </div>

            </div>

        </div>



        <!-- =================================
             PRODUCT 2
        ================================= -->

        <div
            class="product-card"
            data-name="wheel chair p002"
        >

            <div class="product-image">

                <img
                    src="telescope.jpg"
                    alt="Wheel Chair"
                >

                <div class="product-badge">
                    Mobility
                </div>

            </div>


            <div class="product-content">

                <div class="product-code">
                    PRODUCT CODE: P002
                </div>


                <h3>
                    Wheel Chair
                </h3>


                <p class="product-description">
                    Comfortable mobility equipment
                    designed for safe and convenient movement.
                </p>


                <div class="product-bottom">

                    <div class="price">
                        ₹3,999
                        <small>/-</small>
                    </div>


                    <a
                        href="purchase.php"
                        class="book-btn"
                    >
                        BOOK NOW →
                    </a>

                </div>

            </div>

        </div>



        <!-- =================================
             PRODUCT 3
        ================================= -->

        <div
            class="product-card"
            data-name="magnifier p003"
        >

            <div class="product-image">

                <img
                    src="magnifier.jpg"
                    alt="Magnifier"
                >

                <div class="product-badge">
                    Medical Tool
                </div>

            </div>


            <div class="product-content">

                <div class="product-code">
                    PRODUCT CODE: P003
                </div>


                <h3>
                    Magnifier
                </h3>


                <p class="product-description">
                    Lightweight magnification tool
                    suitable for detailed inspection and examination.
                </p>


                <div class="product-bottom">

                    <div class="price">
                        ₹500
                        <small>/-</small>
                    </div>


                    <a
                        href="purchase.php"
                        class="book-btn"
                    >
                        BOOK NOW →
                    </a>

                </div>

            </div>

        </div>


    </div>



    <div
        class="no-result"
        id="noResult"
    >
        <h3>
            No products found
        </h3>

        <p>
            Try searching with another product name or code.
        </p>

    </div>


</section>



<!-- =================================
     INFORMATION
================================= -->

<section class="info-section">

    <div class="info-box">


        <div class="info-item">

            <div class="info-icon">
                ✓
            </div>

            <h4>
                Quality Products
            </h4>

            <p>
                Carefully selected healthcare
                products for your needs.
            </p>

        </div>



        <div class="info-item">

            <div class="info-icon">
                ⚡
            </div>

            <h4>
                Easy Booking
            </h4>

            <p>
                Select your product and continue
                to the purchase page.
            </p>

        </div>



        <div class="info-item">

            <div class="info-icon">
                ♡
            </div>

            <h4>
                Customer Support
            </h4>

            <p>
                Contact our team whenever
                you need assistance.
            </p>

        </div>


    </div>

</section>



<!-- =================================
     FOOTER
================================= -->

<footer>

    © 2026 Hospital Management System.
    All Rights Reserved.

</footer>



<!-- =================================
     SEARCH JAVASCRIPT
================================= -->

<script>

function searchProducts() {

    const input =
        document
        .getElementById("searchInput")
        .value
        .toLowerCase()
        .trim();


    const products =
        document.querySelectorAll(".product-card");


    let visibleProducts = 0;


    products.forEach(function(product) {

        const productName =
            product
            .getAttribute("data-name")
            .toLowerCase();


        if (
            productName.includes(input)
        ) {

            product.style.display = "block";

            visibleProducts++;

        } else {

            product.style.display = "none";

        }

    });


    const noResult =
        document.getElementById("noResult");


    if (visibleProducts === 0) {

        noResult.style.display = "block";

    } else {

        noResult.style.display = "none";

    }

}

</script>


</body>

</html>