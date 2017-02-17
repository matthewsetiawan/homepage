<?php include('connect.php'); ?>
<?php
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];

  $query = "INSERT INTO user(username, password, gender, dob)
  VALUES ('$username', '$password', '$gender', '$dob')";
// echo $query;
  if($conn->query($query)){
    header('location:login.php');
  }else{
    header('location:register.php?err=1');
  }
?>
