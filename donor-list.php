<?php
 include('connection.php');
 session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/s1.css">
</head>
<body>
    <div class="full">
       <div id="innner-full">
           <div id="header"><h2><a href="admin-home.php" style="text-decoration: none; color: #FFF" >Blood Bank Managment System</a></h2></div>
           <div id="body">
               <br>
               <?php
                   
                  $un = $_SESSION['un'];

                  if (!$un) {
                    header("location:index.php");
                  }
               ?>
               <h1>Donor Registration</h1>
               <center><div id="form">
                   <table>
                       <tr>
                           <td><center><b>Name</b></center></td>
                       </tr>
                   </table>
                   
                </div></center> 
               
           </div>
           <div id="footer"><h4 align="center">Copyright@myProjecthd</h4>
              <p align="center"><a href="logout.php"><font color="#FFF">LogOut</font></a></p>

           </div>
       </div>
    </div>
</body>
</html>