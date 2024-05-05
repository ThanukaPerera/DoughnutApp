<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <script src="home.js"></script> 
   
</head>
  <body>
    <div id="root">
      <div>
        <div>
          <div class="navbar">
            <table>
              <td>
                <div class="topnav">
                  <table>
                    <tr>
                      <td>
                        <a href="Home.php">Home</a>
                      </td>
                      <td>
                        <a href="#">Our Story</a>
                      </td>
                      <td>
                        <a href="products.php">Our Products</a>
                      </td>
                      <td>
                        <a href="#">Contact</a>
                      </td>
                    </tr>
                  </table>
                </div>
              </td>
              <td>
                <div class="search">
                  <img src="./Images/Home/search.svg">
                  <input type="text" placeholder="Search your Doughnut">
                </div>
              </td>
              <td>
                <div class="icon">
                  <table>
                    <td>
                      <a href="#">
                        <img src="./Images/Home/heart.png">
                      </a>
                    </td>
                    <td>
                      <a href="#">
                        <img src="./Images/Home/bag.png">
                      </a>
                    </td>
                    <td>
                      <c>
                        <img src="./Images/Home/line.png">
                      </c>
                    </td>
                    <td>
                      <a href="SignUp.html">
                        <img src="./Images/Home/profile.png">
                      </a>
                    </td>
                  </table>
                </div>
              </td>
            </table>
          </div>
        </div>
        <div class="slideshow-container">

          
          <div class="mySlides fade">
            <img src="./Images/Home/1.jpg" style="width:100%">
          </div>
        
          <div class="mySlides fade">
            <img src="./Images/Home/2.jpg" style="width:100%">
          </div>
        
          <div class="mySlides fade">
            <img src="./Images/Home/3.jpg" style="width:100%">
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
                if (slideIndex > slides.length) {slideIndex = 1}
                slides[slideIndex-1].style.display = "block";
                setTimeout(showSlides, 5000); 
              } 
          </script>
        <div class="donut">
          <table>
            <tr>
              <td>
                <a>
                  <img src="./Images/Home/d.jpg">
                </a>
              </td>
              <td>
                <div class="text1">
                  <h1>A brief story of our love affair with donuts!</h1>
                  <p>Our donuts are perfect for any ocassion, whether you're grabbing a quick breakfast on the go or ordering a dozen for a special event.<span id="dot">......</span><span id="more"> <br><br>They're like little bursts of happiness, with flavors that can transform an ordinary day into a celebration.  We use only the finest ingredients, from real butter in our fluffy dough to fresh fruit in our fillings and glazes. That first bite? Pure bliss.</span></p>
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
                  <img src="./Images/Home/strawberry.png">
                  <div class="container">
                    <h4><b>Fruit Fantasia</b></h4>
                    <button>Add to Cart</button>
                  </div>
                </div>
              </td>
              <td>
                <div class="card">
                  <img src="./Images/Home/vanilla.png">
                  <div class="container">
                    <h4><b>Caramel swirls</b></h4>
                    <button>Add to Cart</button>
                  </div>
                </div>
              </td>
              <td>
                <div class="card">
                  <img src="./Images/Home/choc.png">
                  <div class="container">
                    <h4><b>Choco Chaos</b></h4>
                    <button>Add to Cart</button>
                  </div>
                </div>
              </td>
              <td>
                <div class="card"><img src="./Images/Home/d.png">
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
                  <table><tr><td><b><img src="./Images/Home/tick.png"></b></td>
                    <td><c>Our Commitment to Quality</c></td>
                  </tr><br>
                  <tr><td><b><img src="./Images/Home/tick.png"></b></td>
                    <td><c>The Finest and Freshest Ingredients</c></td></tr>
                    <br>
                    <tr><td><b><img src="./Images/Home/tick.png"></b></td>
                      <td><c>Made with only the freshest and highest quality</c></td></tr>
                    </table>
                  </div>
                </td>
                <td>
                  <a><img src="./Images/Home/donut2.jpg"></a>
                </td>
              </tr>
            </table>
          </div>
          
      </div>
    </div>
  </div>
  
  <?php
  require_once 'footer.php';
  ?>
</body>
</html>
