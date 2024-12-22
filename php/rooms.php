<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Rooms</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
      <!--Background Image-->
      <div >
      
        <img src="../images/52.jpg" class="d-block w-100" alt="...">
         <div class="carousel-caption d-none d-md-block" >
           <div style="font-size: medium;">
            <p style="color:black;font-family: Georgia, 'Times New Roman', Times, serif;font-weight: bold;font-size: larger;">
              Yarrow Heights Hotel offers rooms designed for both comfort and style, 
              blending modern amenities with a warm, inviting atmosphere. 
              Each room features plush bedding, elegant furnishings, and smart technology for a seamless stay. 
              Guests can enjoy spacious layouts, tasteful decor, and stunning views, making it the perfect retreat for relaxation and rest.</p>
          </div>
         
       </div>
   

      <!--Rooms Details-->
      <div class="row" style="padding: 3.5vh;background-color: #507687;margin: auto;">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body" style="font-family: 'Times New Roman';background-color: #F3F3e0;">
              <h5 class="card-title">Classic Comfort Package</h5>
              <?php
                require_once 'functions/dbconf.php';
                require_once 'functions/imageadd.php';

                addImage(20,17,23,$connect);

              ?>

              
              <p class="card-text">Ideal for: Solo travelers and budget-conscious guests</p>
                <ul>
                    <li>Room Type: Standard Room with city or garden views</li>
                    <li>Amenities: Queen-size bed, complimentary Wi-Fi, flat-screen TV, coffee and tea station, and a work desk</li>
                    <li>Additional Perks:
                        <ul>
                            <li>breakfast at The Heights Bistro</li> 
                        <li>10% discount on food and beverages</li>
                        </ul> 
                    </li>
                    <li>Late Checkout: 1 PM (subject to availability)</li>
                </ul>
                <br>
                
              <a href="#" class="btn btn-primary" style="justify-content: center;">Book Now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body" style="font-family: 'Times New Roman';background-color: #F3F3e0;">
              <h5 class="card-title">Romantic Getaway Package</h5>
              <?php
                require_once 'functions/dbconf.php';
                require_once 'functions/imageadd.php';

                addImage(24,22,14,$connect);

              ?>
              
              <p class="card-text">Ideal for: Couples celebrating special occasions</p>
              <ul>
                <li>Room Type: Deluxe Suite with private balcony and city views</li>
                <li>Amenities: King-size bed, luxurious bedding, in-room dining, and a cozy seating area</li>
                <li>Additional Perks:
                    <ul>
                        <li>Complimentary bottle of champagne upon arrival</li>
                        <li>Candlelit dinner for two at The Heights Bistro</li>
                        <li>Breakfast in bed service</li>
                        <li>Access to the hotel’s spa with a 30-minute couples massage</li>
                    </ul>
                </li>
                <li>Late Checkout: 2 PM (subject to availability)</li>
              </ul>
              <a href="#" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="padding: 3.5vh;background-color: #507687;margin: auto;">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card" >
            <div class="card-body" style="font-family: 'Times New Roman';background-color: #F3F3e0;">
              <h5 class="card-title">Family Fun Package</h5>
              <?php
                require_once 'functions/dbconf.php';
                require_once 'functions/imageadd.php';

                addImage(3,18,2,$connect);

              ?>
              
              <p class="card-text">Ideal for: Families looking for a convenient and comfortable stay</p>
              <ul>
                <li>Room Type: Family Suite with extra beds and a spacious living area</li>
                <li>Amenities: King-size bed, twin beds, two bathrooms, flat-screen TVs, and in-room entertainment options</li>
                <li>Additional Perks:
                    <ul>
                        <li>Complimentary breakfast for the entire family</li>
                        <li>Kids’ welcome package with snacks and activities</li>
                        <li>Access to our outdoor pool and kids’ play area</li>
                        <li>Discounted tickets to nearby attractions</li>
                    </ul>
                </li>
                <li>Late Checkout: 1 PM (subject to availability)</li>
              </ul>
              
              <a href="#" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body" style="font-family: 'Times New Roman';background-color: #F3F3e0;">
              <h5 class="card-title">Executive Package</h5>
              <?php
                require_once 'functions/dbconf.php';
                require_once 'functions/imageadd.php';

                addImage(25,26,19,$connect);

              ?>

              <p class="card-text">Ideal for: Business travelers seeking convenience and efficiency.</p>
              <ul>
                <li>Room Type: Executive Room with a work-friendly setup</li>
                <li>Amenities: King-size bed, ergonomic workspace, high-speed internet, and free access to the business center</li>
                <li>Additional Perks:
                    <ul>
                        <li>Complimentary breakfast and evening cocktails at the Skyline Lounge</li>
                        <li>Priority check-in and check-out services</li>
                        <li>Daily garment pressing (up to 3 items)</li>
                        <li>Access to the VIP lounge with complimentary refreshments and meeting space</li>
                    </ul>
                </li>
                <li>Late Checkout: 3 PM (subject to availability)</li>
              </ul>
              <a href="#" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="padding: 3.5vh ;background-color: #507687;margin: auto;">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body" style="font-family: 'Times New Roman';background-color: #F3F3e0;">
              <h5 class="card-title" style="text-align: center;">Wellness Retreat Package</h5>
              <?php
                require_once 'functions/dbconf.php';
                require_once 'functions/imageadd.php';

                addImage(2,17,43,$connect);

              ?>
           
              <p class="card-text">Ideal for: Guests looking to relax and recharge</p>
              <ul>
                <li>Room Type: Deluxe Suite with garden views</li>
                <li>Amenities: King-size bed, relaxing decor, and spa-style bathroom</li>
                <li>Additional Perks:
                    <ul>
                        <li>Daily healthy breakfast and lunch options</li>
                        <li>Full access to the wellness center, sauna, and gym</li>
                        <li>Personalized wellness session with a private yoga instructor or personal trainer</li>
                        <li>60-minute spa treatment of choice</li>
                    </ul>
                </li>
                <li>Late Checkout: 4 PM (subject to availability)</li>
              </ul>
              <a href="#" class="btn btn-primary">Book Now</a>
            </div>
          </div>
        </div>
        </div>


    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
