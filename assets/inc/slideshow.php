<style>
* {box-sizing: border-box;}
body {margin:0}
.slides {display: none}
img {vertical-align: middle; height: 35vw; width: 100%}

/* Slideshow container */
.slideshow-container {
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
/* The dots/bullets/indicators */

.active{
  background-color: #717171;
}
</style>

<div class="slideshow-container">

<div class="slides fade">
  <img alt="Wellesley Island Bridge" src="assets/media/images/1000-Islands-Cangeo-8-scaled.jpg"style="width:100%"/>
</div>

<div class="slides fade">
  <img alt="Canoeing on the St. Lawrence" src="assets/media/images/1000-Islands-Cangeo-2-scaled.jpg" style="width:100%">
</div>

<div class="slides fade">
  <img alt="Loons on the Water" src="assets/media/images/1000-Islands-Cangeo-9-scaled.jpg" style="width:100%">
</div>

<div class="slides fade">
  <img alt="Docks at A-Bay" src="assets/media/images/abaydocks.jpg" style="width:100%"/>
</div>

<div class="slides fade">
  <img alt="Boldt Castle" src="assets/media/images/boldtcastle.jpg" style="width:100%"/>
</div>

<div class="slides fade">
  <img alt="Forest on Wellesley Island" src="assets/media/images/wildernesspano.jpg" style="width:100%"/>
</div>

<div class="slides fade">
  <img alt="Singer Castle" src="assets/media/images/singercastle.jpg" style="width:100%"/>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<script>
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
</script>
</body>
</html>