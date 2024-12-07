<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>restaurant_and_rooms_reservation</title>
    <link rel="stylesheet" href="../css/roomsandrestaurant.css" />
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
    <div
      class="content text-and text-bg-secondary p-3 bg-opacity-50 bg-body-tertiary"
    >
      <div class="booking_form">
        <center><label for="roomsAndRestaurant"><h4>Rooms and Restaurant Reservation Form</h4></label></center>
        <label for="roomsReservatio"><u>Rooms Reservation Section</u> <br></label>
        <div class="row">
          
          <div class="col">
            <label for="checkInDate"><br>Check-In Date</label>
            <input
              type="date"
              class="form-control"
              id="checkInDate"
              name="checkInDate"
              required
            />
          </div>
          <div class="col">
            <label for="checkOutDate"><br>Check-Out Date</label>
            <input
              type="date"
              class="form-control"
              id="checkOutDate"
              name="checkOutDate"
              required
            />
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col">
            <label for="numberOfGuests">Number of Guests</label>
            <input
              type="number"
              class="form-control"
              id="numberOfGuests"
              name="numberOfGuests"
              min="1"
              required
            />
          </div>
          <div class="col">
            <label for="roomType">Room Type</label>
            <select id="roomType" class="form-control" name="roomType" required>
              <option value="classicComfortPackage">
                Classic Comfort Package
              </option>
              <option value="romanticGetawayPackage<">
                Romantic Getaway Package
              </option>
              <option value="familyFunPackage">Family Fun Package</option>
              <option value="executivePackage">Executive Package</option>
              <option value="wellnessRetreatPackage">
                Wellness Retreat Package
              </option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="additionalServices">Additional Services</label><br />
            <div class="form-check form-check-inline" style="padding: 1em">
              <input
                class="form-check-input"
                type="checkbox"
                id="breakfast"
                value="breakfastbreakfast"
              />
              <label class="form-check-label" for="breakfast">Breakfast</label>
            </div>
            <div class="form-check form-check-inline" style="padding: 1em">
              <input
                class="form-check-input"
                type="checkbox"
                id="airportPickup"
                value="airportPickup"
              />

              <label class="form-check-label" for="airportPickup"
                >Airport Pickup</label
              >
            </div>
            <div class="form-check form-check-inline" style="padding: 1em">
              <input
                class="form-check-input"
                type="checkbox"
                id="spa"
                value="spa"
              />
              <label class="form-check-label" for="spa">Spa</label>
            </div>
            <div class="form-check form-check-inline" style="padding: 1em">
              <input
                class="form-check-input"
                type="checkbox"
                id="extraBed"
                value="extraBed"
              />
              <label class="form-check-label" for="extraBed">Extra Bed</label>
            </div>
              </div>
          <div class="row">
                <label for="specialRequests">Special Requests</label>
                <textarea
                  id="specialRequests"
                  class="form-control"
                  name="specialRequests"
                  rows="3"
            ></textarea>
          </div>
          <label for="restarantReservation"><br><br><u>Restaurant Reservation Section</u><br><br></label>
<div class="row">
          <div class="col">
            <label for="preferredDate">Preferred Date of Reservation:</label>
            <input
              type="date"
              class="form-control"
              id="preferredDate"
              name="preferredDate"
              required
            />
          </div>
          <div class="col">
            <label for="preferredTime">Preferred Time</label>
            <input
              type="time"
              class="form-control"
              id="preferredTime"
              name="preferredTime"
              required
            />
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <label for="reservationType"><br>Reservation Type</label>

            <select
              id="reservationType"
              class="form-control"
              name="reservationType"
              required
            >
              <option value="hotelGuest">Hotel Guest</option>
              <option value="externalCustomer">External Customer</option>
            </select>
          </div>
          <div class="col">
            <label for="numberGusets"><br>Number of Guests</label>
            <input
              type="number"
              class="form-control"
              id="numberOfGuests"
              name="numberOfGuests"
              min="1"
              required
            />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="mealType"><br>Meal Type</label>
            <select id="mealType" class="form-control" name="mealType" required>
              <option value="breakfast">Breakfast</option>
              <option value="lunch">Lunch</option>
              <option value="dinner">Dinner</option>
              <option value="specialEvent">Special Event Menu</option>
            </select>
          </div>
          <div class="col">
            <label for="seatingArea"><br>Seating Area</label>
            <select
              id="seatingArea"
              class="form-control"
              name="seatingArea"
              required
            >
              <option value="indoor">Indoor</option>
              <option value="outdoor">Outdoor</option>
              <option value="privateRoom">Private Room</option>
              <option value="noPreferences">No Preferences</option>
            </select>
          </div>
        </div>
        <div class="row">
          <label for="specialRequests"><br>Additional Notes/Requests</label>
          <textarea
            id="specialRequests"
            class="form-control"
            name="specialRequests"
            rows="3"
          ></textarea>
        </div>
        <div class="row">
          <div class="col">
            
            <label for="paymentMethod"><br>Payment Method</label>
            <select id="paymentMethod" class="form-control" name="paymentMethod" required>
              <option value="creditCard">Credit/Debit Card</option>
              <option value="bankTransfer">Bank Transfer</option>
              <option value="payOnArrival">Pay on Arrival</option>
            </select>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="form-check form-check-inline" style="padding: 1em">
                
              <input
                class="form-check-input"
                type="checkbox"
                id="policyAccept"
                value="policyAccept"
              />
              <label class="form-check-label" for="policyAccept"
                >  I agree to the processing of my data in accordance with the
              privacy policy.</label
              >
          </div>
          <div class="d-grid gap-2 col-4 mx-auto">
                    <input
                        type="submit"
                        name="submit"
                        value="Submit"
                        class="form-control"
                        onclick="getvalues()"
                    />
                
                     <input
                        type="submit"
                        name="submit"
                        class="form-control"
                        value="Reset"
                        onclick="getvalues()"
                    />
            </div>
      </div>
    </div>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
