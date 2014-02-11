<?php
	session_start();
	//DOES THIS SESISON EXISIT? NO? REDIRECT TO LOGIN!
	if(!isset($_SESSION['User'])){
		header( 'Location: /Feb5/login.php' ) ;//Redirect		
	}

?>