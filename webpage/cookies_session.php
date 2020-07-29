<?php
	//read back the cookies and session in every page
	if(isset($_COOKIE['language']))
		$language = $_COOKIE['language'];
	else
		//set default non value
		$language = "Not Selected";
	
	if(isset($_COOKIE['bgcolor']))
		$bgcolor = $_COOKIE['bgcolor'];
	else
		//set default white
		$bgcolor = "white";
	
	if(!isset($_SESSION))
		session_start();
	if(!empty($_SESSION['uname']) && !empty($_SESSION['time'])){
		$uname = $_SESSION['uname'];
		$time = $_SESSION['time'];
	}
?>