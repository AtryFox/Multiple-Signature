<?php

/* MAIN CONFIG */
$defaultImg = "default.png"; // Default image if no case is true
$defaultUrl = "https://your-website.tld/"; // Default url if $urlb is true but $url is not set
$deufaltUrlb = true; // If true: $defaultImg is linked to the $defaultUrl

/* CASES */
// addCase($tid, $img, $urlb, $url);
// $tid: The thread ID (int).
// $img: The name of image (must be in the images folder) (string).
// $urlb: If true: Image is linked. If false: Image is not linked (bool).
// $url: If $urlb is true, the image is linked to this url (string).

addCase(1, "example.png", true, "https://google.com/");
?>