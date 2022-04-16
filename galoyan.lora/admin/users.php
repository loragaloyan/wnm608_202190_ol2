<?php 

include "../lib/php/functions.php";

include "parts/navbar.php";


$users = file_get_json("../data/users.json");




function showUserPage($user) {


$classes = implode(", ", $user->classes);

//heredoc
echo <<<HTML

<nav class="nav nav-crumbs">
	<ul>
		<li><a href="users.php">Back</a></li>
	</ul>

<form method="post" action="">
	<div class="form-control">
		<label class="form-label" for="user-name">Name</label>
		<input class="form-input" name="user-name" id="user-name" type="text" value="$user->name" placeholder="Enter the user name">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-type">Type</label>
		<input class="form-input" name="user-type" id="user-type" type="text" value="$user->type" placeholder="Enter the user type">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-email">Email</label>
		<input class="form-input" name="user-email" id="user-email"type="text" value="$user->email" placeholder="Enter the user email">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-classes">Classes</label>
		<input class="form-input" name="user-classes" id="user-classes" type="text" value="$classes" placeholder="Enter the user classes, comma separated">
	</div>
	<div class="form-control">
		<input class="form-button" type="submit" value="Save Changes">
	</div>
</form>
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