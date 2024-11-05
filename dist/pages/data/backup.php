<?php
require 'db_config.php';

$host = $db_config['servername'];
$dbname = $db_config['dbname'];
$username = $db_config['username'];
$password = $db_config['password'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['sqlFile']) && $_FILES['sqlFile']['error'] == UPLOAD_ERR_OK) {
        $fileTmpName = $_FILES['sqlFile']['tmp_name'];
        $fileName = $_FILES['sqlFile']['name'];

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $pdo->exec("DROP DATABASE IF EXISTS `$dbname`;");
            $pdo->exec("CREATE DATABASE `$dbname`;");
            $pdo->exec("USE `$dbname`;");

            $sql = file_get_contents($fileTmpName);
            if ($sql === false) {
                throw new Exception('Gagal membaca file SQL.');
            }
            $pdo->exec($sql);

            $_SESSION['message'] = "Database berhasil diperbarui!";
            $_SESSION['message_type'] = "success";
        } catch (PDOException $e) {
            $_SESSION['message'] = "Gagal memperbarui database: " . htmlspecialchars($e->getMessage());
            $_SESSION['message_type'] = "error";
        } catch (Exception $e) {
            $_SESSION['message'] = "Terjadi kesalahan: " . htmlspecialchars($e->getMessage());
            $_SESSION['message_type'] = "error";
        }
    } elseif (isset($_POST['action']) && $_POST['action'] == 'download') {
        $backupFile = 'backup_' . date('Ymd_His') . '.sql';

        $command = "mysqldump --opt -h" . escapeshellarg($host) . " -u" . escapeshellarg($username) . " -p" . escapeshellarg($password) . " " . escapeshellarg($dbname) . " > " . escapeshellarg($backupFile);
        exec($command, $output, $return_var);

        if ($return_var === 0 && file_exists($backupFile)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($backupFile) . '"');
            header('Content-Length: ' . filesize($backupFile));

            readfile($backupFile);

            unlink($backupFile);
            exit;
        } else {
            $_SESSION['message'] = "Gagal membuat backup database.";
            $_SESSION['message_type'] = "error";
        }
    }
}
?>