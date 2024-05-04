<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mome</title>
  <link rel="stylesheet" href="./css/style.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@200;300;400&display=swap');
  </style>
</head>

<body>
  <div class="navbar">
    <div class="logo-container">
      <a href="index.php"><img src="./Images/donut_logo.png" alt="" class="logo" /></a>
    </div>
    <div class="menu heading">
      <a href="index.php">Home</a>
      <a href="ourstory.html">Our Story</a>
      <a href="products.php">Our Products</a>
      <a href="contact.html">Contact</a>
    </div>
    <div class="icon">
      <a href="SignIn.html"><img src="./Images/Icons/user.png" alt="Sign In" class="icon" /></a>
    </div>
  </div>
  <div class="hero-section">
    <div class="hero-text">
      <h1 class="heading">
        Discover Our Delicious <br />
        Donuts Today!
      </h1>
      <p class="text">
        Our donuts are perfect for any occasion, whether you're grabbing<br />
        a quick breakfast on the go or ordering a dozen<br />
        for a special event.
      </p>
    </div>
    <div class="hero-image">
      <img src="./Images/hero_image.jpg" alt="" class="hero_image" />
    </div>
  </div>


  
</body>

<?php
require_once 'footer.php';
?>
</html>