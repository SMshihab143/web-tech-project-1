function validateForm() {
    var isValid = true;
 
    // Clear previous error messages
    document.getElementById('nameError').innerHTML = '';
    document.getElementById('emailError').innerHTML = '';
    document.getElementById('phoneError').innerHTML = '';
    document.getElementById('nationalIdError').innerHTML = '';
    document.getElementById('dobError').innerHTML = '';
    document.getElementById('addressError').innerHTML = '';
    
 
    // Validate Name
    var name = document.getElementById('name').value;
    var namePattern = /^[A-Za-zÀ-ÿ\s]+$/;
    if (name == "" || !namePattern.test(name)) {
        document.getElementById('nameError').innerHTML = "Please enter a valid name (alphabetic only).";
        isValid = false;
    }
 
    // Validate Email
    var email = document.getElementById('email').value;
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (email == "" || !emailPattern.test(email)) {
        document.getElementById('emailError').innerHTML = "Please enter a valid email address.";
        isValid = false;
    }
 
    // Validate Phone Number
    var phone = document.getElementById('phone').value;
    var phonePattern = /^0[0-9]{10}$/;  // Assumes 11-digit phone number
    if (phone == "" || !phonePattern.test(phone)) {
        document.getElementById('phoneError').innerHTML = "Please enter a valid 11-digit phone number.";
        isValid = false;
    }
 
    // Validate National ID Number
    var nationalId = document.getElementById('nationalId').value;
    if (nationalId == "") {
        document.getElementById('nationalIdError').innerHTML = "Please enter your National ID.";
        isValid = false;
    }
 
    // Validate Date of Birth
    var dob = document.getElementById('dob').value;
    if (dob == "") {
        document.getElementById('dobError').innerHTML = "Please enter your Date of Birth.";
        isValid = false;
    }
 
    // Validate Address
    var address = document.getElementById('address').value;
    if (address == "") {
        document.getElementById('addressError').innerHTML = "Please enter your address.";
        isValid = false;
    }
 
    
 
    // Validate Password
    var password = document.getElementById('Password').value;
    if (password == "") {
        document.getElementById('passwordError').innerHTML = "Please enter a password.";
        isValid = false;
    }
 
    // Validate Confirm Password
    var confirmPassword = document.getElementById('ConfirmPassword').value;
    if (confirmPassword == "") {
        document.getElementById('confirmPasswordError').innerHTML = "Please confirm your password.";
        isValid = false;
    } else if (password !== confirmPassword) {
        document.getElementById('confirmPasswordError').innerHTML = "Passwords do not match.";
        isValid = false;
    }
 
    return isValid;
}
function validateInfo() {
    var isValid = true;

    // Reset error messages
    document.getElementById('brandError').innerHTML = '';
    document.getElementById('modelYearError').innerHTML = '';
    document.getElementById('colorError').innerHTML = '';
    document.getElementById('chesisNoError').innerHTML = '';
    document.getElementById('engineNoError').innerHTML = '';
    document.getElementById('chassisFileError').innerHTML = '';
    document.getElementById('engineFileError').innerHTML = '';

    // Validate Bus Brand Selection
    var brand = document.getElementById('SelectBrand').value;
    if (brand == "Select Brand") {
        document.getElementById('brandError').innerHTML = "Please select a bus brand.";
        isValid = false;
    }

    // Validate Model Year
    var modelYear = document.getElementById('modelYear').value;
    var modelYearPattern = /^[0-9]{4}$/; // Assumes 4-digit year format
    if (modelYear == "" || !modelYearPattern.test(modelYear)) {
        document.getElementById('modelYearError').innerHTML = "Please enter a valid model year.";
        isValid = false;
    }

    // Validate Color (radio buttons)
    var colorSelected = false;
    var colorOptions = document.getElementsByName('color');
    for (var i = 0; i < colorOptions.length; i++) {
        if (colorOptions[i].checked) {
            colorSelected = true;
            break;
        }
    }
    if (!colorSelected) {
        document.getElementById('colorError').innerHTML = "Please select a color.";
        isValid = false;
    }

    // Validate Chassis No
    var chasisNo = document.getElementById('chesisNo').value;
    if (chasisNo == "") {
        document.getElementById('chesisNoError').innerHTML = "Please enter the chassis number.";
        isValid = false;
    }

    // Validate Engine No
    var engineNo = document.getElementById('engineNo').value;
    if (engineNo == "") {
        document.getElementById('engineNoError').innerHTML = "Please enter the engine number.";
        isValid = false;
    }

    // Validate Chassis File
    var chassisFile = document.getElementById('chassisFile').files[0];
    if (!chassisFile) {
        document.getElementById('chassisFileError').innerHTML = "Please upload the chassis file.";
        isValid = false;
    } else {
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i;
        if (!allowedExtensions.test(chassisFile.name)) {
            document.getElementById('chassisFileError').innerHTML = "Only JPG, JPEG, PNG, or PDF files are allowed.";
            isValid = false;
        }
    }

    // Validate Engine File
    var engineFile = document.getElementById('engineFile').files[0];
    if (!engineFile) {
        document.getElementById('engineFileError').innerHTML = "Please upload the engine file.";
        isValid = false;
    } else {
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i;
        if (!allowedExtensions.test(engineFile.name)) {
            document.getElementById('engineFileError').innerHTML = "Only JPG, JPEG, PNG, or PDF files are allowed.";
            isValid = false;
        }
    }

    return isValid;
}

 