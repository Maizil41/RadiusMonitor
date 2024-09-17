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

header('Content-Type: application/json');

$configFile = '../data/token.json';

if (file_exists($configFile)) {
    $data = file_get_contents($configFile);
    echo $data;
} else {
    echo json_encode(['token' => '']);
}
?>
