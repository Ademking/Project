<?php
header('Content-Type: text/html; charset=utf-8');
$id = $_GET['id'];

$url = "https://chat.trolyfacebook.com/thoat/?id=".$id."&key=64x2x2w243q2u2e454x2";

$data = file_get_contents($url);
// $proxy = '89.248.173.141:3128';


// $ch = curl_init();


// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_PROXY, $proxy);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // read more about HTTPS http://stackoverflow.com/questions/31162706/how-to-scrape-a-ssl-or-https-url/31164409#31164409
// curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');


// $data = curl_exec($ch);

// curl_close($ch); 


$or5j = "خرجت مـالـ Conversation .. تحب تحكي مع شخص آخر أكتب Chat" ;

$data = str_replace("Đã ngắt kết nối với người lạ!" , $or5j , $data) ;
$data = str_replace("Chúc các bạn vui vẻ","أصنع جوكّ",$data);
$data = str_replace("Đã kết nối với người lạ. Hãy nói Xin chào để chào người lạ nào!","فما شكون دخل معاك في الخط .. قولو عسلامة",$data);
$data = str_replace("Đã ngắt kết nối!","خرجت مـالـ Conversation", $data);
$data = str_replace("Đã đăng ký tham gia! Đang chờ kết nối...." , "قاعد نلوج على شخص تحكي معاه .. استناني لحظة" ,$data);
$data = str_replace("Phiên của bạn đã hết hạn. Hãy tham gia lại" , "اكتب Exit" , $data);
$data = str_replace("Bạn đang chat với người lạ nên không thể than gia nữa... Hãy thoát ra trước..." , "" , $data);
echo $data;



?>
