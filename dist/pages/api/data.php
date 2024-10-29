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

require '../data/mysqli_db.php';

function convertBytes($bytes) {
    if ($bytes < 1024) {
        return ['value' => $bytes, 'unit' => 'bytes'];
    } elseif ($bytes < 1048576) {
        return ['value' => $bytes / 1024, 'unit' => 'KB'];
    } elseif ($bytes < 1073741824) {
        return ['value' => $bytes / 1048576, 'unit' => 'MB'];
    } else {
        return ['value' => $bytes / 1073741824, 'unit' => 'GB'];
    }
}

function roundQuota($bytes) {
    $converted = convertBytes($bytes);
    return [
        'value' => round($converted['value'], 2),
        'unit' => $converted['unit']
    ];
}

function fetchQueryResults($conn, $query) {
    $result = $conn->query($query);
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
}

$query_total_hari = "
SELECT * FROM (
    SELECT 
        tanggal,
        SUM(planCost) AS total_pendapatan
    FROM (
        SELECT 
            DATE(a.acctstarttime) AS tanggal,
            p.planCost
        FROM radacct a
        JOIN userbillinfo u ON a.username = u.username
        JOIN billing_plans p ON u.planName = p.planName
        WHERE a.acctstarttime IS NOT NULL
        GROUP BY tanggal, a.username
    ) AS daily_totals
    GROUP BY tanggal
    ORDER BY tanggal DESC
    LIMIT 10
) AS latest_totals
ORDER BY tanggal ASC;
";
$daily_revenue = fetchQueryResults($conn, $query_total_hari);

$query_total_bulan = "
SELECT * FROM (
    SELECT 
        bulan,
        SUM(planCost) AS total_pendapatan
    FROM (
        SELECT 
            DATE_FORMAT(a.acctstarttime, '%Y-%m') AS bulan,
            p.planCost
        FROM radacct a
        JOIN userbillinfo u ON a.username = u.username
        JOIN billing_plans p ON u.planName = p.planName
        WHERE a.acctstarttime IS NOT NULL
        GROUP BY bulan, a.username
    ) AS monthly_totals
    GROUP BY bulan
    ORDER BY bulan DESC
    LIMIT 10
) AS latest_totals
ORDER BY bulan ASC;
";
$monthly_revenue = fetchQueryResults($conn, $query_total_bulan);

$query_total_tahun = "
SELECT * FROM (
    SELECT 
        tahun,
        SUM(planCost) AS total_pendapatan
    FROM (
        SELECT 
            DATE_FORMAT(a.acctstarttime, '%Y') AS tahun,
            p.planCost
        FROM radacct a
        JOIN userbillinfo u ON a.username = u.username
        JOIN billing_plans p ON u.planName = p.planName
        WHERE a.acctstarttime IS NOT NULL
        GROUP BY tahun, a.username
    ) AS yearly_totals
    GROUP BY tahun
    ORDER BY tahun DESC
    LIMIT 10
) AS latest_totals
ORDER BY tahun ASC;
";
$yearly_revenue = fetchQueryResults($conn, $query_total_tahun);

$query_kuota_hari = "
    SELECT * FROM (
        SELECT 
            tanggal,
            SUM(total_kuota) AS total_kuota
        FROM (
            SELECT 
                DATE(acctstarttime) AS tanggal,
                r.username,
                SUM(acctinputoctets + acctoutputoctets) AS total_kuota
            FROM radcheck r
            JOIN radacct a ON r.username = a.username
            WHERE a.acctstarttime IS NOT NULL
            GROUP BY tanggal, r.username
        ) AS daily_totals
        GROUP BY tanggal
        ORDER BY tanggal DESC
        LIMIT 10
    ) AS latest_totals
    ORDER BY tanggal ASC;
";
$daily_quota = fetchQueryResults($conn, $query_kuota_hari);
foreach ($daily_quota as &$quota) {
    $converted = roundQuota($quota['total_kuota']);
    $quota['tanggal'] = $quota['tanggal']; 
    $quota['total_kuota'] = $converted['value'];
    $quota['unit'] = $converted['unit'];
}

$query_kuota_bulan = "
    SELECT * FROM (
        SELECT 
            bulan,
            SUM(total_kuota) AS total_kuota
        FROM (
            SELECT 
                DATE_FORMAT(acctstarttime, '%Y-%m') AS bulan,
                r.username,
                SUM(acctinputoctets + acctoutputoctets) AS total_kuota
            FROM radcheck r
            JOIN radacct a ON r.username = a.username
            WHERE a.acctstarttime IS NOT NULL
            GROUP BY bulan, r.username
        ) AS monthly_totals
        GROUP BY bulan
        ORDER BY bulan DESC
        LIMIT 10
    ) AS latest_totals
    ORDER BY bulan ASC;
";
$monthly_quota = fetchQueryResults($conn, $query_kuota_bulan);
foreach ($monthly_quota as &$quota) {
    $converted = roundQuota($quota['total_kuota']);
    $quota['bulan'] = $quota['bulan']; 
    $quota['total_kuota'] = $converted['value'];
    $quota['unit'] = $converted['unit'];
}

$query_kuota_tahun = "
    SELECT * FROM (
        SELECT 
            tahun,
            SUM(total_kuota) AS total_kuota
        FROM (
            SELECT 
                DATE_FORMAT(acctstarttime, '%Y') AS tahun,
                r.username,
                SUM(acctinputoctets + acctoutputoctets) AS total_kuota
            FROM radcheck r
            JOIN radacct a ON r.username = a.username
            WHERE a.acctstarttime IS NOT NULL
            GROUP BY tahun, r.username
        ) AS yearly_totals
        GROUP BY tahun
        ORDER BY tahun DESC
        LIMIT 10
    ) AS latest_totals
    ORDER BY tahun ASC;
";
$yearly_quota = fetchQueryResults($conn, $query_kuota_tahun);
foreach ($yearly_quota as &$quota) {
    $converted = roundQuota($quota['total_kuota']);
    $quota['tahun'] = $quota['tahun']; 
    $quota['total_kuota'] = $converted['value'];
    $quota['unit'] = $converted['unit'];
}

echo json_encode([
    'daily_revenue' => $daily_revenue,
    'monthly_revenue' => $monthly_revenue,
    'yearly_revenue' => $yearly_revenue,
    'daily_quota' => $daily_quota,
    'monthly_quota' => $monthly_quota,
    'yearly_quota' => $yearly_quota,
]);
?>
