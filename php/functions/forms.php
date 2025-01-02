<?php

    require_once 'dbconf.php';

    function formRestaurant(){

            echo '
                    <div
      class="content text-and text-bg-secondary p-3 bg-opacity-50 bg-body-tertiary"
    >
      <div class="booking_form">
        <center>
          <label for="restaurantreservation"
            ><h4>Restaurant Reservation Form</h4></label
          >
        </center>
        <br /><br />
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
        <br />
        <div class="row">
          <div class="col">
            <label for="reservationType">Reservation Type</label>

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
            <label for="numberGusets">Number of Guests</label>
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
        <br />
        <div class="row">
          <div class="col">
            <label for="roomNumbers">Room Number (for hotel guests)</label>
            <input
              type="text"
              class="form-control"
              id="roomNumber"
              name="roomNumber"
              required
            />
          </div>
          <div class="col">
            <label for="mealType">Meal Type</label>
            <select id="mealType" class="form-control" name="mealType" required>
              <option value="breakfast">Breakfast</option>
              <option value="lunch">Lunch</option>
              <option value="dinner">Dinner</option>
              <option value="specialEvent">Special Event Menu</option>
            </select>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col">
            <label for="seatingArea">Seating Area</label>
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

          <div class="col">
            <label for="paymentMethod">Payment Method</label>
            <select
              id="paymentMethod"
              class="form-control"
              name="paymentMethod"
              required
            >
              <option value="creditCard">Credit/Debit Card</option>
              <option value="bankTransfer">Bank Transfer</option>
              <option value="payOnArrival">
                Room Charge(for hotel guests)
              </option>
            </select>
          </div>
        </div>
        <br />
        <div class="row">
          <label for="preferences">Dietary Restrictions/Preferences</label
          ><br />
          <textarea
            id="preferences"
            class="form-control"
            name="preferences"
            rows="3"
            style="width: 95%"
          ></textarea>
        </div>
        <div class="row">
          <label for="specialRequests">Additional Notes/Requests</label>
          <textarea
            id="specialRequests"
            class="form-control"
            name="specialRequests"
            rows="3"
            style="width: 95%"
          ></textarea>
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
              >I agree to the restaurant’s cancellation policy.</label
            >
          </div>
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
              >I understand that failure to show up without prior notice will
              result in a charge or penalty.</label
            >
          </div>
        </div>
        <div class="d-grid gap-2 col-4 mx-auto">
          <input
            type="submit"
            class="form-control"
            name="submit"
            value="Submit"
            onclick="getvalues()"
          />

          <input
            type="submit"
            class="form-control"
            name="submit"
            value="Reset"
            onclick="getvalues()"
          />
        </div>
      </div>
    </div>
            ';

    }
?>