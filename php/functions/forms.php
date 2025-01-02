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
    
    function formRooms(){
        echo '
<div
      class="content text-and text-bg-secondary p-3 bg-opacity-50 bg-body-tertiary"
    >
      
      <div class="booking_form">
      <center><label for="formTitle" class="formTitle"><h4>Rooms Reservation Form</h4></label></center>
        <br>
        <br>
        <div class="row">
          <div class="col">
            <label for="checkInDate">Check-In Date</label>
            <input type="date" class="form-control" id="checkInDate" name="checkInDate" required />
          </div>
          <div class="col">
            <label for="checkOutDate">Check-Out Date</label>
            <input type="date"  class="form-control" id="checkOutDate" name="checkOutDate" required />
          </div>
        </div>
        <br>
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
              <option value="classicComfortPackage">Classic Comfort Package</option>
              <option value="romanticGetawayPackage<">Romantic Getaway Package</option>
              <option value="familyFunPackage">Family Fun Package</option>
              <option value="executivePackage">Executive Package</option>
              <option value="wellnessRetreatPackage">Wellness Retreat Package</option>
            </select>
          </div>
          <br>
          <div class="row">
            <div class="col">
            <label for="additionalServices">Additional Services</label><br>
            <div class="form-check form-check-inline" style="padding: 1em">
                
              <input
                class="form-check-input"
                type="checkbox"
                id="breakfast"
                value="breakfastbreakfast"
              />
              <label class="form-check-label" for="breakfast"
                >Breakfast</label
              >
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
              <label class="form-check-label" for="spa"
                >Spa</label
              >
            </div>
               <div class="form-check form-check-inline" style="padding: 1em">
                
              <input
                class="form-check-input"
                type="checkbox"
                id="extraBed"
                value="extraBed"
              />
              <label class="form-check-label" for="extraBed"
                >Extra Bed</label
              >
            </div>
            </div>
            
            <div class="col">
            
            <label for="paymentMethod">Payment Method</label>
            <select id="paymentMethod" class="form-control" name="paymentMethod" required>
              <option value="creditCard">Credit/Debit Card</option>
              <option value="bankTransfer">Bank Transfer</option>
              <option value="payOnArrival">Pay on Arrival</option>
            </select>
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
          <div class="row">
            <div class="form-check form-check-inline" style="padding: 1em">
                
              <input
                class="form-check-input"
                type="checkbox"
                id="policyAccept"
                value="policyAccept"
              />
              <label class="form-check-label" for="policyAccept"
                >I agree to the processing of my data in accordance with the
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
    </div>
        ';
    }
    
    function formWeddinghall(){
        echo '
 <div
      class="content text-and text-bg-secondary p-3 bg-opacity-50 bg-body-tertiary"
    >
      <div class="booking_form">
        <center>
          <label for="restaurantreservation"
            ><h4>Wedding Hall Reservation Form</h4></label
          >
        </center>
        <label
          ><b><u>Event and Personal Details</u></b></label
        >

        <div class="row">
          <br />
          <div class="col">
            <label for="weddingType">Wedding Type</label>
            <select
              id="weddingType"
              name="weddingType"
              class="form-control"
              required
            >
              <option value="ceremony">Ceremony</option>
              <option value="reception">Reception</option>
              <option value="both">Both</option>
            </select>
          </div>
          <div class="col">
            <label for="eventDate">Event Date</label>
            <input
              type="date"
              class="form-control"
              id="eventDate"
              name="eventDate"
              required
            />
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col">
            <label for="eventTime">Event Time</label>
            <input
              type="time"
              class="form-control"
              id="eventTime"
              name="eventTime"
              required
            />
          </div>
          <div class="col">
            <label for="eventDuration">Duration of Event</label>
            <input
              type="number"
              class="form-control"
              id="eventDuration"
              name="eventDuration"
              min="5"
              required
            />
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col">
            <label for="bridename" class="form-label">Bride s Full Name</label>
            <input
              type="text"
              class="form-control"
              placeholder="brides name"
              aria-label="bridename"
              id="bridename"
            />
          </div>

          <div class="col">
            <label for="bridename" class="form-label">Grooms Full Name</label>
            <input
              type="text"
              class="form-control"
              placeholder="grooms name"
              aria-label="groomname"
              id="groomname"
            />
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col">
            <label for="palnnername" class="form-label"
              >Wedding Planners Name</label
            >
            <input
              type="text"
              class="form-control"
              placeholder="Wedding Planners Name(Optional)"
              aria-label="palnnername"
              id="palnnername"
            />
          </div>
          <div class="col">
            <label for="palnnername" class="form-label"
              >Wedding Planners Contact</label
            >
            <input
              type="text"
              class="form-control"
              placeholder="(Email/Phone)"
              aria-label="palnnercontact"
              id="palnnercontact"
            />
          </div>
        </div>
        <br />
        <label
          ><b><br /><u>Wedding Hall Preferences</u> <br /></b
        ></label>
        <div class="row">
          <div class="col">
            <label for="hallType" class="form-label"
              >Preferred Wedding Hall
            </label>
            <select id="hallType" name="hallType" class="form-control" required>
              <option value="willowHeights">Willow Heights</option>
              <option value="crystalHeights">Crystal Heights</option>
              <option value="sparrowHeights">Sparrow Heights</option>
            </select>
          </div>
          <div class="col">
            <label for="seatingType" class="form-label"
              >Seating Arrangement
            </label>
            <select
              id="seatingType"
              name="seatingType"
              class="form-control"
              required
            >
              <option value="banquetStyle">Banquet Style</option>
              <option value="roundTables">Round Tables</option>
              <option value="threatureStyle">Theatre Style</option>
              <option value="customArrangement">Custom Arrangement</option>
            </select>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col">
            <label for="stageSetup" class="form-label">Stage Setup </label>
            <select
              id="stageSetup"
              name="stageSetup"
              class="form-control"
              required
            >
              <option value="basicStage">Basic Stage</option>
              <option value="premiumStage">
                Premium Stage Setup (Decorations, Lighting, etc.)
              </option>
            </select>
          </div>
          <div class="col">
            <label for="decorations" class="form-label">Decorations</label>
            <select
              id="decorations"
              name="decorations"
              class="form-control"
              required
            >
              <option value="floralDecor">Floral Decor</option>
              <option value="minimalistDecor">Minimalist Decor</option>
            </select>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col">
            <label for="guestnumbers" class="form-label"
              >Number of Guests
            </label>
            <input
              type="number"
              class="form-control"
              id="numberOfGuests"
              name="numberOfGuests"
              min="50"
              required
            />
          </div>
          <div class="col">
            <label for="children" class="form-label">Children Attending</label>
            <select id="children" name="children" class="form-control" required>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </div>
        </div>
        <label
          ><b><br /><u>Catering and Beverages</u><br /></b
        ></label>
        <div class="row">
          <div class="col">
            <label for="mealType" class="form-label">Meal Type</label>
            <select id="mealType" name="mealType" class="form-control" required>
              <option value="buffet">Buffet</option>
              <option value="platedService">Plated Service</option>
              <option value="cocktailReception">Cocktail Reception</option>
            </select>
          </div>
          <div class="col">
            <label for="beverage" class="form-label">Beverage Options</label>
            <select id="beverage" name="beverage" class="form-control" required>
              <option value="softdrinks">Soft Drinks</option>
              <option value="alchoholbeverage">
                Alcoholic Beverages(Wine, Champagne, Cocktails)
              </option>
              <option value="mocktails">Mocktails</option>
            </select>
          </div>
        </div>
        <label
          ><b><br /><u>Entertainment and Additional Services</u><br /></b
        ></label>
        <div class="row">
          <div class="col">
            <label for="additionalServices">Music/Entertainment</label><br />
            <div class="form-check form-check-inline" style="padding: 1em">
              <input
                class="form-check-input"
                type="checkbox"
                id="dj"
                value="dj"
              />
              <label class="form-check-label" for="dj"> DJ</label>
            </div>
            <div class="form-check form-check-inline" style="padding: 1em">
              <input
                class="form-check-input"
                type="checkbox"
                id="liveband"
                value="liveband"
              />
              <label class="form-check-label" for="liveband"> Live Band</label>
            </div>
            <div class="form-check form-check-inline" style="padding: 1em">
              <input
                class="form-check-input"
                type="checkbox"
                id="audio"
                value="audio"
              />
              <label class="form-check-label" for="audio"
                >Audio System (Microphone, Speakers, etc.)</label
              >
            </div>
          </div>

          <div class="col">
            <label for="additionalServices">Transportation Arrangements</label
            ><br />
            <div class="form-check form-check-inline" style="padding: 1em">
              <input
                class="form-check-input"
                type="checkbox"
                id="shuttleservice"
                value="shuttleservice"
              />
              <label class="form-check-label" for="shuttleservice"
                >Shuttle Service for Guests</label
              >
            </div>
            <div class="form-check form-check-inline" style="padding: 1em">
              <input
                class="form-check-input"
                type="checkbox"
                id="parking"
                value="parking"
              />
              <label class="form-check-label" for="parking"
                >Parking Availability</label
              >
            </div>
            <div class="form-check form-check-inline" style="padding: 1em">
              <input
                class="form-check-input"
                type="checkbox"
                id="carservice"
                value="carservice"
              />
              <label class="form-check-label" for="carservice"
                >Luxury Car Service</label
              >
            </div>
          </div>
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
        <br />
        <label
          ><b><br /><u>Terms & Conditions</u><br /></b
        ></label>
        <div class="row">
          <div class="form-check form-check-inline" style="padding: 1em">
            <input
              class="form-check-input"
              type="checkbox"
              id="policyAccept"
              value="policyAccept"
            />
            <label class="form-check-label" for="policyAccept"
              >I agree to the hotel’s cancellation policy</label
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
              >I agree to take responsibility for any damage during the
              event</label
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

    function formWeddinghall(){
      echo '
<div
    class="content text-and text-bg-secondary p-3 bg-opacity-50 bg-body-tertiary"
  >
    <div class="booking_form">
      <center>
        <label for="restaurantreservation"
          ><h4>Wedding Hall Reservation Form</h4></label
        >
      </center>
      <label
        ><b><u>Event and Personal Details</u></b></label
      >

      <div class="row">
        <br />
        <div class="col">
          <label for="weddingType">Wedding Type</label>
          <select
            id="weddingType"
            name="weddingType"
            class="form-control"
            required
          >
            <option value="ceremony">Ceremony</option>
            <option value="reception">Reception</option>
            <option value="both">Both</option>
          </select>
        </div>
        <div class="col">
          <label for="eventDate">Event Date</label>
          <input
            type="date"
            class="form-control"
            id="eventDate"
            name="eventDate"
            required
          />
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col">
          <label for="eventTime">Event Time</label>
          <input
            type="time"
            class="form-control"
            id="eventTime"
            name="eventTime"
            required
          />
        </div>
        <div class="col">
          <label for="eventDuration">Duration of Event</label>
          <input
            type="number"
            class="form-control"
            id="eventDuration"
            name="eventDuration"
            min="5"
            required
          />
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col">
          <label for="bridename" class="form-label">Bride s Full Name</label>
          <input
            type="text"
            class="form-control"
            placeholder="brides name"
            aria-label="bridename"
            id="bridename"
          />
        </div>

        <div class="col">
          <label for="bridename" class="form-label">Grooms Full Name</label>
          <input
            type="text"
            class="form-control"
            placeholder="grooms name"
            aria-label="groomname"
            id="groomname"
          />
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col">
          <label for="palnnername" class="form-label"
            >Wedding Planners Name</label
          >
          <input
            type="text"
            class="form-control"
            placeholder="Wedding Planners Name(Optional)"
            aria-label="palnnername"
            id="palnnername"
          />
        </div>
        <div class="col">
          <label for="palnnername" class="form-label"
            >Wedding Planners Contact</label
          >
          <input
            type="text"
            class="form-control"
            placeholder="(Email/Phone)"
            aria-label="palnnercontact"
            id="palnnercontact"
          />
        </div>
      </div>
      <br />
      <label
        ><b><br /><u>Wedding Hall Preferences</u> <br /></b
      ></label>
      <div class="row">
        <div class="col">
          <label for="hallType" class="form-label"
            >Preferred Wedding Hall
          </label>
          <select id="hallType" name="hallType" class="form-control" required>
            <option value="willowHeights">Willow Heights</option>
            <option value="crystalHeights">Crystal Heights</option>
            <option value="sparrowHeights">Sparrow Heights</option>
          </select>
        </div>
        <div class="col">
          <label for="seatingType" class="form-label"
            >Seating Arrangement
          </label>
          <select
            id="seatingType"
            name="seatingType"
            class="form-control"
            required
          >
            <option value="banquetStyle">Banquet Style</option>
            <option value="roundTables">Round Tables</option>
            <option value="threatureStyle">Theatre Style</option>
            <option value="customArrangement">Custom Arrangement</option>
          </select>
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col">
          <label for="stageSetup" class="form-label">Stage Setup </label>
          <select
            id="stageSetup"
            name="stageSetup"
            class="form-control"
            required
          >
            <option value="basicStage">Basic Stage</option>
            <option value="premiumStage">
              Premium Stage Setup (Decorations, Lighting, etc.)
            </option>
          </select>
        </div>
        <div class="col">
          <label for="decorations" class="form-label">Decorations</label>
          <select
            id="decorations"
            name="decorations"
            class="form-control"
            required
          >
            <option value="floralDecor">Floral Decor</option>
            <option value="minimalistDecor">Minimalist Decor</option>
          </select>
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col">
          <label for="guestnumbers" class="form-label"
            >Number of Guests
          </label>
          <input
            type="number"
            class="form-control"
            id="numberOfGuests"
            name="numberOfGuests"
            min="50"
            required
          />
        </div>
        <div class="col">
          <label for="children" class="form-label">Children Attending</label>
          <select id="children" name="children" class="form-control" required>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>
      </div>
      <label
        ><b><br /><u>Catering and Beverages</u><br /></b
      ></label>
      <div class="row">
        <div class="col">
          <label for="mealType" class="form-label">Meal Type</label>
          <select id="mealType" name="mealType" class="form-control" required>
            <option value="buffet">Buffet</option>
            <option value="platedService">Plated Service</option>
            <option value="cocktailReception">Cocktail Reception</option>
          </select>
        </div>
        <div class="col">
          <label for="beverage" class="form-label">Beverage Options</label>
          <select id="beverage" name="beverage" class="form-control" required>
            <option value="softdrinks">Soft Drinks</option>
            <option value="alchoholbeverage">
              Alcoholic Beverages(Wine, Champagne, Cocktails)
            </option>
            <option value="mocktails">Mocktails</option>
          </select>
        </div>
      </div>
      <label
        ><b><br /><u>Entertainment and Additional Services</u><br /></b
      ></label>
      <div class="row">
        <div class="col">
          <label for="additionalServices">Music/Entertainment</label><br />
          <div class="form-check form-check-inline" style="padding: 1em">
            <input
              class="form-check-input"
              type="checkbox"
              id="dj"
              value="dj"
            />
            <label class="form-check-label" for="dj"> DJ</label>
          </div>
          <div class="form-check form-check-inline" style="padding: 1em">
            <input
              class="form-check-input"
              type="checkbox"
              id="liveband"
              value="liveband"
            />
            <label class="form-check-label" for="liveband"> Live Band</label>
          </div>
          <div class="form-check form-check-inline" style="padding: 1em">
            <input
              class="form-check-input"
              type="checkbox"
              id="audio"
              value="audio"
            />
            <label class="form-check-label" for="audio"
              >Audio System (Microphone, Speakers, etc.)</label
            >
          </div>
        </div>

        <div class="col">
          <label for="additionalServices">Transportation Arrangements</label
          ><br />
          <div class="form-check form-check-inline" style="padding: 1em">
            <input
              class="form-check-input"
              type="checkbox"
              id="shuttleservice"
              value="shuttleservice"
            />
            <label class="form-check-label" for="shuttleservice"
              >Shuttle Service for Guests</label
            >
          </div>
          <div class="form-check form-check-inline" style="padding: 1em">
            <input
              class="form-check-input"
              type="checkbox"
              id="parking"
              value="parking"
            />
            <label class="form-check-label" for="parking"
              >Parking Availability</label
            >
          </div>
          <div class="form-check form-check-inline" style="padding: 1em">
            <input
              class="form-check-input"
              type="checkbox"
              id="carservice"
              value="carservice"
            />
            <label class="form-check-label" for="carservice"
              >Luxury Car Service</label
            >
          </div>
        </div>
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
      <br />
      <label
        ><b><br /><u>Terms & Conditions</u><br /></b
      ></label>
      <div class="row">
        <div class="form-check form-check-inline" style="padding: 1em">
          <input
            class="form-check-input"
            type="checkbox"
            id="policyAccept"
            value="policyAccept"
          />
          <label class="form-check-label" for="policyAccept"
            >I agree to the hotel’s cancellation policy</label
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
            >I agree to take responsibility for any damage during the
            event</label
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
  function formRoomsAndRestaurant(){
    echo '
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
';

}
function formRoomsAndHall(){
  echo '
  
<div
class="content text-and text-bg-secondary p-3 bg-opacity-50 bg-body-tertiary"
>
<div class="booking_form">
   <center><label for="roomsAndRestaurant"><h4>Rooms and Wedding Hall Reservation Form</h4></label></center>
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
        max="4"
        required
      />
    </div>
    <div class="col">
      <label for="roomType">Room Type</label>
      <select id="roomType" class="form-control" name="roomType" required>
        <option value="classicComfortPackage">
          Classic Comfort Package
        </option>
        <option value="romanticGetawayPackage">
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
    <div class="row">
      <label for="weddinghallbooking"><br><u>Wedding Hall Reservation</u> <br></label>
      <div class="col">
      
      <label for="weddingType"><br>Wedding Type</label>
      <select
        id="weddingType"
        name="weddingType"
        class="form-control"
        required
      >
        <option value="ceremony">Ceremony</option>
        <option value="reception">Reception</option>
        <option value="both">Both</option>
      </select>
    </div>
    <div class="col">
      <label for="eventDate"><br>Event Date</label>
      <input
        type="date"
        class="form-control"
        id="eventDate"
        name="eventDate"
        required
      />
    </div>
  </div>
     <div class="row">
    <div class="col">
      <label for="eventTime"><br>Event Time</label>
      <input
        type="time"
        class="form-control"
        id="eventTime"
        name="eventTime"
        required
      />
    </div>
    <div class="col">
      <label for="eventDuration"><br>Duration of Event</label>
      <input
        type="number"
        class="form-control"
        id="eventDuration"
        name="eventDuration"
        min="5"
        required
      />
    </div>
  </div>
  <br />
  <div class="row">
    <div class="col">
      <label for="bridename" class="form-label"><br>Brides Full Name</label>
      <input
        type="text"
        class="form-control"
        placeholder="brides name"
        aria-label="bridename"
        id="bridename"
      />
    </div>

    <div class="col">
      <label for="bridename" class="form-label"><br>Grooms Full Name</label>
      <input
        type="text"
        class="form-control"
        placeholder="grooms name"
        aria-label="groomname"
        id="groomname"
      />
    </div>
  </div>
  <br />
  <div class="row">
    <div class="col">
      <label for="palnnername" class="form-label"
        ><br>Wedding Planners Name</label
      >
      <input
        type="text"
        class="form-control"
        placeholder="Wedding Planners Name(Optional)"
        aria-label="palnnername"
        id="palnnername"
      />
    </div>
    <div class="col">
      <label for="palnnername" class="form-label"
        ><br>Wedding Planners Contact</label
      >
      <input
        type="text"
        class="form-control"
        placeholder="(Email/Phone)"
        aria-label="palnnercontact"
        id="palnnercontact"
      />
    </div>
  </div>
  <br />
  
  <div class="row">
    <div class="col">
      <label for="hallType" class="form-label"
        ><br>Preferred Wedding Hall
      </label>
      <select id="hallType" name="hallType" class="form-control" required>
        <option value="willowHeights">Willow Heights</option>
        <option value="crystalHeights">Crystal Heights</option>
        <option value="sparrowHeights">Sparrow Heights</option>
      </select>
    </div>
    <div class="col">
      <label for="seatingType" class="form-label"
        ><br>Seating Arrangement
      </label>
      <select
        id="seatingType"
        name="seatingType"
        class="form-control"
        required
      >
        <option value="banquetStyle">Banquet Style</option>
        <option value="roundTables">Round Tables</option>
        <option value="threatureStyle">Theatre Style</option>
        <option value="customArrangement">Custom Arrangement</option>
      </select>
    </div>
  </div>
  <br />
  <div class="row">
    <div class="col">
      <label for="stageSetup" class="form-label"><br>Stage Setup </label>
      <select
        id="stageSetup"
        name="stageSetup"
        class="form-control"
        required
      >
        <option value="basicStage">Basic Stage</option>
        <option value="premiumStage">
          Premium Stage Setup (Decorations, Lighting, etc.)
        </option>
      </select>
    </div>
    <div class="col">
      <label for="decorations" class="form-label"><br>Decorations</label>
      <select
        id="decorations"
        name="decorations"
        class="form-control"
        required
      >
        <option value="floralDecor">Floral Decor</option>
        <option value="minimalistDecor">Minimalist Decor</option>
      </select>
    </div>
  </div>
  
  <br />
  <div class="row">
    <div class="col">
      <label for="guestnumbers" class="form-label"
        ><br>Number of Guests
      </label>
      <input
        type="number"
        class="form-control"
        id="numberOfGuests"
        name="numberOfGuests"
        min="50"
        required
      />
    </div>
    <div class="col">
      <label for="children" class="form-label"><br>Children Attending</label>
      <select id="children" name="children" class="form-control" required>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>
  </div>
  
  <div class="row">
    <div class="col">
      <label for="mealType" class="form-label"><br>Meal Type</label>
      <select id="mealType" name="mealType" class="form-control" required>
        <option value="buffet">Buffet</option>
        <option value="platedService">Plated Service</option>
        <option value="cocktailReception">Cocktail Reception</option>
      </select>
    </div>
    <div class="col">
      <label for="beverage" class="form-label"><br>Beverage Options</label>
      <select id="beverage" name="beverage" class="form-control" required>
        <option value="softdrinks">Soft Drinks</option>
        <option value="alchoholbeverage">
          Alcoholic Beverages(Wine, Champagne, Cocktails)
        </option>
        <option value="mocktails">Mocktails</option>
      </select>
    </div>
  </div>
  
  <div class="row">
    <div class="col">
      <label for="additionalServices"><br>Music/Entertainment</label><br />
      <div class="form-check form-check-inline" style="padding: 1em">
        <input
          class="form-check-input"
          type="checkbox"
          id="dj"
          value="dj"
        />
        <label class="form-check-label" for="dj"> DJ</label>
      </div>
      <div class="form-check form-check-inline" style="padding: 1em">
        <input
          class="form-check-input"
          type="checkbox"
          id="liveband"
          value="liveband"
        />
        <label class="form-check-label" for="liveband"> Live Band</label>
      </div>
      <div class="form-check form-check-inline" style="padding: 1em">
        <input
          class="form-check-input"
          type="checkbox"
          id="audio"
          value="audio"
        />
        <label class="form-check-label" for="audio"
          >Audio System (Microphone, Speakers, etc.)</label
        >
      </div>
    </div>

    <div class="col">
      <label for="additionalServices"><br>Transportation Arrangements</label
      ><br />
      <div class="form-check form-check-inline" style="padding: 1em">
        <input
          class="form-check-input"
          type="checkbox"
          id="shuttleservice"
          value="shuttleservice"
        />
        <label class="form-check-label" for="shuttleservice"
          ><br>Shuttle Service for Guests</label
        >
      </div>
      <div class="form-check form-check-inline" style="padding: 1em">
        <input
          class="form-check-input"
          type="checkbox"
          id="parking"
          value="parking"
        />
        <label class="form-check-label" for="parking"
          >Parking Availability</label
        >
      </div>
      <div class="form-check form-check-inline" style="padding: 1em">
        <input
          class="form-check-input"
          type="checkbox"
          id="carservice"
          value="carservice"
        />
        <label class="form-check-label" for="carservice"
          >Luxury Car Service</label
        >
      </div>
    </div>
  </div>
  <div class="row">
    <label for="specialRequests"><br>Additional Notes/Requests</label>
    <textarea
      id="specialRequests"
      class="form-control"
      name="specialRequests"
      rows="3"
      style="width: 95%"
    ></textarea>
  </div>
  <br />
  
  <div class="row">
    <div class="form-check form-check-inline" style="padding: 1em">
      <input
        class="form-check-input"
        type="checkbox"
        id="policyAccept"
        value="policyAccept"
      />
      <label class="form-check-label" for="policyAccept"
        >I agree to the hotel’s cancellation policy</label
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
        >I agree to take responsibility for any damage during the
        event</label
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
</div>
</div>
';
}


?>