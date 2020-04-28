<?php include('config/config.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ekhanei Sob - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/main.css" />
    <!-- google-font css -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:700,800|Roboto:400,500,700&display=swap" rel="stylesheet">
</head>
<body>

  <?php include('frontend/navbar.php'); ?>

  <!-- slider start -->
  <section class="slider-home">
    <div class="container">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./assets/images/ss1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./assets/images/ss2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./assets/images/ss3.jpg" alt="Third slide">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- slider end -->

  <!-- find all products start -->
  <section class="find-all-prod-home">
    <div class="container">
      <h2 class="heading"> <span>Find Your All Products</span> </h2>
      <p class="desc">A very easy platform to get all kind of products in one place. You can find your favourite products from us and buy from another platform.
        A very easy platform for find your preferable product.
      </p>
      <div class="row media-part">
        <div class="col-md-4">
          <div class="media">
            <i class="fas fa-puzzle-piece"></i>
            <div class="media-body">
              <h5 class="mt-0">Reliable</h5>
              <p>We do linkup popular and good reviews ecommerce site with our platform. No need to worry about about your favourite products.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="media">
            <i class="fas fa-recycle"></i>
            <div class="media-body">
              <h5 class="mt-0">Friendly User Interface</h5>
              <p>You will get a very unique and designable interface that can be used easily.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="media">
            <i class="fas fa-archive"></i>
            <div class="media-body">
              <h5 class="mt-0">Availablity</h5>
              <p>All kinds of products you can get from our website. From gift to daily using products which you want, can meet by our website.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- find all products end -->

  <!-- how we work start -->
  <section class="how-we-work-home">
    <div class="container">
      <h2 class="heading"> <span>How It Works</span> </h2>
      <p class="desc">
        Our platform built for everyone. You can use this platform without any hassle.
      </p>
      <div class="row">
        <div class="col-md-4 step-each">
          <h5 class="col-head"> <span>1.</span> Search </h5>
          <p class="col-desc">Search your favourite products</p>
          <div class="search-part">
            <input type="text" placeholder="Search products">
            <button type="submit">SEARCH</button>
          </div>
        </div>
        <div class="col-md-4 step-each">
          <h5 class="col-head"> <span>2.</span> Choose </h5>
          <p class="col-desc">Choose product from searched list</p>
          <h6 class="btn-stl"> <span>CHOOSE PRODUCTS</span> </h6>
        </div>
        <div class="col-md-4 step-each">
          <h5 class="col-head"> <span>3.</span> Order </h5>
          <p class="col-desc">Order product from specific site</p>
          <h6 class="btn-stl"> <span>ORDER PRODUCTS</span> </h6>
        </div>
      </div>
    </div>
  </section>
  <!-- how we work end -->

  <!-- part of us start -->
  <section class="part-of-us">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="./assets/images/part-of-us-bg.png" alt="">
        </div>
        <div class="col-md-6 desc-part">
          <h2 class="heading"> <span>Be a part of us</span> </h2>
        <p class="desc">
          If you are a e-commerce owner or admin, you also can be part of us
        </p>
        <button class="contact-btn"><a href="<?php echo ROOT_URL ?>contact-us.php">Contact for partner</a></button>
        </div>
      </div>
    </div>
  </section>
  <!-- part of us end -->

  <?php include('frontend/footer.php'); ?>

</body>
</html>