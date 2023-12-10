<?php

    //Page Settings
    $pageName = "Uncle Sam's Boat Tours";
    $cssName = "uncsam";

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
            <img class="barge" src="assets/media/images/uncsambot.png" alt="Uncle Sam Boat Next to Barge">
            <p>Uncle Sam Boat Tours provides a variety of tours across the 1000 islands. The company has many boats that charter guests. One of these is a three-level cruise boat that frequently hosts dinner cruises. Some special tours even allow children to steer the ship, and receive a certificate afterward. Uncle Sam provides a very convenient way to get to St. Lawrence’s most popular destinations, while also allowing tired tourists to relax, enjoy the scenery, and occasionally learn something about the area.</p> 
        </div>

        <div class="where">
            <h3>Where</h3>
            <p>Uncle Sam provides charters to and from Heart Island’s Boldt Castle but offers full tours of Singer Castle. Aside from destination tours, Uncle Sam brings guests up and down both the United States and Canadian sides of the river, pointing out unique islands, and giving a history of their homes.</p>
        </div>

        <div class="genInfo">
            <h3>General Information</h3>
            <p>Uncle Sam’s touring prices are as follows: Two Nation Tour - Adults $28.50 - Children $17.50 Singer Castle Tour - Adults $45.75 - Children $27.50 One Hour Tour - Adults $22.25 - Children $13.75 Sip N’ Sail - Adults $19.50 - Children $12.00 Boldt Castle Ferry (one way) - Adults $10.00 - Children $6.50 Hours: 10:30 am - 5 pm; May 13th - October 9th.</p>
        </div>
    </div>

    <?php
        include("assets/inc/footer.php");
    ?>
</body>
</html>