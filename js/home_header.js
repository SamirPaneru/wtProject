// When the user scroll page exute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to header when you reach its scroll position
function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

// Mobile toggling
function mobToggling() {
    var x = document.getElementById("myHeader")
    if (x.className==="header") {
        x.className += " responsive";
    } else {
        x.className = "header";
    }
}
