<?php 
session_start();
//if(isset($_SESSION["user_id"])){
  //  header('location: index.php');
//}

?>


<!DOCTYPE html>
<html lang="en">

<head>
<title>Sistema</title>
</head>

<body>

<div class="container hide">
    <h1>REGISTER</h1>
    <p class="error hide">All fields required</p>
    <form action="" method="post">
      <div class="form-outline">
        <input type="text" name="username" id="form1" class="form-control" />
        <label class="form-label" for="formControlDefault">Username</label>
      </div>
      <div class="form-outline">
        <input type="text" name="name" id="form1" class="form-control" />
        <label class="form-label" for="formControlDefault">First name</label>
      </div>
      
      
      <div class="form-outline">
        <input type="password" name="pass" id="form1" class="form-control" />
        <label class="form-label" for="form1">Password</label>
      </div>

      <div class="form-outline">

        <input type="password" name="rpass" id="form1" class="form-control" />
        <label class="form-label" for="form1">Repeat password</label>
      </div>

      <div style=" margin-top: 15px;">
        <p style="float: left; font-size: 12px; margin-top: 15px;">Alredy member? <a href="#">Sign in now!</a></p>
        <button type="button" id="register" style="float: right;" class="btn btn-dark">Register</button>
      </div>

    </form>
  </div>

</body>


</html>