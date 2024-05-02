<?php
$url = array(
"https://i.imgur.com/b1mOknk.mp4",
"https://i.imgur.com/m1nHwkK.mp4",
"https://i.imgur.com/3CjNX0S.mp4",
"https://i.imgur.com/P1nS6NK.mp4",
"https://i.imgur.com/uKQQYM9.mp4",
"https://i.imgur.com/fGQWjct.mp4",
"https://i.imgur.com/gqajQEC.mp4",
"https://i.imgur.com/n8pypXb.mp4",
"https://i.imgur.com/cXu2yFe.mp4",
"https://i.imgur.com/6jfJL96.mp4",
"https://i.imgur.com/Hj3bEiv.mp4",
"https://i.imgur.com/7GiIl3r.mp4",
"https://i.imgur.com/thVvrz0.mp4",
"https://i.imgur.com/kzpNN8y.mp4",
  "https://i.imgur.com/F4EOzJs.mp4",
  "https://i.imgur.com/S4u7ymK.mp4",
  "https://i.imgur.com/6LoyJJ0.mp4",
  "https://i.imgur.com/wERyIBu.mp4",
  "https://i.imgur.com/Ui1HFQ5.mp4",
  "https://i.imgur.com/QU0IoLK.mp4",
  "https://i.imgur.com/NTH5b9n.mp4",
  "https://i.imgur.com/XRutpiv.mp4",
  "https://i.imgur.com/WjDJZuv.mp4",
  "https://i.imgur.com/JVjngkl.mp4",
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
