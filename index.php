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
           <div id="header"><h2>Blood Bank Managment System</h2></div>
           <div id="body">
               <br><br><br><br><br>
               <form action="" method="post">
                    <table align="center">
                        <tr>
                            <td width="200px" height="70px"><b><center>User Name</center></b></td>
                            <td width="100px" height="70px"><input type="text" name="un" placeholder="Enter Username" style="width:180px; height:30px; border-radius:10px;"></td>
                        </tr>

                        <tr>
                            <td width="200px" height="70px"><b><center>Password</center></b></td>
                            <td width="200px" height="70px"><input type="text" name="ps" placeholder="Enter Password" style="width:180px;height:30px;border-radius:10px;"></td>
                        </tr>

                            <tr>
                            <td align="center"><input type="submit" name="sub" value="Login" style="width:70px; height:30px; border-radius:5px;"></td>
                        </tr>
                    </table>
               </form>
               <?php
                  if (isset($_POST['sub'])){
                      $un = $_POST['un'];
                      $ps = $_POST['ps'];
                      $q = $db->prepare("Select *from admin Where uname='$un' && pass='$ps'"); 
                      $q->execute();
                      $res = $q->fetchAll(PDO::FETCH_OBJ);
                      // print_r($res);
                      if ($res) {
                        
                        $_SESSION['un'] = $un;
                        header("location:admin-home.php");
                      }else{
                        echo "<script>alert('Wrong User');</script>";
                      }
                      
                  }
               
               ?>
           </div>
           <div id="footer"><h4 align="center">Copyright@myProjecthd</h4></div>
       </div>
    </div>
</body>
</html>