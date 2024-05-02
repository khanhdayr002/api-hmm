<?php
$url = array(
"https://imgur.com/W4G3u8E.jpg",
    "https://imgur.com/YaBuwAZ.jpg",
    "https://imgur.com/ek7JRJw.jpg",
    "https://imgur.com/l9g7a2Q.jpg",
    "https://imgur.com/ucqbraK.jpg",
    "https://imgur.com/T8oBdzj.jpg",
    "https://imgur.com/kemgAeE.jpg",
    "https://imgur.com/9CWqO71.jpg",
    "https://imgur.com/zvtEMHR.jpg",
    "https://imgur.com/QzjeZgf.jpg",
    "https://imgur.com/qdQtBME.jpg",
    "https://imgur.com/5uHvZ5S.jpg",
    "https://imgur.com/Jv6nMqo.jpg",
    "https://imgur.com/u8MK2Bm.jpg",
    "https://imgur.com/65WH7i5.jpg",
    "https://imgur.com/sTSerOQ.jpg",
    "https://imgur.com/qnAedzz.jpg",
    "https://imgur.com/FdVBWMW.jpg",
    "https://imgur.com/MlLTy1U.jpg",
    "https://imgur.com/F7cw0wI.jpg",
    "https://imgur.com/CNrNTlM.jpg",
    "https://imgur.com/hUW6kiB.jpg",
    "https://imgur.com/uPTLesN.jpg",
    "https://imgur.com/DhNhlxG.jpg",
    "https://imgur.com/NDQg9AK.jpg",
    "https://imgur.com/QhXl149.jpg",
    "https://imgur.com/jrcHrWd.jpg",
    "https://imgur.com/nIhNrqB.jpg",
    "https://imgur.com/aMatRnR.jpg",
    "https://imgur.com/bwOVOD5.jpg",
    "https://imgur.com/wVHF0EW.jpg",
    "https://imgur.com/gVIs2Ce.jpg",
    "https://imgur.com/jIRrOHq.jpg",
    "https://imgur.com/9bCHco6.jpg",
    "https://imgur.com/1ipw3iZ.jpg",
    "https://imgur.com/AyZRYgd.jpg",
    "https://imgur.com/etqvdkD.jpg",
    "https://imgur.com/ouUb9tn.jpg",
    "https://imgur.com/F9KjpIf.jpg",
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
