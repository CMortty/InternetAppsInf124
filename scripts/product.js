




function ProcessOrder(){
  var orderForm = document.getElementById("orderForm");
  var numIphone = orderForm.numIphone.value;
  var numNokia = orderForm.numNokia.value;
  var numToy=orderForm.numToy.value;
  var numAbacus=orderForm.numAbacus.value;
  var numWriter=orderForm.numWriter.value;
  var Total=(numIphone*500)+(numNokia*499)+(numToy*399)+(numAbacus*200)+(numWriter*48);
  var fname=orderForm.firstName.value;
  var lName=orderForm.lastName.value;
  var email=orderForm.email.value;
  var zip=orderForm.zipCode.value;
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
  if (!validateZip(zip)){
    alert("Invalid zip."):
    return false;
  }
  alert("Your order Total is: "+Total+", and it has been added to your cart. Thank You");





function validateZip(zip){
  var regZip=/^[0-9]{5}(?:-[0-9]{4})?$/;
  return regZip.test(zip);

}
}
