<?php
$url = array(
 "https://imgur.com/a5z9iIa.jpg",
    "https://imgur.com/RxZVGLI.jpg",
    "https://imgur.com/GzbJUGT.jpg",
    "https://imgur.com/vwGD9MT.jpg",
    "https://imgur.com/XplXU5N.jpg",
    "https://imgur.com/yLFxXhB.jpg",
    "https://imgur.com/HpAkHkX.jpg",
    "https://imgur.com/K6WQlNL.jpg",
    "https://imgur.com/p0ZSQdj.jpg",
    "https://imgur.com/cEwm83N.jpg",
    "https://imgur.com/YE69s18.jpg",
    "https://imgur.com/uRaJTU1.jpg",
    "https://imgur.com/XXKL39f.jpg",
    "https://imgur.com/LR407Ev.jpg",
    "https://imgur.com/QkGTNwa.jpg",
    "https://imgur.com/KBR7kzF.jpg",
    "https://imgur.com/44IEwEu.jpg",
    "https://imgur.com/QJmMmt8.jpg",
    "https://imgur.com/WYdBxUR.jpg",
    "https://imgur.com/qOqhci9.jpg",
    "https://imgur.com/DqkWyl0.jpg",
    "https://imgur.com/aV4IIr1.jpg",
    "https://imgur.com/E52MvDq.jpg",
    "https://imgur.com/OyPxDxR.jpg",
    "https://imgur.com/AVG56uN.jpg",
    "https://imgur.com/fXzEBwd.jpg",
    "https://imgur.com/RGaQeR8.jpg",
    "https://imgur.com/6ixoEJq.jpg",
    "https://imgur.com/Cq6kb5y.jpg",
    "https://imgur.com/R3b3DYZ.jpg",
    "https://imgur.com/NlIrCTy.jpg",
    "https://imgur.com/jmSJHAT.jpg",
    "https://imgur.com/nN79QtL.jpg",
    "https://imgur.com/mKkJlhy.jpg",
    "https://imgur.com/C8l208J.jpg",
    "https://imgur.com/rbl6npg.jpg",
    "https://imgur.com/iLmVTr3.jpg",
    "https://imgur.com/nPVtolY.jpg",
    "https://imgur.com/BcUDkhr.jpg",
    "https://imgur.com/ovuHsit.jpg",
    "https://imgur.com/UmC3flq.jpg",
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
