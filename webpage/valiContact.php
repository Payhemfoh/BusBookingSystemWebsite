<?php
	$email=$_POST['EMAIL']; 
	$first_name=$_POST['firstName'];
	$last_name=$_POST['lastName'];
	$gender=$_POST['gender'];
	$phone_number=$_POST['phoneNumber'];
	$respond_type=$_POST['respondType'];
	$feedback=$_POST['feedback'];
	$error=false;
	
		if(empty($email)){ 
			echo "<p>Email cannot be empty.</p>";
			$error=true;
		}
		
		if(empty($first_name)){ 
			echo "<p>First name cannot be empty.</p>";
			$error=true;
		}
		else{
			if(!(ctype_alphabet($first_name))){ 
			echo "<p>First name only accept alphabet</p>";
			$error = true;
			}
		}
		
		if(empty($last_name)){ 
			echo "<p>Last name cannot be empty.</p>";
			$error=true;
		}
		else{
			if(!(ctype_alphabet($last_name))){ 
			echo "<p>Last name only accept alphabet input</p>";
			$error = true;
			}
		}
		
		if(empty($gender)){ 
			echo "<p>Gender cannot be empty.</p>";
			$error = true;
		}
		
		if(empty($phone_number)){ 
			echo "<p>Phone number cannot be empty.</p>";
			$error = true;
		}
		else{	
			if(ctype_digit($phone_number)){
				echo "<p>phone number only accept</p>";
				$error = true;
			}
			else{
				if(strlen($phone_number)<10 || strlen($phone_number)>11){
					echo "<h3>Phone number out of length limit.</h3>";
					$error = true;
				}
			}
		}

		if(empty($respond_type)){ 
			echo "<p>Respond type cannot be empty.</p>";
			$error = true;
		}
		if(empty($feedback)){ 
			echo "<p>Feedback cannot be empty.</p>";
			$error = true;
		}
		
		if($error){
			returnToHomepage();
		}
?>