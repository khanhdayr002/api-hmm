<?php
$url = array(
"https://imgur.com/erQKAsH.jpg",
   "https://imgur.com/rKHtSre.jpg",
    "https://imgur.com/FDlbEaD.jpg",
    "https://imgur.com/nkTToZ7.jpg",
    "https://imgur.com/tj7LKJl.jpg",
    "https://imgur.com/NI3Gi2N.jpg",
    "https://imgur.com/eUJ3z9ojpg",
    "https://imgur.com/Vh6JWDD.jpg",
    "https://imgur.com/2gs9I44.jpg",
    "https://imgur.com/zRKMEYE.jpg",
    "https://imgur.com/M7jErXD.jpg",
    "https://imgur.com/1sdOAvo.jpg",
    "https://imgur.com/bMGwwRH.jpg",
    "https://imgur.com/nytcQ5h.jpg",
    "https://imgur.com/ycomV84.jpg",
    "https://imgur.com/kDaYDxH.jpg",
    "https://imgur.com/ISVv4ZU.jpg",
    "https://imgur.com/F66vh6Y.jpg",
    "https://imgur.com/gPRmdVB.jpg",
    "https://imgur.com/53M4iIu.jpg",
    "https://imgur.com/8qFjxge.jpg",
    "https://imgur.com/9feX1jK.jpg",
    "https://imgur.com/sIFgsFy.jpg",
    "https://imgur.com/NCRpkAm.jpg",
    "https://imgur.com/SgSVDGo.jpg",
    "https://imgur.com/TYbPb6G.jpg",
    "https://imgur.com/UAoRWXN.jpg",
    "https://imgur.com/LzOPOP3.jpg",
    "https://imgur.com/OeD5Hgm.jpg",
    "https://imgur.com/2t6xIfU.jpg", 
    "https://imgur.com/QLT5T1U.jpg",
    "https://imgur.com/x9iBJnj.jpg",
    "https://imgur.com/8hEIGQ7.jpg",
    "https://imgur.com/DKED0y6.jpg",
    "https://imgur.com/CuYU62q.jpg",
    "https://imgur.com/KQ3Hsbq.jpg",
    "https://imgur.com/NdyxxGx.jpg",
    "https://imgur.com/1zzBIBX.jpg",
    "https://imgur.com/Z4dlpre.jpg",
    "https://imgur.com/TPRD5ef.jpg",
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
