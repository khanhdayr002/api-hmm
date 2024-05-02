<?php
$url = array(
 "https://files.catbox.moe/galn2h.mp3",
  "https://files.catbox.moe/rxe93i.mp3",
  "https://files.catbox.moe/3zjhas.mp3",
  "https://files.catbox.moe/lze6cq.mp3",
  "https://files.catbox.moe/gvzq37.mp3",
  "https://files.catbox.moe/hzj4de.mp3",
  "https://files.catbox.moe/bttekv.mp3",
  "https://files.catbox.moe/mkj84v.mp3",
  "https://files.catbox.moe/2g9b5r.mp3",
  "https://files.catbox.moe/imlecn.mp3",
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
