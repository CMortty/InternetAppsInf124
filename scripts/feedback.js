function processFeedback() {
//    alert("got to the processFeedback function");
    var feedbackForm = document.getElementById("feedbackForm");
//    alert("got feedback variable");
    validateInput(feedbackForm);
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
    var confirmationEmail = feedbackForm.confirmationEmail.checked;
//    alert("confirmationEmail: " + confirmationEmail);
    
    if (!validateName(fName)) {
        alert("Invalid first name.");
    }
    if (!validateName(lName)) {
        alert("Invalid last name.");
    }
    
    if (!validateEmail(email)) {
        alert("Invalid email.");
    }
    if (!validateProductPurchased(productPurchased)) {
        alert("Invalid product.");
    }
    if (!validateText(textField)) {
        alert("Invalid text field.");
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