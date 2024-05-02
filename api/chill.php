<?php
$url = array(
"https://i.imgur.com/dekAKnU.mp4",
  "https://i.imgur.com/F3hFW3D.mp4",
  "https://i.imgur.com/yuMbliB.mp4",
  "https://i.imgur.com/NlnYkdi.mp4",
  "https://i.imgur.com/rh7vdbC.mp4",
  "https://i.imgur.com/yd7sxHd.mp4",
  "https://i.imgur.com/86oRMiO.mp4",
  "https://i.imgur.com/iKGmnMU.mp4",
  "https://i.imgur.com/c10DJP1.mp4",
  "https://i.imgur.com/zo0VMkI.mp4",
  "https://i.imgur.com/f3u853V.mp4",
  " https://i.imgur.com/qaGkemt.mp4"
);
$kaneki = array_rand($url);
$kanekivip = $url [$kaneki];
$anime = array(
"data" => $kanekivip,
"author" => "Trung Hiếu",
"success" => "true",
);
$rdimg = json_encode($anime);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Trung Hiếu'];
$j = str_replace($i, $t, $rdimg);
echo $j;
