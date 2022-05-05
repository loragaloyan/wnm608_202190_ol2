<?php

function productListItem($r, $o) {
	return $r.<<<HTML
		<div><a href="{$_SERVER['PHP_SELF']}?id=$o->id">$o->name</a></div>
	HTML;
}

// function showProductPage($o) {
// 	return <<<HTML
// 		<div>$o->name</div>
// 		<div>$o->price</div>
// 	HTML;
// }

function showProductPage($o) {
	$addoredit = $id == "new" ? "Add" : "Edit";
	$createorupdate = $id == "new" ? "create" : "update";
	$images = explode(", ", $o->images);

	//heredoc
	$display = <<<HTML
	<div>
		<h2>$o->name</h2>
		<div>
			<strong>Type</strong>
			<span>$o->type</span>
		</div>
		<div>
			<strong>Email</strong>
			<span>$o->email</span>
		</div>
		<div>
			<strong>Classes</strong>
			<span>$images</span>
		</div>
	</div>
	HTML;

	$form = <<<HTML
	<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
		<h2>$addoredit User</h2>
		<div class="form-control">
			<label class="form-label" for="user-title">Name</label>
			<input class="form-input" name="user-title" id="user-title" type="text" value="$o->name" placeholder="Enter the product name">
		</div>
		<div class="form-control">
			<label class="form-label" for="user-type">Type</label>
			<input class="form-input" name="user-type" id="user-type" type="text" value="$o->type" placeholder="Enter the product type">
		</div>
		<div class="form-control">
			<label class="form-label" for="user-email">Email</label>
			<input class="form-input" name="user-email" id="user-email"type="text" value="$o->email" placeholder="Enter the product email">
		</div>
		<div class="form-control">
			<label class="form-label" for="user-classes">Classes</label>
			<input class="form-input" name="user-classes" id="user-classes" type="text" value="$images" placeholder="Enter the product classes, comma separated">
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