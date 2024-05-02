<?php
$url = array(
"https://i.postimg.cc/J4177xHD/01.jpg",
"https://i.postimg.cc/KcT330Y0/1-20.jpg",
"https://i.postimg.cc/KvrKJ4BL/10-1.jpg",
"https://i.postimg.cc/02qMY7MP/3.png",
"https://i.postimg.cc/Qd8FPsJz/868h.jpg",
"https://i.postimg.cc/52sXWGP2/998y.jpg",
"https://i.postimg.cc/TPShpbv8/Anh-Gai-Nhat-Xinh-Tu-Tin-Khoe-Cai-Lon-Do-Hong-2-scaled.jpg",
"https://i.postimg.cc/NMHFT0QK/anh-sex-gai-to-4.jpg",
"https://i.postimg.cc/qqHRGd7j/Bo-Anh-Nude-Nhat-Ban-Em-Gai-Dam-Dang-Them-Dit-14.jpg",
"https://i.postimg.cc/7h1LsQGD/chimbuom.jpg",
"https://i.postimg.cc/xjLq1qs7/Em-Gai-Thich-Duoc-Dit-Duoi-Nuoc-Bo-Anh-Gai-Khoe-Lon-1.jpg",
"https://i.postimg.cc/X78J9m6k/gai-viet-xinh-xan-khoe-cai-lon-mup-rup-04.jpg",
"https://i.postimg.cc/pLLdCC2b/gai-xinh-nude-voi-thien-nhien.jpg",
"https://i.postimg.cc/5N1yY1Tt/gai-mac-bikini.jpg",
"https://i.postimg.cc/g2t2ThJw/images.jpg",
"https://i.postimg.cc/25P8zfnr/multixnxx-Teen-Brown-hair-Erotica-Lingerie-Saggy-9.jpg",
"https://i.postimg.cc/PJHXwz67/Ngam-Nhin-Bo-Anh-Gai-Khoe-Vu-Cua-Em-Gai-Bim-Hong-13.jpg",
"https://i.postimg.cc/0QD5jHCm/NudeOK.jpg",
"https://i.postimg.cc/66V5Ngqx/t-i-xu-ng.jpg",
"https://i.postimg.cc/5ymxqYT2/t-i-xu-ng-1.jpg",
);
$kaneki = array_rand($url);
$kanekivip = $url [$kaneki];
$nude = array(
"data" => $kanekivip,
"author" => "Lê Công Quyền",
"success" => "true",
);
$rdimg = json_encode($nude);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Lê Công Quyền'];
$j = str_replace($i, $t, $rdimg);
echo $j;
