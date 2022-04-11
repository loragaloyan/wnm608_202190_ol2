<?php 

include "../lib/php/functions.php";


$users = file_get_json("../data/users.json");




function showUserPage($user) {


$classes = implode(", ", $user->classes);

//heredoc
echo <<<HTML

<nav class="nav nav-crumbs">
	<ul>
		<li><a href="users.php">Back</a></li>
	</ul>

<div>
	<h2>$user->name</h2>
	<div>
		<strong>Type</strong>
		<span>$user->type</span>
	</div>
	<div>
		<strong>Email</strong>
		<span>$user->email</span>
	</div>
	<div>
		<strong>Classes</strong>
		<span>$classes</span>
	</div>
</div>
HTML;
}






//print_p($notes);
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

		<header class="navbar">
			<div class="container display-flex">
				<div class="flex-none">
					<h2>User Admin</h2>
				</div>
				<div class="flex-stretch"></div>
				<nav class="nav nav-flex flex-none">
					<ul>
						<li><a href="users.php">User List</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<div class="container">
			<div class="card soft">

				<?php

				if(isset($_GET['id'])) {
					showUserPage($users[$_GET['id']]);
				} else {

				?>

				<h2>User List</h2>
				
				<nav class="nav">
					<ul>
						<?php

						for($i=0;$i<count($users);$i++){
							echo "<li>
							<a href='users.php?id=$i'>{$users[$i]->name}</a>
							</li>";
						}

						?>
					</ul>
				</nav>

				<h2>Add User</h2>

				<div>
					<form action="save_user.php" method="post">
						<div>Name: <input type="text" name="name" /></div>
						<div>Type: <input type="text" name="type" /></div>
						<div>Email: <input type="text" name="email" /></div>
						<div>Classes: <input type="text" name="classes" /></div>
						<input type="submit" />
					</form>
				</div>

				<?php } ?>


			</div>
		</div>
	


</body>
</html>