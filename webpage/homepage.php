<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Speedy Bus | Home page</title>
        <script src="../scripts/num-btn.js"></script>
        <?php include("../webpage/headinclude.html");?>
    </head>

    <body id="main">
        <?php 
            include('../webpage/webpageSetting.php');
            include('../scripts/commonFunction.php');
            include("../webpage/header.php"); 
        ?>

        <div id="content">
            <center>
            <table border="0">
                <tr>
                    <td>
                        <fieldset style = "width:0px">
                            <a href= ""><img src="https://5.imimg.com/data5/XP/OX/GLADMIN-14313725/largest-school-bus-500x500.jpg" width="100" height="100">Local bus</a> 
                        </fieldset>
                    </td>

                    <td>
                        <fieldset style = "width:0px">
                            <a href= ""><img src="https://htxtriallawyers.com/wp-content/uploads/2020/03/bus-accidents-small.png" width="100" height="100">Crossover state bus</a>
                        </fieldset>
                    </td>
                </tr>
            </table>
              
            <fieldset>
                <h2>Local Bus Ticket</h2>

                <?php
                    $month = array("January"=>31,"February"=>28,"March"=>31,"April"=>30,"May"=>31,"June"=>30,
                    "July"=>31,"August"=>31,"September"=>30,"October"=>31,"November"=>30,"December"=>31);

                    $formType = array("One Way","Round Trip","Day Pass","Monthly Pass");

                    if(!empty($_GET['formSelected'])){
                        $formSelected = $_GET['formSelected'];
                    }else{
                        $formSelected = -1;
                    }
                    
                    //print the form selection bar
                    echo "<ul id=\"homepage-select\" type=\"none\">";
                        foreach($formType as $key => $type){
                            if($key == $formSelected-1){
                                echo "  <li class=\"homepage-form\">
                                            <a href=\"homepage.php?formSelected=".($key+1)."\" class=\"homepage-form-text blackBlock\">
                                                $type
                                            </a>
                                        </li>";
                            }else{
                            echo "  <li class=\"homepage-form\">
                                        <a href=\"homepage.php?formSelected=".($key+1)."\" class=\"homepage-form-text\">
                                            $type
                                        </a>
                                    </li>";
                            }
                        }
                    echo "</ul>";

                    if($formSelected==-1){
                        //display message to prompt user to select form from bar above
                        echo "Please select the type of local ticket";
                    }
                    else{
                        //print the form selected by the user
                        echo "<form id=\"form\" action=\"chooseBus.php\" method=\"post\">
                                <br><br>
                                <table>";
                        
                        switch($formSelected){
                        case 1:
                            echo "<h2>State</h2>";
                            echo "<input type=\"text\" name=\"state\" value=\"$state\" disabled>";
                            echo "<h2>Select Month</h2>
                                    <select name=\"month\">";
                            foreach($month as $m => $d){
                                echo "<option value=\"$m\">$m</option>";
                            }
                            echo "</select>";
                            echo "<br><br>";

                            echo "<h2>Select Day</h2>
                                    <select name=\"day\">";
                            for($i = 1;$i<=31;$i++){
                                echo "<option value=\"$i\">$i</option>";
                            }
                            echo "</select>";


                            echo "<input type=\"hidden\" name=\"form_type\" value=\"oneway_ticket\">";
                            break;
                        case 2:
                            echo "<h2>State</h2>";
                            echo "<input type=\"text\" name=\"state\" value=\"$state\" disabled>";
                            echo "<h2>Select Month</h2>
                                    <select name=\"month\">";
                            foreach($month as $m => $d){
                                echo "<option value=\"$m\">$m</option>";
                            }
                            echo "</select>";
                            echo "<br><br>";

                            echo "<h2>Select Day</h2>
                                    <select name=\"day\">";
                            for($i = 1;$i<=31;$i++){
                                echo "<option value=\"$i\">$i</option>";
                            }
                            echo "</select>";


                            echo "<input type=\"hidden\" name=\"form_type\" value=\"roundtrip_ticket\">";
                            break;
                        case 3:
                            echo "<h2>State</h2>";
                            echo "<input type=\"text\" name=\"state\" value=\"$state\" disabled>";
                            echo "<h2>Select Month</h2>
                                    <select name=\"month\">";
                            foreach($month as $m => $d){
                                echo "<option value=\"$m\">$m</option>";
                            }
                            echo "</select>";
                            echo "<br><br>";

                            echo "<h2>Select Day</h2>
                                    <select name=\"day\">";
                            for($i = 1;$i<=31;$i++){
                                echo "<option value=\"$i\">$i</option>";
                            }
                            echo "</select>";

                            echo "<input type=\"hidden\" name=\"form_type\" value=\"daily_ticket\">";
                            break;
                        case 4:
                            echo "<h2>State</h2>";
                            echo "<input type=\"text\" name=\"state\" value=\"$state\" disabled>";
                            echo "<h2>Select Month</h2>
                                    <select name=\"month\">";
                            foreach($month as $m => $d){
                                echo "<option value=\"$m\">$m</option>";
                            }
                            echo "</select>
                                    <input type=\"hidden\" name=\"form_type\" value=\"monthly_ticket\">";
                            break;
                        }

                        echo "</table>
                                <br><br>
                                    <input type=\"submit\" value=\"search\">
                                    <br><br>
                                
                                    <lable for=\"numPax\">No. of pax</lable>
                                    <input type=\"button\" class=\"change-btn\" onclick=\"minus1();\" value=\"&lt;\">
                                    <input type=\"number\" id=\"num-btn\" name=\"numPax\" keyup=\"check_value\">
                                    <input type=\"button\" class=\"change-btn\" onclick=\"add1();\" value=\"&gt;\">
                                    <br><br>
                                    Maximum purchase:<input type=\"number\" id=\"stk\" value=\"10\" disabled>
                                <br>
                            </form>";
                    }
                ?>
            </fieldset>
        </center>
        </div>

        <?php
            include("../webpage/footer.html");
        ?>
    </body>
</html>
