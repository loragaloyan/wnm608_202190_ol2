<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Azure Terrariums</title> 

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="lib/css/styleguide.css">

	<?php include "parts/meta.php"; ?>
	<?php include "parts/navbar.php"; ?>
</head>

<body>

	<div class="container body">
			<h1 class="home">Home</h1>
			<div class="article_body">
				<p>Azure Terrarriums are a touch of fantasy decoration for your home, perfect for desks and bookshelves. All components are hand-crafted in unique or custom styles featuring a variety of biomes, cryptids, and containers. </p>
			</div>


		</div>
	</div>

<div class="container">
		
		<div class="items">
			<div class="item">
				<img src='img/t7.jpg' class="item-image">
			</div>
			<div class="item">
				<img src='img/t8.jpg' class="item-image">
			</div>
			<div class="item">
				<img src='img/t9.jpg' class="item-image">
			</div>
		</div>

	<h3>Recommended Products</h3>
	<?php
	$result = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `category`='Fantasy' ORDER BY `date_create` DESC LIMIT 3");
	recommendedProducts($result)
	?>
	
	</div>


</div>


</body>
</html>