<html>
	<header>
		<title>Cosmic Facts</title>
		<meta name="description" content="Description Goes Here">

		<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>	
		<link href='http://fonts.googleapis.com/css?family=Ledger' rel='stylesheet' type='text/css'>
		<style>

		body {
			background-image:url('stardust.png');
			background-repeat:repeat;
		}

		h1, h2 {
			text-align: center;
		}

		h1 {
			font-family: 'Dancing Script', cursive;
			font-size: 5em;
			color:#CB4452;
			margin: 0;
			margin-top: 10%;
			margin-bottom: 2%;

		}

		h2 {
			font-family: 'Ledger', serif;
			font-size: 1.5em;
			color:#E5B098;
			line-height: 1em;
			margin: 0;
			margin-bottom: 3%;

		}

		 form { 
		 	padding: 20px; 
		 	width: 400px; 
		 	display: block; 
		 	background: #F8E4AC; 
		 	margin: 0 auto;
		 	text-align: center;
		 	-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			font-family: 'Ledger', serif;
		 }

		 p {
		 	color:white;
		 	text-align: center;
		 	margin-top: 5%;
		 	font-size: 1.1em;
		 	font-family: 'Ledger', serif;
		 }



		</style>

	</header>

	<body>

		<h1>The Generator of Cosmic Facts</h1>

		<h2>Enter the name of a planet to learn some trivia about it!</h2> 

		<form method="post"> 

			<label>What planet do you want to know more about?</label>
			<br />
			<input type="text" name="planet" placeholder="Ask away!" />

			<input type="submit" value="Submit" />

		</form>


	<?php

		switch ($_REQUEST['planet']) {
		    case Mercury:
		        echo "<p>Even though Mercury is the closest planet to the Sun, Venus is the hottest planet in our Solar System.</p>";
		        break;
		    case Venus:
		        echo "<p>Venus can be so bright it casts shadows. Only the Sun and the Moon are brighter than Venus.</p>";
		        break;
		    case Earth:
		        echo "<p>Earth is not a perfect sphere.</p>";
		        break;
		     case Mars:
		        echo "<p>Mars has the tallest mountain in the Solar System.</p>";
		        break;
		    case Jupiter:
		        echo "<p>Compasses would really work on Jupiter because its magnetic field is 14 times as strong as Earth.</p>";
		        break;
		    case Saturn:
		        echo "<p>The first astronomers thought Saturn's rings were moons.</p>";
		        break;
		     case Uranus:
		        echo "<p>Uranus is rotating around the Sun on its side.</p>";
		        break;
		    case Neptune:
		        echo "<p>Neptune has the strongest winds in the Solar System - up to 2,100 km/hour.</p>";
		        break;
		    case Pluto:
		        echo "<p>That's not a planet silly!</p>";
		        break;
}
?>



<!--  

PHP switch statement = google it // will help echo all the different facts -->

	</body>

</html>