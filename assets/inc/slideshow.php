<div class="slidewrap">

<!--Slideshow Images-->
<div class="slides">
  <img <?php echo $img1; ?>/>
</div>

<div class="slides">
  <img <?php echo $img2; ?>/>
</div>

<div class="slides">
  <img <?php echo $img3; ?>/>
</div>

<div class="slides">
  <img <?php echo $img4; ?>/>
</div>

<div class="slides">
  <img <?php echo $img5; ?>/>
</div>

<div class="slides">
  <img <?php echo $img6; ?>/>
</div>

<div class="slides">
  <img <?php echo $img7; ?>/>
</div>

<a class="prev" onclick="changeSlide(-1)">❮</a>
<a class="next" onclick="changeSlide(1)">❯</a>

<style>
  @media screen and (max-width: 600px) {
    .prev, .next{display:none;}
  }
</style>

<script src="assets/scripts/slideshow.js"></script>