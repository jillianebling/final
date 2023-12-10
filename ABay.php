<?php

    //Page Settings
    $pageName = 'Alexandria Bay';
    $cssName = "abay";

    //Image Names
    $img1= 'alt="Wellesley Island Bridge" src="assets/media/images/1000-Islands-Cangeo-8-scaled.jpg"';
    $img2= 'alt="Canoeing on the St. Lawrence" src="assets/media/images/1000-Islands-Cangeo-2-scaled.jpg"';
    $img3= 'alt="Loons on the Water" src="assets/media/images/1000-Islands-Cangeo-9-scaled.jpg"';
    $img4='alt="Docks at A-Bay" src="assets/media/images/abaydocks.jpg"';
    $img5= 'alt="Boldt Castle" src="assets/media/images/boldtcastle.jpg"';
    $img6= 'alt="Forest on Wellesley Island" src="assets/media/images/wildernesspano.jpg"';
    $img7= 'alt="Singer Castle" src="assets/media/images/singercastle.jpg"';
    
    include("assets/inc/header.php");
?>

    <!--Content-->
    <div class="content">
        <?php include("assets/inc/slideshow.php");?>
        <div class="abt">
            <h3>About</h3>
            <figure class="sunkship">
                <img src="assets/media/images/islander.JPG" alt="Ship photo">
                <figcaption>The Str. Islander is now an underwater tourist attracttion</figcaption>
            </figure>
            <p>Alexandria Bay is a beautiful town and a fun place to explore. The town is a ten-minute drive from the main entrance to the Thousand Island State Park and is a major attraction for campers staying there. A-Bay is home to an iconic downtown area, featuring many charming gift shops/boutiques and restaurants. The occasional ghost tour is hosted by a local business owner, and there are many interesting history sites around town.</p>
            
        </div>
        <div class="Resturaunts">
            <h3>Resturaunts</h3>
            <p>Restaurants are a huge part of Alexandria Bay’s attraction. The town has many quirky places to eat. Skiff’s Bar is of particular interest because in the past the bar had a live feed set up which was accessible online. Tourists who wanted to say hi to their relatives could check in online! Riley’s on the River features market-price seafood and great cocktails. A-Bay isn’t all dinner, though. The Lil’ River Fudge Co. sells amazing homemade fudge of many flavors, familiar and unfamiliar. Griffin’s -formerly Chez Paris- offers a delicious casual breakfast and lunch menu as well.</p>
        </div>
        <div class="gShop">
            <h3>Gift Shops and Boutiques</h3>
            <p>Gift shops take up a majority of the stores along the downtown strip. Most of these shops sell Alexandria Bay and 1000 Island-themed clothes. All of these stores are fun to browse through, many of them have interesting trinkets, but a few stand out. Good Dog Charlie’s is a unique shop that sells items with its branding on it; however, what stands out about the store is the mini cafe inside. The whole store smells of fresh espresso and toffee, and the treats they sell are excellent. La Boutique is another one of the more notable stores in Alex Bay. They sell the basics but also dabble in wood art. There is a large section of the store dedicated to various types of logs engraved or painted with images of various recognizable woodland animals, and sometimes even fairies.</p>
        </div>
    </div>

    <?php
        include("assets/inc/footer.php");
    ?>
</body>
</html>