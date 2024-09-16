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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadDir = './logo/';
    
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    if (isset($_FILES['hslogo']) && $_FILES['hslogo']['error'] === 0) {
        $newFileName = 'logo.png';

        $uploadFile = $uploadDir . $newFileName;

        if (move_uploaded_file($_FILES['hslogo']['tmp_name'], $uploadFile)) {
            $hslogo = $uploadFile;
        } else {
            echo "Terjadi kesalahan saat mengunggah file.";
            exit;
        }
    } else {
        $hslogo = isset($_POST['hslogo']) ? $_POST['hslogo'] : '';
    }

    $data = array(
        'hsname1' => $_POST['hsname1'],
        'hsname2' => $_POST['hsname2'],
        'hsip' => $_POST['hsip'],
        'hsdomain' => $_POST['hsdomain'],
        'hscsn' => $_POST['hscsn'],
        'hslogo' => $hslogo, // Path file logo yang baru
        'hsqrmode' => $_POST['hsqrmode'],
        'hsipdomain' => $_POST['hsipdomain'],
        'logomode' => $_POST['logomode']
    );

    $json_data = json_encode($data, JSON_PRETTY_PRINT);

    if (file_put_contents('./data/config_print.json', $json_data)) {
        echo "<script>window.location.href = 'print_setting.php';</script>";
    } else {
        echo "<script>window.location.href = 'print_setting.php';</script>";
    }
}
?>
