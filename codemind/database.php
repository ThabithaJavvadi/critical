<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data base Connection</title>
</head>
<body>
	<?php
	// $servername = "localhost";
	// $username = "root";
	// $password ="";
	// $dbname = "codemind";
	// $connection= mysqli_connect($servername,$username,$password,$dbname);

	$connection=mysqli_connect("localhost","root","","codemind");

	if($connection){
		echo "Database connected";
	}
	else{
		echo "not connected";
	}
	?>
</body>
</html>