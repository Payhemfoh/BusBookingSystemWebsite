<?php


    if(isset($_POST['submitted'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

	    //validate username
        if(empty($_POST['username']))// if submit empty
        {
        echo"<p> Username cannot be empty</p>";//display message
        }
    
        else
        {
        $validateUser=true;//set condition to true if not empty
        }
    
        //validate password
        if(empty($_POST['password']))
        {
        echo"<p> Password cannot be empty</p>";//display message
        
        }
    
        else
        {
        $validatePassword=true;//set condition to true if not empty
        }

        if($validateUser==true&&$validatePassword==true){

            $login = mysqli_connect('localhost','root','');
            if(!$login){
                die('Could not connect: '.mysqli.error($login));
            }

            //select database
            $selectDatabase=mysqli_select_db($login,'bus_system');

            $querySQL="SELECT *FROM user WHERE username=='$username' and password =='$password'";
            $result= mysqli_query($login,$querySQL);
         
            //equals 1 if user found
            if(mysqli_num_rows($result)==1){

            $loggedUser=mysqli_fetcj_assoc($result);
            $_SESSION['username']=$loggedUser;   //if you want to do login session, else erase this line
            header('home.php');
            }

            else{
                echo"<p> No user found, please sign up</p>";
            
            }

            //close connection
             mysqli_close($login);
        }

    }

?>