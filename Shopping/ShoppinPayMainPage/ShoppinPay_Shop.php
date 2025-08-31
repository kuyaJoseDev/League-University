<?php
session_start();

// Redirect to login page if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../ShoppinPayLogin/ShoppinPay.php");
    exit;
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ShoppinPay - Home</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="stylesheet" href="../ShoppinPayCSS/ShoppinPay_Shop.css">
</head>
<body>

  <!-- Navbar -->
  <nav>
    <div class="logo">ShoppinPay</div>
    <ul>
      <li><a href="ShoppinPay_Home_Page.php">Home</a></li>
      <li>
        <!-- Floating Cart Icon -->
        <div id="floatingCart">🛒 <span id="cartCount">0</span></div>
        <div id="cartDropdown">
          <h3>Your Cart</h3>
          <div id="cartItems"></div>
          <hr>
          <p>Total: <span id="cartTotal">0</span> PHP</p>
          <button id="checkoutBtn">Checkout</button>
        </div>
      </li>
      <li><a href="../ShoppinPayLogin/ShoppinPay.php">Logout</a></li>
    </ul>
  </nav>


  <!-- Search Bar -->
  <div class="search-container" style="text-align:center; margin: 30px 0;">
    <input type="text" id="searchInput" placeholder="Search for a product..."
           style="padding: 10px 15px; width: 80%; max-width: 400px; border-radius: 20px; border: 1px solid #ccc; font-size:16px;">
  </div>

  <!-- Products Section -->
  <section class="products">

  <div class="product-card">
  <div class="product-image h1-img"
       data-images="img/Own_the_Game_3_Shoes__White1.jpg,img/Own_the_Game_3_Shoes__White3.jpg,img/Own_the_Game_3_Shoes__White2.jpg"></div>
  <p>2,900.00 PHP</p>
      <button class="add-to-cart-btn" data-name="Own the Game 3 Shoes White" data-price="2900">Add to Cart</button>
    </div>

    <div class="product-card">
      <div class="product-image h2-img" data-images="img/Own_the_Game_3_Shoes_Black1.jpg,img/Own_the_Game_3_Shoes_Black2.jpg,img/Own_the_Game_3_Shoes_Black3.jpg"></div>
      <h2>Adidas Own the Game Shoes Black adidas Finland</h2>
      <p>3,000.00 PHP</p>
      <button class="add-to-cart-btn" data-name="Adidas Own the Game Shoes Black adidas Finland" data-price="3000">Add to Cart</button>
    </div>

    <div class="product-card">
      <div class="product-image h3-img" data-images="img/adidas_Own_the_Game_3_Shoes_Black _adidas_UK1.jpg,img/adidas_Own_the_Game_3_Shoes_Black _adidas_UK2.jpg,img/adidas_Own_the_Game_3_Shoes_Black _adidas_UK3.jpg"></div>
      <h3>adidas Own the Game 3 Shoes - Black | adidas UK</h3>
      <p>3,199.00 PHP</p>
      <button class="add-to-cart-btn" data-name="adidas Own the Game 3 Shoes - Black | adidas UK" data-price="3199">Add to Cart</button>
    </div>  

    <div class="product-card">
      <div class="product-image h4-img" data-images="img/Handball_Shoes_adidas_Own_The_Game_3.0_1.jpg,img/Handball_Shoes_adidas_Own_The_Game_3.0_2.jpg,img/Handball_Shoes_adidas_Own_The_Game_3.0_3.jpg"></div>
      <h4>Handball Shoes adidas Own The Game 3.0</h4>
      <p>3,000.00 PHP</p>
      <button class="add-to-cart-btn" data-name="Handball Shoes adidas Own The Game 3.0" data-price="3000">Add to Cart</button>
    </div>

    <div class="product-card">
      <div class="product-image h5-img" data-images="img/Tokyo_Shoes_Black1.jpg,img/Tokyo_Shoes_Black2.jpg,img/Tokyo_Shoes_Black3.jpg"></div>
      <h5>Tokyo Shoes - Black</h5>
      <p>1,999.00 PHP</p>
      <button class="add-to-cart-btn" data-name="Tokyo Shoes - Black" data-price="1999">Add to Cart</button>
    </div>

  </section>

  <!-- Slideshow Overlay -->
<div id="slideshowOverlay" style="display:none;">
  <span id="closeBtn">&times;</span>
  <img id="slideshowImg" src="" alt="Product Image">
  <button id="prevBtn">&#10094;</button>
  <button id="nextBtn">&#10095;</button>
  <div id="dotsContainer"></div>
</div>



  <!-- Footer -->
  <footer>
    <p>© <?= date("Y"); ?> ShoppinPay. All Rights Reserved.</p>
  </footer>

  <script src="../ShoppinPayJS/ShoppinPayMainPage.js"></script>
</body>
</html>
