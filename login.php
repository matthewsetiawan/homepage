<!DOCTYPE html>
  <html>
  <head>
    <title>Login Page</title>
    <style>
    .box2 {
        background-color: #e6e6e6;
        width: 300px;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
        padding: 25px;
    }
    </style>
      <link rel="stylesheet" href="./style/style.css"/>
  </head>
  <body style='text-align: center;'>
    <?php include('header.php'); ?>
    <img src="google.png" width='120'/>
    <h3>Sign in to your account</h3>
    <div class='box2'>
      <img src="profile.png" width='100' style="margin-bottom: 10px">
    <form method="POST" action="doLogin.php">
  Username:<br>
  <input type="text" name="name" value="" placeholder="username" required="required">
  <br>
  Password:<br>
  <input type="password" name="password" value=""placeholder="password" required="required">
  <br><br>
  <input type="submit" value="Submit">
  <div style="color:red;"><?php
    switch($_GET['err'])
    {
      case 1: echo 'gagal login';
      break;
      default:
      break;
    }
  ?></div>
  <div style='color: blue'>find my account</div>
</form>
</div>
<img src="icon.png" width='300' style="margin-top: 50px">
<?php include('footer.php'); ?>
  </body>
  </html>
