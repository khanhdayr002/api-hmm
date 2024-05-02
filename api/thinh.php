<?php
$word = array(
"Hoa chỉ nở khi có người tưới nước.\nEm chỉ cười khi đứng trước người em yêu",
"Anh vô gia cư hay sao.\nsao mà cứ ở trong tim em mãi thế",
"Lồng thì em để nhốt chim.\nCòn anh em nhốt trong tim đây này.",
" Mời anh một miếng dưa cà.\nDạo này ế quá hay là mình yêu nhau?.",
"Trời xanh gió thổi chẳng ngừng.\nAnh không cẩn thận coi chừng yêu em.",
"Bao nhiêu cân thính cho vừa.\nBao nhiêu cân bả mới lừa được anh.",
" Đôi khi muốn giả làm gà.\nĐể xem anh thịt hay là anh nuôi?",
"Hè về nắng gắt cháy da.\nBên ai cũng nóng hay là bên em",
"Trái tim em giờ đầy axit.\nCần anh dung hòa bằng một ít bazo.",
" Đó giờ chỉ ăn cơm với cá.\nAnh đã làm gì biết thơm má ai đâu.",
  "Hà Nội đẹp nhất về đêm.\nĐời anh đẹp nhất khi có được em.",
  "Nắng chiều cũng đã ngả vàng.\nChừng nào ta được rước nàng về dinh?",
  "Dẫu chiến trường muôn ngàn kế sách.\nLại không có cách để có nàng kề bên",
  " Đố ai đếm được lá rừng.\nĐố ai khuyên được anh ngừng yêu em.",
  "Biển rộng trời cao đâu cũng là nhà đối với ta.\nMà một nơi trú chân trong tim nàng sao quá xa",
  "Bao nhiêu năm cày môn địa lý.\nVẫn chưa thấy vị trí của người yêu.",
  "Vận tốc trái tim nhanh không em nhỉĐể anh tính quãng đường đi đến trái tim em.",
"Gọi anh là mì gói.\nVì em muốn ăn liền.",
  "Cảm lạnh là do gió.\ncòn cảm nắng chắc chắn là do em.",
  "Muốn ăn cay thì cho nhiều ớt.\nKhông muốn broken heart thì yêu anh.",
  "Có mai, có quất, có đào.\nCó thêm em nữa, ngọt ngào cả năm.",
  "Cuộc đời này chắc chắn không như ý em muốn.\nVậy anh sẽ như ý em muốn.",
  "Muốn yêu anh thì phải đi chung đường.\nCòn muốn chung giường thì cùng anh lên phường"
);
$kaneki = array_rand($word);
$kanekivip = $word [$kaneki];
$poem = array(
"data" => $kanekivip,
"author" => "Trung Hiếu",
"success" => "true",
);
$rdimg = json_encode($poem , JSON_UNESCAPED_UNICODE);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Trung Hiếu'];
$j = str_replace($i, $t, $rdimg);
echo $j;
