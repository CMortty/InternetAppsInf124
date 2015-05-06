<?php
$messageToBusiness =
    "From: ".$_POST['firstName']." ".$_POST['lastName']."\r\n".
    "Email address: ".$_POST['email']."\r\n".
    "Quantity of Iphones: ".$_POST['numIphone']."\r\n".
    "Quantity of Nokias: ".$_POST['numNokia']."\r\n".
    "Quantity of Hi-def Phones: ".$_POST['numToy']."\r\n".
    "Quantity of Calculators: ".$_POST['numAbacus']."\r\n".
    "Quantity of Text Editors: ".$_POST['numWriter']."\r\n".
    "Address: ".$_POST['streetAddress']." ".$_POST['zipCode']."\r\n".
    "Buy more products? ".$purchaseAnswer."\r\n".
    $_POST['moreProducts']."\r\n";

$headerToBusiness = "From: ".$_POST['email']."\r\n";
mail("vlalchan@uci.edu", "Order", $messageToBusiness, $headerToBusiness);

//Message to client
$messageToClient =
    "Dear ".$_POST['firstName']." ".$_POST['lastName'].":\r\n".
    "The following order has been received by More Electronics!:\r\n\r\n".
    $messageToBusiness.
    "\r\n----------------------------\r\nThank you for your business you can expect your items to be beamed to you in 2-4 weeks.
     \r\n".
    "More Electronics! Team\r\n----------------------------\r\n";
mail('email',"order")


//Confirmation message in HTML display
  $display = str_replace("\r\n", "<br />\r\n", $messageToClient);
  $display =
      "<html><head><title>Your Message</title></head><body><tt>".
      $display.
      "</tt></body></html>";
  echo $display;

//logs the message in a .txt file
  $fileVar = fopen("~/public_html/data/feedback.txt", "a")
      or die("Error: Could not open the log file.");
  fwrite($fileVar, "\n-----------------------------------------------------\n")
      or die("Error: Could not write to the log file.");
  fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
      or die("Error: Could not write to the log file.");
  fwrite($fileVar, $messageToBusiness)
      or die("Error: Could not write to the log file.");

  ?>
