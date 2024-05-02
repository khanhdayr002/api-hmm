<?php
$url = array(
  "https://imgur.com/HqTiR09.jpg",
    "https://imgur.com/4TgbM9M.jpg",
    "https://imgur.com/LoL5E7n.jpg",
    "https://imgur.com/5DrcMig.jpg",
    "https://imgur.com/O4QLfp3.jpg",
    "https://imgur.com/NduRgiL.jpg",
    "https://imgur.com/WLBb8bd.jpg",
    "https://imgur.com/sBGczKw.jpg",
    "https://imgur.com/gShUl81.jpg",
    "https://imgur.com/ONCy0dA.jpg",
    "https://imgur.com/lmT8hxN.jpg",
    "https://imgur.com/coiIO3b.jpg",
    "https://imgur.com/X6Zfc6A.jpg",
    "https://imgur.com/lnGPb76.jpg",
    "https://imgur.com/4kiwky3.jpg",
    "https://imgur.com/sxbDSuN.jpg",
    "https://imgur.com/11MaSUt.jpg",
    "https://imgur.com/eG6NmXJ.jpg",
    "https://imgur.com/BDI9dyW.jpg",
    "https://imgur.com/108TBKR.jpg",
    "https://imgur.com/sluC4jK.jpg",
    "https://imgur.com/xCNRZfC.jpg",
    "https://imgur.com/jS5tAeY.jpg",
    "https://imgur.com/7vIVrad.jpg",
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
