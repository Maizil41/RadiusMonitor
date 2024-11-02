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
require './auth.php';
?>
<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>RadiusMonitor | List Users</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="../../dist/css/adminlte.css"><!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
    <link rel="stylesheet" href="../../dist/css/logo.css">
    <link rel="stylesheet" href="../../dist/css/bootstrap.css">
    <link rel="icon" href="../../dist/assets/img/favicon.svg" />
</head> <!--end::Head--> <!--begin::Body-->

        <?php include ("layout/header.php"); ?>
        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"><a href="./index.php" class="brand-link"><center>Radius Monitor</a></div>
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item"> <a href="./index.php" class="nav-link"> <i class="nav-icon bi tabler--device-laptop"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        <li class="nav-item"> <a href="#" class="nav-link active"> <i class="nav-icon bi fa6-solid--user-large"></i>
                                <p>
                                    Users
                                    <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./list_user.php" class="nav-link active"> <i class="nav-icon bi mdi--user-group"></i>
                                        <p>All User</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./mac_binding.php" class="nav-link"> <i class="nav-icon bi eos-icons--role-binding-outlined"></i>
                                        <p>Mac Binding</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./online_user.php" class="nav-link"> <i class="nav-icon bi gis--globe-user"></i>
                                        <p>Online User</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi ic--baseline-add-card"></i>
                                <p>
                                    Billing
                                    <span class="nav-badge badge text-bg-secondary me-3"></span> <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./list_plan.php" class="nav-link"> <i class="nav-icon bi mdi--scheduled-payment"></i>
                                        <p>Plans</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./list_bandwidth.php" class="nav-link"> <i class="nav-icon bi mdi--invoice-schedule"></i>
                                        <p>Bandwidth</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi payment"></i>
                                <p>
                                    Payment
                                    <span class="nav-badge badge text-bg-secondary me-3"></span> <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./billing/admin.php" class="nav-link"> <i class="nav-icon bi payment-clock"></i>
                                        <p>Request</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./billing/balance.php" class="nav-link"> <i class="nav-icon bi wallet"></i>
                                        <p>Balance</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi mdi--printer"></i>
                                <p>
                                    Print
                                    <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./print_user.php" class="nav-link"> <i class="nav-icon bi mingcute--user-add-fill"></i>
                                        <p>User</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./list_batch.php" class="nav-link"> <i class="nav-icon bi material-symbols--group-add"></i>
                                        <p>Batch</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./print_setting.php" class="nav-link"> <i class="nav-icon bi print-settings"></i>
                                        <p>Setting</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi mdi--gear"></i>
                                <p>
                                    System
                                    <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./sys_info.php" class="nav-link"> <i class="nav-icon bi mdi--server-outline"></i>
                                        <p>Information</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./sys_db.php" class="nav-link"> <i class="nav-icon bi material-symbols--database"></i>
                                        <p>Database</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./client_tester.php" class="nav-link"> <i class="nav-icon bi ep--connection"></i>
                                        <p>Client Tester</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../../../phpmyadmin" target="_blank" class="nav-link"><i class="nav-icon bi phpmyadmin"></i>
                                        <p>Php Admin</p>
                                    </a> </li>
                                </ul>
                            </li>
                        </ul> <!--end::Sidebar Menu-->
                    </nav>
                </div> <!--end::Sidebar Wrapper-->
            </aside> <!--end::Sidebar--> 
        <main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
<section class="content">
<div class="container-fluid"> <!--begin::Row-->
<h3 class="mb-0">List User</h3>
</div> <!--end::Row-->
</div> <!--end::Container-->
<div id="overlay" class="overlay"></div>
<div id="confirmPopup" class="confirm-popup">
    <p id="confirmMessage"></p>
    <button id="confirmYes">Yes</button>
    <button id="confirmNo" class="cancel">No</button>
</div>
<div id="popupMessage" class="confirm-popup">
    <p id="popupText"></p>
    <button id="popupClose">OK</button>
