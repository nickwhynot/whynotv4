<?php

function sortevents($allevents) {
	uasort($allevents, function ($a, $b) {
		$c = $a['weight'];
		$d = $b['weight'];
		if ($c == $d) {
			return 0;
		} else if($c > $d) {
			return 1;
		} else {
			return -1;
		}});
	$events = array_reverse($allevents);
	return $events;
}

?>