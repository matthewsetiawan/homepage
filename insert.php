<?php include('connect.php'); ?>
<?php
  $query = "INSERT INTO PRODUCT(name, description, price, image)
  VALUES('IPhone 6','IPhone 6','400','iphone.jpg')";
  if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
?>
