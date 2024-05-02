<?php
$url = array(
 "https://imgur.com/dpsxBJ8.jpg",
    "https://imgur.com/9ZlOEWs.jpg",
    "https://imgur.com/PtpkvHI.jpg",
    "https://imgur.com/sR6Zz3Y.jpg",
    "https://imgur.com/TPvMSxq.jpg",
    "https://imgur.com/8rJkTt9.jpg",
    "https://imgur.com/e4rou8l.jpg",
    "https://imgur.com/3fSIpAY.jpg",
    "https://imgur.com/Hs9bTx2.jpg",
    "https://imgur.com/Un9emtw.jpg",
    "https://imgur.com/b0P39ub.jpg",
    "https://imgur.com/rW4k6zW.jpg",
    "https://imgur.com/RGox8hL.jpg",
    "https://imgur.com/P2E2SH4.jpg",
    "https://imgur.com/0sPfDcZ.jpg",
    "https://imgur.com/T7Cy1VI.jpg",
    "https://imgur.com/NIkL4vQ.jpg",
    "https://imgur.com/5F0GJP4.jpg",
    "https://imgur.com/63LKuIc.jpg",
    "https://imgur.com/qXDDMt2.jpg",
    "https://imgur.com/MQdo2n7.jpg",
    "https://imgur.com/4dSz1rT.jpg",
    "https://imgur.com/aWnskln.jpg",
    "https://imgur.com/cQJMg88.jpg",
    "https://imgur.com/lCxG9TZ.jpg",
    "https://imgur.com/YlClze2.jpg",
    "https://imgur.com/tYQ41H4.jpg",
    "https://imgur.com/Pbn11c2.jpg",
    "https://imgur.com/JaQeUii.jpg",
    "https://imgur.com/dpJZe99.jpg",
    "https://imgur.com/zYzmIVo.jpg",
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
