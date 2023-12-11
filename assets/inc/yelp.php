<?php
    function getReview($i){
        //which review set should be grabbed?
        if($i==1){
            $url ="https://api.yelp.com/v3/businesses/nut-n-fanci-wellesley-island-2/reviews";
        }elseif($i==2){
            $url ="https://api.yelp.com/v3/businesses/rileys-by-the-river-alexandria-bay/reviews";
        }elseif($i==3){
            $url ="https://api.yelp.com/v3/businesses/skiffs-alexandria-bay/reviews";
        }
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "authorization: Bearer " . "4NaNJnpowU2CnKbVSFPqu5qiMGBiFhwYK4QF8o3h1byfRq5nmDghhKDNxbQVj04f6i_DP_5XaVcjtEMgmWe7tlWuzpZq6cgNBjQAOu9_5oYgu1ehJxD8d1XEdVV2ZXYx",
        "cache-control: no-cache",
        ) );

        $results = curl_exec($ch);
        $results = json_decode($results);
        // var_dump($reviews);
        
        $reviews = $results->reviews;

        foreach($reviews as $review){
            echo "<li><strong>Rating:</strong> ".$review->rating."/5 </br> <strong>Comments:</strong> ".$review->text."</li></br>";
        }
    }
?>