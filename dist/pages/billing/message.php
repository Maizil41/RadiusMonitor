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

$whatsapp_number = $_POST['whatsapp_number'];
$message = $_POST['message'];

$url = 'http://localhost:3000/send-message';
$data = [
    'to' => $whatsapp_number,
    'message' => $message,
];

$options = [
    'http' => [
        'header'  => "Content-Type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    ],
];

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

if ($result === FALSE) {
    header("Location: balance.php");
    exit();
} else {
    header("Location: balance.php");
    exit();
}
?>