</div>
<?php
require './data/mysqli_db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sqlDeleteRadacct = "DELETE FROM radacct WHERE username = '$id'";
    $sqlDeleteRadcheck = "DELETE FROM radcheck WHERE username = '$id'";
    $sqlDeleteUserBillInfo = "DELETE FROM userbillinfo WHERE username = '$id'";
    $sqlDeleteUserUserinfo = "DELETE FROM userinfo WHERE username = '$id'";
    $sqlDeleteUserRadusergroup = "DELETE FROM radusergroup WHERE username = '$id'";
    
    if (mysqli_query($conn, $sqlDeleteRadacct) && mysqli_query($conn, $sqlDeleteRadcheck) && mysqli_query($conn, $sqlDeleteUserBillInfo) && mysqli_query($conn, $sqlDeleteUserUserinfo) && mysqli_query($conn, $sqlDeleteUserRadusergroup)) {

    } else {

    }
}

function money($number) {
    return "Rp " . number_format($number, 0, ',', '.');
}

function toxbyte($size) {
    if ($size > 1073741824) {
        return round($size / 1073741824, 2) . " GB";
    } elseif ($size > 1048576) {
        return round($size / 1048576, 2) . " MB";
    } elseif ($size > 1024) {
        return round($size / 1024, 2) . " KB";
    } else {
        return $size . " B";
    }
}

function time2str($time) {
    $str = "";
    $time = floor($time);
    if (!$time) return "0 seconds";
    $d = floor($time / 86400);
    if ($d) {
        $str .= "$d days, ";
        $time %= 86400;
    }
    $h = floor($time / 3600);
    if ($h) {
        $str .= "$h hrs, ";
        $time %= 3600;
    }
    $m = floor($time / 60);
    if ($m) {
        $str .= "$m min, ";
        $time %= 60;
    }
    if ($time) $str .= "$time sec, ";
    return rtrim($str, ', ');
}

$statusFilter = isset($_GET['status']) ? $_GET['status'] : '';

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

$total_query = "SELECT COUNT(DISTINCT r.username) as total_users 
    FROM radcheck r 
    LEFT JOIN (
        SELECT username, acctstoptime, acctterminatecause, callingstationid, framedipaddress, acctsessiontime, acctinputoctets, acctoutputoctets 
        FROM radacct 
        WHERE (username, acctstarttime) IN (
            SELECT username, MAX(acctstarttime) 
            FROM radacct 
            GROUP BY username
        )
    ) latest_acct ON r.username = latest_acct.username 
    LEFT JOIN userbillinfo u ON r.username = u.username 
    LEFT JOIN billing_plans p ON u.planName = p.planName 
    LEFT JOIN radusergroup ugr ON r.username = ugr.username 
    WHERE ('$statusFilter' = '' OR 
        CASE 
            WHEN latest_acct.username IS NULL THEN 'OFFLINE' 
            WHEN latest_acct.acctterminatecause = 'Session-Timeout' THEN 'EXPIRED' 
            WHEN latest_acct.acctstoptime IS NOT NULL THEN 'OFFLINE' 
            WHEN latest_acct.acctstoptime IS NULL THEN 'ONLINE' 
            ELSE 'OFFLINE' 
        END = '$statusFilter'
    )";
$total_result = $conn->query($total_query);
$total_row = $total_result->fetch_assoc();
$total_users = $total_row['total_users'];
$total_pages = ceil($total_users / $limit);

