<?php
	if(isset($_POST['submitted'])){
		setcookie('language',$_POST['language'],time()+3600);
		setcookie('bgcolor',$_POST['bgcolor'], time()+3600);
	}
	include('cookies_session.php');
?>
	<html lang="en">
	<head>
		<title>User Settings</title>
		<meta cahrset="utf-8">
		<!--Override every page bg color with the value from cookies-->
		<?php
		echo'<style>body {background-color: '.$bgcolor.';}";</style>';
		?>
	</head>
	<body>
	<?php
	//read header php file
	//include('header.php');
	?>
	<form style='border:1px solid #ccc' method="post" action="User Settings.php">
		<h2>User Settings</h2>
		<h3>Language:</h3>
		<select name="language">
			<option value="">Languague</option>
			<option value="Mandarin Chinese">Mandarin Chinese</option><option value="Spanish">Spanish</option>
			<option value="English">English</option><option value="Hindi (Sanskritised Hindustani)">Hindi (Sanskritised Hindustani)</option>
			<option value="Bengali">Bengali</option><option value="Portuguese">Portuguese</option>
			<option value="Russian">Russian</option><option value="Japanese">Japanese</option>
		</select>
		<h3>Background Color:</h3>
		<select name="bgcolor">
			<option value="">Background Color</option>
			<option value="black">Black</option>
			<option value="white">White</option>
			<option value="red">Red</option>
			<option value="yellow">Yellow</option>
			<option value="blue">Blue</option>
			<option value="green">Green</option>
		</select>
		<br/><br/><button type='submit'>Submit</button>
		<input type="hidden" name="submitted" value="true"/>
	</form>
	<?php
	//read footer php file
	//include('footer.php');
	?>
	</body>
	</html>
