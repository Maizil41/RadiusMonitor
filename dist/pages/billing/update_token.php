<?php
header('Content-Type: application/json');

$token = $_POST['token'] ?? '';

$configFile = '../data/token.json';

if (file_put_contents($configFile, json_encode(['token' => $token]))) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
