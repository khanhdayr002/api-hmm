<?php
$url = array(
"https://i.imgur.com/jXOwoHx.gif",
"http://kenh14cdn.com/thumb_w/660/2018/7/19/gif-2-15319836727292050186373.gif",
);
$kaneki = array_rand($url);
$kanekivip = $url [$kaneki];
$spar = array(
"url" => $kanekivip,
"author" => "Lê Công Quyền",
"success" => "true",
);
$rdimg = json_encode($spar);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Lê Công Quyền'];
$j = str_replace($i, $t, $rdimg);
echo $j;
