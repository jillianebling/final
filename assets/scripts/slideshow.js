var counter = 1;
slideShow(counter);

function plusSlides(num) {
  slideShow(counter += num);
}

function slideShow(num) {
  var slides = document.getElementsByClassName("slides");
  if (num>slides.length){
        index=1
    }    
  if(num<1){
        counter= slides.length
    }
  for (i=0; i<slides.length;i++) {
    slides[i].style.display = "none";  
  }
  slides[counter-1].style.display = "block";  
}