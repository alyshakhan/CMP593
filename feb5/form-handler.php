<?php
	
	//SQL Commands
	/*
		INSERT - Adds a record to a table. 
		UPDATE - Which updates a record in a table 
		DELETE - Which Deletes a record in a table
		SELECT - Which queries/search for record(s)
	*/

	//Trick
	/*
		if you use double quotes, you can use variables inside the string by doing the following
		"<VARIABLE X>" => "{$X}" //Work
		"<VARIABLE X>" =>! '{$X}'//No Work

	*/

	$con=mysqli_connect("localhost","root","root","CMP593");
	session_start();

	if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){

		//Start Login Logic
		if($_REQUEST['formType'] == "login"){
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
			$sql    = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ";
			$result = $con->query($sql);

			$user = mysqli_fetch_array($result);
			
			//User Found!!!
			if(isset($user['id'])){
				$_SESSION['User'] = $user;
				header( 'Location: /Feb5/account.php' ) ;//Redirect

			}
			else{
				echo "Bad Login";
			}

		}
		//End Login Logic

		//Start Signup Logic
		else if($_REQUEST['formType'] == "signup"){ 
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
			$sql    = "INSERT INTO users (username,password) VALUES ('{$username}' , '{$password}')";
			$con->query($sql);
			echo "Signup Stuff happens here";
		}
		//End Signup Logic
















	}
?>