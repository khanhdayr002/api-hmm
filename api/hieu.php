<?php
$url = array(
"https://imgur.com/Z8CbVfV.mp3",
"https://imgur.com/vg60hD2.mp3",
"https://imgur.com/wLBXQOy.mp3",
"https://imgur.com/oLQ75M0.mp3",
"https://imgur.com/4ubm1Bg.mp3",
"https://imgur.com/4UkVFDc.mp3",
"https://imgur.com/ZL4J2pe.mp3",
"https://imgur.com/3qbQtXh.mp3",
"https://imgur.com/KQfEd1R.mp3",
"https://imgur.com/KlCTmJe.mp3",
);
$kaneki = array_rand($url);
$kanekivip = $url [$kaneki];
$anime = array(
"data" => $kanekivip,
"author" => "Đức Ryo",
"success" => "true",
);
$rdimg = json_encode($anime);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Đức Ryo'];
$j = str_replace($i, $t, $rdimg);
echo $j;
