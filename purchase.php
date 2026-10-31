<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Purchase</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #06141f;
            color: white;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: #102d3c;
            padding: 30px;
            border-radius: 15px;
        }

        h1 {
            text-align: center;
            color: #5eead4;
            margin-bottom: 30px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .full {
            grid-column: span 2;
        }

        label {
            margin-bottom: 7px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            height: 45px;
            padding: 10px;
            border: 1px solid #456;
            border-radius: 8px;
            background: #173b4d;
            color: white;
        }

        select option {
            background: #173b4d;
            color: white;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #5eead4;
        }

        input:disabled,
        select:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .section-title {
            grid-column: span 2;
            color: #5eead4;
            border-bottom: 1px solid #456;
            padding-bottom: 10px;
            margin-top: 15px;
        }

        .buttons {
            grid-column: span 2;
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 20px;
        }

        button {
            padding: 13px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        .reset {
            background: #555;
            color: white;
        }

        .submit {
            background: #5eead4;
            color: #06202a;
        }

        @media (max-width: 650px) {

            body {
                padding: 15px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .full,
            .section-title,
            .buttons {
                grid-column: span 1;
            }

            .buttons {
                flex-direction: column;
            }

            button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Complete Your Purchase</h1>

    <form
        id="purchaseForm"
        method="post"
        action="db-shopping.php"
        onsubmit="return validatePurchase();"
    >

        <div class="form-grid">

            <!-- =========================
                 PRODUCT INFORMATION
            ========================== -->

            <div class="section-title">
                Product Information
            </div>


            <!-- CATEGORY -->

            <div class="form-group">

                <label for="Category">
                    Category *
                </label>

                <select
                    name="f1"
                    id="Category"
                    required
                    onchange="updateTypes();"
                >

                    <option value="">
                        Select Category
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

                </select>

            </div>


            <!-- TYPE -->

            <div class="form-group">

                <label for="Type">
                    Type *
                </label>

                <select
                    name="f2"
                    id="Type"
                    required
                    disabled
                    onchange="updateProductId();"
                >

                    <option value="">
                        Select Type
                    </option>

                </select>

            </div>


            <!-- PRODUCT ID -->

            <div class="form-group">

                <label for="Product_Id">
                    Product ID *
                </label>

                <input
                    type="text"
                    name="f3"
                    id="Product_Id"
                    readonly
                    required
                >

            </div>


            <!-- AMOUNT -->

            <div class="form-group">

                <label for="Amount">
                    Amount *
                </label>

                <input
                    type="number"
                    name="f4"
                    id="Amount"
                    placeholder="Enter amount"
                    min="1"
                    step="0.01"
                    required
                >

            </div>


            <!-- DATE -->

            <div class="form-group">

                <label for="Date_of_Shopping">
                    Shopping Date *
                </label>

                <input
                    type="date"
                    name="f5"
                    id="Date_of_Shopping"
                    required
                >

            </div>


            <!-- =========================
                 CUSTOMER INFORMATION
            ========================== -->

            <div class="section-title">
                Customer Information
            </div>


            <!-- USERNAME -->

            <div class="form-group">

                <label for="Username">
                    Username *
                </label>

                <input
                    type="text"
                    name="f6"
                    id="Username"
                    placeholder="Enter username"
                    required
                >

            </div>


            <!-- EMAIL -->

            <div class="form-group">

                <label for="Email">
                    Email *
                </label>

                <input
                    type="email"
                    name="f7"
                    id="Email"
                    placeholder="example@gmail.com"
                    required
                >

            </div>


            <!-- PHONE -->

            <div class="form-group">

                <label for="Phone">
                    Phone *
                </label>

                <input
                    type="text"
                    name="f8"
                    id="Phone"
                    placeholder="10 digit phone number"
                    maxlength="10"
                    pattern="[0-9]{10}"
                    required
                >

            </div>


            <!-- CITY -->

            <div class="form-group">

                <label for="City">
                    City *
                </label>

                <input
                    type="text"
                    name="f10"
                    id="City"
                    placeholder="Enter city"
                    required
                >

            </div>


            <!-- ADDRESS -->

            <div class="form-group full">

                <label for="Address">
                    Address *
                </label>

                <input
                    type="text"
                    name="f9"
                    id="Address"
                    placeholder="Enter complete address"
                    required
                >

            </div>


            <!-- =========================
                 PAYMENT INFORMATION
            ========================== -->

            <div class="section-title">
                Payment Information
            </div>


            <!-- PAYMENT MODE -->

            <div class="form-group">

                <label for="Payment_mode">
                    Payment Mode *
                </label>

                <select
                    name="f11"
                    id="Payment_mode"
                    required
                    onchange="checkPaymentMode();"
                >

                    <option value="">
                        Select Payment Mode
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

                    <option value="Cheque">
                        Cheque
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
                    name="f12"
                    id="Bank_Name"
                    placeholder="Enter bank name"
                >

            </div>


            <!-- CARD / CHEQUE NUMBER -->

            <div class="form-group">

                <label for="DD_Cheque_Card_No">
                    DD / Cheque / Card No.
                </label>

                <input
                    type="text"
                    name="f13"
                    id="DD_Cheque_Card_No"
                    placeholder="Enter reference number"
                >

            </div>


            <!-- BUTTONS -->

            <div class="buttons">

                <button
                    type="reset"
                    class="reset"
                >
                    Clear Form
                </button>

                <button
                    type="submit"
                    class="submit"
                >
                    Complete Purchase
                </button>

            </div>

        </div>

    </form>

</div>


<script>

/* ========================================
   CATEGORY → TYPE DATA
======================================== */

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
    ]

};


/* ========================================
   CATEGORY PREFIX
======================================== */

const categoryPrefix = {

    "Medicines": "MED",
    "Medical Equipment": "EQU",
    "Surgical Supplies": "SUR",
    "Diagnostic Equipment": "DIA",
    "Laboratory Supplies": "LAB",
    "Emergency Supplies": "EMR",
    "First Aid": "FAD",
    "Personal Care": "PER",
    "Hospital Furniture": "FUR"

};


/* ========================================
   UPDATE TYPE
======================================== */

function updateTypes() {

    const category =
        document.getElementById("Category");

    const type =
        document.getElementById("Type");

    const productId =
        document.getElementById("Product_Id");


    /* Clear previous values */

    type.innerHTML =
        '<option value="">Select Type</option>';

    productId.value = "";


    /* No category selected */

    if (category.value === "") {

        type.disabled = true;

        return;
    }


    /* Enable Type */

    type.disabled = false;


    /* Get type list */

    const types =
        typeData[category.value];


    if (!types) {
        return;
    }


    /* Add options */

    types.forEach(function(item) {

        const option =
            document.createElement("option");

        option.value = item;

        option.textContent = item;

        type.appendChild(option);

    });

}


/* ========================================
   GENERATE PRODUCT ID
======================================== */

function updateProductId() {

    const category =
        document.getElementById("Category").value;

    const type =
        document.getElementById("Type").value;

    const productId =
        document.getElementById("Product_Id");


    /* Clear Product ID */

    productId.value = "";


    /* Check values */

    if (
        category === "" ||
        type === ""
    ) {

        return;
    }


    const prefix =
        categoryPrefix[category];


    /* Create 3-letter type code */

    const typeCode =
        type
        .replace(/[^A-Za-z]/g, "")
        .substring(0, 3)
        .toUpperCase();


    /* Generate ID */

    productId.value =
        prefix + "-" +
        typeCode + "-001";

}


/* ========================================
   PAYMENT MODE
======================================== */

function checkPaymentMode() {

    const payment =
        document.getElementById("Payment_mode").value;

    const bank =
        document.getElementById("Bank_Name");

    const card =
        document.getElementById("DD_Cheque_Card_No");


    if (
        payment === "" ||
        payment === "Cash"
    ) {

        bank.required = false;
        card.required = false;

    } else {

        bank.required = true;
        card.required = true;

    }

}


/* ========================================
   VALIDATE PURCHASE
======================================== */

function validatePurchase() {

    const category =
        document.getElementById("Category").value;

    const type =
        document.getElementById("Type").value;

    const productId =
        document.getElementById("Product_Id").value;

    const phone =
        document.getElementById("Phone").value.trim();


    /* Category */

    if (category === "") {

        alert("Please select Category.");

        return false;
    }


    /* Type */

    if (type === "") {

        alert("Please select Type.");

        return false;
    }


    /* Product ID */

    if (productId === "") {

        updateProductId();
    }


    /* Check Product ID again */

    if (
        document.getElementById("Product_Id").value === ""
    ) {

        alert("Product ID could not be generated.");

        return false;
    }


    /* Phone validation */

    const phonePattern =
        /^[0-9]{10}$/;


    if (!phonePattern.test(phone)) {

        alert(
            "Please enter a valid 10-digit phone number."
        );

        document
            .getElementById("Phone")
            .focus();

        return false;
    }


    /* Confirmation */

    return confirm(
        "Are you sure you want to place this purchase?"
    );

}


/* ========================================
   PAGE LOAD
======================================== */

window.onload = function() {

    const dateInput =
        document.getElementById("Date_of_Shopping");


    const today =
        new Date()
        .toISOString()
        .split("T")[0];


    dateInput.max = today;


    checkPaymentMode();

};

</script>

</body>
</html>