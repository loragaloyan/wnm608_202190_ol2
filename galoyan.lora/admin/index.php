<?php
include "../lib/php/functions.php";
include "../lib/php/functions2.php";

$empty_product = (object) [
	"name"=>"Dragon Terrarium",
	"category"=>"Fantasy",
	"price"=>"200",
	"thumbnail"=>"https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg",
	"description"=>"Dragon character inside a fantasy terrarium.",
	"images"=>"https://cdn.pixabay.com/photo/2016/11/29/03/49/botanical-1867157_1280.jpg, https://images.pexels.com/photos/4751999/pexels-photo-4751999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
];

//Logic
try {
	$conn = makePDOConn();
	switch($_GET['action']) {
		case "update":
		$statement = $conn->prepare("UPDATE
			`products`
			SET
				`name`=?,
				`price`=?,
				`quantity`=?,
				`category`=?,
				`description`=?,
				`thumbnail`=?,
				`images`=?,
				`date_modify`=NOW()
			WHERE `id`=?
			");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-price'],
				$_POST['product-quantity'],
				$_POST['product-category'],
				$_POST['product-description'],
				$_POST['product-thumbnail'],
				$_POST['product-images'],
				$_GET['id']
			]);

			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$statement = $conn->prepare("INSERT INTO
				`products`
				(
					`name`,
					`category`,
					`price`,
					`thumbnail`,
					`description`,
					`images`,
					`quantity`,
					`date_modify`,
					`date_create`
				)
				VALUES (?,?,?,?,?,?,?,NOW(),NOW())
				");
			// echo mysql_error($statement);
				$statement->execute([
					$_POST['product-name'],
					$_POST['product-category'],
					$_POST['product-price'],
					$_POST['product-thumbnail'],
					$_POST['product-description'],
					$_POST['product-images'],
					$_POST['product-quantity']
				]);
			$id = $conn->lastInsertId();
			// echo ("creating " . $id);
			// print_r($_POST);
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
			$statement->execute([$_GET['id']]);
			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
} catch(PDOException $e) {
	echo "error";
	die("die1" . $e->getMessage());
}

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
						<li><a href="<?= $_SERVER['PHP_SELF'] ?>" style="color:black;">Product List</a></li>
						<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new" style="color: black;">Add New Product</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<div class="container">
			<?php
				if(isset($_GET['id'])) {
					$id = $_GET['id'];
					if ($id == '') {
						$id = 'new';
					}
					$o = $id=="new" ?
							$empty_product :
							makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$id)[0];
					echo showProductPage($o, $id);
					// echo
					// 	"<div>$o->name</div>
					// 	<div>$o->price</div>
					// 	";
				} else {
			?>
				<h2>Product List</h2>
			<?php
				$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_create` DESC");
				echo array_reduce($result,'productListItem');
				// echo array_reduce($result, function($r, $o) {
				// 	return $r."<div><a href='{$_SERVER['PHP_SELF']}?id=$o->id'>$o->name</a></div>";
				// });
				}
			?>
		</div>
	</body>
</html>
