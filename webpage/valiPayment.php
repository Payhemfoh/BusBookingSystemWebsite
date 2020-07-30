<?php
	$first_name=$_POST['firstName'];
	$last_name=$_POST['lastName'];
	$cardNo=$_POST['cardNo'];
	$expireDate=$_POST['expieDate'];
	$CVV=$_POST['CVV'];
	$error=false;
	
		
		if(empty($first_name)){ 
			echo "<p>First name cannot be empty.</p>";
			$error=true;
		}
		else{
			if(!(ctype_alphabet($first_name))){ 
			echo "<p>First name only accept alphabet.</p>";
			$error = true;
			}
		}
		
		if(empty($last_name)){ 
			echo "<p>Last name cannot be empty.</p>";
			$error=true;
		}
		else{
			if(!(ctype_alphabet($last_name))){ 
			echo "<p>Last name only accept alphabet input.</p>";
			$error = true;
			}
		}
		
		if(empty($cardNo)){ 
			echo "<p>Card number cannot be empty.</p>";
			$error = true;
		}
		else{	
			if(!(ctype_digit($cardNo))){
				echo "<p>Card number only accept digit.</p>";
				$error = true;
			}
			else{
				if(strlen($cardNo)!=12{
					echo "<p>Card number out of length limit.</p>";
					$error = true;
				}
			}
		}

		if(empty($expireDate)){
			echo "<p>Expire date cannot be empty.</p>";
			$error = true;
		}
		
		if(empty($CVV)){ 
			echo "<p>CVV cannot be empty.</p>";
			$error = true;
		}
		else{
			if(!(ctype_digit($CVV))){
                echo "<p>CVV only accept digit.</p>";
                $error= true;
			}
			else{
				if(strlen($CVV)!=3){
                    echo "<p>CVV only 3 digit.</p>";
                    $error= true;
				}
			}
		}
			
		
		if($error){
			returnToHomepage();
		}
?>