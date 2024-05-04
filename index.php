<?php
require_once 'config.php';

$sql = "SELECT * FROM product";
$all_product = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mome</title>
  <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
  <div class="navbar">
    <div class="logo-container">
      <a href="index.html"><img src="./Images/donut_logo.png" alt="" class="logo" /></a>
    </div>
    <div class="menu">
      <a href="index.html">Home</a>
      <a href="ourstory.html">Our Story</a>
      <a href="ourproducts.html">Our Products</a>
      <a href="contact.html">Contact</a>
    </div>
    <div class="icon">
      <a href="SignIn.html"><img src="./Images/Icons/user.png" alt="Sign In" class="icon" /></a>
    </div>
  </div>
  <div class="hero-section">
    <div class="hero-text">
      <h1>
        Discover Our Delicious <br />
        Donuts Today!
      </h1>
      <p>
        Our donuts are perfect for any occasion, whether you're grabbing<br />
        a quick breakfast on the go or ordering a dozen<br />
        for a special event.
      </p>
    </div>
    <div class="hero-image">
      <img src="./Images/hero_image.jpg" alt="" class="hero_image" />
    </div>
  </div>




  <?php
  while ($row = $all_product->fetch_assoc()) {
  ?>
    <div class="products">
      <div class="card">
        <div class="image">
          <?php
          // Display product image
          echo '<img src="data:image/jpeg;base64,' . base64_encode($row["product_image"]) . '" alt="">';
          ?>
        </div>
        <div class="caption">
          <!-- Display other product details -->
          <p class="rate">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </p>
          <p class="product_name"><?php echo $row["product_name"]; ?></p>
          <p class="price"><b>$<?php echo $row["price"]; ?></b></p>
        </div>
        <button class="add" data-id="<?php echo $row["product_id"]; ?>">Add to cart</button>
      </div>
    </div>
  <?php
  }
  ?>


</body>

</html>