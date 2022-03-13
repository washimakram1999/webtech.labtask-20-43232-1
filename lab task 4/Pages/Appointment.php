<?php require("head.php"); ?>

 
<div class="container custom-form-dashboard">
  <div class="navitems">
    <table style="width: 100%;">
       <tr style="width: 100%;">

              <td style="width: 20%;">
         <ul>

           <li style="color:blue;"> Account</li>
            <hr>
                    <li><a href="../Pages/Dasboard.php"><b style="color: maroon;">Dashboard</b></a></li>
                    <li><a href="../Pages/View Profile.php"><b style="color: maroon;">View Profile</b></a></li>
             <li><a href="../Pages/Edit Profile.php"><b style="color: maroon;">Edit Profile</b></a></li>
            <li><a href="../Pages/Change Profile Picture.php"><b style="color: maroon;">Change Profile Picture</b></a></li>
                   <li><a href="../Pages/Change Password.php"><b style="color: maroon;">Change Password</b></a></li>
                    
                    <li><a href="../Pages/Appointment.php"><b style="color: maroon;">Appointment</b></a></li>
                <li><a href="../Pages/Prescription.php"><b style="color: maroon;">Prescription</b></a></li>
                    
                </ul>
               </td>
               <td style="width: 70%;">
                 <div class="container custom-form" style="width:500px;">  
                                
                <form method="post">  
                      
                     <br>  
                     <fieldset>
                         <legend> APPOINTMENT</legend>
                         <br> <br> 
                         
                           

<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>



<table style="width:100%">
  <tr>
    <th>Patient Name</th>
    <th>Patient Gender</th>
    <th>Appointment date</th>
  </tr>
  <tr>
    <td>Yeasir Hosain</td>
    <td>Male</td>
    <td>15/03/2022</td>
  </tr>
  <tr>
    <td>Anika saba</td>
    <td>Female</td>
    <td>16/03/2022</td>
  </tr>
</table>



</body>
</html>





























                          </fieldset>
                          <hr> 
                     
                </form>  
           </div>  
                    <?php
                    $message="Appointment is taken successfully";
                    if(isset($_POST["submit"]))  
                    {  
                        echo $message; 
                    }
                    ?> 

               </td>
             </tr>
            
    </table>            
    </div>
</div>


<?php include("foot.php"); ?>