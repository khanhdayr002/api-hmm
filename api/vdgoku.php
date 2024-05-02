<?php
$url = array(
"https://i.imgur.com/rNK62ix.mp4",
  "https://i.imgur.com/XgoF020.mp4",
  "https://i.imgur.com/Muth3bQ.mp4",
  "https://i.imgur.com/OBGdlmn.mp4",
  "https://i.imgur.com/eqMAdYX.mp4",
  "https://i.imgur.com/e0xfHS7.mp4",
  "https://i.imgur.com/I9OcwJV.mp4",
  "https://i.imgur.com/r1pJ4Is.mp4",
  "https://i.imgur.com/RerVu85.mp4",
  "https://i.imgur.com/MvRLWOF.mp4",
  "https://i.imgur.com/xGrurGx.mp4",
  "https://i.imgur.com/yGkpUJR.mp4",
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
