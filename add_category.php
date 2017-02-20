<?php
//Get the category data
$name = filter_input(INPUT_POST, 'name');

//Validate inputs
if ($name == null) {
	$error="Invalid category data.";
	include('error.php');

} else {
    require_once('database.php');	
	//Add the category to the database
	$query = 'INSERT INTO categories
			(name)
		VALUES
			(:name)';
	$statement->bindValue(':name',$name);
	$statement->execute();
	$statement->closeCursor();

	//Display Category List page
	include('category_list.php');
}
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
	<title>My Guitar Shop</title>
	<link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
	<header><h1>My Guitar Shop</h1></header>

	<main>
		<h2 class="top">Error</h2>
		<p>Invalid category data. Check all fields and try again.</p>
	</main>

	<footer>
		<p>&copy; 2017 My Guitar Shop, Inc. </p>
	</footer>
</body>
</html>

