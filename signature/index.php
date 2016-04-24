<?php
error_reporting(0);

$tid = 0;
if (isset($_SERVER["HTTP_REFERER"])) {
	parse_str(parse_url($_SERVER["HTTP_REFERER"], PHP_URL_QUERY), $args);
	$tid = $args['tid'];
}

$file = "";
$link = true;

if (file_exists("function.php")) include("function.php");
else include("../function.php");

if (file_exists("config.php")) include("config.php");
else include("../config.php");

foreach ($cases as $value) {
	if ($value->tid == $tid) {
		$file = $value->img;
		$link = $value->urlb;
		break;
	}
}

if ($file == "") {
	$file = $defaultImg;
	$link = $defaultUrlb;
}

header("Content-Type: image/png");
if ($link != $nolink) {
	$file = "images/" . $file;
	if ($nolink) $file = "../" . $file;
	echo file_get_contents($file);
} else {
	$img = imagecreatetruecolor(1, 1);
	imagealphablending($img, true);
	imagesavealpha($img, true);
	$transparent = imagecolorallocatealpha($img, 0, 0, 0, 127);
	imagefill($img, 0, 0, $transparent);
	imagepng($img);
	imagedestroy($img);
}
