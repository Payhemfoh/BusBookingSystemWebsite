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
            $sql='CREATE DATABASE bus_system';

            if(mysqli_query($login,$sql)){
            echo"<p>Database created successfully</p>";}

            else{
                echo"<p>Error creating database:" .mysqli_error($login). "</p>"
            }
        }
        
        //data field
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $confirmPassword=$_POST['repeatPassword'];

        //check all set
        if(isset($_POST['email'])&&isset($_POST['username'])&&
        isset($_POST['password'])&&isset($_POST['repeatPassword'])){

            $querySQL="INSERT INTO user(username,password,confirmPassword,email)
                        VALUES('$username','$password','$confirmPassword','$email')";

            //if all success insert
            if(mysqli_query($login,$querySQL)){
                echo"<p>Register sucessfully</p>";
                echo"<a href='login.php'>Go to login</a>";
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