<?php
	error_reporting(0);
	
	$tid = 0;
	if(isset($_SERVER["HTTP_REFERER"])) {
		if(strpos($_SERVER["HTTP_REFERER"], "bronies.de") !== false) {
			parse_str(parse_url($_SERVER["HTTP_REFERER"], PHP_URL_QUERY), $args);
			$tid = $args['tid'];
		}
	}
	$loc = "";
	
	include("function.php");
	include("config.php");
	
	foreach($cases as $value) {
		if($value->tid == $tid) {
			$loc = $value->url;
		}
	}
	
	if($loc == "") {
		$loc = $defaultUrl;
	}

	header ("Location: " . $loc);
?>