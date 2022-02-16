<html>
<head>
</head>
<body>

<?php

$cpErr = $npErr = $rpErr ="";
$cp = $np = $rp ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["cp"])) {
$cpErr = "Current Password is required";
} else {
$cp = test_input($_POST["cp"]);
}



if (empty($_POST["np"])) {
$npErr = "New password is required";
} else {
$np = test_input($_POST["np"]);
}


if (empty($_POST["rp"])) {
$rpErr = "Same password is required";
} else {
$rp = test_input($_POST["rp"]);
}
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>
 <fieldset>
  <legend><b>CHANGE PASSWORD</b></legend>
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


Current Password: <input type="text" name="cp">
<span class="error">* <?php echo $cpErr;?></span>
<br><br>
<label style="color: green;">New Password:    </label> 
<input type="text" name="np">
<span class="error">* <?php echo $npErr;?></span>
<br><br>

<label style="color: red;">Retype new Password:</label>
 <input type="text" name="rp">
<span class="error">* <?php echo $rpErr;?></span>
<hr style="color: black;">
<br><br>

<input type="submit" name="submit" value="Submit"> 
</fieldset>


</form>



</body>
</html>