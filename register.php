<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
    .box2 {
        background-color: #e6e6e6;
        width: 300px;
        /*height: 300px;*/
        margin-left: auto;
        margin-right: auto;
        padding: 25px;
    }
    </style>
      <link rel="stylesheet" href="./style/style.css"/>
  </head>
  <body style='text-align: center;'>
    <?php include('header.php'); ?>
    <img src="iphone.png" width='120'/>
    <h3>Register</h3>
    <div class='box2'>
      <img src="profile.png" width='100' style="margin-bottom: 10px">
    <form method="post" action="doRegister.php">
  Username:<br>
  <input type="text" name="username" value="" placeholder="username">
  <br>
  Password:<br>
  <input type="password" name="password" value=""placeholder="password">
  <br><br>
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="female">Female
  <br><br>
  Date of birth:<br>
  <input type="date" name="dob" value=""placeholder="month/day/year">
  <input type="submit" value="Submit">
  <div style="color:red;"><?php
    switch($_GET['err'])
    {
      case 1: echo 'gagal register';
      break;
      default:
      break;
    }
  ?></div>
  <a href="home.php">Go back to Home</a>
</form>
</div>
<?php include('footer.php'); ?>
  </body>
  </html>
