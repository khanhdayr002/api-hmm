<?php
$url = array(
"https://imgur.com/MIv9XwP.jpg",
    "https://imgur.com/6s1Im5F.jpg",
    "https://imgur.com/CxkSJBz.jpg",
    "https://imgur.com/QPXSajx.jpg",
    "https://imgur.com/QeWaWvG.jpg",
    "https://imgur.com/U7Jmukz.jpg",
    "https://imgur.com/Jo6mK2P.jpg",
    "https://imgur.com/kcTUONZ.jpg",
    "https://imgur.com/7C7YCam.jpg",
    "https://imgur.com/CyhWHoF.jpg",
    "https://imgur.com/MxXJFtP.jpg",
    "https://imgur.com/CHkqmkb.jpg",
    "https://imgur.com/G02tAo5.jpg",
    "https://imgur.com/vWt2kAU.jpg",
    "https://imgur.com/v3juam7.jpg",
    "https://imgur.com/mivnqtU.jpg",
    "https://imgur.com/R5eEbCv.jpg",
    "https://imgur.com/eK1NZWh.jpg",
    "https://imgur.com/G3mwwg6.jpg",
    "https://imgur.com/Q35rGzP.jpg",
    "https://imgur.com/Fh5WWXa.jpg",
    "https://imgur.com/DFtjw4m.jpg",
    "https://imgur.com/pSpan3v.jpg",
    "https://imgur.com/5Y5plXj.jpg",
    "https://imgur.com/luZzUn5.jpg",
    "https://imgur.com/CXG35Z2.jpg",
    "https://imgur.com/Cfm1W1d.jpg",
    "https://imgur.com/nEq8TZo.jpg",
    "https://imgur.com/uMj3Yw6.jpg",
    "https://imgur.com/zPHiuOo.jpg",
    "https://imgur.com/00Iquxy.jpg",
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
