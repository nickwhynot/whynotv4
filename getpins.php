<?php

session_start();

$username = $_SESSION['user'];

	$con = mysqli_connect("localhost","root","root","whynotv4");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$usertagssql = "SELECT Event, Image, URL FROM Pins WHERE User='$username'";
	$data = mysqli_query($con, $usertagssql);
	$datarray = array();
	$i = 0;
	while($row = mysqli_fetch_array($data)) {
		$datarray[$i]['Event'] = $row['Event'];
		$datarray[$i]['Image'] = $row['Image'];
		$datarray[$i]['url'] = $row['URL'];
		$i = $i+1;
	}

print_r(json_encode($datarray));

?>