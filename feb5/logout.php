<?php
	session_start();
	session_destroy();	
	header( 'Location: /Feb5/login.php' ) ;//Redirect		
?>