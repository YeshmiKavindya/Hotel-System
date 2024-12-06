<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
	<link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Contact</title>
</head>
<body>

<!--Navigation bar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: black;">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link " href="index.php" style="color: darkgoldenrod;font-family: 'Times New Roman', Times,serif">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.php" style="color: darkgoldenrod;font-family: 'Times New Roman', Times,serif">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Rooms.php" style="color: darkgoldenrod;font-family: 'Times New Roman', Times,serif">ROOMS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Restaurant.php" style="color: darkgoldenrod;font-family: 'Times New Roman', Times,serif">RESTAURANT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Book Now.php" style="color: darkgoldenrod;font-family: 'Times New Roman', Times,serif">BOOK NOW</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: darkgoldenrod;font-family: 'Times New Roman', Times,serif">GALLERY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php" style="color: darkgoldenrod;font-family: 'Times New Roman', Times,serif">CONTACT</a>
        </li>
      </ul>  
    </div>
  </div>
</nav>

<!--Contact Form-->
<div class="content text-and text-bg-secondary p-3 bg-opacity-50 bg-body-tertiary">
<div class="mb-3">
  <h5>Contact Us</h5>
  <label for="exampleFormControlInput1" class="form-label">Full Name</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Yarrow Heights Hotel">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="yarrowheightshotel@gmail.com" >
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter message here"></textarea>
</div>	
<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="button" style="background-color:lightgoldenrodyellow;font: bold;color: black;border: 1em;">Send Message</button>
  
</div>
</div>

<div class="card text-center" style="height: 30vh; background-color: black;color: wheat;">
  <div class="card-body" >
    <p class="card-text">Phone:123456789</p>
    <a href="#" >Email:yarrowheights@gmail.com</a>
  </div>

</div>
<script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>