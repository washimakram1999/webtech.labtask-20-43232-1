<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

$name = $email = $dayErr = $gender = $degree= $bloodgroup = ""; 
$day=" ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  //$dateofbirth = test_input($_POST["dateofbirth"]);
  $gender = test_input($_POST["gender"]);
  $degree = test_input($_POST["degree"]);
  $bloodgroup = test_input($_POST["bloodgroup"]);
}
if (empty($_POST["day"])) {
$dayErr = "Date of birth is required";
} else {
$day = $_POST["day"];
$d = explode("-",$day);
$dd = (int)$d[2];
$mm = (int)$d[1];
$yy = (int)$d[0];
//yyyy-mm-dd



if(!($dd<=31 && $dd>=1 && $mm<=12 && $mm>=1 && $yy<=1998 && $yy>=1953)){
$dayErr = "Invalid date of birth";
$day = "";
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Code Practice</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <fieldset>
  <legend><b>NAME</b></legend>
  <input type="text"name="name">
</fieldset>
  <br><br>

  <fieldset>
  <legend><b>E-MAIL</b></legend>
  <input type="text" name="email">
  </fieldset>
  <br><br>
  
  <fieldset>
  <legend><b>DATE OF BIRTH</b></legend>
  <!--<input type="date" name="Date of Birth">-->
<input type="date" id="day" name="day" size="1"><span class="red"><?php echo $dayErr ?></span>


</fieldset>
 









  <br><br>
  
  <fieldset>
  <legend><b>GENDER</b></legend>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
</fieldset>
  <br><br>
  
  <fieldset>
  <legend><b>DEGREE</b></legend>
  
  <input type="radio" name="degree" value="SSC">SSC
  <input type="radio" name="degree" value="HSC">HSC
  <input type="radio" name="degree" value="BSC">BSC
  <input type="radio" name="degree" value="MSC">MSC
</fieldset>
  <br><br>

  <fieldset>
  <legend><b>BLOOD GROUP</b></legend>
  
  <label for="blood Group"></label>
<select name="bloodgroup" id="bloodgroup">
	<option value="">--- Choose a Blood Group ---</option>
	<option value="A+">A+</option>
	<option value="A-">A_</option>
	<option value="B+">B+</option>
    <option value="O+">O+</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O">O-</option>
  
  
  <input type="submit" name="submit" value="Submit">  
  <br>
   </fieldset>
  </form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $day;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $bloodgroup

 
?>


</body>
</html>