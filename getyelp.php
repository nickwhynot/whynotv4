<?php

include('yelp.php');
include('yelp2.php');
include('yelpbus.php');

function getyelpall($lat,$long,$cat,$radius) {
	$data = array();
	$data1 = json_decode(getyelp($lat,$long,$cat,$radius),true);
	$data1 = $data1['businesses'];
	$data2 = json_decode(getyelp2($lat,$long,$cat,$radius),true);
	$data2 = $data2['businesses'];
	$data = array_merge($data1,$data2);
	return $data;
}

function getbus($id) {
	$data = array();
	$data[] = json_decode(yelpbus($id),true);
	return $data;
}

?>