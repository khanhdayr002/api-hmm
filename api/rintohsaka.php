<?php
$url = array(
"https://imgur.com/LxHwnBt.jpg",
"https://imgur.com/BBsAhuF.jpg",
"https://imgur.com/AUfblWa.jpg",
"https://imgur.com/pFEYA1C.jpg",
"https://imgur.com/F8hvvNw.jpg",
"https://imgur.com/OSAiXId.jpg",
"https://imgur.com/LDzb9j1.jpg",
"https://imgur.com/0miAjLV.jpg",
"https://imgur.com/ASwoeuL.jpg",
"https://imgur.com/5BdUHSs.jpg",
"https://imgur.com/KsyfO7T.jpg",
"https://imgur.com/0MtJGrq.jpg",
"https://imgur.com/4sumHvF,jpg",
"https://imgur.com/DAPytzE.jpg",
"https://imgur.com/ZYGmbj0.jpg",
"https://imgur.com/yHxZ2ZE.jpg",
"https://imgur.com/26MugH2.jpg",
"https://imgur.com/NUPLEdr.jpg",
"https://imgur.com/T3FXz4a.jpg",
"https://imgur.com/q8FHM22.jpg",
"https://imgur.com/7xf0nsu.jpg",
"https://imgur.com/midFGrh.jpg",
"https://imgur.com/3seef1m.jpg",
"https://imgur.com/k3tRxGh.jpg",
"https://imgur.com/5VVsG2z.jpg",
"https://imgur.com/ARvow1h.jpg",
"https://imgur.com/QG2k4Mg.jpg",
"https://imgur.com/UdO4M4Y.jpg",
"https://imgur.com/R5wLP7M.jpg",    
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
