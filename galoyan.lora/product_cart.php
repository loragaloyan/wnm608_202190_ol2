<?php
			
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = getCart();

// $cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4,1,10)");


$cart_items = getCartItems();


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart Page</title>

	<?php include "parts/meta.php"; ?>
	<?php include "parts/navbar.php"; ?>
	
</head>
<body>


	<div class="container">
		<h2>In Your Cart</h2>

		<?php

		if(count($cart)) {
			?>
			<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart_items, 'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<?= cartTotals() ?>
					<div class="card-section">
						<a href="product_checkout.php" class="form-button">Checkout</a>
					</div>
				</div>
			</div>
		</div>
		<?php 
		} else {
		?> 
		<div class="card soft">
			No items in cart
		</div>
		<?php
		}
		?>

		<h3>Other Recommendations</h3>
	<?php
	$result = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `category`='Landscape' ORDER BY `date_create` DESC LIMIT 3");
	recommendedProducts($result)
	?>
	</div>
	


</body>
</html>





































