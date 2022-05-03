<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
	<?php include "parts/navbar.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
	

</head>
<body>
	

	<div class="container">
		<div class="card soft">
			<h2>Product List</h2>
			
			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>

			<div class="display-flex">
			<div class="display-flex">
				<div class="flex-stretch display-flex">
							<div class="flex-none">
								<button data-filter="category" data-value="" type="button" class="form-button">All</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="Fantasy" type="button" class="form-button">Fantasy</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="Landscape" type="button" class="form-button">Landscape</button>
							</div>
							<div class="flex-none">
								<button data-filter="category" data-value="Floral" type="button" class="form-button">Floral</button>
							</div>
					</div>
						<div class="flex-none">
							<div class="form-select">
								<select class="js-sort">
									<option value="1">Least Expensive</option>
									<option value="2">Most Expensive</option>
								</select>
							</div>
						</div>
						</div>
					</div>
			</div>
			


			<div class='productlist grid gap'></div>
	</div>
	


</body>
</html>





































