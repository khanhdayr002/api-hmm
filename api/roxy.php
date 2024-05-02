<?php
$url = array(
"https://imgur.com/RV1i5jR.jpg",
    "https://imgur.com/IxdYuTg.jpg",
    "https://imgur.com/bJ8iHmM.jpg",
    "https://imgur.com/WMhfn1U.jpg",
    "https://imgur.com/ZVM0uwe.jpg",
    "https://imgur.com/JN5mnyH.jpg",
    "https://imgur.com/bfWu7Qm.jpg",
    "https://imgur.com/uvtxjIw.jpg",
    "https://imgur.com/oXQAjGh.jpg",
    "https://imgur.com/byhObNf.jpg",
    "https://imgur.com/6ZYFBNO.jpg",
    "https://imgur.com/Fi6RSTl.jpg",
    "https://imgur.com/OrSXzQu.jpg",
    "https://imgur.com/zPHoPFA.jpg",
    "https://imgur.com/yIivrCW.jpg",
    "https://imgur.com/h2pUax9.jpg",
    "https://imgur.com/diyxlCX.jpg",
    "https://imgur.com/R4uv3ET.jpg",
    "https://imgur.com/pCIKjdP.jpg",
    "https://imgur.com/DYWHXot.jpg",
    "https://imgur.com/JX7GZdp.jpg",
    "https://imgur.com/C1zPr9W.jpg",
    "https://imgur.com/4yEnA1o.jpg",
    "https://imgur.com/cuRTKlv.jpg",
    "https://imgur.com/bbBSJhk.jpg",
    "https://imgur.com/qhRVhsx.jpg",
    "https://imgur.com/Xn4rhbp.jpg",
    "https://imgur.com/Kr6L6qK.jpg",
    "https://imgur.com/GP6O7bL.jpg",
    "https://imgur.com/FRizV6R.jpg",
    "https://imgur.com/PdPPGoF.jpg",
    "https://imgur.com/eEegeCJ.jpg",
    "https://imgur.com/k4JW7qp.jpg",
    "https://imgur.com/wEYtpT9.jpg",
    "https://imgur.com/IFiMgBI.jpg",
    "https://imgur.com/Y8k2g7e.jpg",    
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
