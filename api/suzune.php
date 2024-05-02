<?php
$url = array(
 "https://imgur.com/CWPyRCo.jpg",
    "https://imgur.com/xsH6t2s.jpg",
    "https://imgur.com/4Ja2eAe.jpg",
    "https://imgur.com/kpkdCqi.jpg",
    "https://imgur.com/HOb2DdO.jpg",
    "https://imgur.com/ZiUSj91.jpg",
    "https://imgur.com/6LaSEsk.jpg",
    "https://imgur.com/zrnP9j4.jpg",
    "https://imgur.com/X2G2DkY.jpg",
    "https://imgur.com/12tDysS.jpg",
    "https://imgur.com/hDUo2Hk.jpg",
    "https://imgur.com/qLfmHmC.jpg",
    "https://imgur.com/0pGyxuq.jpg",
    "https://imgur.com/x3Gkex9.jpg",
    "https://imgur.com/BSZG4K2.jpg",
    "https://imgur.com/p2cDst5.jpg",
    "https://imgur.com/vxKiwd6.jpg",
    "https://imgur.com/BXF42LJ.jpg",
    "https://imgur.com/8C9I7Yv.jpg",
    "https://imgur.com/DDhqoqt.jpg",
    "https://imgur.com/OFsEsLR.jpg",
    "https://imgur.com/MTxEpz8.jpg",
    "https://imgur.com/RXanAxt.jpg",
    "https://imgur.com/HtAc5HN.jpg",
    "https://imgur.com/0iYTGF9.jpg",
    "https://imgur.com/BSUbjyQ.jpg",
    "https://imgur.com/W9JVgt7.jpg",
    "https://imgur.com/wHu0LOv.jpg",
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
