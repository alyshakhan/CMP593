<?php require_once('form-handler.php');?>
<html>
	<header>
		<title>Signup</title>
		<meta name="description" content="Description Goes Here">		   
		    <meta property="og:title" content="Yahoo" />
		    <meta property="og:type" content='website' />
		    <meta property="og:url" content="http://www.yahoo.com/" />
		    <meta property="og:description" content="A new welcome to Yahoo. The new Yahoo experience makes it easier to discover the news and information that you care about most. It's the web ordered for you."/>
		    <meta property="og:image" content="http://l3.yimg.com/dh/ap/default/130909/y_200_a.png"/>
		    <meta property="og:site_name" content="Yahoo" />
		    <meta property="fb:app_id" content="90376669494" />

	</header>
	<body>
		<h1>Signup Form</h1>
		<form method="POST">
			User Name: <input type="text" name="username">
			Password: <input type="password" name="password">
			<input type="hidden" name="formType" value="signup">
			<input type="submit" value="Signup">
		</form>
	</body>

</html>