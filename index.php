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
  <div class="slideshow-container">


    <div class="mySlides fade">
      <img src="1.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="2.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="3.jpg" style="width:100%">
    </div>
    <script>
      let slideIndex = 0;
      showSlides();

      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 5000);
      }
    </script>
    <div class="donut">
      <table>
        <tr>
          <td>
            <a>
              <img src="d.jpg">
            </a>
          </td>
          <td>
            <div class="text1">
              <h1>A brief story of our love affair with donuts!</h1>
              <p>Our donuts are perfect for any ocassion, whether you're grabbing a quick breakfast on the go or ordering a dozen for a special event.<span id="dot">......</span><span id="more"> <br><br>They're like little bursts of happiness, with flavors that can transform an ordinary day into a celebration. We use only the finest ingredients, from real butter in our fluffy dough to fresh fruit in our fillings and glazes. That first bite? Pure bliss.</span></p>
              <button onclick="myFunction()" id="myBtn">Read more</button>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <div class="products">
      <h1>Hot Deals</h1>
      <table>
        <tr>
          <td>
            <div class="card">
              <img src="strawberry.png">
              <div class="container">
                <h4><b>Fruit Fantasia</b></h4>
                <button>Add to Cart</button>
              </div>
            </div>
          </td>
          <td>
            <div class="card">
              <img src="vanilla.png">
              <div class="container">
                <h4><b>Caramel swirls</b></h4>
                <button>Add to Cart</button>
              </div>
            </div>
          </td>
          <td>
            <div class="card">
              <img src="choc.png">
              <div class="container">
                <h4><b>Choco Chaos</b></h4>
                <button>Add to Cart</button>
              </div>
            </div>
          </td>
          <td>
            <div class="card"><img src="d.png">
              <div class="container">
                <h4><b>Coco crunch</b></h4>
                <button>Add to Cart</button>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <div class="donut2">
      <table>
        <tr>
          <td>
            <div class="text2">
              <h1>Quality commitment to doughnut ingredients.</h1>
              <table>
                <tr>
                  <td><b><img src="tick.png"></b></td>
                  <td>
                    <c>Our Commitment to Quality</c>
                  </td>
                </tr><br>
                <tr>
                  <td><b><img src="tick.png"></b></td>
                  <td>
                    <c>The Finest and Freshest Ingredients</c>
                  </td>
                </tr>
                <br>
                <tr>
                  <td><b><img src="tick.png"></b></td>
                  <td>
                    <c>Made with only the freshest and highest quality</c>
                  </td>
                </tr>
              </table>
            </div>
          </td>
          <td>
            <a><img src="donut2.jpg"></a>
          </td>
        </tr>
      </table>
    </div>

    <?php
    require_once 'footer.php';
    ?>

</body>


</html>