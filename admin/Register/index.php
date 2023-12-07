<?php
if(isset($_GET['rn'])){
  $error=$_GET['rn'];
  echo"<script>alert('".$error.".');</script>";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="../register.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Email</span>
            <input type="email" name="reemail" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="repassword" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="date" name="data" id="">
          </div>
        <div class="button">
          <input type="submit" name="join" value="Register">
        </div>
      </form>
    </div>
    <center><p class="home"><a href="../index.php"><button>Return Home</button></a></p></center>
  </div>
<style>
  center button{
    background: linear-gradient(-135deg,#f9d806, #f6eb9e);
    padding: 8px;
    border: none;
    cursor: pointer;
  }
</style>

</body>
</html>
