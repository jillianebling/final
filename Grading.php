<?php
    //Page Settings
    $pageName = 'Grading';
    $cssName = "grading";
    
    include("assets/inc/header.php");
?>  
    
    <!--Content-->
    <div class="content">
        <h3>Content Reflection</h3>
        <p>I believe that I followed CRAP principles appropriately. I kept my content organization and navigation system consistent. I found a color scheme that fits the page. I originally wanted to do something vibrant and use stark whites, but I settled on something more calm. I thought the navy blue and beige colors could be reminiscent of a beach. I included a large graphic of scenery that was relevant to the page content on the top of each webpage. I was planning on doing this for the Park Attraction and Tourist Attraction pages, but I thought it would be confusing to users that some pages did have the graphic and some did not. </p>
        <p>I wanted to keep the content interesting, even with more dull pages such as restaurants. I was careful to divide the content up so that users could find what they were looking for quickly. Most of the time when I use a tourism website and there is a section about “our story” or “about” I skim right past it, so I did not want to make my users sort through the fluff to get to the information they need. I am fortunate to have remembered a lot of the backstory for the two castles, and it ended up being a large part of my focus. I created a Word document similar to what we used for the content section of the group project and created my content there. It ended up being over 3k words, and this boosted my confidence a lot when I started coding. Searching for good images to use was hard, a lot of photos out there are very small and pixelated, or ugly. I was struggling to find a good image for the homepage, so I went back into my photos and found a panorama I had taken on my phone in the 1k Islands and used that.</p>
        <p>Overall, I think this project went well. There were some road bumps with the dropdown boxes in the navigation section and resizing but I worked them out. Next time, I am going to comment on my HTML code as I am working on it because I ended up spending a lot of time going back and organizing it.</p>
        <h3>Part Two Requirements:</h3>
        <p><strong>JS and DHTML:</strong> I combined these two categories with the slideshow you see on the top of each page (excluding grading, soruces, and comments page, as I felt it was inappropriate). The slideshow clicks through with the arrows on each side, but also switches to the next slide every 5 seconds using setInterval. The style is edited when making images that aren't currently being displayed be hidden. The scroll through arrows are hidden for mobile devices. I hate having to get scrollers to work on websites on my phone, so I opted to just let the images scroll through by themselves. <strong>All images are dynamically added</strong>, I use variables for each image, and use the echo command to get them to load into the slideshow.php file. For the Boldt, and Singer castle pages, I used different images just because there are so many good pictures of the castles available. The slideshow for all tabs under the 'At The Parks' section in the navbar have a few extra images aswell.</p>
        <ul class="list">
            <li><strong>Extras:</strong></li>
            <li><strong>Captcha</strong> - (This could possibly count for DHTML aswell, since this constantly edits the pages style with each captcha). I incorportated a working captcha on the comments page, that requires the user to fill out the captcha correctly before the form can submit. I started doing this myself, but got help from w3schools when I got seriously stuck. I found the solution was that I needed to be using a global variable for the captcha, so it would properly display the new code. I did get some help from many sources for this, but I signifigantly changed them to get the captcha to interact with my js and php properly, though the general structure is the same (not many different ways to make a captcha, lol)</li>
            <li><strong>Maps and Yelp</strong> - On the resturaunts, trails, and home pages, I put different trails, resturaunt reviews, and maps regarding the pages content. I hid any maps or reviews for the mobile version of the page. Personally, I hate when websites have the google map embeds for mobile devices, as they are hard to work with.
            <li><strong>Favicon</strong> - I created a favicon for the website. I made it myself in a pixed editor. I am not very creative or good at drawing, so I think it came out pretty good for my abilities. I wanted to reflect the wilderness/vacation ascpect of Wellesley Island, rather than focus on Alex Bay. The favicon is of a tree, and the beach with a bright sun overhead.
            <li><strong>Slideshow Images</strong> - I am not sure if this counts as an extra, but I didn't intend to do it originally, and the website looked fine with the same images for all pages, but I wanted to enhance the website a bit so I figured I'd throw it in as an extra. As stated previously, I make the slideshow 'dynamic', meaning I loaded the images for the slideshows on each page using variables that store which specific image should be used. On the Boldt and Singer castle pages, and all pages under the "at the parks" tab have different images from default (I didn't change it for all pages, becasue it is hard to get images for things like returaunts and Alex Bay, and I figured it would bring the quality of my website down if I used images that weren't good).
        </ul>
        </div>

    <?php
        include("assets/inc/footer.php");
    ?>
</body>
</html>