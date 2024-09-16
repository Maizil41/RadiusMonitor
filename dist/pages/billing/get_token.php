<?php
header('Content-Type: application/json');

$configFile = '../data/token.json';

if (file_exists($configFile)) {
    $data = file_get_contents($configFile);
    echo $data;
} else {
    echo json_encode(['token' => '']);
}
?>
