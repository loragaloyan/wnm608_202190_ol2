
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	echo "<div>Hello World</div>"; 
	echo "<div>Goodbye World</div>";

	//Variables
	$a = 5;
	echo $a;

	//String Interpolation
	echo "<div>I have $a things</div>";
	echo '<div>I have $a things</div>'; //simple string


	//Number
	//Integer
	$b = 15;
	//Float
	$b = 0.565;
	$b = 10;

	//String
	$name = "Yerguy2";

	//Boolean
	$isOn = true;

	//Math

	echo 5 - 4 * 2;

	//Concatenation
	//period is concatenating together
	echo "<div>b + a" . " = c</div>";
	echo "<div>$b + $a = ".($a + $b)."</div>";
	?>



	<hr>
	<div>This is my name</div>
	<div>

	<?php 

	$firstname = Lora;
	$lastname = Galoyan;
	$fullname = "<div>$firstname " . "$lastname</div>";

	echo $fullname;
	?>





	<hr>
	<?php

	//Superglobal
	//everything after the "?" in a URL is the GET
	//http://loragaloyan.com/aau/wnm608_202190_ol2/galoyan.lora/notes/?name=Lora
	//braces say to interpolate value

	echo "<div>My name is {$_GET['name']}</div>";
	


	//everything after &, type=p is going to be coded as p=paragraph. type=button
	//?name=Lora&type=button

	// echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['name']}>";

	?>






	<hr>
	<?php 

	//Array 
	$colors = array("red","green","blue");

	echo $colors[2];

	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
	";
	echo count($colors);
	?>


	<div>The equal sign says we're going into php for only one variable</div>
	
	<div style="color:<?= $colors[1] ?>">
		This text is green
	</div>

	<div>Semicolons only need to be between statements. If you only have one thing or you're at the end of a block, you don't need it</div>







	<hr>
	<?php 

	//Associative Array
	//brackets are array shorthand
	
	$colorsAssociative = [
		"red" => "#f00",
		"green" => "#0f0",
		"blue" => "#00f"
	];

	echo $colorsAssociative['green'];
	?>






	<hr>
	<?php

	//Casting
	$c = "$a";
	$d = $c*1;

	$colorsObject = (object)$colorsAssociative;

	//echo $colorsObject;

	echo "<hr>";

	//Array Index Notation
	echo $colors[0]."<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";

	//Object Property Notation
	//dash arrow selects
	echo $colorsObject->red."<br>";
	echo $colorsObject->{$colors[0]}."<br>";
	?>





	<hr>
	<?php 

	print_r($colors);
	echo "<hr>";
	print_r($colorsAssociative);
	echo "<hr>";
	print_r($colorsObject);
	echo "<pre>",print_r($colorsObject),"</pre>";

	//Function
	//$v is an arbitrary name we've assigned
	function print_p($v) {
		echo "<pre>",print_r($v),"</pre>";
	}

	print_p($GLOBALS);
	print_p($_GET);

	?>






</body>
</html>					




























