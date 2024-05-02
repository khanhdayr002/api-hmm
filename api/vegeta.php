<?php
$url = array(
"https://imgur.com/aEGLaFL.jpg",
    "https://imgur.com/7V9pcHT.jpg",
    "https://imgur.com/GFNS2aW.jpg",
    "https://imgur.com/jpBX9Mi.jpg",
    "https://imgur.com/M55Tp8z.jpg",
    "https://imgur.com/i0XSTvM.jpg",
    "https://imgur.com/VM2GT9K.jpg",
    "https://imgur.com/NnTJMxp.jpg",
    "https://imgur.com/qajcEHn.jpg",
    "https://imgur.com/YlTibXW.jpg",
    "https://imgur.com/NppWo59.jpg",
    "https://imgur.com/eGCRSl1.jpg",
    "https://imgur.com/bYt2Kgv.jpg",
    "https://imgur.com/I4LrfnV.jpg",
    "https://imgur.com/cxxowub.jpg",
    "https://imgur.com/nZJuQw4.jpg",
    "https://imgur.com/3MzRMLF.jpg",
    "https://imgur.com/10OS7gN.jpg",
    "https://imgur.com/W0edHRF.jpg",
    "https://imgur.com/iNaXjxu.jpg",
    "https://imgur.com/pDHbgok.jpg",
    "https://imgur.com/Qv1tLwd.jpg",
    "https://imgur.com/KCtDTcC.jpg",
    "https://imgur.com/MG1ZWoQ.jpg",
    "https://imgur.com/UDSxUcZ.jpg",
    "https://imgur.com/Vyoa5E4.jpg",
    "https://imgur.com/iJuQDey.jpg",
    "https://imgur.com/Q2XbT7g.jpg",
    "https://imgur.com/lg3kasB.jpg",
    "https://imgur.com/kq7KCB0.jpg",
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
