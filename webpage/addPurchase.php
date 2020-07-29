<?php

    if(isset($_POST['submitted'])){

        //login data base
        $login = mysqli_connect('localhost','root','');
        if(!$login){
            die('Could not connect: '.mysqli.error($login));
        }

        //select database
        $selectDatabase=mysqli_select_db($login,'bus_system');

        //if no database found
        if(!$selectDatabase){
            //if does not exist
            $sql='CREATE DATABSE bus_system';

            if(mysqli_query($login,$sql)){
            echo"<p>Database created successfully</p>";}

            else{
                echo"<p>Error creating database:" .mysqli_error($login). "</p>"
            }
        }
        
        //data field
        $payment_method=$_POST['paymentMethod'];
        $first_name=$_POST['firstName'];
        $last_name=$_POST['lastName'];
        $card_no=$_POST['cardNo'];
        $expire_date=$_POST['expireDate'];
        $cvv=$_POST['cvv'];
        $total_pay=$_GET['totalPay']
        //next time user login check purchase history, use this username to match
        $username=$_GET['username']
		$destination=$_GET['destination'];
		$travel_date=$_GET['travelDate'];
		$total_pax=$_GET['totalPax'];
		$ticket_price=$_GET['ticketPrice'];
		$arrival_time=$_GET['ETA'];
		$depature_time=$_GET['departureTime']
		

        //check all set
        if(isset($_POST['paymentMethod'])&&isset($_POST['firstName'])&&
        isset($_POST['lastName'])&&isset($_POST['cardNo'])&&isset($_POST['expireDate'])&&isset($_POST['cvv'])
        &&isset($_GET['username'])&&isset($_GET['totalPay'])&&isset($_GET['destination'])&&isset($_GET['travelDate'])&&
		isset($_GET['totalPax'])&&isset($_GET['ticketPrice'])&&isset($_GET['ETA'])&&isset($_GET['departureTime'])){

            $querySQL="INSERT INTO purchase_history(username,firstName,lastName,paymentMethod,cardNo,expireDate,cvv,totalPay,
			destination,travelDate,totalPax,ticketPrice,ETA,departureTime)
            VALUES('$username','$first_name','$last_name','$payment_method','$card_no','$expire_date','$cvv','$total_pay'
			,'$destination','$travel_date','$total_pax','$ticket_price','$arrival_time','$departure_time')";

            //if all success insert
            if(mysqli_query($login,$querySQL)){
                echo"<p>Submit sucessfully</p>";
                echo"<a href='home.php'>Back to main page</a>";
            }

            else{

                echo"<p style='color:red;'> Unsuccessful register entry
						into database because of:>".mysqli_error($login).
						"The query was:" .$querySQL. "</p>";
            }
        }
        
        //close connection
        mysqli_close($login);
    }

    else{
        //html and php display code
    }