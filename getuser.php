<?php

function gettags($username) {

	$con = mysqli_connect("localhost","root","root","whynotv4");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$usertagssql = "SELECT Tag, Weight FROM UserTags WHERE User='$username'";
	$data = mysqli_query($con, $usertagssql);
	$datarray = array();
	while($row = mysqli_fetch_assoc($data)) {
		$datarray[] = $row;
	}
	return $datarray;
}

function getevents($username) {
	$con = mysqli_connect("localhost","root","root","whynotv4");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$usertagssql = "SELECT Event FROM UserHistory WHERE (User='$username' AND `TIMESTAMP` > CURDATE())";
	$data = mysqli_query($con, $usertagssql);
	$datarray = array();
	while($row = mysqli_fetch_array($data)) {
		$datarray[] = $row['Event'];
	}
	return $datarray;
}

?>