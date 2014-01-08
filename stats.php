<?php

$con = mysqli_connect("localhost","root","root","whynotv4");
//check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: ". mysqli_connect_error();
}

$getnumbusers = 'SELECT COUNT(User) FROM Users';
$getquery = mysqli_query($con,$getnumbusers);
$queryresult = mysqli_fetch_array($getquery);
$getswipes = 'SELECT Count(DateTime) FROM UserHistory';
$getquery1 = mysqli_query($con,$getswipes);
$queryresult1 = mysqli_fetch_array($getquery1);
$getyes = 'SELECT Count(Choice) FROM UserHistory WHERE Choice = 1';
$getquery2 = mysqli_query($con,$getyes);
$queryresult2 = mysqli_fetch_array($getquery2);

?>