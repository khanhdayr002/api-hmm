<?php
$url = array(
"https://i.imgur.com/l8IKdWB.mp4",
);
$kaneki = array_rand($url);
$kanekivip = $url [$kaneki];
$anime = array(
"data" => $kanekivip,
"author" => "Hoàng Triệu",
"success" => "true",
);
$rdimg = json_encode($anime);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Hoàng Triệu'];
$j = str_replace($i, $t, $rdimg);
echo $j;