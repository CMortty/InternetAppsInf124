

function ComputeTotal(){
  var orderForm = document.getElementById("orderForm");
  var numIphone = orderForm.numIphone.value;

  var numNokia = orderForm.numNokia.value;
  var numToy=orderForm.numToy.value;
  var numAbacus=orderForm.numAbacus.value;
  var numWriter=orderForm.numWriter.value;
  var Total=(numIphone*500)+(numNokia*499)+(numToy*399)+(numAbacus*200)+(numWriter*48);
  alert("Your order Total is: "+Total);

  }



function ProcessOrder(){
  var orderForm = document.getElementById("orderForm");
  var numIphone = orderForm.numIphone.value;
  var numNokia = orderForm.numNokia.value;
  var numToy=orderForm.numToy.value;
  var numAbacus=orderForm.numAbacus.value;
  var numWriter=orderForm.numWriter.value;
  var Total=(numIphone*500)+(numNokia*499)+(numToy*399)+(numAbacus*200)+(numWriter*48);
  alert("Your order Total is: "+Total+", and it has been added to your cart. Thank You");

    }
