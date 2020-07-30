<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Choose Bus | Speedy Bus</title>
        <?php include("headinclude.php"); ?>
    </head>

    <body id="main">
        <?php
            include("webpageSetting.php");
            include("../scripts/commonFunction.php");
            include("header.php");

            echo "<div id=\"content\">";
            
            if(isset($_POST['submitted'])){
                $type = $_POST['form_type'];
                $state = $_POST['state'];
                $month = $_POST['month'];
                $day = $_POST['day'];
                /*
                -----validation-----
                */

                echo "<form action=\"paumentForm.php\" method=\"post\">";
                if($type == "oneway_ticket"){
                    echo "<label for=\"type\">Ticket Type</label><br>";
                    echo "<input type=\"text\" name=\"type\" value=\"$type\" disabled><br>";

                    echo "<label for=\"state\">State</label><br>";
                    echo "<input type=\"text\" name=\"state\" value=\"$state\" disabled><br>";

                    echo "<label for=\"month\">Month</label><br>";
                    echo "<input type=\"text\" name=\"month\" value=\"$month\" disabled><br>";

                    echo "<label for=\"busId\">day</label><br>";
                    echo "<input type=\"text\" name=\"day\" value=\"$day\" disabled><br>";

                    echo "<label for=\"busId\">Bus Id</label><br>";
                    echo "<select name=\"busId\">";
                    echo "<option value=\"id\">id</option>";
                    echo "</select>";
                    echo "<br>";

                    echo "<input type=\"submit\" value=\"Buy now\">";
                }
                else if($type == "roundtrip_ticket"){
                    echo "<label for=\"type\">Ticket Type</label><br>";
                    echo "<input type=\"text\" name=\"type\" value=\"$type\" disabled><br>";

                    echo "<label for=\"state\">State</label><br>";
                    echo "<input type=\"text\" name=\"state\" value=\"$state\" disabled><br>";

                    echo "<label for=\"month\">Month</label><br>";
                    echo "<input type=\"text\" name=\"month\" value=\"$month\" disabled><br>";

                    echo "<label for=\"busId\">day</label><br>";
                    echo "<input type=\"text\" name=\"day\" value=\"$day\" disabled><br>";

                    echo "<label for=\"busId\">Bus Id</label><br>";
                    echo "<select name=\"busId\">";
                    echo "<option value=\"id\">id</option>";
                    echo "</select>";
                    echo "<br>";

                    echo "<input type=\"submit\" value=\"Buy now\">";
                }
                else if($type == "daily_ticket"){
                    echo "<label for=\"type\">Ticket Type</label><br>";
                    echo "<input type=\"text\" name=\"type\" value=\"$type\" disabled><br>";

                    echo "<label for=\"state\">State</label><br>";
                    echo "<input type=\"text\" name=\"state\" value=\"$state\" disabled><br>";

                    echo "<label for=\"month\">Month</label><br>";
                    echo "<input type=\"text\" name=\"month\" value=\"$month\" disabled><br>";

                    echo "<label for=\"busId\">day</label><br>";
                    echo "<input type=\"text\" name=\"day\" value=\"$day\" disabled><br>";

                    echo "<input type=\"submit\" value=\"Buy now\">";
                }
                else if($type == "monthly_ticket"){
                    echo "<label for=\"type\">Ticket Type</label><br>";
                    echo "<input type=\"text\" name=\"type\" value=\"$type\" disabled><br>";

                    echo "<label for=\"state\">State</label><br>";
                    echo "<input type=\"text\" name=\"state\" value=\"$state\" disabled><br>";

                    echo "<label for=\"month\">Month</label><br>";
                    echo "<input type=\"text\" name=\"month\" value=\"$month\" disabled><br>";

                    echo "<input type=\"submit\" value=\"Buy now\">";
                }
                else{
                    echo "Oops! An error had occured when the server try to get the data.<br>";
                    returnToHomepage();
                }
            }



            echo "</form>";
            echo "</div>";
            include("footer.html");
        ?>
    </body>
</html>