<?php
require_once 'config.php';

$sql = "SELECT DISTINCT COUNT(did) as idCount FROM doughnut";
$all_product = $conn->query($sql);
$row = $all_product->fetch_assoc();
$count = $row["idCount"];

$rows = round(($count + 2) / 3);
?>


<html lang="en">

<head>
  <title>Home</title>
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="./css/products.css">
  <script src="home.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@200;300;400&display=swap');
  </style>

</head>

<body>
  <div id="root">
    <div>
      <div>
        <?php
        require_once 'navbar.php';
        ?>

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
            if (slideIndex > slides.length) {
              slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 5000);
          }
        </script>

        <div class="donut">
          <div>
            <img src="./Images/Home/d.jpg">
          </div>
          <div class="text1">
            <h1 class="heading">A brief story of our love affair with donuts!</h1>
            <p class="text">Our donuts are perfect for any ocassion, whether you're grabbing a quick breakfast on the go or ordering a dozen for a special event.<span id="dot">......</span><span id="more"> <br><br>They're like little bursts of happiness, with flavors that can transform an ordinary day into a celebration. We use only the finest ingredients, from real butter in our fluffy dough to fresh fruit in our fillings and glazes. That first bite? Pure bliss.</span></p>
            <button onclick="myFunction()" id="myBtn" class="heading">Read more</button>
          </div>
        </div>

        <div class="hotdeals">
          <h1 class="heading">Hot Deals</h1>
        </div>
        <?php
        $start = 0;
        while ($rows > 8) {
          $sql = "SELECT * FROM doughnut LIMIT $start,3";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
        ?>
            <div class="row">

              <?php
              while ($row = $result->fetch_assoc()) {
              ?>
                <div class="card">
                  <div class="image">
                    <img src="./Images/doughnuts/<?php echo $row["dlocation"]; ?>.jpg" alt="">
                  </div>
                  <div class="caption">
                    <h3 class="product_name heading"><?php echo $row["dname"]; ?></h3>
                    <p class="ddescription text"><?php echo $row["ddescription"]; ?></p>

                    <h3 class="price heading"><b>$<?php echo $row["dprice"]; ?></b></h3>
                  </div>
                  <button class="heading"> Add to cart</button>
                </div>
              <?php
              }
              ?>
            </div>
        <?php
          } else {
            echo "<script>alert('No records found');</script>";
          }

          $start += 3;
          $rows -= 1;
        }
        
        ?>


        <div class="donut">
          <div class="text1">
            <h1 class="heading">Quality commitment to doughnut ingredients.</h1>
            <div class="flex tickcontent text">
              <img src="./Images/Home/tick.png">
              <p>Our Commitment to Quality</p>
            </div>
            <div class="flex tickcontent text">
              <img src="./Images/Home/tick.png">
              <p>The Finest and Freshest Ingredients</p>
            </div>
            <div class="flex tickcontent text">
              <img src="./Images/Home/tick.png">
              <p>Made with only the freshest and highest quality</p>
            </div>
          </div>
          <div>
            <img src="./Images/Home/donut2.jpg">
          </div>

        </div>



      </div>
    </div>
  </div>

  <?php
  require_once 'footer.php';
  ?>
</body>

</html>