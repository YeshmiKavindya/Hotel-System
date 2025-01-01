<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Book Now</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/bookstyle.css" />
  </head>
  <body>
    
<!--navigation bar-->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-light"
      style="background-color: black"
    >
      <div class="container-fluid">
        
        <?php
           require_once 'functions/navbar.php';
            addLogo();
            addToggleButton();
            navigationbar();
        ?>
      </div>
    </nav>

    <!--Booking Form-->
    <div
      class="content text-and text-bg-secondary p-3 bg-opacity-50 bg-body-tertiary"
    >
      <div class="booking_form">
        <div>
          <label for="formGroupExampleInput" class="form-label">Name : </label>
          <div class="row">
            <div class="col">
              <input
                type="text"
                class="form-control"
                placeholder="First name"
                aria-label="First name"
                id="fname"
              />
            </div>
            <div class="col">
              <input
                type="text"
                class="form-control"
                placeholder="Last name"
                aria-label="Last name"
                id="lname"
              />
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col">
              <label for="formGroupExampleInput" class="form-label"
                >E mail :
              </label>
              <input
                type="text"
                class="form-control"
                placeholder="Email"
                aria-label="First name"
                id="email"
              />
            </div>
            <div class="col">
              <label for="formGroupExampleInput" class="form-label"
                >Phone Number:
              </label>
              <input
                type="text"
                class="form-control"
                placeholder="PhoneNumber"
                aria-label="Last name"
                id="phoneno"
              />
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col">
              <label for="formGroupExampleInput" class="form-label"
                >Address :
              </label>
              <input
                type="text"
                class="form-control"
                placeholder="1234 Main strt"
                aria-label="First name"
                id="address1"
              />
            </div>
            <div class="col">
              <label for="formGroupExampleInput" class="form-label"
                >Address 2 :</label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Apartment,studio or floor"
                aria-label="Last name"
                id="address2"
              />
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity" />
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip" />
            </div>
          </div>
          <br />
          <div>
            <label
              for="inputServiceType"
              class="form-label"
              style="padding-right: 2em"
              >Service Type :
            </label>

            <div class="form-check form-check-inline" style="padding: 1em">
              <input
                class="form-check-input"
                type="checkbox"
                id="room"
                value="Room_Reservation"
              />
              <label class="form-check-label" for="roomreservation"
                >Room Reservation</label
              >
            </div>
            <div class="form-check form-check-inline" style="padding: 1em">
              <input
                class="form-check-input"
                type="checkbox"
                id="restaurant"
                value="Restaurant_Reservation"
              />
              <label class="form-check-label" for="restaurant"
                >Restaurant Reservation</label
              >
            </div>
            <div class="form-check form-check-inline" style="padding: 1em">
              <input
                class="form-check-input"
                type="checkbox"
                id="weddinghall"
                value="Weddinghall_Reservation"
              />
              <label class="form-check-label" for="Weddinghall"
                >Wedding Hall Reservation</label
              >
            </div>
            <div class="form-check form-check-inline" style="padding: 1em">
              <input
                class="form-check-input"
                type="checkbox"
                id="swimmingpool"
                value="Swimmingpool_Reservation"
              />
              <label class="form-check-label" for="Swimmingpool"
                >Swimming pool</label
              >
            </div>
          </div>
          <div class="d-grid gap-2 col-4 mx-auto">
            <input
              type="submit"
              name="submit"
              value="next"
              onclick="getvalues()"
            />
          </div>
        </div>
      </div>
    </div>

    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/book.js"></script>
  </body>
</html>