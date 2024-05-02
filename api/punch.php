<?php
$url = array(
"https://img-cdn.2game.vn/pictures/images/2016/5/30/onehit_30_5_2016_1.GIF",
"https://img-cdn.2game.vn/pictures/images/2016/5/30/onehit_30_5_2016_3.GIF",
"https://img-cdn.2game.vn/pictures/images/2016/5/30/onehit_30_5_2016_6.GIF",
"https://img-cdn.2game.vn/pictures/images/2016/5/30/onehit_30_5_2016_8.GIF",
);
$kaneki = array_rand($url);
$kanekivip = $url [$kaneki];
$punch = array(
"url" => $kanekivip,
"author" => "Lê Công Quyền",
"success" => "true",
);
$rdimg = json_encode($punch);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Lê Công Quyền'];
$j = str_replace($i, $t, $rdimg);
echo $j;
