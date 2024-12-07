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
    
    
    <?php
      require_once 'functions/navbar.php';
      addLogo();
      addToggleButton();
      navigationbar();
    ?>
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