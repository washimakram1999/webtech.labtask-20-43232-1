
<html>
<body>
   <fieldset>
  <legend><b>LOGIN</b></legend>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  User Name:<input type="text" name="fname"><br> <br>
  Password :<input type="text" name="fpasswors">
  <hr style="color: black;">
  <br> <br>
  <input type="checkbox">
  <label> Remember Me </label>
<br><br>

  <input type="submit">
  <label style="color: blue; "><u> Forgot Password?</u></label>

</fieldset>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($name)) 
      {
        
      } 
    else 
      {
      
      }

    if (empty($password)) 
      {
        
      } 
    else 
      {
        
      }


}

?>

</body>
</html>