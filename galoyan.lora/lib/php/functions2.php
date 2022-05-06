<?php

function productListItem($r, $o) {
	// $images = explode(", ", $o->images);
	return $r.<<<HTML
		<div class="card soft">
			<div class="display-flex">
				<div class="flex-none images-thumbs"><img src='$o->thumbnail' /></div>
				<div class="flex-stretch" style="padding:1em;">$o->name</div>
				<div><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
			</div>
		</div>
	HTML;
}

function showProductPage($o, $id) {
	// return <<<HTML
	// 	<div>$o->name</div>
	// 	<div>$o->price</div>
	// HTML;
	$addoredit = $id == "new" ? "Add" : "Edit";
	$createorupdate = $id == "new" ? "create" : "update";
	$images = explode(", ", $o->images);
	$image_elements = array_reduce($images,function($r1,$o1) {
   		return $r1."<img height='100' width='100' src='$o1'>";
   	});
   	// echo ("post info " . $createorupdate . " " . $id . " " . $_SERVER['PHP_SELF']);

	//heredoc
	$display = <<<HTML
	<div>
		<h2>$o->name</h2>
		<div class="form-control">
			<label class="form-label">Price</label>
			<span>$o->price</span>
		</div>
		<div class="form-control">
			<label class="form-label">Quantity</label>
			<span>$o->quantity</span>
		</div>
		<div class="form-control">
			<label class="form-label">Description</label>
			<span>$o->description</span>
		</div>
		<div class="form-control">
			<label class="form-label">Image</label>
			<span><img height='100' width='100' src='$o->thumbnail'></span>
		</div>
		<div class="form-control">
			<label class="form-label">Other Images</label>
			<span>$image_elements</span>
		</div>
	</div>
	HTML;

	$form = <<<HTML
	<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
		<h2>$addoredit Product</h2>
		<div class="form-control">
			<label class="form-label" for="product-name">Name</label>
			<input class="form-input" name="product-name" id="product-name" type="text" value="$o->name" placeholder="Enter the product name">
		</div>
		<div class="form-control">
			<label class="form-label" for="product-price">Price</label>
			<input class="form-input" name="product-price" id="product-price" type="number" min="0" max="1000" step="0.01" value="$o->price" placeholder="Enter the product price">
		<div class="form-control">
			<label class="form-label" for="product-quantity">Quantity</label>
			<input class="form-input" name="product-quantity" id="product-quantity" type="number" min="0" max="1000" step="1" value="$o->quantity" placeholder="Enter the product quantity">
		</div>
		<div class="form-control">
			<label class="form-label" for="product-description">Description</label>
			<textarea class="form-input" name="product-description" id="product-description" placeholder="Enter the product description">$o->description</textarea>
		</div>
		<div class="form-control">
			<label class="form-label" for="product-thumbnail">Image</label>
			<input class="form-input" name="product-thumbnail" id="product-thumbnail" type="text" value="$o->thumbnail" placeholder="Enter the product image">
		</div>
		<div class="form-control">
			<label class="form-label" for="product-images">Images</label>
			<input class="form-input" name="product-images" id="product-images" type="text" value="$o->images" placeholder="Enter the product images, comma separated">
		</div>
		<div class="form-control">
			<input class="form-button" type="submit" value="Save Changes">
		</div>
	</form>
	HTML;

	$output = $id == "new" ? $form :
		"<div class-'grip gap'>
			<div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
			<div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>
		</div>
		";
	$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";
	echo <<<HTML
	<nav class="display-flex">
		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
		<div class="flex-none">$delete</div>
	</nav>
	$output
	HTML;
}

?>