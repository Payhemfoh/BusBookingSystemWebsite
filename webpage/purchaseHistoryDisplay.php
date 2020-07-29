<?php

        //login data base
        $login = mysqli_connect('localhost','root','');
        if(!$login){
            die('Could not connect: '.mysqli.error($login));
        }

        //select database
        $selectDatabase=mysqli_select_db($login,'bus_system');

        //if no database found
        if(!$selectDatabase){
              echo"<p> No purchase history found</p>";
        }

        $username=$_GET['username'];
        $querySQL="SELECT *FROM purchase_history WHERE username=='$username'";
        $purchaseDisplay=mysqli_query($login,$query);

        //if want some css use class name to modify in <style>
        echo"<table class='purchaseHistoryTable'>";
        
        //table header
        echo"<tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Payment Method</th>
        <th>Card No</th>
        <th>Destination</th>
        <th>Travel Date</th>
        <th>Total Pax</th>
        <th>Ticket Price</th>
        <th>ETA</th>
        <th>Total Paid</th>
         </tr>"; 

        //condition to loop if still have data
        while($row=mysqli_fetch_array($purchaseDisplay)){
            echo"<tr>";
            echo"<td>".$row['firstName']."</td>";
            echo"<td>".$row['lastName']."</td>";
            echo"<td>".$row['paymentMethod']."</td>";
            echo"<td>".$row['cardNo']."</td>";
            echo"<td>".$row['destination']."</td>";
            echo"<td>".$row['travelDate']."</td>";
            echo"<td>".$row['totalPax']."</td>";
            echo"<td>".$row['ticketPrice']."</td>";
            echo"<td>".$row['ETA']."/td>";
            echo"<td>".$row['totalPaid']."</td>";
        }
        echo"</table>";
        mysqli_close($login);
         
?>