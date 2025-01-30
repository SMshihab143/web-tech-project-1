<?php
include "../control/reg_control.php";
include "../model/db.php";
?>
 
<!DOCTYPE html>
<html>
<head>
<title>Welcome to ABC Bus Company</title>
<script src="../js/pro_validation.js"></script>
</head>
<body>
<h3>Provider Registration</h3>
<fieldset>
<form action="../view/profile.php" method="POST" onsubmit="return validateForm()">
<legend>******* Please fill up all the information **********</legend>
<table>
<tr>
<td>Full Name:</td>
<td><input type="text" id="name" name="name"></td>
<td id="nameError"></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="email" id="email" name="email"></td>
<td id="emailError"></td>
</tr>
<tr>
<td>Phone:</td>
<td><input type="tel" id="phone" name="phone"></td>
<td id="phoneError"></td>
</tr>
<tr>
<td>National ID Number:</td>
<td><input type="text" id="nationalId" name="nid"></td>
<td id="nationalIdError"></td>
</tr>
<tr>
<td>Date of Birth:</td>
<td><input type="date" id="dob" name="dob"></td>
<td id="dobError"></td>
</tr>
<tr>
<td>Address:</td>
<td><textarea id="address" name="address"></textarea></td>
<td id="addressError"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" id="Password" name="password"></td>
<td id="passwordError"></td>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type="password" id="ConfirmPassword" name="confirmPassword"></td>
<td id="confirmPasswordError"></td>
</tr>
</table>
<input type="submit" name="Submit" value="Submit">
<input type="reset" name="Reset" value="Reset">
</form>
</fieldset>
</body>
</html>