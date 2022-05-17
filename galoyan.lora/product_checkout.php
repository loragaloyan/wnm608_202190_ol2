<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
$cart = getCartItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Checkout Page</title>

	<?php include "parts/meta.php"; ?>
	<?php include "parts/navbar.php"; ?>
	
</head>
<body>


	<div class="container">
		<div class="gid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
						<h2>Checkout</h2>
						
						<form>
							<div class="form-control">
								<label class="form-label">Street</label>
								<input type="text" placeholder ="Text" class="form-input">
							</div>
							<div class="form-control">
								<label class="form-label">City</label>
								<input type="text" placeholder ="Text" class="form-input">
							</div>
							<div class="form-control">
								<label class="form-label">State</label>
								<input type="text" placeholder ="Text" class="form-input">
							</div>
							<div class="form-control">
								<label class="form-label">Zip Code</label>
								<input type="text" placeholder ="Text" class="form-input">
							</div>
							<div class="form-control">
								<label class="form-label">Country</label>
								<input type="text" placeholder ="Text" class="form-input">
							</div>
							
			
							<div class="form-control display-flex flex-align-center">
								<div class="flex-none">
									<label class="form-label">Name</label>
								</div>
								<div class="flex-stretch">
									<input type="text" placeholder ="" class="form-input display-flex">
								</div>
								<div class="flex-none">
									<label class="form-label">Card Number</label>
								</div>
								<div class="flex-stretch">
									<input type="text" placeholder ="####-####-####-####" class="form-input display-flex">
								</div>
								<div class="flex-none">
									<label class="form-label">Expiration</label>
								</div>
								<div class="flex-stretch">
									<input type="text" placeholder ="" class="form-input display-flex">
								</div>
								<div class="flex-none">
									<label class="form-label">CVV</label>
								</div>
								<div class="flex-stretch">
									<input type="text" placeholder ="" class="form-input display-flex">
								</div>
								<div class="flex-none">
									<label class="form-label">Zip Code</label>
								</div>
								<div class="flex-stretch">
									<input type="text" placeholder ="" class="form-input display-flex">
								</div>
							</div>
			
							<div class="form-control">
								<a href="product_confirmation.php" class="form-button" >Complete Checkout</a>
							</div>
						</form>
					</div>

					<div class="col-xs-12 col-md-5">
					<div class="card soft">
						<h2>Item Review</h2>
						<?php 
						echo array_reduce($cart,function($r,$o){
						$totalfixed = number_format($o->total,2,'.','');
						return $r."<div class='display-flex'>
							<div class='flex-stretch'>$o->name</div>
							<div class='flex-none'>&dollar;$totalfixed</div>
						</div>";
						}) ?>
						<?= cartTotals(); ?>
					</div>
			
					</div>
				</div>
			</div>
	</div>
	


</body>
</html>





































