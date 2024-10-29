<?php

require './data/mysqli_db.php';

$hsname1 = $conn->real_escape_string($_POST['hsname1']);
$hsname2 = $conn->real_escape_string($_POST['hsname2']);
$hsip = $conn->real_escape_string($_POST['hsip']);
$hsdomain = $conn->real_escape_string($_POST['hsdomain']);
$hscsn = $conn->real_escape_string($_POST['hscsn']);
$hsqrmode = $conn->real_escape_string($_POST['hsqrmode']);
$hsipdomain = $conn->real_escape_string($_POST['hsipdomain']);
$logomode = $conn->real_escape_string($_POST['logomode']);

if (isset($_FILES['hslogo']) && $_FILES['hslogo']['error'] == 0) {
    $target_dir = "logo/";
    $target_file = $target_dir . "logo.png";
    $imageFileType = strtolower(pathinfo($_FILES["hslogo"]["name"], PATHINFO_EXTENSION));
    
    $check = getimagesize($_FILES["hslogo"]["tmp_name"]);
    if ($check !== false) {
        move_uploaded_file($_FILES["hslogo"]["tmp_name"], $target_file);
    }
}

$sql = "UPDATE print_config SET 
    hsname1 = '$hsname1', 
    hsname2 = '$hsname2', 
    hsip = '$hsip', 
    hsdomain = '$hsdomain', 
    hscsn = '$hscsn', 
    hsqrmode = '$hsqrmode', 
    hsipdomain = '$hsipdomain', 
    logomode = '$logomode' 
    WHERE id = 1";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href = 'print_setting.php';</script>";
} else {
    echo "<script>window.location.href = 'print_setting.php';</script>";
}

$conn->close();
?>
