<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Speedy Bus | Buy tickets</title>
        <?php include("../webpage/headinclude.html"); ?>
    </head>

    <body id="main">
        <?php 
            include('../webpage/webpageSetting.php');
            include('../scripts/commonFunction.php');
            include("../webpage/header.php");
            
            //connect database
            if($db = mysqli_connect("localhost","root","")){
                if(mysqli_select_db($db,"bus_system")){
                    $query = "SELECT area FROM ";








                }
            }

            
        ?>

        <div id="content">
            <div class="buy-ticket-title">
                <h1>Choose destination</h1>

                <label for="type">Type of ticket</label>
                    <input type="radio" value="1">One Way  
                    <input type="radio" value="2">Round Trip
                    <input type="radio" value="3">Day Pass
                    <input type="radio" value="4">Monthly Pass
            </div>


            <div id="buy-ticket-content">
                <div id="buy-ticket-state">
                    <h1 class="selection-title">State:</h1>
                    <ul id="choose-state" type="none">
                    <?php
                        if(!empty($_GET['states']))
                            $getState = $_GET['states'];
                        else
                            $getState = "";
                        
                        $states = array("Perlis","Kelantan","Kedah","Penang","Pahang",
                        "Selangor","Kuala Lumpur","Puchong","Melaka","Terengganu","Johor","Sabah","Sarawak");

                        foreach($states as $row){
                            echo "<li class=\"selection\">";
                            if($getState == $row)
                                echo "<a href=\"buy_ticket.php?states=$row\" class=\"selection-text blackBlock\">";
                            else
                                echo "<a href=\"buy_ticket.php?states=$row\" class=\"selection-text\">";
                            
                            echo "      $row
                                    </a>
                                </li>";
                        }
                    ?>
                    </ul>
                </div>
                
                <?php
                $areas = array("1","2","3");

                if(!empty($_GET['area']))
                    $getArea = $_GET['area'];
                else
                    $getArea = "";

                if(!empty($getState)){
                echo "
                <div id=\"buy-ticket-area\">
                    <h1 class=\"selection-title\">Area:</h1>
                    <ul id=\"choose-area\" type=\"none\">";
                
                foreach($areas as $row){
                    if($row == $getArea)
                        echo "<li class=\"selection\"><a href=\"buy_ticket.php?states=$getState&&area=$row\" class=\"selection-text blackBlock\">$row</a></li>";
                    else
                        echo "<li class=\"selection\"><a href=\"buy_ticket.php?states=$getState&&area=$row\" class=\"selection-text\">$row</a></li>";
                }
                echo  "</ul>
                </div>";

                } 
                ?>

                <?php
                $stations = array("1","2","3");

                if(!empty($getArea)){
                echo "
                <div id=\"buy-ticket-station\">
                    <h1 class=\"selection-title\">Station:</h1>
                    <ul id=\"choose-station\" type=\"none\">";

                foreach($stations as $row){
                    echo "<li class=\"selection\"><a href=\"buy_ticket.php?states=$getState&&area=$getArea&&station=$row\" class=\"selection-text\">$row</a></li>";
                }
                echo    "</ul>
                </div>";
                } ?>
            </div>
            
        </div>

        <?php
            include("../webpage/footer.html");
        ?>
    </body>
</html>