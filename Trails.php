<?php

    //Page Settings
    $pageName = 'Trails';
    $cssName = "trails";

    //Image Names
    $img1= 'alt="<?php echo $pageName?>" src="assets/media/images/w1.jpg"';
    $img2= 'alt="<?php echo $pageName?>" src="assets/media/images/w2.jpg"';
    $img3= 'alt="<?php echo $pageName?>" src="assets/media/images/w3.jpg"';
    $img4='alt="<?php echo $pageName?>" src="assets/media/images/wildernesspano.jpg"';
    $img5= 'alt="<?php echo $pageName?>" src="assets/media/images/1000-Islands-Cangeo-9-scaled.jpg"';
    $img6= 'alt="<?php echo $pageName?>" src="assets/media/images/1000-Islands-Cangeo-2-scaled.jpg"';
    $img7= 'alt="<?php echo $pageName?>" src="assets/media/images/1000-Islands-Cangeo-8-scaled.jpg"';
    include("assets/inc/header.php");
?>  
    
    <!--Content-->
    <div class="content">
    <?php include("assets/inc/slideshow.php");?>

        <div class="overview">
            <p>Wellesley Island is full of beautiful trails. None of them are too challenging, the longest being just short of four miles. These trails provide a great opportunity to see the wildlife in the area. It is not uncommon to run into a large group of turkeys crossing in front of the Nature Museum. The Eel Bay trail is a must-see. It leads hikers about one mile into the forest and eventually becomes a beautiful overlook of the surrounding forest, and St. Lawrence River. Most of these trails come into brief contact with the Nature Museum and Butterfly House, which are open during the season. No admission is required to gain access to any of the trails, even the museum is free to wander through.</p>
            <iframe class="map" src="https://www.alltrails.com/widget/trail/us/new-york/wellesley-island-state-park?u=i&sh=h6nrgi" width="50%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="AllTrails: Trail Guides and Maps for Hiking, Camping, and Running"></iframe>
        </div>    
    </div>    

    <?php
        include("assets/inc/footer.php");
    ?>
</body>
</html>