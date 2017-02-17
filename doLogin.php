<?php include('connect.php'); ?>
<?php
  $name = $_POST['name'];
  $password = md5($_POST['password']);

  $query = "SELECT * FROM user WHERE username = '$name' AND password = '$password'";
  $result = $conn->query($query);
// echo $query;
  if($result->num_rows > 0){
    header('location:home.php?err=0');
  }else{
    header('location:login.php?err=1');
  }
?>
