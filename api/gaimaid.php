<?php
$url = array(
"https://i.imgur.com/Wa1TBhG.jpeg",
"https://i.imgur.com/evWBehM.jpeg",
"https://i.imgur.com/wiNJLFu.jpeg",
"https://i.imgur.com/TGhY0Mm.jpeg",
"https://i.imgur.com/R6ofXSb.jpeg",
"https://i.imgur.com/EdFwgEh.jpeg",
"https://i.imgur.com/jLADYSo.jpeg",
"https://i.imgur.com/5tSnJGG.jpeg",
  "https://i.imgur.com/UsHIocz.jpeg",
"https://i.imgur.com/cA4EF2D.jpeg",
"https://i.imgur.com/8pCl4YZ.jpeg",
"https://i.imgur.com/z6M4oqT.jpeg",
"https://i.imgur.com/4slR1lc.jpeg",
"https://i.imgur.com/dczN4b4.jpeg",
"https://i.imgur.com/2Kltm5g.jpeg",
"https://i.imgur.com/BDEsESz.jpeg",
"https://i.imgur.com/JTfjd9o.jpeg",
"https://i.imgur.com/wyFJoYs.jpeg",
"https://i.imgur.com/c9My7aR.jpeg",
"https://i.imgur.com/JQhJ1D4.jpeg",
"https://i.imgur.com/18MAhei.jpeg",
"https://i.imgur.com/X8UOrTe.jpeg",
"https://i.imgur.com/RgFGq03.jpeg",
"https://i.imgur.com/0z5oB9F.jpeg",
"https://i.imgur.com/o5NJrXL.jpeg",
"https://i.imgur.com/hNSQ9U3.jpeg",
"https://i.imgur.com/Jxaiu7a.jpeg",
"https://i.imgur.com/TiFvXHC.jpeg",
"https://i.imgur.com/z3GsjrN.jpeg",
"https://i.imgur.com/lxxR74P.jpeg",
"https://i.imgur.com/XBoLEPX.jpeg",
"https://i.imgur.com/y2H8yxk.jpeg",
"https://i.imgur.com/m5uDCer.jpeg",
"https://i.imgur.com/Mg8kEey.jpeg",
"https://i.imgur.com/t7o1SDC.jpeg",
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
