//load id for constant variables
const rooms = document.getElementById("room");
const restaurant = document.getElementById("restaurant");
const weddinghall = document.getElementById("weddinghall");
const swimmingpool = document.getElementById("swimmingpool");
const firstName = document.getElementById("fname");
const lastName = document.getElementById("lname");
const email = document.getElementById("email");
const phoneNo = document.getElementById("phoneno");
const addressLine1 = document.getElementById("address1");
const addressLine2 = document.getElementById("address2");

console.log(firstName);
console.log(lastName);
console.log(rooms);
console.log(restaurant);
console.log(weddinghall);
console.log(swimmingpool);

function getvalues() {
  //get value from the checkboxes
  const roomsChecked = rooms.checked;
  const restChecked = restaurant.checked;
  const weddingHallChecked = weddinghall.checked;
  const swimmingpoolChecked = swimmingpool.checked;
  const fNameValue = firstName.value;
  const lNameValue = lastName.value;
  const emailValue = email.value;
  const phoneNoValue = phoneNo.value;
  const addressLine1Value = addressLine1.value;
  const addressLine2Value = addressLine2.value;

  const customer = {};

  customer["firstName"] = fNameValue;
  customer["lastName"] = lNameValue;
  customer["email"] = emailValue;
  customer["phoneno."] = phoneNoValue;
  customer["addressLine1"] = addressLine1Value;
  customer["addressLine2"] = addressLine2Value;
  customer["rooms"] = roomsChecked;
  customer["restaurnt"] = restChecked;
  customer["swimmimgpool"] = swimmingpoolChecked;
  customer["weddinghall"] = weddingHallChecked;

  //console.log(fNameChecked);
  // console.log(roomsChecked);
  //console.log(restChecked);
  //console.log(weddingHallChecked);
  // console.log(swimmingpoolChecked);
  console.log(customer);

  if (roomsChecked) {
    window.open("../forms/roomsreservation.php", "_blank");
  } else if (restChecked) {
    window.open("../forms/restaurantreservation.php", "_blank");
  } else if (weddingHallChecked) {
    window.open("../forms/weddinghallreservation.php", "_blank");
  } else if (swimmingpoolChecked) {
  } else {
    alert("Please select service type");
  }
}