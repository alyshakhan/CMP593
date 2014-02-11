<!DOCTYPE html>
<html>

<head>

<title>Jan. 29</title>

</head>

<body>

<h1>BAM! OPen these Front Door</h1>

<form method="post"> 

	<label>Who are you?</label>
	<input 
		type="text" 
		name="username" 
		placeholder="Alysha Khan" 
	/>

	<label>What is the password?</label>
	<input 
		type="password" 
		name="password" 
	/>

	<input 
		type="submit" 
		value="login" 
	/>

</form>

<h1 style="color:red;">

<?php

	if(isset($_REQUEST['username'])&&isset($_REQUEST['password'])) {

		if($_REQUEST['username'] == "alysha" && $_REQUEST ['password'] == "boo") {
	
		echo "Welcome Back";
		}

	}

?>

</h1>


</body>
</html>