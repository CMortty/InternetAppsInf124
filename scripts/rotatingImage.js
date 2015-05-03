//rotatingImage.js

var index = 0;
var imageArray = ["img/iphone.jpeg", "img/krzr.jpg", "img/manual calculator.JPG", "img/nokia_phone.jpg", "img/toy phone.jpg", "img/typewriter.jpg"];

function startRotation() {
    document.getElementById("mainPhone").src = imageArray[5];
    setInterval('rotate()', 2000);    
}

function rotate() {
    var imageObject = document.getElementById("mainPhone");
    imageObject.src = imageArray[index];
    index++;
    if (index == 4) {
        imageObject.style.width = "15em";
    }
    else {
        imageObject.style.width = "20em";
    }
    if (index == imageArray.length) {
        index = 0;
    }
}
