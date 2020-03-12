<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

<link rel="stylesheet" href="style.css">
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p> Jorge </p>
		<form action="http://localhost/code/index.php/welcome/index2" method="GET">
		<input type="submit" value="aceptar" name="aceptar">
		</form>
		<br>
<?php
	echo $ejemplo;
	print_r ($alumno);
	foreach ($alumno as $key => $value){
		echo $value."<br>";
	}
?>

</div>

</body>
</html>