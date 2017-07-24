<?php
header('Content-Type: text/html; charset=utf-8');
$id = $_GET['id'];
$message = $_GET['message'];
$url = "https://chat.trolyfacebook.com/chat/?noidung=". $message ."&id=". $id ."&key=64x2x2w243q2u2e454x2" ;
$data = file_get_contents($url);

//62.96.10.98:3128

 // $loginpassw = 'ademking:123tunisie';
    // $proxy_ip = 'us-wa.proxymesh.com';
    // $proxy_port = '31280';


    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_HEADER, 0);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_PROXYPORT, $proxy_port);
    // curl_setopt($ch, CURLOPT_PROXYTYPE, 'HTTP');
    // curl_setopt($ch, CURLOPT_PROXY, $proxy_ip);
    // curl_setopt($ch, CURLOPT_PROXYUSERPWD, $loginpassw);
    // $data = curl_exec($ch);
    // curl_close($ch);










// $aContext = array(
//     'http' => array(
//           'proxy' => 'tcp://195.55.85.254:80',
//         'request_fulluri' => true,
//     ),
// );
// $cxContext = stream_context_create($aContext);




// $data = file_get_contents($url, False, $cxContext);


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
