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
    <style>
        td {
          width: 200px;
          height: 45px;
        }
    </style>
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
               <h1>Stock Blood List</h1>
               <center><div id="form">
                   <table>
                       <tr>
                           <td><center><b><font color="blue">Name</font></b></center></td>
                           <td><center><b><font color="blue">Qty</font></b></center></td>
                       </tr>
                       
                            <tr>
                              <td><center>0+</center></td>
                              <td><center>
                                <?php
                                 $q = $db->query("Select * from donor_registration where bgroup = 'O+'");
                                 echo $row = $q->rowcount(); 
                                ?>
                              </center></td>
                            </tr>

                            <tr>
                              <td><center>AB+</center></td>
                              <td><center>
                                <?php
                                 $q = $db->query("Select * from donor_registration where bgroup = 'AB+'");
                                 echo $row = $q->rowcount(); 
                                ?>
                              </center></td>
                            </tr>

                            <tr>
                              <td><center>AB-</center></td>
                              <td><center>
                                <?php
                                 $q = $db->query("Select * from donor_registration where bgroup = 'AB-'");
                                 echo $row = $q->rowcount(); 
                                ?>
                                  
                                </center></td>
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