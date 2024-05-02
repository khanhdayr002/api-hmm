<?php
$url = array(
 "https://imgur.com/1uQfymF.jpg",
   "https://imgur.com/MJw0PuB.jpg",
    "https://imgur.com/GZy0ZVt.jpg",
    "https://imgur.com/XQkvuan.jpg",
    "https://imgur.com/hZLlUZI.jpg",
    "https://imgur.com/HsLPi8S.jpg",
    "https://imgur.com/p5Nys4T.jpg",
    "https://imgur.com/LMKI2VQ.jpg",
    "https://imgur.com/qhbtI7Z.jpg",
    "https://imgur.com/QrAlSGe.jpg",
    "https://imgur.com/o7ZPYEc.jpg",
    "https://imgur.com/qzSwy6k.jpg",
    "https://imgur.com/sN7XE2x.jpg",
    "https://imgur.com/JGb6TnC.jpg",
    "https://imgur.com/F5dOZTo.jpg",
    "https://imgur.com/eq1yANv.jpg",
    "https://imgur.com/Gg8Ybf2.jpg",
    "https://imgur.com/0xiQQPv.jpg",
    "https://imgur.com/cyLReHF.jpg",
    "https://imgur.com/UD1fMVW.jpg",
    "https://imgur.com/RGVHBGr.jpg",
    "https://imgur.com/xAzky5J.jpg",
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
