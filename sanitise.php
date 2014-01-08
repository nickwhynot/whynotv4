<?php

function sanitise($events,$userhistory) {
	for ($i=0 ; $i<count($userhistory) ; $i++) {
		for ($j=0 ; $j<count($events) ; $j++) {
			if ($events[$j]['name'] == $userhistory[$i]) {
				unset($events[$j]);
			} elseif (strpos($events[$j]['name'],'3 hours') !== false) {
				unset($events[$j]);
			}
		}
	}
	$events = array_values($events);
	return $events;
}

?>