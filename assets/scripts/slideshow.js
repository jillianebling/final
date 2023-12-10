current = 1;

//Wait for Load
document.addEventListener("DOMContentLoaded",nextSlide(current)); //DOM


//Switch Slide forward or back based on which button pressed
function changeSlide(prevonex) {
    nextSlide(current+= prevonex);
}


//Change to next or prev slide based on given from changeSlide
function nextSlide(index) {
    slides=document.getElementsByClassName("slides");
    if (index>slides.length) {
        current= 1;
    }    
    if (index<1) {
        current=slides.length;
    }
    for (var i= 0;i<slides.length;i++) {
        slides[i].style.display= "none";  
    }
    slides[current-1].style.display= "block";  //make previous invisible
}

//Switch slides every 5 seconds
setInterval(function(){changeSlide(1);}, 5000); //built in func; changes slides every 5 seconds
