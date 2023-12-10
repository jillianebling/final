<?php

    //Page Settings
    $pageName = 'Home';
    $cssName= 'index';

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
        <div class="overview">
            <p> 
            Upstate New York is home to one of the most beautiful state parks in the region. Wellesley Island is an immensely popular destination for tourists and campers alike. Campers can enjoy a trip within their comfort level, choosing from many islands, basic campsites, cottages, and fully-furnished cabins. The park also provides opportunities to enjoy the outdoors with a wide range of trails and activities to choose from. Although there are many state parks in the 1000 Islands region, Wellesley Island is the largest, and the most sought after by campers.
            Populating much of the St. Lawrence River, the 1000 Islands feature many gorgeous views and a stunning look into history at the Boldt and Singer castles. Visitors with diving licenses are encouraged to dive into one of the many historical shipwreck sites along the river. 
            Not into adventure? Don’t worry! Alexandria Bay is just a stone’s throw away from the 1000 Island State Park. A-Bay provides leisurely lakefront dining, boutique shopping, boat tours, and more!
            </p>
            <iframe class='map' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45667.55387368979!2d-75.9884135!3d44.32593985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccd478564e99d9d%3A0xa698248823c50752!2sWellesley%20Island!5e0!3m2!1sen!2sus!4v1702176020489!5m2!1sen!2sus" width="600" height="450" style="border:0;"></iframe>        
    </div>
                <iframe class='map2' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45667.55387368979!2d-75.9884135!3d44.32593985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccd478564e99d9d%3A0xa698248823c50752!2sWellesley%20Island!5e0!3m2!1sen!2sus!4v1702176020489!5m2!1sen!2sus" style="border:0;"></iframe>        

    <?php
        include("assets/inc/footer.php");
    ?>
</body>
</html>