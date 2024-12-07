<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WeddingHallReservation</title>
    <link rel="stylesheet" href="../css/weddinghallbooking.css" />
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
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
            <label for="bridename" class="form-label">Bride's Full Name</label>
            <input
              type="text"
              class="form-control"
              placeholder="bride's name"
              aria-label="bridename"
              id="bridename"
            />
          </div>

          <div class="col">
            <label for="bridename" class="form-label">Groom's Full Name</label>
            <input
              type="text"
              class="form-control"
              placeholder="groom's name"
              aria-label="groomname"
              id="groomname"
            />
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col">
            <label for="palnnername" class="form-label"
              >Wedding Planner's Name</label
            >
            <input
              type="text"
              class="form-control"
              placeholder="Wedding Planner's Name(Optional)"
              aria-label="palnnername"
              id="palnnername"
            />
          </div>
          <div class="col">
            <label for="palnnername" class="form-label"
              >Wedding Planner's Contact</label
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

    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
