<!DOCTYPE html>
<html>

<head>
  <title>ContactPage</title>
  <link rel="stylesheet" href="./css/ContactPage.css">
  <link href="https://fonts.googleapis.com/css2?family=Itim&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="ContactPage.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@200;300;400&display=swap');
  </style>

</head>

<body>
  <?php
  require_once 'navbar.php';
  ?>
  <div>
    <div class="MainContainer">
      <div class="container01">
        <div class="image">
          <img src="./Images/Doughnuts04.jpg" alt="Doughnut">
          <div class="overlay">
            <div class="textincontact text">Sprinkled with love, served with joy!</div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="form-container">
          <form id="myForm"  action="massage.php" method="POST" class="text">
            <h1 class="heading">Connect with Us</h1>
            <p class="FormRow">
              <label for="name">Name*:</label>
              <input type="text" id="name" name="name"><br>
              <span id="name-error" class="error-message"></span><br>
            </p>
            <p class="FormRow">
              <label for="email" >Email*:</label>
              <input type="text" id="email" name="email"><br>
              <span id="email-error" class="error-message"></span><br>
            </p>
            <p class="FormRow">
              <label for="phone">Phone:</label>
              <input type="tel" id="phone" name="phone"><br><br>
            </p>
            <p class="FormRow">
              <label for="message">Message:</label>
              <textarea id="message" cols="25" rows="5" name="massage"></textarea><br><br>
            </p>

            
            <input type="reset" class="btn text"  value="Reset">
            <input type="submit" value="Submit" id="submit" class="btn text">
            
          </form>
        </div>
        <div class="locationincontact text">
          <p id="add"><b>Address:</b> No: 590, Galle Road, Colombo 03.</p>
          <p id="phn"><b>Phone:</b> +94 77 885 567</p>
          <p id="mail"><b>email:</b> <a href="mailto:info@doughnuts.com">info@doughnuts.com</a></p><br>
          <p>Hours : Monday-Sunday - 09.00 a.m to 10.00 p.m</p>
          <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9211167386306!2d79.84773086832546!3d6.900037503449882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2596065a9410d%3A0xd7bbdfa9819c29f8!2s590%20Galle%20Rd%2C%20Colombo%2000300!5e0!3m2!1sen!2slk!4v1714649384758!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

    </div>
  </div>
  <?php
  require_once 'footer.php';
  ?>


</body>

</html>