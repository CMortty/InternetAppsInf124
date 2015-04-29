var orderForm = document.getElementById("orderForm");
var numIphone = orderForm.numIphone.value;
var numNokia = orderForm.numNokia.value;
var numToy=orderForm.numToy.value;
var numAbacus=orderForm.numAbacus.value;
var numWriter=orderForm.numWriter.value;

function processTotals(){
  var Total=(numIphone*500)
  alert("Your Total Is:" +Total);

  }
