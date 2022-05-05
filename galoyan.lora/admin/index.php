<?php
include "../lib/php/functions.php";
include "../lib/php/functions2.php";

$empty_product = (object) [
	"name"=>"",
	"category"=>"",
	"price"=>"",
	"thumbnail"=>"",
	"description"=>"",
	"images"=>"",
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Admin page</title>

	<link rel="stylesheet" href="../lib/css/styleguide.css">

	<?php include "./parts/meta.php"; ?>
	<?php include "../parts/navbar.php"; ?>

</head>
	<body>
		<header class="navbar">
			<div class="container display-flex">
				<div class="flex-none">
					<h2>Product Admin</h2>
				</div>
				<div class="flex-stretch"></div>
				<nav class="nav nav-flex flex-none">
					<ul>
						<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
						<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<div class="container">
			<?php
				if(isset($_GET['id'])) {
					$o = $_GET['id']=="new" ?
							$empty_product :
							makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];
					echo showProductPage($o);
					// echo
					// 	"<div>$o->name</div>
					// 	<div>$o->price</div>
					// 	";
				} else {
			?>
				<h2>Product List</h2>
				<div class="card soft">
			<?php
				$result = makeQuery(makeConn(),"SELECT * FROM `products`");
				echo array_reduce($result,'productListItem');
				// echo array_reduce($result, function($r, $o) {
				// 	return $r."<div><a href='{$_SERVER['PHP_SELF']}?id=$o->id'>$o->name</a></div>";
				// });
				}
			?>
				</div>
		</div>
	</body>
</html>
