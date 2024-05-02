<?php
$url = array(
"https://Chuoiupload.MANH10.repl.co/upload/oncki1x9ii.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/imayybsni4i.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/cyjukaxvqo.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/zht9swbq5u.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/29vd7erhzn.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/hmuue7rgsx.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/nmp521as6w.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/9garczhdl7.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/x3jarxl1c9.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/3vc6ymccp5.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/nkrwi06kez.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/n7c4qfiva8.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/o3zxl3vzi5f.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/j5cj2aj6gf.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/mp8ts852w2.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/8t19syo5ys.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/05iotggxyy.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/f1ncr6pl3n.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/ouuhlf6ejt.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/a11eu3vsh7.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/1alx66z6rl.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/h24karo071l.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/pqcfv2jcq1.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/545ih7o4zg.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/2mo6br6hwyi.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/zqgx6cytwe.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/zkfbpqf45t.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/z2yid3jn3x.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/qi2c2wxjpl.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/mnf7wde8ej.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/hybm5kxhnti.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/a46dx14xxc.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/4hlnle6l59.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/k1h0rfrqf6.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/rv63k3slw5.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/kjj77l5xqe.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/an9ba0g06w.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/eoysgptg9y.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/gdijyhhozy.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/370aplaci5.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/pcx7y4y05d.jpg",
"https://Chuoiupload.MANH10.repl.co/upload/lqi53qhj84.jpg",
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
