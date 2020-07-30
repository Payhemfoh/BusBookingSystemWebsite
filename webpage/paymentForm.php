<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Speedy Bus | Purchase Method</title>
		<?php include("../webpage/headinclude.html");?>
    </head>
	
	<body id="main">
		<?php 
            include('../webpage/webpageSetting.php');
            include('../scripts/commonFunction.php');
            include("../webpage/header.php"); 
        ?>
		
		<form action="paymentMethod.php" method="post">
		<div id="content">
		<h2>Purchase Method</h2>
            <fieldset>
			<table>
			<tr>
                <h3>Order Detail</h3>
            </tr>
			<tr>
				<td><b>Bus type</b></td>
				<td>Crossover state</td>
			</tr>
			
			<tr>
				<td><b>Destination</b></td>
				<td>First World Hotel, Genting Highlands</td>
			</tr>
			
			<tr>
				<td><b>Travel Date</b></td>
				<td>Jul 17,2020</td>
			</tr>
			
			<tr>
				<td><b>Departure Time</b></td>
				<td>12:00 P.M.</td>
			</tr>
			
			<tr>
				<td><b>Estimate Arrival Time</b></td>
				<td>06:00 P.M.</td>
			</tr>
			
			<tr>
				<td><b>No.of Pax</b></td>
				<td>10</td>
			</tr>
			
			<tr>
				<td><b>Ticket price per pax</b></td>
				<td>RM12.30</td>
			</tr>
			
			</table>
			</fieldset>
		
			<br>
			
			<fieldset>
			<table>
			<h3>Your order</h3>
			
			<tr>
				<td><b>First name:</b></td>
				<td><input type="text" name="firstName"></td>
			</tr>
			
			<tr>
				<td><b>Last Name:</b></td>
				<td><input type="text" name="lastName"></td>
			</tr>
			
			<tr>
				<td><b>Payment method:<b></td>
				<td><select name="cardType">
				<option value="visa">Visa</option>
				<option value="master">Master</option>
				<option value="americanExpress">American Express</option>
				</td>
			</tr>
			
			
			<tr>
				<td><b>Card no:<b></td>
				<td><input type="text" name="cardNo"></td>
			</tr>
			
			<tr>
				<td><b>Expire date:</b></td>
				<!-- After will replace with for loop, using for loop to dropdown list for user selection-->
				<td><input type="text" name="expireDate"></td>
			</tr>
			
			
			<tr>
				<td><b>CVV/Security code:</b></td>
				<td><input type="text" name="cvv"></td>
			</tr>
			
			<tr>
				<td><b>Total Payable:</b></td>
				<td><b>RM 123.00</b></td>
			</tr>
			
			
			</table>
			</fieldset>

			<br>
			<input type="submit" value="Submit">
			<input type="reset" value="Reset">
			
			</form>
		</div>
		
		<?php
            include("../webpage/footer.html");
        ?>
    </body>
</html>