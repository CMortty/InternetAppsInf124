$(function () {
    $("#mainMenu").load("common/mainmenu.html");
    $("#logo").load("common/logo.html");
});

var isShowing = false;
var about = document.getElementById("about");
function showAbout() {
    about = document.getElementById("about");
    about.style.visibility = 'visible';
}

function hide() {
    about = document.getElementById("about");
    about.style.visibility = "hidden";
}