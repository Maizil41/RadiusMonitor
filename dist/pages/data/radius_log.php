<?php
$limit = 20;
$logFile = '/tmp/log/radius.log';

if (file_exists($logFile)) {
    $log = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($log === false) {
        $log = ['Tidak dapat membaca log.'];
    } else {
        $log = array_slice($log, -$limit);
    }
} else {
    $log = ['File log tidak ditemukan.'];
}

$log = array_reverse($log);

$logString = '';
foreach ($log as $line) {
    if (strpos($line, 'Login incorrect') !== false) {
        if (preg_match('/\[([A-Fa-f0-9]{2}[:-]){5}[A-Fa-f0-9]{2}\//', $line)) {
            continue;
        }
    }

    $encodedLine = htmlspecialchars($line);
    $encodedLine = str_replace(
        ['Login OK', 'LogOut OK', 'Login incorrect'],
        ['<span style="color:green;">Login OK</span>', '<span style="color:orange;">LogOut OK</span>', '<span style="color:red;">Login incorrect</span>'],
        $encodedLine
    );
    $logString .= $encodedLine . "<br>";
}
?>