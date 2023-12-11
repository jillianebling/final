<?php

    //Page Settings
    $pageName = 'Resturaunts';
    $cssName = "resturaunts";

    //Image Names
    $img1= 'alt="Wellesley Island Bridge" src="assets/media/images/1000-Islands-Cangeo-8-scaled.jpg"';
    $img2= 'alt="Canoeing on the St. Lawrence" src="assets/media/images/1000-Islands-Cangeo-2-scaled.jpg"';
    $img3= 'alt="Loons on the Water" src="assets/media/images/1000-Islands-Cangeo-9-scaled.jpg"';
    $img4='alt="Docks at A-Bay" src="assets/media/images/abaydocks.jpg"';
    $img5= 'alt="Boldt Castle" src="assets/media/images/boldtcastle.jpg"';
    $img6= 'alt="Forest on Wellesley Island" src="assets/media/images/wildernesspano.jpg"';
    $img7= 'alt="Singer Castle" src="assets/media/images/singercastle.jpg"';
    
    include("assets/inc/header.php");
    include("assets/inc/yelp.php");
?>  

    <!--Content-->
    <div class="content">
    <?php include("assets/inc/slideshow.php");?>

    <img class="admiralpic" src="assets/media/images/admirals.jpg" alt="Admirals-Inn">
    
        <div class="admirals">
            <h3><a href="https://www.facebook.com/pages/Admirals-Inn/433772523300418" target="_blank">Admiral's Inn</a></h3>

            <h4>About</h4>
            <p>Admiral’s is a restaurant right in the center of downtown Alexandria Bay. They serve all sorts of courses but specialize in seafood. The restaurant also keeps a variety of cakes and pies for dessert. Admiral’s provides guests with comfortable seating outdoors and indoors; there is always something interesting to look at.</p>
            <h4>Where</h4>
            <p>20 James St Ste 1, Alexandria Bay, NY</p>
            <h4>Hours</h4>
            <p>11 am - 10 pm daily</p>
        </div>

        <div class="nutn">
            <h3><a href="https://www.facebook.com/nutnfanci/" target="_blank">Nut-n-Fanci</a></h3>

            <h4>About</h4>
            <p>Nut-n-Fanci has been around forever. It is a small breakfast and lunch spot, with a general store attached. They are not located in the state park but are just outside of it. It is right on the side of the road leading away from the park. </p>
            <h4>Where</h4>
            <p>44100 Cross Island Rd, Fineview, NY, United States, New York</p>
            <h4>Hours</h4>
            <p>Every day except Sunday from 8 am to 2 pm</p>
        </div>

        <!--Get reviews-->
        <div class='yelp'>
            <h4>Reviews</h4>
            <ul>
                <?php getReview(1)?> 
                <li style="list-style:none;"><a href="https://www.yelp.com/biz/nut-n-fanci-wellesley-island-2" target="_blank">View More on Yelp</a>
            </ul>          
        </div>

        <div class="skiffs">
            <h3><a href="https://www.facebook.com/skiffsabay/" target="_blank">Skiffs</a></h3>

            <h4>About</h4>
            <p>Skiffs is a popular bar and pub right across the street from the Admiral’s Inn. Skiffs is a particularly interesting spot because of its live feed. Skiffs used to have a live feed of their bar streaming 24/7 even after hours. Family and friends of tourists could tune in worldwide and check in on their loved ones.</p>
            <h4>Where</h4>
            <p>12 James Street Alexandria Bay, NY 13607</p>
            <h4>Hours</h4>
            <p>Tues-Thurs open 4 pm; Fri-Sun open 12 pm</p>
        </div>

        <!--Get reviews-->
        <div class='yelp'>
            <h4>Reviews</h4>
            <ul>
                <?php getReview(3)?> 
                <li style="list-style:none;"><a href="https://www.yelp.com/biz/skiffs-alexandria-bay" target="_blank">View More on Yelp</a>
            </ul>          
        </div>

        <div class="rileys">
            <h3><a href="http://www.rileysbytheriver.com/" target="_blank">Riley's by the River</a></h3>
            
            <h4>About</h4>
            <p>Riley’s is an excellent place for more elevated dining in A-Bay. They are located right next to Uncle Sam’s Boat Tours with an excellent view of the river. Riley’s menu includes market-price seafood and other classic gastro-pub foods; you can’t go wrong at Riley’s. </p>
            <h4>Where</h4>
            <P>48 James Street, Alexandria Bay NY</P>
            <h4>Hours</h4>
            <p>Tuesday - Saturday 8 am - 8 pm</p>
        </div>

        <!--Get reviews-->
        <div class='yelp'>
            <h4>Reviews</h4>
            <ul>
                <?php getReview(1)?> 
                <li style="list-style:none;"><a href="https://www.yelp.com/biz/rileys-by-the-river-alexandria-bay" target="_blank">View More on Yelp</a>
            </ul>          
        </div>
        <br/>

    </div>

    <?php
        include("assets/inc/footer.php");
    ?>
    
</body>
</html>