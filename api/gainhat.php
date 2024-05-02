<?php
$url = array(
"https://i.imgur.com/6l54Kdk.jpeg",
"https://i.imgur.com/hKGUwZR.jpeg",
"https://i.imgur.com/Q7p8leF.jpeg",
"https://i.imgur.com/aHwtXOs.jpeg",
"https://i.imgur.com/4lkReQW.jpeg",
"https://i.imgur.com/5nm4kbV.jpeg",
"https://i.imgur.com/5H9EVLt.jpeg",
"https://i.imgur.com/z5stx9C.jpeg",
"https://i.imgur.com/Y9ApVMS.jpeg",
"https://i.imgur.com/s3fl4Wf.jpeg",
"https://i.imgur.com/NnKxmqI.jpeg",
"https://i.imgur.com/0q5K1Mx.jpeg",
"https://i.imgur.com/1lmRkU6.jpeg",
"https://i.imgur.com/uphjBj5.jpeg",
"https://i.imgur.com/XGu0xQv.jpeg",
"https://i.imgur.com/F7GbEzb.jpeg",
"https://i.imgur.com/hJaSVFm.jpeg",
);
$kaneki = array_rand($url);
$kanekivip = $url [$kaneki];
$gaixinh = array(
"data" => $kanekivip,
"author" => "Lai Minh Hien",
"success" => "true",
);
$rdimg = json_encode($gaixinh , JSON_UNESCAPED_UNICODE);
$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Lai Minh Hiền'];
$j = str_replace($i, $t, $rdimg);
echo $j;
