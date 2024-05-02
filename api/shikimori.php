<?php
$url = array(
"https://imgur.com/sEd9z6k.jpg",
    "https://imgur.com/8ViQD3n.jpg",
    "https://imgur.com/CLbVbXE.jpg",
    "https://imgur.com/50FHeIx.jpg",
    "https://imgur.com/fK703wK.jpg",
    "https://imgur.com/zlwT17Q.jpg",
    "https://imgur.com/yw6us2j.jpg",
    "https://imgur.com/NY0ep6R.jpg",
    "https://imgur.com/fRjS4Rr.jpg",
    "https://imgur.com/EkuqdHo.jpg",
    "https://imgur.com/fteM8Qx.jpg",
    "https://imgur.com/yX553YL.jpg",
    "https://imgur.com/xvcIRTo.jpg",
    "https://imgur.com/yQAfIqE.jpg",
    "https://imgur.com/cfGg3dg.jpg",
    "https://imgur.com/hZ18okl.jpg",
    "https://imgur.com/RX6Utqp.jpg",
    "https://imgur.com/ekC0Wo7.jpg",
    "https://imgur.com/gYr5FxB.jpg",
    "https://imgur.com/SzWmLqM.jpg",
    "https://imgur.com/UN0NaNt.jpg",
    "https://imgur.com/h1YZFmL.jpg",
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
