<?php
	//Load config
	define('__CONFIG__', true);
	require_once "inc/config.php";

?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../dnd/styles/styles.css">
	<title>Red Steel: Register</title>
</head>
<body>
	<h1>Register </h1>

	<p>Enter your email and a password to register</p>
	<hr><hr>

	<form method="POST">
		<label for="email">Email:</label>
		<input type="text" name="email">
		<br />

		<label for="passwd">Password:</label>
		<input type="password" name="passwd">
		<br />
		
		<label for="passwd2">Retype password:</label>
		<input type="password" name="passwd2">
		<br />

		<button type="submit">Submit</button>
		<br />
	</form>

	<div id="footer">
		<a href="index.php" style="color: cyan;">Back to main page</a>
	</div>
</body>



<?php
/*
// constants are created by the define() function, which has the form:
// define('__VARNAME__', 'Value');
// e.g.:
define('__DBNAME__', 'Second Breakfast');
echo __DBNAME__ . "<br />";
echo "<hr />";

// Arrays and loops - similar to C style, but with extensions
// Arrays can be 'associative' i.e. a fucking dictionary
// there is a foreach() loop to iterate through a list
$arr = [
	"name" => "Gandalf",
	"age" => 5000,
	"mount" => "Shadowfax"
];

foreach($arr as $key => $val) {
	echo "$key: $val <br />";
}
 */

