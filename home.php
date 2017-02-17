<?php include('connect.php'); ?>
<html>
<head>
  <link rel="stylesheet" href="./style/style.css"/>
</head>
<body>
  <?php include('header.php'); ?>
  <div>
    <h1><?php echo "Our Products" ?></h1>
  </div>


  <div class="flex-container">
    <?php
      $query = "SELECT * FROM product";
      $result = $conn->query($query);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
    ?>
    <div class="flex-item">
      <a href="productdes1.php"><?php echo $row['name']?></a>
      <img src="<?php echo $row['image'] ?>" class="imgsize" width="100"/>
      <div>$<?php echo $row['price']?></div>
    </div>
    <?php
        }
      } else {
        echo "No Product";
      }
      ?>
    <!-- <div class="flex-item">
      <a href="productdes1.html">Description</a>
      <img src="iphone.jpg" class="imgsize" width="100"/>
    </div>

    <div class="flex-item">
      <a href="productdes1.html">Description</a>
      <img src="iphone.jpg" class="imgsize" width="100"/>
    </div>

    <div class="flex-item">
      <a href="productdes1.html">Description</a>
      <img src="iphone.jpg" class="imgsize" width="100"/>
    </div>

    <div class="flex-item">
      <a href="productdes1.html">Description</a>
      <img src="iphone.jpg" class="imgsize" width="100"/>
    </div>

    <div class="flex-item">
      <a href="productdes1.html">Description</a>
      <img src="iphone.jpg" class="imgsize" width="100"/></a>
    </div>

    <div class="flex-item">
      <a href="productdes1.html">Description</a>
      <img src="iphone.jpg" class="imgsize" width="100"/>
    </div>

    <div class="flex-item">
      <a href="productdes1.html">Description</a>
      <img src="iphone.jpg" class="imgsize" width="100"/>
    </div>

    <div class="flex-item">
      <a href="productdes1.html">Description</a>
      <img src="iphone.jpg" class="imgsize" width="100"/>
    </div> -->
  </div>
  <?php include('footer.php'); ?>
  </div>
  <script>
  function validation(){
    var email = document.getElementById('email').value;
    if(email == ''){
      alert('Email is required!');
    }else{
      alert('Your email adress is : ' + email);
    }
  }
  </script>
</body>
</html>
