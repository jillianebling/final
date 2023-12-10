<?php
    $pageName = 'Singer Castle';
    $cssName = "singer";
    $img1= 'alt="<?php echo $pageName?>" src="assets/media/images/singercastle.jpg"';
    $img2= 'alt="<?php echo $pageName?>" src="assets/media/images/singer2.jpg"';
    $img3= 'alt="<?php echo $pageName?>" src="assets/media/images/singer3.jpg"';
    $img4='alt="<?php echo $pageName?>" src="assets/media/images/singer4"';
    $img5= 'alt="<?php echo $pageName?>" src="assets/media/images/singer5"';
    $img6= 'alt="<?php echo $pageName?>" src="assets/media/images/singer6"';
    $img7= 'alt="<?php echo $pageName?>" src="assets/media/images/singer7"';
    include("assets/inc/header.php");
?>  

    <!--Content-->
    <div class="content">
    <?php include("assets/inc/slideshow.php");?>

        <div class="getThere">
            <h3>How To Get To Dark Island</h3>
            <p>Singer Castle is only accessible by water. Uncle Sam Boat Tours offers a charter from A-Bay and admission to the castle. Visitors are encouraged to travel to Dark Island using their own transportation. </p>
        </div>

        <div class="GeneralInfo">
            <h3>General Information</h3>
            <img class="Fbourne" src="assets/media/images/Frederick_Gilbert_Bourne.jpg" alt="Fredrick Gilbert Bourne">
            <p>All tours of Singer Castle are guided. Visitors are able to purchase tour tickets either at the castle or with the shuttle that transports them to the island. Tours are 45 minutes long and cost $14.75 for adults, and $7.75 for children.</p>
        </div>

        <div class="Story">
            <h3>The Story of Singer Castle</h3>
            <p>Singer Castle was built by Frederick Bourne, an owner of the Singer Sewing Machine Company. (Hence the name.) Bourne started his career at the Singer company as a janitor, and eventually worked his way up to CEO. Singer Castle was known as “The Towers” for the majority of its life, but was eventually renamed presumably because of the public’s familiarity with the name “Singer”. Singer Castle was hidden for most of its lifetime, the island was a hunting retreat for Bourne’s family. The castle features many original oddities. Many paintings feature secret cutout eyes so that servants could see if guests needed refreshments from the secret passageways in the walls. Some bookshelves even pull from the wall if you move a lamp, or pull on a specific book.</p>
        </div>

        <div class="Attractions">
            <h3>Attractions</h3>
            <p>Singer castle has barely been modified from its original state. All rooms are furnished with period-appropriate pieces. The castle includes a gift shop, where guests can purchase Singer Castle-themed merchandise. Guests can also book a stay at the Singer Castle Suite. A stay here includes a meal and tea, and even a bottle of wine from the castle’s wine cellar.</p>
        </div>
    </div>

    <?php
        include("assets/inc/footer.php");
    ?>
</body>
</html>