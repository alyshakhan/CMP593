<?php
	//Review Variables
	$People = 1; //Integer
	$People = 1.22;//Doubles	
	$People = array(); //Array
		$People['name'] = "Peter";
		$People['phone'] = "1234";
	$AlotofPeople = array();
		//Statment 1
		$person = array();
			$person['name'] = "bob";
			$person['phone'] = "111";
		//Statment 2
		$person = array(
			"name"=> "bob",
			"phone"=>"111"
			);
	$AlotofPeople[] = $person;
?>


<?php
//Review Functions
function AddAPlusB($A,$B){
	$results = $A + $B;//We're Adding A + B and storing in $results
	return $results;
}

//echo AddAPlusB(10,20);


function Step1($A,$B){
	$result = $A." ".$B;
	return $result;
}

$Slogan = "We're Great At";
$Action = "PHP";

echo Step1($Slogan,$Action);


?>




<?php 
	//Array is Mailbox Location => Value
	$colors = array("Red"=>"Red","Blue"=>"Blue","Green"=>"Green");//Red = $color['Red']
	$colors = array("Red","Blue","Green"); //Red => $color[0]

	//Loops
	//Double Lines => Comment
	// One Line with Star Starts Comments, Start with one line closes comments
	/*
		- For Loops
			> http://www.w3schools.com/php/php_looping_for.asp

		- While Loops
			> http://www.w3schools.com/php/php_looping.asp

		- Do While Loops
			> Same as above
		- For Each Loops
			> http://us3.php.net/manual/en/control-structures.foreach.php
	*/
	$Slogan = "We're Great At ";
	$Actions = array("HTML","CSS","Javascript");
		$Actions[] = "PHP";
		$Actons[] = "Coloring";

	//For Each
	function WhatAreWeGoodAt($Slogan,$Actions){

		foreach($Actions as $an_action){
			echo $Slogan.$an_action."<br/>";
		}		
	}

	WhatAreWeGoodAt($Slogan,$Actions);
	WhatAreWeGoodAt($Slogan,$Actions);
	WhatAreWeGoodAt($Slogan,$Actions);
	WhatAreWeGoodAt($Slogan,$Actions);
	WhatAreWeGoodAt($Slogan,$Actions);
	WhatAreWeGoodAt($Slogan,$Actions);
	WhatAreWeGoodAt($Slogan,$Actions);
	WhatAreWeGoodAt($Slogan,$Actions);


?>


<?php
	//Tell me what the error is so i can fix it. 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	//Lets Discuss Objects
	class Person {
		var $name = "";
		var $phone = "";
		var $address = "";
		var $wallet = 0;

		function Silly(){
			return $this->name." ".$this->phone;
		}

		function addToWallet($value){
			$this->wallet = $this->wallet + $value;
		}

		function removeFromWallet($value){
			if($value <= $this->wallet){
				$this->wallet = $this->wallet - $value;				
			}
			else{
				echo "Sorry ".$this->name.", no can do.";
			}
		}

	}

	$Bob = new Person();
		$Bob->name ="Bob Smith";
		$Bob->phone = "1234";

	// echo $Bob->name;
	// echo "<br/>";
	//echo $Bob->Silly();
	$Bob->addToWallet(200);
	$Bob->removeFromWallet(100);
	$Bob->removeFromWallet(500);
	echo $Bob->wallet;











?>


