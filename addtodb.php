<?php

session_start();

$suggestion = $_SESSION['suggestion'];
$places = $_SESSION['places'];
$name = $suggestion['name'];
$tags = $suggestion['tags'];
$user = $_SESSION['user'];
$image = $suggestion['image'];
$url = $suggestion['url'];

$json = $_POST;
$choice = $json['choice'];

unset($places[0]);
$_SESSION['places'] = $places;

$con = mysqli_connect("localhost","root","root","whynotv4");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

for ($i=0 ; $i<count($tags) ; $i++) {
	if ($tags[$i] != '') {
		$updatetagssql = "INSERT INTO `UserTags` (`User`, `Tag`, `Weight`) VALUES ('$user','$tags[$i]', '$choice') ON DUPLICATE KEY UPDATE `Weight` = `Weight` + $choice";
		mysqli_query($con,$updatetagssql);
	}
}

$sql = "INSERT INTO `UserHistory`(`User`, `Event`, `Image` , `URL` ,`Choice`) VALUES ('$user','$name','$image', '$url', '$choice')";
mysqli_query($con,$sql);

?>