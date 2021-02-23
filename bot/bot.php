<?php 
$message = file_get_contents("php://input");
//file_put_contents('testbot.txt',(var_export(json_decode($message),true)));
if($result['message']['text']=='/date'){
$text = date('Y-m-d');
}else if($result['message']['text']=='/time'){
$text = date('H:i:s');
}else{
$text = 'Command Not Found';
}

$result = json_decode($message,true);
$token = "1678126803:AAHOW3SZQQ7uNothDbJpkprCymbkBHwD_yU";
$url = "https://api.telegram.org/bot".$token.'/sendMessage?chat_id='.$result['message']['chat']['id'].'&text='.$text;
file_get_contents($url);

?>

