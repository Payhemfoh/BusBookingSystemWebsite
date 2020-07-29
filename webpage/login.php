<?php
	if(isset($_POST['submitted'])){
		//handle the value of login form
		$uname = $_POST['uname'];
		$pwd = $_POST['pwd'];
		$fill=TRUE;
		//Show alert message when username had no entry
		if(empty($uname)){
			print '<p>Please enter your username.</p>';
			$fill=FALSE;
		}
		//Show alert message when password had no entry
		if(empty($pwd)){
			print '<p>Please enter your password.</p>';
			$fill=FALSE;
		}
		//If every valid is true, show a success message
		if($fill){
			print 'You have been successfully log in.';
			//start session
			session_start();
			//store username
			$_SESSION['uname'] = $_POST['uname'];
			//store login time
			$_SESSION['time'] = time();
			//locate to home page
			//header('Location: index.php');
			//exit session
			exit();
		}
	}
	else{
		include('cookies_session.php');
		//login html at below
?>