<?php

function getdist($postcode,$lat2,$long2) {

	$postcode = str_replace(' ','',$postcode);

	$url = 'http://maps.googleapis.com/maps/api/geocode/json?address=' . $postcode . '&sensor=false';

	$data = json_decode(file_get_contents($url),true);

	$lat1 = $data['results'][0]['geometry']['location']['lat'];
	$long1 = $data['results'][0]['geometry']['location']['lng'];

	$theta = $long1 - $long2;
	$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
	$dist = acos($dist);
	$dist = rad2deg($dist);
	$miles = $dist * 60 * 1.1515;
	$unit = strtoupper($unit);
	$time = round(($miles/3.1)*60);
	return $time;
}

?>