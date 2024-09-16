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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    
    $username = mysqli_real_escape_string($conn, $username);

    $sql = "UPDATE radacct 
            SET acctsessiontime = 0, acctinputoctets = 0, acctoutputoctets = 0, acctterminatecause = 'Admin-Reset' 
            WHERE username = '$username'";

    if (mysqli_query($conn, $sql)) {
        header('Location: list_user.php?reset=success');
        exit();
    } else {
        header('Location: list_user.php?reset=failure');
        exit();
    }
}
?>
