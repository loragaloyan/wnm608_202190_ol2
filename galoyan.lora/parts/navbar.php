<?php

include_once "lib/php/functions.php";

?>


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Azure Terrariums</title> 

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
	<link rel="stylesheet" href="https://use.typekit.net/guv2awx.css">

 </head>


<input type="checkbox" id="menu" class="hidden">
<body>
	<header class="navbar">
		<div class="view-window" style="background-image:url('/aau/wnm608_202190_ol2/galoyan.lora/img/butterflygrey2.jpg')">
		<div class="menubar">
			<div class="flex-stretch"></div>
			<div class="flex-none menu-button">
				<label for="menu">&equiv;</label>
			</div>
			<div class="">
				<div class="flexbox">
					<div class="flex-stretch"><a href="index.php">HOME</a></div>
					<div class="flex-stretch"><a href="product_list.php">PRODUCTS</a></div>
					<div class="flex-stretch"><a href="product_cart.php">

					<span>CART</span>
					<span class="badge"><?= makeCartBadge(); ?></span>

					</a></div>
					<!-- <div class="flex-stretch"><a href="shop.php">SHOP</a></div> -->
					<div class="flex-stretch"><a href="artist.php">ARTIST</a></div>
				</div>
			</div>
		</div>
		<div class="title flex-center-center">
			<h1 class="">Azure Terrariums</h1>
		</div>
	</header>



</body>