$query = "
WITH LatestAcct AS (
    SELECT username,
           MAX(acctstarttime) AS latest_acctstarttime
    FROM radacct
    GROUP BY username
),
StatusData AS (
    SELECT a.username,
           CASE
               WHEN a.acctterminatecause = 'Session-Timeout' THEN 'EXPIRED'
               WHEN a.acctstoptime IS NOT NULL THEN 'OFFLINE'
               WHEN a.acctstoptime IS NULL AND a.acctstarttime = la.latest_acctstarttime THEN 'ONLINE'
               ELSE 'OFFLINE'
           END AS status
    FROM radacct a
    JOIN LatestAcct la ON a.username = la.username AND a.acctstarttime = la.latest_acctstarttime
),
AcctSummary AS (
    SELECT username,
           SUM(acctinputoctets) AS total_input_octets,
           SUM(acctoutputoctets) AS total_output_octets,
           SUM(acctsessiontime) AS total_session_time
    FROM radacct
    GROUP BY username
),
AggregatedData AS (
    SELECT r.username,
           u.contactperson,
           u.planName,
           p.planCost,
           ugr.groupname,
           MAX(a.framedipaddress) AS ip_address,
           MAX(a.callingstationid) AS mac_address,
           COALESCE(acs.total_input_octets, 0) AS total_input_octets,
           COALESCE(acs.total_output_octets, 0) AS total_output_octets,
           COALESCE(acs.total_session_time, 0) AS total_session_time
    FROM radcheck r
    LEFT JOIN userbillinfo u ON r.username = u.username
    LEFT JOIN billing_plans p ON u.planName = p.planName
    LEFT JOIN radusergroup ugr ON r.username = ugr.username
    LEFT JOIN AcctSummary acs ON r.username = acs.username
    LEFT JOIN radacct a ON r.username = a.username
    GROUP BY r.username, u.contactperson, u.planName, p.planCost, ugr.groupname
),
FinalData AS (
    SELECT ad.username,
           ad.contactperson,
           ad.planName,
           ad.planCost,
           ad.groupname,
           ad.ip_address,
           ad.mac_address,
           ad.total_input_octets,
           ad.total_output_octets,
           ad.total_session_time,
           COALESCE(sd.status, 'OFFLINE') AS status
    FROM AggregatedData ad
    LEFT JOIN StatusData sd ON ad.username = sd.username
)
SELECT *
FROM FinalData
WHERE ('$statusFilter' = '' OR status = '$statusFilter')
LIMIT $limit OFFSET $offset;
";
$result = $conn->query($query);

echo "
<div class='col-sm-12'>
<div class='panel panel-hovered mb20 panel-primary'>
    <div class='panel-heading'>List All User</div>
        <div class='panel-body'>
            <div class='md-whiteframe-z1 mb20 text-center' style='padding: 15px'>
                <a href='./add_user.php' class='btn btn-primary btn-block'>
                <i class='ion ion--add'></i> New User </a>
                <br/>
                <div class='col-md-8'>
                    </div>
                        <select id='userstatus' name='userstatus' class='form-select'>
                        <option value=''>All User</option>
                        <option value='ONLINE'" . ($statusFilter == 'ONLINE' ? ' selected' : '') . "><center>Online</option>
                        <option value='OFFLINE'" . ($statusFilter == 'OFFLINE' ? ' selected' : '') . "><center>Offline</option>
                        <option value='EXPIRED'" . ($statusFilter == 'EXPIRED' ? ' selected' : '') . "><center>Expired</option>
                    </select>
                </div>&nbsp;
            <div class='table-responsive'>
        <table class='table table-bordered table-condensed table-striped table_mobile'>
    <thead>
<tr>
    <th><center>Name</th>
    <th><center>Voucher</th>
    <th><center>Mac Address</th>
    <th><center>IP Address</th>
    <th><center>Cost</th>
    <th><center>Profile</th>
    <th><center>Usage</th>
    <th><center>Traffic</th>
    <th><center>Status</th>
    <th><center>Actions</th>
</tr>
</thead>
<tbody> ";

