<?php
$word = array(
"Chớ nghe lời phỉnh tiếng phờ\nThò tay vào lờ, mắc kẹt cái hom",
"Măng chua nấu cá ngạch nguồn\nSự đời đắp đổi, khi buồn khi vui.",
"Yêu nhau xé lụa may quần\nGhét nhau kể nợ kể nần nhau ra",
"Ai ơi chớ vội cười nhau\nCây nào mà chẳng có sâu chạm cành",
"Khi giàu chẳng có đỡ ai\nĐến khi hoạn nạn chẳng ai đỡ mình",
"Ở sao cho vừa lòng người\nỞ rộng người cười, ở hẹp người chê.",
"Chim khôn chưa bắt đã bay,\nNgười khôn ít nói, ít hay trả lời",
"Ăn cứt đá bô",
"Ăn quả nhớ kẻ trồng cây,\nĂn khoai nhớ kẻ cho dây trồng khoai",
"Gió mùa thu anh ru em ngủ\nEm ngủ rồi……anh cạy tủ anh đi",
"Những đêm dài ngồi chơi vi tính\nBỗng bàng hoàng khi nhìn thấy roi mây",
"Trước mắt em anh là thằng hai lúa\nSau lưng em anh là chúa giang hồ",
"Nhớ quá khứ buồn rơi nước mắt\nNhìn tương lai lạnh toát mồ hôi.",
"Ta về ta tắm ao ta\nSảy chân chết đuối có người nhà vớt lên",
"Ta về ta tắm ao ta\nDù trong dù đục vẫn là cái ao",
"Bình tĩnh tự tin không cay cú\nÂm thầm chịu đựng trả thù sau.",
"Má ơi đừng gả con xa\nGả con qua Úc,Canada được rồi\nMá ơi đừng gả con xa\nChim kêu vượn hú biết nhà má đâu\nMá ơi đừng gả con gần\nCon qua mượn gạo nhiều lần má la",
"Tình chỉ đẹp khi còn dang dở\nCưới nhau về tắt thở càng nhanh",
"Vẽ hình em lên cát\nRồi hôn em một phát\nÔi cuộc đời chua chát\nToàn là đất với cát",
"Đời nào bánh đúc có xương\nĐời nào cờ rút lại thương chúng mình."
);
$kaneki = array_rand($word);
$kanekivip = $word [$kaneki];
$girl = array_rand($url);
$gai = $url [$girl];
$cadao = array(
"data" => $kanekivip,
"author" => "Lê Công Quyền",
"success" => "true",
);
$rdimg = json_encode($cadao, JSON_UNESCAPED_UNICODE);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Lê Công Quyền'];
$j = str_replace($i, $t, $rdimg);
echo $j;