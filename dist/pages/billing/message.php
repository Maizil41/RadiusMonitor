<?php
/*
*******************************************************************************************************************
* Warning!!!, Tidak untuk diperjual belikan!, Cukup pakai sendiri atau share kepada orang lain secara gratis
*******************************************************************************************************************
* Dibuat oleh @Maizil https://t.me/maizil41
*******************************************************************************************************************
* © 2024 Mutiara-Net By @Maizil
*******************************************************************************************************************
*/

$configFile = '../data/token.json';

if (!file_exists($configFile)) {
    die('Config file not found');
}

$config = json_decode(file_get_contents($configFile), true);
if (!isset($config['token'])) {
    die('Token not found in config file');
}

$token = $config['token'];
$chat_id = $_POST['chat_id'];
$message = $_POST['message'];

$url = "https://api.telegram.org/bot$token/sendMessage";

$data = [
    'chat_id' => $chat_id,
    'text' => $message
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

$response = curl_exec($ch);

curl_close($ch);

header("Location: balance.php");
exit;
?>

