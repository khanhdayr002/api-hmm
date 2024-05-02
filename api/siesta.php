<?php
$url = array(
"https://i.imgur.com/XhLGoNl.jpeg",
  "https://i.imgur.com/ZafKOKJ.jpeg",
  "https://i.imgur.com/uaudnEE.jpeg",
  "https://i.imgur.com/j5fjEzg.jpeg",
  "https://i.imgur.com/XkQvv3d.jpeg",
  "https://i.imgur.com/7UxOgOc.jpeg",
  "https://i.imgur.com/QXjozPf.jpeg",
  " https://i.imgur.com/F2DArzw.jpeg",
  "https://i.imgur.com/gCrSMgy.jpeg",
  "https://i.imgur.com/gCrSMgy.jpeg",
  "https://i.imgur.com/U12ipkG.jpeg",
  "https://i.imgur.com/mQcPXPM.jpeg",
  "https://i.imgur.com/7YgYmsE.jpeg",
  "https://i.imgur.com/5h6ZLde.jpeg",
  "https://i.imgur.com/tYdd9DO.jpeg",
  " https://i.imgur.com/64GiSSy.jpeg",
  "https://i.imgur.com/O3PE16u.jpeg",
  "https://i.imgur.com/qpc9bVK.jpeg",
  "https://i.imgur.com/2fixU3y.jpeg",
  "https://i.imgur.com/I9YWnzv.jpeg",
  "https://i.imgur.com/xC4IkEq.jpeg",
"https://i.imgur.com/8gsbSeD.jpeg",
  "https://i.imgur.com/lZfPif1.jpeg",
  "https://i.imgur.com/PYXH40c.jpeg",
  "https://i.imgur.com/Smps3fG.jpeg",
  "https://i.imgur.com/ZYOdOBU.jpeg",
  "https://i.imgur.com/lQ4zQDp.jpeg",
  "https://i.imgur.com/wAFW58q.jpeg",
  "https://i.imgur.com/VSEgrxh.jpeg",
  " https://i.imgur.com/uuz6S9D.jpeg",
  "https://i.imgur.com/NfCjYwB.jpeg",
  "https://i.imgur.com/pIJuIbl.jpeg",
  "https://i.imgur.com/Ts4nOdN.jpeg",
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
