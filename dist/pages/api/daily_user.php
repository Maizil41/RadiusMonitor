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
?>
<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require '../data/pdo_db.php';

$pdo = get_db_connection();

$query = "
    SELECT 
        DATE(a.acctstarttime) AS tanggal,
        COUNT(DISTINCT a.username) AS total_user
    FROM radacct a
    WHERE a.acctstarttime IS NOT NULL
    AND DATE(a.acctstarttime) IN (
        SELECT tanggal
        FROM (
            SELECT DISTINCT DATE(acctstarttime) AS tanggal
            FROM radacct
            WHERE acctstarttime IS NOT NULL
            ORDER BY tanggal DESC
            LIMIT 10
        ) AS recent_dates
    )
    GROUP BY DATE(a.acctstarttime)
    ORDER BY tanggal ASC;
";

$stmt = $pdo->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$dates = array_map(function($row) { return $row['tanggal']; }, $results);
$userCounts = array_map(function($row) { return (int)$row['total_user']; }, $results);

echo json_encode([
    'labels' => $dates,
    'data' => $userCounts
]);
?>
