<?php
$url = array(
"https://imgur.com/meSCXcL.jpg",
"https://imgur.com/vsgtllm.jpg",
"https://imgur.com/FtfX7pK.jpg",
"https://imgur.com/Wlujtmh.jpg",
"https://imgur.com/adeVwbT.jpg",
"https://imgur.com/sIPQ3DF.jpg",
"https://imgur.com/21gOWv5.jpg",
"https://imgur.com/4uU510w.jpg",
"https://imgur.com/WREwGeU.jpg",
"https://imgur.com/QeHG5JX.jpg",
"https://imgur.com/vUhcnpd.jpg",
"https://imgur.com/hJ0hBYM.jpg",
"https://imgur.com/bx1NITC.jpg",
  "https://imgur.com/lUDkCOj.jpg",
  "https://imgur.com/CyIdXru.jpg",
  "https://imgur.com/fWv7r29.jpg",
  "https://imgur.com/rMaYdl2.jpg",
  "https://imgur.com/22Uxumg.jpg",
  "https://imgur.com/eYIucUs.jpg",
  "https://imgur.com/A22wfdF.jpg",
  "https://imgur.com/2KKmdMi.jpg",
  "https://imgur.com/louHBQm.jpg",
  "https://imgur.com/QwZIDle.jpg",
  "https://imgur.com/iQt8WcU.jpg",
  "https://imgur.com/2qsLd34.jpg",
  "https://imgur.com/eKVR7Z0.jpg",
  "https://imgur.com/zmq7z6o.jpg",
  "https://imgur.com/ogq02PQ.jpg",
  "https://imgur.com/IqdlRDi.jpg",
  "https://imgur.com/w32PInC.jpg",
  "https://imgur.com/bmL3zHJ.jpg",
  "https://imgur.com/ESP33vr.jpg",
  "https://imgur.com/hYFihP6.jpg",
  "https://imgur.com/flIkfOY.jpg",
  "https://imgur.com/bfAoRwf.jpg",
  "https://imgur.com/CRctwvl.jpg",
  "https://imgur.com/4I5gGNI.jpg",
  "https://imgur.com/SfKDm6B.jpg",
  "https://imgur.com/jceVqkD.jpg",
  "https://imgur.com/qQYa43y.jpg",
  "https://imgur.com/MIOoBHM.jpg",
  "https://imgur.com/V6J7Rd6.jpg",
  "https://imgur.com/4Oxhiw7.jpg",
  "https://imgur.com/Msb83ED.jpg",
  "https://imgur.com/NxID93Y.jpg",
  "https://imgur.com/wRrM90W.jpg",
  "https://imgur.com/kwdduBa.jpg",
  "https://imgur.com/hhUkcKM.jpg",
  "https://imgur.com/neCWcvK.jpg",
  "https://imgur.com/4EEs0fa.jpg",
  "https://imgur.com/r4sfebm.jpg",
  "https://imgur.com/Y7w5d9O.jpg",
  "https://imgur.com/2NoDKIC.jpg",
  "https://imgur.com/a7gbqky.jpg",
  "https://imgur.com/fyIzgc5.jpg",
  "https://imgur.com/4QDMOIV.jpg",
"https://imgur.com/HSvOzyV.jpg",
 "https://imgur.com/5CyzWax.jpg",
"https://imgur.com/gSlRmqd.jpg",
"https://imgur.com/n57gM9y.jpg",
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
