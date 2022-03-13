<?php require("head.php"); ?>

<div class="container custom-form-dashboard">
  <div class="navitems">
    <table style="width: 100%;">
       <tr style="width: 100%;">

              <td style="width: 20%;">
         <ul>

            <li style="color:blue;"> Account</li>
            <hr>
                    <li><a href="../Pages/Dasboard.php"><b style="color: palevioletred;">Dashboard</b></a></li>
                    <li><a href="../Pages/View Profile.php"><b style="color: palevioletred;">View Profile</b></a></li>
                    <li><a href="../Pages/Edit Profile.php"><b style="color: palevioletred;">Edit Profile</b></a></li>
                    <li><a href="../Pages/Change Profile Picture.php"><b style="color: palevioletred;">Change Profile Picture</b></a></li>
                    <li><a href="../Pages/Change Password.php"><b style="color: palevioletred;">Change Password</b></a></li>
                    
                    <li><a href="../Pages/Appointment.php"><b style="color: palevioletred;">Appointment</b></a></li>
                    <li><a href="../Pages/Prescription.php"><b style="color: palevioletred;">Prescription</b></a></li>
                   
                </ul>
               </td>
               <td style="width: 70%;">
                
               <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
                  <br>
                  <h1>Prescription: Already existed</h1><br>
                  <h3>Report: <input type="file" name="pfile"></h3><br><br>
                  <input type="submit" name="sub" value="Submit">
                  <br>
                </form>
               </td>
             </tr>
            
    </table>            
    </div>
</div>


<?php include("foot.php"); ?>