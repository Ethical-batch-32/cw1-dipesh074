<?php

@include 'config.php';

session_start();{
  $user_name = $_SESSION['user_name'];
if (isset($_GET['id'])){
  // Sanitize the provided item id to prevent SQL injection attacks
$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "SELECT * FROM products WHERE id= $id";
$thiss=mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($thiss)) {
$a = $row['product_name'];
$b = $row['product_img_name'];
$c = $row['price'];
}
$product = "INSERT INTO selec_pdt(name, product_name, product_price, image) VALUES ('$user_name','$a','$c','$b')";
if(mysqli_query($conn, $product)){
  header('location:mycart.php');
  // echo "Records added successfully.";
} else{
  // echo "ERROR: Could not able to execute. " . mysqli_error($conn);
}

  }
};
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>GYM EQUIPMENTS</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box">
      <a class="navbar-brand" href="index.html">
        <span>
        BUILDIT EQUIPMENT SHOP
        </span>
      </a>
    </div>
    <!-- end header section -->
  </div>

  <!-- nav section -->

  <?php
@include_once './components/navbar.php'
  ?>
  <!-- end nav section -->

  <!-- fruit section -->


  <section class="fruit_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
        GYM EQUIPMENTS
        </h2>
      </div>
    </div>
    <div class="container-fluid">

      <div class="fruit_container">
        <div class="box">
          <img name="image"src="images/f-1.jpg" alt="">
          <div class="link_box">
            <h5>
            Price Rs.150 
</br>
              
              Dumbbell
            </h5>
            <a href='fruit.php?id=<?php echo '1'; ?>'>
              Add to Cart
            </a>
          </div>
        </div>
        <div class="box">
          <img name="image"src="images/f-2.webp" alt="">
          <div class="link_box">
            <h5>
            Price Rs.150 
</br>
            
             Leg 
            </h5>
            <a href='fruit.php?id=<?php echo '2'; ?>'>
              Add to Cart
            </a>
          </div>
        </div>
        <div class="box">
          <img name="image"src="images/f-3.webp.crdownload" alt="">
          <div class="link_box">
            
            <h5>
              Price Rs.150 
</br>
             
             Bar 
            </h5>
            <a href='fruit.php?id=<?php echo '3'; ?>'>
              Add to Cart
            </a>
          </div>
        </div>
        <div class="box">
          <img name="image"src="images/f-4.png" alt="">
          <div class="link_box">
            <h5>
            Price Rs.150 
</br>
              
              Weight-Bar
            </h5>
            <a href='fruit.php?id=<?php echo '4'; ?>'>
              Add to Cart
            </a>
          </div>
        </div>
        <div class="box">
          <img name="image"src="images/f-5.jpg" alt="">
          <div class="link_box">
            <h5>
            Price Rs.150 
</h5>
</br>
            
             Dips 
            </h5>
            <a href='fruit.php?id=<?php echo '5'; ?>'>
              Add to Cart
            </a>
          </div>
        </div>
        <div class="box">
          <img name="image"src="images/f-6.jfif" alt="">
          <div class="link_box">
            <h5>
            Price Rs.150 
</br>
              
             Trade-Mill 
            </h5>
            <a href='fruit.php?id=<?php echo '6'; ?>'>
              Add to Cart
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end fruit section -->


  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>
        BUILDIT EQUIPMENT SHOP
        </h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img name="image"src="images/location.png" alt="">
              <span>
                Banashwor, Kathmandu
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img name="image"src="images/call.png" alt="">
              <span>
                Call : +977 9813079598
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img name="image"src="images/mail.png" alt="">
              <span>
                lliooodddioo557@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                Subscribe now
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="https://www.facebook.com/profile.php?id=100082749904137">
                <img name="image"src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img name="image"src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img name="image"src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="https://www.instagram.com/dipes.hbasnet">
                <img name="image"src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="https://www.instagram.com/dipes.hbasnet">DIPESH BASNET</a>
    </p>
  </section>
  <!-- footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>