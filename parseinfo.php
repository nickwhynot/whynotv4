<?php

function parseinfo($info) {
	$minfo['rating'] = $info[0]['rating'];
	$minfo['numrev'] = $info[0]['review_count'];
	$minfo['url'] = $info[0]['mobile_url'];
	$minfo['phone'] = $info[0]['phone'];
	$minfo['postcode'] = $info[0]['location']['postal_code'];
	$minfo['review1'] = $info[0]['reviews'][0]['excerpt'];
	$minfo['reviewer1'] = $info[0]['reviews'][0]['user']['name'];
	$minfo['review2'] = $info[0]['reviews'][1]['excerpt'];
	$minfo['reviewer2'] = $info[0]['reviews'][1]['user']['name'];
	$minfo['review3'] = $info[0]['reviews'][2]['excerpt'];
	$minfo['reviewer3'] = $info[0]['reviews'][2]['user']['name'];
	$minfo['contact'] = $info[0]['location']['display_address'];
	return $minfo;
}


?>