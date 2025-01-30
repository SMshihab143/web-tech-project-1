<?php

include "../control/info_control.php";
include "../model/db.php";
?>
<!DOCTYPE html>
<html>
<head>
</head>
<script src="../js/pro_validation.js"></script>
<body>
<h3>Welcome to your profile</h3>
    <fieldset>
    <form action="" method="POST" onsubmit="return validateInfo()">
    <legend>*******Fill your bus information **********</legend>
     <table>   
<tr>
<td><label for="SelectBrand">Bus Brand:</label></td>
<td>
<select id="SelectBrand" name="selectBrand">
<option value="Select Brand">Select Brand</option>
<option value="Hyundai">Hyundai</option>
<option value="HINO">HINO</option>
<option value="Volvo">Volvo</option>
<option value="CCC">CCC</option>
<option value="ZZZ">ZZZ</option>
</select>
</td>
<td id="brandError"></td>
</tr>
<tr>
<td>Model Year:</td>
<td><input type="text" id="modelYear" name="modelYear"></td>
<td id="modelYearError"></td>
</tr>
<tr>
<td>Color:</td>
<td>
<input type="radio" id="colorWhite" name="color" value="White"> White
<input type="radio" id="colorBlack" name="color" value="Black"> Black
<input type="radio" id="colorBlue" name="color" value="Blue"> Blue
<input type="radio" id="colorRed" name="color" value="Red"> Red
</td>
<td id="colorError"></td>
</tr>
<tr>
<td>Chassis No:</td>
<td><input type="text" id="chesisNo" name="chesisNo">
<td id="chesisNoError"></td>
<tr></td> <td><input type="file" id="chassisFile" name="chassisFile"></td></tr>
<td id="chassisFileError"></td>

</tr>
<tr>
<td>Engine No:</td>
<td><input type="text" id="engineNo" name="engineNo"></td>
<td id="engineNoError"></td>
<tr><td><input type="file" id="engineFile" name="engineFile"></td></tr>
<td id="engineFileError"></td>

</tr>
</table>
<input type="submit" name="Submit" value="Submit">
<input type="reset" name="Reset" value="Reset">
    </form>
</fieldset>
</body>
</html>