function isMacAddress($username) {
    return preg_match('/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/', $username);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $username = htmlspecialchars($row['username']);

        if (isMacAddress($username)) {
            continue;
        }

        $name = htmlspecialchars($row['contactperson']);
        $usermac = htmlspecialchars($row['mac_address']);
        $ip = htmlspecialchars($row['ip_address']);
        $cost = htmlspecialchars(money($row['planCost']));
        $plan = htmlspecialchars($row['planName']);
        $group = htmlspecialchars($row['groupname']);
        $totalTime = htmlspecialchars(time2str($row['total_session_time']));
        $traffic = htmlspecialchars(toxbyte($row['total_input_octets'] + $row['total_output_octets']));
        $status = htmlspecialchars($row['status']);

        $statusClass = '';
        switch (true) {
            case strpos($status, 'ONLINE') !== false:
                $statusClass = 'badge text-bg-success';
                break;
            case strpos($status, 'EXPIRED') !== false:
                $statusClass = 'badge text-bg-danger';
                break;
            case strpos($status, 'OFFLINE') !== false:
                $statusClass = 'badge text-bg-secondary';
                break;
        }

        echo"       
            <td><center>$name</td>
            <td><center>$username</td>
            <td><center>$usermac</td>
            <td><center>$ip</td>
            <td><center>$cost</td>
            <td><center>$plan</td>
            <td><center>$totalTime</td>
            <td><center>$traffic</td>
            <td><center><span class='status $statusClass'>$status</span></td>
            <td><center>
                <button class='btn btn-warning btn-sm' onclick=\"resetUserPopup('$username')\"><i class='recycle'></i></button>
                <button class='btn btn-danger btn-sm' onclick=\"deleteUser('$username')\"><i class='fa6-solid--trash-can'></i></button>
            </td>
        </tr>";
    }
} else {
    echo "
        <tr><td colspan='10'><center>Tidak ada data</center></td></tr>";
}
echo"
    </tbody>
       </table>
         </div>
            <center>
               <nav aria-label='Page navigation pagination-sm'>
                 <ul class='pagination'>
                    <li class='enabled'>
                    <a href='?page=" . max(1, $page - 1) . "&status=$statusFilter' class='page-link' aria-hidden='true' aria-label='Previous' " . ($page <= 1 ? "style='pointer-events: none; opacity: 0.5;'" : "") . ">
                    <span aria-hidden='true'>Prev</span>
                    </a>
                    </li>
                    <li class='active'>
                    <span class='page-link'>$page of $total_pages</span>
                    </li>
                    <li class='enabled'>
                    <a href='?page=" . min($total_pages, $page + 1) . "&status=$statusFilter' class='page-link' aria-hidden='true' aria-label='Next' " . ($page >= $total_pages ? "style='pointer-events: none; opacity: 0.5;'" : "") . ">
                  <span aria-hidden='true'>Next</span>
                </a>
              </li>
            </ul>
          </nav>
        <div></div>
    </section>
</main>
"; ?>
<footer class="app-footer"> <!--begin::To the end-->
<div class="float-end d-none d-sm-inline">Themes by <a href="https://adminlte.io" target="_blank" class="text-decoration-none">AdminLTE.io</a></div>
Radius Monitor by 
<a href="https://github.com/Maizil41" target="_blank" class="text-decoration-none">Maizil41</a>
</strong>
<!--end::Copyright-->
</footer> <!--end::Footer-->
</div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
<script src="../../dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
<script>document.getElementById('userstatus').addEventListener('change',function(){const status=this.value;const currentPage=new URLSearchParams(window.location.search).get('page')||1;window.location.href=`?page=${currentPage}&status=${status}`});</script>
<script>
let deleteUserUsername = '';
let resetUsername = '';

function showConfirmPopup(message, username, actionType) {
    document.getElementById('confirmMessage').innerText = message;
    document.getElementById('overlay').classList.add('show');
    document.getElementById('confirmPopup').classList.add('show');

    deleteUserUsername = '';
    resetUsername = '';

    if (actionType === 'delete') {
        deleteUserUsername = username;
    } else if (actionType === 'reset') {
        resetUsername = username;
    }
}

function closeConfirmPopup(confirmed, actionType) {
    document.getElementById('overlay').classList.remove('show');
    document.getElementById('confirmPopup').classList.remove('show');

    if (confirmed) {
        if (actionType === 'delete' && deleteUserUsername) {
            window.location.href = `list_user.php?id=${encodeURIComponent(deleteUserUsername)}`;
        } else if (actionType === 'reset' && resetUsername) {
            resetuser(resetUsername);
        }
    }
}

document.getElementById('confirmYes').onclick = function() {
    closeConfirmPopup(true, deleteUserUsername ? 'delete' : 'reset');
};

document.getElementById('confirmNo').onclick = function() {
    closeConfirmPopup(false, deleteUserUsername ? 'delete' : 'reset');
};

function deleteUser(username) {
    showConfirmPopup(`Apakah Anda yakin ingin menghapus pengguna ${username}?`, username, 'delete');
}

function resetUserPopup(username) {
    showConfirmPopup(`Apakah Anda yakin ingin mereset user ${username}?`, username, 'reset');
}

function showPopupMessage(message) {
    document.getElementById('popupText').innerText = message;
    document.getElementById('popupMessage').classList.add('show');
}

function closePopupMessage() {
    document.getElementById('popupMessage').classList.remove('show');
}

document.getElementById('popupClose').onclick = function() {
    closePopupMessage();
};

function resetuser(username) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "reset_user.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            window.location.href = `list_user.php?reset=success`;
        }
    };

    xhr.send("username=" + encodeURIComponent(username));
}
</script>
</body>
</html>