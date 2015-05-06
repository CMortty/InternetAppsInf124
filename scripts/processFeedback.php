<?php
//processFeedback.php

//Construct message
$purchaseAnswer = "Yes";
if ($_POST['purchaseAns']) {
    $purchaseAnswer = "Yes";
}
else {
    $purchaseAnswer = "No";
}
$messageToBusiness =
    "From: ".$_POST['firstName']." "
            .$_POST['lastName']."\r\n".
    "Email address: ".$_POST['email']."\r\n".
    "Purchased Product: ".$_POST['productPurchased']."\r\n".
    "Rating: ".$_POST['rating']."\r\n".
    "Buy more products? ".$purchaseAnswer."\r\n".
    $_POST['moreProducts']."\r\n";

//Send email feedback message to the business
$headerToBusiness = "From: ".$_POST['email']."\r\n";
mail("cmortime@uci.edu", "Feedback", $messageToBusiness, $headerToBusiness);

//Message to client
$messageToClient =
    "Dear ".$_POST['firstName']." ".$_POST['lastName'].":\r\n".
    "The following message was received from you by More Electronics!:\r\n\r\n".
    $messageToBusiness.
    "\r\n----------------------------\r\nThank you for the feedback and your patronage.\r\n".
    "More Electronics! Team\r\n----------------------------\r\n";


//ADDED TO SEND EMAIL TO CLIENT
$headerToClient="From: cmoretime@uci.edu \r\n";  //client header
mail($_POST['email'],"More Electronics! Feedback Sent", $messageToClient, $headerToClient); //email that gets sent to client

//Confirmation message in XHTML and display
$display = str_replace("\r\n", "<br />\r\n", $messageToClient);
$display =
    "<html><head><title>Your Message</title></head><body><tt>".
    $display.
    "</tt></body></html>";
echo $display;

//Log the message in a file called feedback.txt on web server
$fileVar = fopen("~/public_html/data/feedback.txt", "a")
    or die("Error: Could not open the log file.");
fwrite($fileVar, "\n-----------------------------------------------------\n")
    or die("Error: Could not write to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
    or die("Error: Could not write to the log file.");
fwrite($fileVar, $messageToBusiness)
    or die("Error: Could not write to the log file.");

?>
