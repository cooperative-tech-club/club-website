
<?php

include ('server.php');
?>


<!DOCTYPE html>
<html>
<head>
  <title>SIGNUP </title>
   <link rel="stylesheet" type="text/css" href="includes/login.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>SIGNUP </h2>
  </div>
   
 <form action="reg.php" method="post">
   <?php include('includes/errors.php'); ?>
    <div class="input-group">
      <label>Name</label>
      <input type="text" name="name" >
    </div>
 <div class="input-group">
      <label>Registration Number</label>
      <input type="text" name="reg" >
    </div>  

 <div class="input-group">
      <label>CUK students email</label>
      <input type="text" name="email" >
    </div>  
   <div class="input-group">
      <label>Course</label>
      <input type="text" name="course" >
    </div>
 <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1" >
    </div>
 <div class="input-group">
      <label>Confirm Paassword</label>
      <input type="password" name="password_2" >
    </div>
   <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="log.php">Login</a>
      <br>
       </p>
    </form>
    
</body>
</html>