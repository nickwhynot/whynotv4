<?php

function getlastfm($lat,$long,$radius) {
	$data = file_get_contents("http://ws.audioscrobbler.com/2.0/?method=geo.getevents&lat=" . $lat . "&long=" . $long . "&distance=" . $radius . "&api_key=794df9e7e4bf01a0704db6741e65c597&limit=100&format=json");
	$data = json_decode($data,true);
	return $data['events']['event'];
}

function parselastfm($lastfm) {
	for ($i=0; $i<count($lastfm) ; $i++) {
		$events[$i]['name'] = $lastfm[$i]['title'] . " at " . $lastfm[$i]['venue']['name'];
		$events[$i]['postcode'] = $lastfm[$i]['venue']['postalcode'];
		if (count($lastfm[$i]['tags']['tag'])==1) {
			$events[$i]['tags'][0] = $lastfm[$i]['tags']['tag'];
		} elseif (count($lastfm[$i]['tags']['tag'])==0) {
			$events[$i]['tags'][0] = '';
		} else {
			for ($j=0 ; $j<count($lastfm[$i]['tags']['tag']) ; $j++) {
				$events[$i]['tags'][$j] = $lastfm[$i]['tags']['tag'][$j];
			}
		}
		$events[$i]['desc'] = substr($lastfm[$i]['desc'],0,100);
		$events[$i]['image'] = $lastfm[$i]['image'][3]['#text'];
		$events[$i]['url'] = $lastfm[$i]['url'];
		$events[$i]['id'] = $lastfm[$i]['id'];
		$events[$i]['source'] = 'lastfm';
	}
	return $events;
}

?>