<?php
session_start();
include "../model/db.php";
$isValid = true;

// Initialize required variables
$name = $email = $phone = $address = $dob = $nationalId = $password = $confirmPassword = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name
    if (empty($_POST["name"]) || !preg_match("/^[a-zA-Z\s]{4,50}$/", $_POST["name"])) {
        $isValid = false;
        echo "Error: Please enter a valid name (4-50 alphabetic characters).<br>";
    } else {
        $name = $_POST["name"];
    }

    // Validate Email
    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        echo "Error: Please enter a valid email address.<br>";
    } else {
        $email = $_POST["email"];
    }

    // Validate Phone
    if (empty($_POST["phone"]) || !preg_match("/^0[0-9]{10}$/", $_POST["Phone"])) {
        $isValid = false;
        echo "Error: Please enter a valid phone number (11 digits starting with 0).<br>";
    } else {
        $phone = $_POST["phone"];
    }

    // Validate National ID
    if (empty($_POST["nid"])) {
        $isValid = false;
        echo "Error: Please enter your National ID.<br>";
    } else {
        $nationalId = $_POST["nid"];
    }

    // Validate Date of Birth
    if (empty($_POST["dob"])) {
        $isValid = false;
        echo "Error: Please select your date of birth.<br>";
    } else {
        $dob = $_POST["dob"]; // Directly assign raw POST value
    }

    // Validate Address
    if (empty($_POST["address"])) {
        $isValid = false;
        echo "Error: Please enter your address.<br>";
    } else {
        $address = $_POST["address"];
    }

    // Validate Password
    if (empty($_POST["password"])) {
        $isValid = false;
        echo "Error:.<br>";
    } else {
        $password = $_POST["password"];
    }

    // Confirm Password
    if (empty($_POST["confirmPassword"]) || $_POST["confirmPassword"] !== $_POST["password"]) {
        $isValid = false;
        echo "Error: Passwords do not match.<br>";
    } else {
        $confirmPassword = $_POST["confirmPassword"];
    }

   
    if ($isValid) {
        $myDB = new myDB();
        $conn = $myDB->connectionObject();
        $result = $myDB->insert($conn, "proinfo",$name, $email, $phone, $nationalId, $dob, $address, $password);

        if ($result === true) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $result;
        }

        $myDB->closeCon($conn);
    } 
    else {
        echo "Please correct the above errors and try again.";
    }
}
?>
