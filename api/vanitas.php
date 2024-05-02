<?php
$url = array(
"https://imgur.com/YJUpR61.jpg",
    "https://imgur.com/bAgDzwV.jpg",
    "https://imgur.com/yyZp1dz.jpg",
    "https://imgur.com/kAkBahp.jpg",
    "https://imgur.com/djA19Eq.jpg",
    "https://imgur.com/AcsbsXf.jpg",
    "https://imgur.com/wCnPE77.jpg",
    "https://imgur.com/aOiap78.jpg",
    "https://imgur.com/gMPB1bu.jpg",
    "https://imgur.com/pLCjZO3.jpg",
    "https://imgur.com/rOsu3bQ.jpg",
    "https://imgur.com/LD8hgSM.jpg",
    "https://imgur.com/uuNDRTO.jpg",
    "https://imgur.com/yqJYVry.jpg",
    "https://imgur.com/GkPi8K0.jpg",
    "https://imgur.com/ytURwaB.jpg",
    "https://imgur.com/RQW4ckf.jpg",
    "https://imgur.com/3S03DyK.jpg",
    "https://imgur.com/pGEf0AA.jpg",
    "https://imgur.com/f7U2EoG.jpg",
    "https://imgur.com/1VchOSk.jpg",
    "https://imgur.com/7I1V1Jr.jpg",
  "https://imgur.com/MfpPdWv.jpg",
  "https://imgur.com/2nbnvZt.jpg",
  "https://imgur.com/Sx6QAHe.jpg",
  "https://imgur.com/6WrXDBR.jpg",
  "https://imgur.com/WzMtqAg.jpg",
  "https://imgur.com/G08XT14.jpg",
  "https://imgur.com/76xjoqs.jpg",
  "https://imgur.com/KDs4Nwa.jpg",
  "https://imgur.com/BsoMD16.jpg",
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
