<?php
$url = array(
"https://imgur.com/y50mF9e.jpg",
"https://imgur.com/VQxP4Eq.jpg",
"https://imgur.com/YZ2wjTf.jpg",
"https://imgur.com/umzij65.jpg",
"https://imgur.com/qlK22a6.jpg",
"https://imgur.com/QLwlKqp.jpg",
"https://imgur.com/fLEXMbg.jpg",
"https://imgur.com/xv0m0Qk.jpg",
"https://imgur.com/ch7Xj44.jpg",
"https://imgur.com/IsRBbN4.jpg",
"https://imgur.com/IVhkimm.jpg",
"https://imgur.com/2XZSec9.jpg",
"https://imgur.com/HixxVbT.jpg",
  "https://imgur.com/uGgk3lz.jpg",
  "https://imgur.com/wP5MplP.jpg",
  "https://imgur.com/v7XhWRZ.jpg",
  "https://imgur.com/Vk7HT72.jpg",
  "https://imgur.com/nEVfy4P.jpg",
  "https://imgur.com/ORRaW61.jpg",
  "https://imgur.com/ZdjNAYd.jpg",
  "https://imgur.com/hlhNS1W.jpg",
  "https://imgur.com/4I3JTX9.jpg",
  "https://imgur.com/unvPJ2b.jpg",
  "https://imgur.com/PXZWJJw.jpg",
  "https://imgur.com/Lwy2lq5.jpg",
  "https://imgur.com/1HBwzdP.jpg",
  "https://imgur.com/p3VRcpz.jpg",
  "https://imgur.com/leRDyP4.jpg",
  "https://imgur.com/SMqwDLk.jpg",
  "https://imgur.com/wbxSjU9.jpg",
  "https://imgur.com/jFRlScM.jpg",
  "https://imgur.com/5wECbwH.jpg",
  "https://imgur.com/z0OZO2A.jpg",
  "https://imgur.com/BuIyG1o.jpg",
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
