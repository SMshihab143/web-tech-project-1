<?php
session_start();
include "../model/db.php";

$isValid = true;
$engineNo = $chesisNo = $color = $modelYear = $busBrand = "";
$errorMessages = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Bus Brand
    if (!isset($_POST["selectBrand"]) || $_POST["selectBrand"] === "select Brand") {
        $isValid = false;
        $errorMessages[] = "Please select a bus brand.";
    } else {
        $busBrand = $_POST["selectBrand"];
    }

    // Validate Model Year
    if (empty($_POST["modelYear"]) || !preg_match("/^[0-9]{4}$/", $_POST["modelYear"])) {
        $isValid = false;
        $errorMessages[] = "Please enter a valid 4-digit model year.";
    } else {
        $modelYear = $_POST["modelYear"];
    }

    // Validate Color
    if (empty($_POST["color"])) {
        $isValid = false;
        $errorMessages[] = "Please select a color.";
    } else {
        $color = $_POST["color"];
    }

    // Validate Chassis No
    if (empty($_POST["chesisNo"])) {
        $isValid = false;
        $errorMessages[] = "Please enter the chassis number.";
    } else {
        $chesisNo = $_POST["chesisNo"];
    }

    // Validate Engine No
    if (empty($_POST["engineNo"])) {
        $isValid = false;
        $errorMessages[] = "Please enter the engine number.";
    } else {
        $engineNo = $_POST["engineNo"];
    }

   
    
    if ($isValid) {
        $myDB = new myDB();
        $conn = $myDB->connectionObject();
        $result = $myDB->insertBusInfoData($conn,"businfo", $busBrand, $modelYear, $color, $engineNo, $chesisNo, $email);

        if ($result === true) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $result;
        }

        $myDB->closeCon($conn);
    } else {
        echo "Please correct the above errors and try again.";
    }
}
?>
