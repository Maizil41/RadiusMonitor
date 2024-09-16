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

require '../data/pdo_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateusers']) && $_POST['updateusers'] === 'top') {
    try {
        $pdo = get_db_connection();
        if (!$pdo) {
            throw new Exception('Database connection failed');
        }

        $pdo->beginTransaction();

        $uid = isset($_POST['uid']) ? trim($_POST['uid']) : '';
        $username = isset($_POST['username']) ? trim($_POST['username']) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';
        $balance = isset($_POST['balance']) && $_POST['balance'] !== '' ? trim($_POST['balance']) : '0';
        $telegram = isset($_POST['telegram']) && $_POST['telegram'] !== '' ? trim($_POST['telegram']) : null;
        $whatsapp = isset($_POST['whatsapp']) && $_POST['whatsapp'] !== '' ? trim($_POST['whatsapp']) : null;

        if (empty($username)) {
            throw new Exception('Username cannot be empty.');
        }

        if (!empty($password)) {
            $newPassword = $password;
        } else {
            $stmt = $pdo->prepare("SELECT password FROM users WHERE id = :uid");
            $stmt->bindParam(':uid', $uid);
            $stmt->execute();
            $newPassword = $stmt->fetchColumn();
        }

        $stmt = $pdo->prepare("UPDATE users SET 
            username = :username,
            password = :password,
            balance = :balance,
            telegram_id = :telegram,
            whatsapp_number = :whatsapp
        WHERE id = :uid");

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $newPassword);
        $stmt->bindParam(':balance', $balance);
        $stmt->bindParam(':telegram', $telegram);
        $stmt->bindParam(':whatsapp', $whatsapp);
        $stmt->bindParam(':uid', $uid);

        $stmt->execute();
        $pdo->commit();

        echo "<script>window.location.href = 'balance.php';</script>";
        
    } catch (Exception $e) {
        if ($pdo->inTransaction()) {
            $pdo->rollBack();
        }
        echo "<script>alert('Error: " . $e->getMessage() . "'); window.location.href = 'edit.php';</script>";
        exit();
    }
}
?>
