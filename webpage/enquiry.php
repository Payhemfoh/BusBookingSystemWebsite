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
        $email=$_POST['email'];
        $first_name=$_POST['firstName'];
        $last_name=$_POST['lastName'];
        $gender=$_POST['gender'];
        $phone_number=$_POST['PhoneNumber'];
        $feedback=$_POST['feedback'];

        //check all set
        if(isset($_POST['email'])&&isset($_POST['firstName'])&&
        isset($_POST['lastName'])&&isset($_POST['gender'])&&isset('feedback')){

            $querySQL="INSERT INTO enquiry(email,firstName,lastName,gender,phoneNumber,feedback)
                        VALUES('$email','$first_name','$last_name','$gender','$phone_number','$feedback')";

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