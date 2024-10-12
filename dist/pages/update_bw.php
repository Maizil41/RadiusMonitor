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

require './data/mysqli_db.php';
    
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updatebw']) && $_POST['updatebw'] === 'top') {

    $bw_id = isset($_POST['id']) ? trim($_POST['id']) : '';
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    
    $rate_down = isset($_POST['rate_down']) ? floatval(str_replace(',', '.', $_POST['rate_down'])) : 0;
    $rate_down_unit = isset($_POST['rate_down_unit']) ? $_POST['rate_down_unit'] : 'Kbps';
    $rate_up = isset($_POST['rate_up']) ? floatval(str_replace(',', '.', $_POST['rate_up'])) : 0;
    $rate_up_unit = isset($_POST['rate_up_unit']) ? $_POST['rate_up_unit'] : 'Kbps';

    if ($rate_down_unit === 'Kbps') {
        $rate_down_bps = $rate_down * 1000;
    } elseif ($rate_down_unit === 'Mbps') {
        $rate_down_bps = $rate_down * 1048576;
    } else {
        $rate_down_bps = $rate_down;
    }

    if ($rate_up_unit === 'Kbps') {
        $rate_up_bps = $rate_up * 1000;
    } elseif ($rate_up_unit === 'Mbps') {
        $rate_up_bps = $rate_up * 1048576;
    } else {
        $rate_up_bps = $rate_up;
    }

    $update_date = date('Y-m-d H:i:s');

    $sql = "SELECT COUNT(*) as count FROM bandwidth WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("s", $bw_id);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        if ($count > 0) {
            $update = "UPDATE bandwidth SET name = ?, rate_down = ?, rate_up = ?, creation_date = ? WHERE id = ?";
            $stmt = $conn->prepare($update);
            if ($stmt) {
                $stmt->bind_param("siiss", $name, $rate_down_bps, $rate_up_bps, $update_date, $bw_id);
                if ($stmt->execute()) {
                    echo "<script>window.location.href = 'list_bandwidth.php';</script>";
                } else {
                    echo "Error: " . $conn->error;
                }
                $stmt->close();
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "<script>window.location.href = 'edit_bandwidth.php?error=ID tidak ditemukan di database.';</script>";
        }
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
    exit();
}
?>