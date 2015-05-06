function ProcessOrder() {
  // alert("We got to the process Order");
  var orderForm = document.getElementById("orderForm");
  var numIphone = orderForm.numIphone.value;
  var numNokia = orderForm.numNokia.value;
  var numToy=orderForm.numToy.value;
  var numAbacus=orderForm.numAbacus.value;
  var numWriter=orderForm.numWriter.value;
  var Total=(numIphone*500)+(numNokia*499)+(numToy*399)+(numAbacus*200)+(numWriter*48);
  var fName = orderForm.firstName.value;
  var address =orderForm.streetAddress.value;

  var lName=orderForm.lastName.value;
  var email=orderForm.email.value;
  var zipCode=orderForm.zipCode.value;

  if (!validateName(fName)) {
      alert("Invalid first name.");
      return false;
  }

  if (!validateName(lName)) {
      alert("Invalid last name.");
      return false;
  }

  if (!validateEmail(email)) {
      alert("Invalid email.");
      return false;
  }
  //either this call or the method itself is not working
  if (!validateZip(zipCode)){
    alert("Invalid zip.");
    return false;
  }
  if(!validateAddress(address)){
    alert ("Invalid address.");
    return false;
  }
  alert("Your order Total is: "+Total+", and it has been added to your cart. Thank You");


}


function validateZip(zip) {
  var regZip=/^[0-9]{5}(?:-[0-9]{4})?$/;
  p=zip.search(regZip);
  if(p==0){
    return true;
  }
  else {
    return false;
  }

}

function validateAddress(address) {
  //var regAddress=/A-Za-z0-9'\.\-\s\,/;
  var regAddress=/[0-9]{1,6}\s[a-zA-z0-9\s]{1,40}/;
  p=address.search(regAddres);
  if (p==0){
    return true;
  }
  else{
    return false;
  }
  }

  var id = 0;
  var colors = ["red", "purple", "black", "green", "blue", "orange"]
  //change this method to actually change the border color
  function changeBorderColor() {
      var outerTable = document.getElementById("outerTable");
      outerTable.style.borderColor = "blue";
      setInterval('borderchange()', 1500);
  }

  function borderchange(){
      var outerTable = document.getElementById("outerTable");
      outerTable.style.borderColor = colors[id];
      id++;
      if (id == 6) {
          id = 0;
      }
  }
