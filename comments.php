<script src="assets/scripts/clean.js"></script>
<?php
    /*Database init*/
    include("../dbCon.php");

    /*Validation*/
    include("assets/scripts/validations.php");

    function sanitize($str,$length=50){
        $str=trim($str);
        $str=htmlentities($str,ENT_QUOTES);
        return substr($str,0,$length);
    }

    if(!empty($_GET['from']) && !empty($_GET['message']) && !empty($_GET['email'])){
        //sanitize
        $from=sanitize($_GET['from']);
        $message=sanitize($_GET['message']);
        $email=sanitize($_GET['email']);

        //validate
        //Not validating message, its already not malicious and users can say whatever
        $em=emailCheck($email);
        $frm=alphaNumeric($from);

        //Let user know what to fix
        if(!$em){echo "<script>alert('Please Enter Valid Email Address.')</script>";}
        if(!$frm){echo "<script>alert('Please Enter Valid Name')</script>";}

        //insert + display
        if($em && $frm){
            $sql="INSERT INTO `travelcomments` (`from`, `message`, `email`) VALUES (?, ?, ?);";
            $stmt=$conn->prepare($sql);
            $stmt->bind_param("sss",$from,$message,$email);
            $stmt->execute();
        }
    }

    /*Page Settings*/
    $pageName = 'Comments';
    $cssName= 'comments';
    include("assets/inc/header.php");
?> 
    <!--Content-->
    <div class="content">
            <div class="naturepic">
                <img src="assets/media/images/1000-Islands-Cangeo-2-scaled.jpg" alt="Canoeing on the St. Lawrence">
            </div>

            <br/>
            <br/>
            <br/>

        <div id="list" class="list">
            <!-- Display the Comments -->
                <ul>
                <?php
                    $sql= "SELECT `from`, `message`, `date` FROM `travelcomments` ORDER BY `date` DESC LIMIT 50";

                    $result = $conn->query($sql);

                    if ($result->num_rows>0) {
                    // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<ul style='font-family: Antic;'><strong>".$row["from"]."</strong> <p class='date'>".$row['date']."</p> <br/>".$row["message"]."</ul><br/>";
                        }
                    } else {
                    echo "0 results";
                    }
                    $conn->close();
                ?>
                </ul>
            </div>

            <!-- The Form -->
            <div class="formcont">
                <h3>How Was Your Trip?</h3>
                <form class="form" action="comments.php" method="GET" onsubmit="return clean()">
                    First name: <input type="text" id="from" name="from" /><br/>
                    Your Email: <input type="text" id="email" name="email"/><br/>
                    Comments: <textarea cols=20 rows=5 id="message" name="message"></textarea>
                    <br/>
                    <input class="subbutt" type="submit" value="Submit"/>
                </form>
                </br>
                </br>
                </br>
            </div>
    </div>
<?php
        include("assets/inc/footer.php");
    ?>
</body>
</html>