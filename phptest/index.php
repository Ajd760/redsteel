<?php
	//Load config
	define('__CONFIG__', true);
	require_once "inc/config.php";

?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
        <link rel="stylesheet" href="../dnd/styles/styles.css">
	<title>Red Steel</title>
</head>
<body>
	<div id="background">
		<div class="wrapper">
			<div id="header">
				<h1>Welcome to Red Steel</h1>
			</div>
			<div id="body">
				<a href="login.php">Login</a>
				<a href="register.php">Register</a>
			</div>
		</div><!-- wrapper -->
	</div><!-- background -->
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

