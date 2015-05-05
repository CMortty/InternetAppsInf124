function processFeedback() {
//    alert("got to the processFeedback function");
    var feedbackForm = document.getElementById("feedbackForm");
//    alert("got feedback variable");
    return validateInput(feedbackForm);
}

function validateInput(feedbackForm) {
    var fName = feedbackForm.firstName.value;
//    alert("fName: " + fName);
    var lName = feedbackForm.lastName.value;
//    alert("lName: " + lName);
    var email = feedbackForm.email.value;
//    alert("email: " + email);
    var productPurchased = feedbackForm.productPurchased.value;
//    alert("productPurchased: " + productPurchased);
    var rating = feedbackForm.rating.options[feedbackForm.rating.selectedIndex].text;
//    alert("rating: " + rating);
    var purchaseAgain = eval(feedbackForm.purchaseAns.value);
//    alert("purchaseAgain: " + purchaseAgain);
    var textField = feedbackForm.moreProducts.value;
//    alert("textField: " + textField);

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
    if (!validateProductPurchased(productPurchased)) {
        alert("Invalid product.");
        return false;
    }
    if (!validateText(textField)) {
        alert("Invalid text field.");
        return false;
    }


}

function validateName(name) {
    var i = name.search(/^[-'\w\s]+$/);
    if (i == 0){
        return true;
    }
    else {
        return false;
    }
}

function validateEmail(email) {
    var i = email.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
    if (i == 0){
        return true;
    }
    else {
        return false;
    }
}

function validateProductPurchased(productPurchased) {
    var i = productPurchased.search(/^\w+$/);
    if (i == 0){
        return true;
    }
    else {
        return false;
    }
}

function validateText(text) {
    var i = text.search(/^(.|\s)+$/)
    if (i == 0){
        return true;
    }
    else {
        return false;
    }
}

var id = 0;
var colors = ["red", "purple", "yellow", "green", "blue", "orange"]
function changeTextColor() {
    var thankYou = document.getElementById("thanks");
    thankYou.style.color = 5;
    setInterval('change()', 2000);
}

function change(){
    var thankYou = document.getElementById("thanks");
    thankYou.style.color = colors[id];
    id++;
    if (id == 6) {
        id = 0;
    }
}
