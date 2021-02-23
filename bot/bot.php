<?php
https://api.tlegram.org/bot1678126803:AAHOW3SZQQ7uNothDbJpkprCymbkBHwD_yU/setwebhook


$update = file_get_contents("php://input");
$update_array = json_decode($update , true)
if (insset($update_array["message"])){
$text = $update_array["message"]["text"]
$chat_id = $update_array["message"]["chat"]["id"]

}
//---------------------------------
$reply = "مسعود جون" . $GLOBALS['text'];
$url ="https://api.tlegram.org/bot"."1678126803:AAHOW3SZQQ7uNothDbJpkprCymbkBHwD_yU" . "/sendmesseage";
$post_params = ['chat_id'=>$GLOBALS['chat_id'], 'text' => $reply];
send_reply($url, $post_params);
//---------------------------
function send_reply ($url,$post_params)
{ $cu = curl_init();
curl_setopt(cu, curlopt_url, $url);
curl_setopt(cu, curlopt_postfields, $post_params);
curl_setopt(cu, curlopt_returntransfer, true);
$result = curl_exec($cu)
curl_close($cu)
return $result;



}


