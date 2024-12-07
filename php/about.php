<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title></title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body >

    <!--Navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: black;">
        <div class="container-fluid">
          
          <?php
            require_once 'functions/navbar.php';
              addLogo();
              addToggleButton();
              navigationbar();
          ?>
        </div>
      </nav> 
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            
            <img src="../images/36.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="color: white;font-family: 'Times New Roman', Times, serif; font-size: 15pt;font-weight: bold;">
                
                <p>Founded over 50 years ago, Yarrow Heights Hotel began as a modest boutique inn catering to travelers seeking charm and personal service.
                    Since then, it has grown into a celebrated city landmark, known for its rich heritage and dedication to hospitality. 
                    Originally established in a historic building with classic architecture, 
                    the hotel has carefully preserved its timeless character while embracing modern upgrades and amenities.
                     Yarrow Heights Hotel continues to honor its past while innovating to meet the evolving needs of today’s guests, 
                     offering a unique blend of historical charm and contemporary elegance.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../images/61.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="color:white;font-family: 'Times New Roman', Times, serif;font-size: 15pt;font-weight: bold;">
                
                <p>Founded over 50 years ago, Yarrow Heights Hotel began as a modest boutique inn catering to travelers seeking charm and personal service.
                    Since then, it has grown into a celebrated city landmark, known for its rich heritage and dedication to hospitality. 
                    Originally established in a historic building with classic architecture, 
                    the hotel has carefully preserved its timeless character while embracing modern upgrades and amenities.
                     Yarrow Heights Hotel continues to honor its past while innovating to meet the evolving needs of today’s guests, 
                     offering a unique blend of historical charm and contemporary elegance.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../images/55.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="color:white;font-family: 'Times New Roman', Times, serif; font-size: 15pt;font-weight: bold ;">
                
                <p>Founded over 50 years ago, Yarrow Heights Hotel began as a modest boutique inn catering to travelers seeking charm and personal service.
                    Since then, it has grown into a celebrated city landmark, known for its rich heritage and dedication to hospitality. 
                    Originally established in a historic building with classic architecture, 
                    the hotel has carefully preserved its timeless character while embracing modern upgrades and amenities.
                     Yarrow Heights Hotel continues to honor its past while innovating to meet the evolving needs of today’s guests, 
                     offering a unique blend of historical charm and contemporary elegance.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="card text-center">
       
        <div class="card-body" style="font-family: 'Times New Roman';background-color: #FFEAC5;">
          <h5 class="card-title">Yarrow Heights Hotel</h5>
          <p class="card-text">Yarrow Heights Hotel invites you to experience a blend of elegance and relaxation.
             Located in the heart of the city, our hotel offers a peaceful retreat for both business and leisure travelers,
             with amenities designed to enhance your stay.</p>
      </div>
      <div class="row" style="border-radius: 0%;background-color: #FFEAC5;padding-left: 3.5vh;padding-right: 3.5vh;" >
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body" style="font-family: 'Times New Roman';background-color:#F3F3e0;">
              <h5 class="card-title" style="text-align: center;">Rooms and Suites</h5>
              <img src="../images/71.jpg" class="img-fluid" alt="...">

              <p class="card-text">Our spacious rooms and suites are thoughtfully designed with modern touches and classic comfort. 
                Each room features luxurious bedding, free Wi-Fi, flat-screen TVs, and stunning city or garden views.
                 For an elevated experience, our suites offer additional space, private balconies, 
                and exclusive access to our VIP services.</p>
              <a href="#" class="btn btn-primary" style="justify-content: center;">Book Now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body" style="font-family: 'Times New Roman';background-color: #F3F3e0;">
              <h5 class="card-title" style="text-align: center;">Dinning at Heights</h5>
              <img src="../images/27.jpg" class="img-fluid" alt="...">

              <p class="card-text">Indulge in exceptional dining at our on-site restaurant, The Heights Bistro, 
                where our chefs use fresh, locally sourced ingredients to craft seasonal menus inspired by global and local flavors. 
                Our Skyline Lounge offers a rooftop setting with panoramic views,
                 perfect for sunset cocktails or an evening to unwind.</p>
              <a href="#" class="btn btn-primary" style="justify-content: center;">Reserve</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="border-radius: 0%;background-color: #FFEAC5; padding: 3.5vh;" >
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body" style="font-family: 'Times New Roman';background-color:#F3F3e0;">
              <h5 class="card-title" style="text-align: center;">Event Spaces</h5>
              <img src="../images/28.jpg" class="img-fluid" alt="...">

              <p class="card-text">Ideal for weddings, conferences, and gatherings,
                 our versatile event spaces are equipped with modern AV technology and personalized event planning services.</p>
              <a href="#" class="btn btn-primary" style="justify-content: center;">Book Now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body" style="font-family: 'Times New Roman';background-color: #F3F3e0;border-radius: 0%;">
              <h5 class="card-title" style="text-align: center;">Swimming Pool</h5>
              <img src="../images/61.jpg" class="img-fluid" alt="...">
              <p class="card-text">Enjoy our outdoor pool, surrounded by lush gardens for a peaceful escape within the hotel.</p>
              <a href="#" class="btn btn-primary" style="justify-content: center;">Enjoy</a>
            </div>
          </div>
        </div>
      </div>    

      <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
