<?php

session_start();

$suggestion = $_SESSION['suggestion'];
$name = $suggestion['name'];
$user = $_SESSION['user'];
$image = $suggestion['image'];
$url = $suggestion['url'];

$json = $_POST;
$choice = $json['pin'];

$con = mysqli_connect("localhost","root","root","whynotv4");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$insertpins = "INSERT IGNORE INTO `Pins`(`User`, `Event`, `Image`, `URL`) VALUES ('$user','$name','$image','$url')";
mysqli_query($con,$insertpins);

?>