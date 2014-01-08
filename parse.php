<?php

function parseyelp($places) {
	for ($i=0 ; $i<count($places) ; $i++) {
		$yelp[$i]['name'] = $places[$i]['name'];
		$yelp[$i]['postcode'] = $places[$i]['location']['postal_code'];
		for ($j = 0 ; $j<count($places[$i]['categories']) ; $j++) {
			$yelp[$i]['tags'][$j] = $places[$i]['categories'][$j][1];
		}
		$yelp[$i]['desc'] = $places[$i]['snippet_text'];
		$yelp[$i]['image'] = str_replace('ms.jpg','l.jpg',$places[$i]['image_url']);
		$yelp[$i]['url'] = $places[$i]['mobile_url'];
		$yelp[$i]['id'] = $places[$i]['id'];
		$yelp[$i]['source'] = 'yelp';
	}
	return $yelp;
}

function parseeventful($events) {
	for ($i=0 ; $i<count($events) ; $i++) {
		$eventful[$i]['name'] = $events[$i]['title'];
		if ($events[$i]['postal_code']) {
			$eventful[$i]['postcode'] = $events[$i]['postal_code'];
		} else {
			$eventful[$i]['lat'] = $events[$i]['latitude'];
			$eventful[$i]['long'] = $events[$i]['longitude'];
		}
		if (!$events[$i]['categories']['category'][0]) {
			$eventful[$i]['tags'] = $events[$i]['categories']['category']['id'];
		} else {
			for ($j=0 ; $j<count($events[$i]['categories']['category']) ; $j++) {
				$eventful[$i]['tags'][$j] = $events[$i]['categories']['category'][$j]['id'];
			}
		}
		$eventful[$i]['desc'] = 'remove javascript';//addslashes(implode(' ', array_slice(explode(' ', $events[$i]['description']), 0, 30)));
		$eventful[$i]['venue'] = $events[$i]['venue_name'];
		$eventful[$i]['image'] = str_replace('small','large',$events[$i]['image']['medium']['url']);
		$eventful[$i]['url'] = $events[$i]['url'];
		$eventful[$i]['source'] = 'eventful';
	}
	return $eventful;
}

?>