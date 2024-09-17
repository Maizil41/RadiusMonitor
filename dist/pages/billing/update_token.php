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

$token = $_POST['token'] ?? '';

$configFile = '../data/token.json';

if (file_put_contents($configFile, json_encode(['token' => $token]))) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
