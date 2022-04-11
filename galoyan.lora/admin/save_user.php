<?php 
include "../lib/php/functions.php";
$users = file_get_json("../data/users.json");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Admin page</title>
	<?php include "./parts/meta.php"; ?>
</head>
<body>

	<div>
		User to save is: <?php echo $_POST["name"]; ?> <?php echo $_POST["email"]; ?> <?php echo $_POST["type"]; ?> <?php echo $_POST["classes"]; ?>
	</div>
	


</body>
</html>