<?php
$url = array(
"https://imgur.com/kL3VCBY.jpg",
    "https://imgur.com/cytZSIF.jpg",
    "https://imgur.com/I0mocU5.jpg",
    "https://imgur.com/P0SxEQz.jpg",
    "https://imgur.com/2BNkkRu.jpg",
    "https://imgur.com/yfJDeJC.jpg",
    "https://imgur.com/31FDCaJ.jpg",
    "https://imgur.com/y4VeK1p.jpg",
    "https://imgur.com/aFqFOBq.jpg",
    "https://imgur.com/oqQRa1a.jpg",
    "https://imgur.com/VekSjx5.jpg",
    "https://imgur.com/y3bqbwJ.jpg",
    "https://imgur.com/f6o8x6p.jpg",
    "https://imgur.com/Gmvx1Bc.jpg",
    "https://imgur.com/8WGEz2B.jpg",
    "https://imgur.com/U64vhPR.jpg",
    "https://imgur.com/QoRxA7Y.jpg",
    "https://imgur.com/NJ1RyQK.jpg",
    "https://imgur.com/VZUIbaG.jpg",
    "https://imgur.com/o07DWAp.jpg",
    "https://imgur.com/IXx3poK.jpg",
    "https://imgur.com/3uZSPJu.jpg",
    "https://imgur.com/6R30wiq.jpg",
    "https://imgur.com/STcJfrq.jpg",
    "https://imgur.com/ZgDaRKL.jpg",
    "https://imgur.com/PrgJ6um.jpg",
    "https://imgur.com/p8MtaZ5.jpg",
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
