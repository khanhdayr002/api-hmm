<?php
$url = array(
"https://i.postimg.cc/XYywzsp3/02d4453f3eb0a76a87148433395b3ec3.gif",
"https://i.postimg.cc/G37G3WDd/574fcc7979b6f-1533876767756310501023.gif",
"https://i.postimg.cc/XqzC25Wp/574fcc797b21e-1533876813029926506824.gif",
"https://i.postimg.cc/DZ5sXDYQ/574fcc92e98c3-1533876840028170363441.gif",
"https://i.postimg.cc/yYD9DLh9/Crafty-Live-Junco-size-restricted.gif",
"https://i.postimg.cc/NFJ1WV6G/dedac9ceaace3856b6fe85522579fb88.gif",
);
$kaneki = array_rand($url);
$kanekivip = $url [$kaneki];
$kiss = array(
"url" => $kanekivip,
"author" => "Lê Công Quyền",
"success" => "true",
);
$rdimg = json_encode($kiss);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Lê Công Quyền'];
$j = str_replace($i, $t, $rdimg);
echo $j;
