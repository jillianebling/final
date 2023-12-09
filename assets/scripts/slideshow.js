var current = 1;
manageSlides(current);

function changeSlide(prevonex) {
    manageSlides(current+= prevonex);
}

function manageSlides(index) {
    var slides=document.getElementsByClassName("slides");
    if (index>slides.length) {
        current= 1;
    }    
    if (index<1) {
        current=slides.length;
    }
    for (var i= 0;i<slides.length;i++) {
        slides[i].style.display= "none";  
    }
    slides[current-1].style.display= "block";  
}

setInterval(function(){changeSlide(1);}, 5000); //built in func; changes slides every 5 seconds
