<?php
$url = array(
"https://imgur.com/XPhy89K.jpg",
    "https://imgur.com/virNDML.jpg",
    "https://imgur.com/XO5RQt1.jpg",
    "https://imgur.com/KQlolzM.jpg",
    "https://imgur.com/4k26gYk.jpg",
    "https://imgur.com/nGJyy44.jpg",
    "https://imgur.com/9GLlUPK.jpg",
    "https://imgur.com/aFHUYno.jpg",
    "https://imgur.com/Zm50ke5.jpg",
    "https://imgur.com/tv07A1F.jpg",
    "https://imgur.com/UrGZTYW.jpg",
    "https://imgur.com/Oyl8ffh.jpg",
    "https://imgur.com/jvyDSXP.jpg",
    "https://imgur.com/XIq85J8.jpg",
    "https://imgur.com/Yvhyx8b.jpg",
    "https://imgur.com/6aMBDWp.jpg",
    "https://imgur.com/0rXZykr.jpg",
    "https://imgur.com/l4Qs7mH.jpg",
    "https://imgur.com/Bscg061.jpg",
    "https://imgur.com/MnW8E68.jpg",
    "https://imgur.com/HEMS1Uh.jpg",
    "https://imgur.com/AfixRy5.jpg",
    "https://imgur.com/h0gDZeQ.jpg",
    "https://imgur.com/IYzXIq5.jpg",
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
