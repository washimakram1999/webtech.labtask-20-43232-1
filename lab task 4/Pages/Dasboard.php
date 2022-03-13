<?php require("head.php"); ?>

<div class="container custom-form-dashboard">
	<div class="navitems">
		<table style="width: 100%;">
			 <tr style="width: 100%;">

              <td style="width: 20%;">
			   <ul>

			   		<li style="color:blue;"> Account</li>
			   		<hr>
                    <li><a href="../Pages/Dasboard.php"><b style="color: black;">Dashboard</b></a></li>
                    <li><a href="../Pages/View Profile.php"><b style="color: black;">View Profile</b></a></li>
                    <li><a href="../Pages/Edit Profile.php"><b style="color: black;">Edit Profile</b></a></li>
                    <li><a href="../Pages/Change Profile Picture.php"><b style="color: black;">Change Profile Picture</b></a></li>
                    <li><a href="../Pages/Change Password.php"><b style="color: black;">Change Password</b></a></li>
                    <li><a href="../Pages/Appointment.php"><b style="color: black;">Appointment</b></a></li>
                    <li><a href="../Pages/Prescription.php"><b style="color: black;">Prescription</b></a></li>
                    
                </ul>
               </td>
               <td style="width: 70%;">
               	<h1>
               	<?php
					echo "Welcome Doctor ".$_SESSION['username'];

					

					?></h1>
               </td>
             </tr>
            
		</table>            
    </div>
</div>
<?php require("foot.php"); ?>