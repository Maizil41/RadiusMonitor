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
    <title>RadiusMonitor | Online Users</title><!--begin::Primary Meta Tags-->
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
            <div class="sidebar-brand"><a href="./index.php" class="brand-link"><img src="../../dist/assets/img/mutiara.svg" alt="Logo" class="brand-image opacity-75 shadow"><span class="brand-text fw-light">Radius Monitor</span></a></div>
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
                                <li class="nav-item"> <a href="./list_user.php" class="nav-link"> <i class="nav-icon bi mdi--user-group"></i>
                                        <p>All User</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./mac_binding.php" class="nav-link"> <i class="nav-icon bi eos-icons--role-binding-outlined"></i>
                                        <p>Mac Binding</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./online_user.php" class="nav-link active"> <i class="nav-icon bi gis--globe-user"></i>
                                        <p>Online User</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi ic--baseline-add-card"></i>
                                <p>
                                    Billing
                                    <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
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
                                    <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
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
<h3 class="mb-0">Online User</h3>
</div> <!--end::Row-->
</div> <!--end::Container-->
<div id="overlay" class="overlay"></div>
<div id="confirmPopup" class="confirm-popup">
    <p id="confirmMessage"></p>
    <button id="confirmYes">Yes</button>
    <button id="confirmNo" class="cancel">No</button>
</div>
<?php
require './data/mysqli_db.php';

if (isset($_GET['id'])) {
    $user = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT acctsessionid, framedipaddress FROM radacct WHERE username = '$user' AND acctstoptime IS NULL";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $acctid = $row['acctsessionid'];
            $framedipaddress = $row['framedipaddress'];

            $command = 'echo \'User-Name="' . $user . '",Acct-Session-Id="' . $acctid . '",Framed-IP-Address="' . $framedipaddress . '"\' | radclient -c \'1\' -n \'3\' -r \'3\' -t \'3\' -x \'127.0.0.1:3799\' \'disconnect\' \'testing123\' 2>&1';
            $output = shell_exec($command);
        }
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

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

$total_query = "SELECT COUNT(DISTINCT username) AS total_users
FROM radacct
WHERE acctstoptime IS NULL";

$total_result = $conn->query($total_query);
$total_row = $total_result->fetch_assoc();
$total_users = $total_row['total_users'];
$total_pages = ceil($total_users / $limit);

$query = "WITH TotalSesi AS (
    SELECT username, acctsessiontime, acctinputoctets, acctoutputoctets
    FROM radacct WHERE acctstoptime IS NULL
    GROUP BY username
)
SELECT ra.username, 
       ra.callingstationid, 
       ra.framedipaddress, 
       ts.acctsessiontime, 
       ts.acctinputoctets, 
       ts.acctoutputoctets, 
       ubi.planName, 
       rgc.value AS Max_All_Session
FROM radacct ra
JOIN TotalSesi ts ON ra.username = ts.username
LEFT JOIN userbillinfo ubi ON ra.username = ubi.username
LEFT JOIN radgroupcheck rgc ON ubi.planName = rgc.groupname AND rgc.attribute = 'Max-All-Session'
WHERE ra.acctstoptime IS NULL
GROUP BY ra.username, ra.callingstationid, ra.framedipaddress, ts.acctsessiontime, ts.acctinputoctets, ts.acctoutputoctets, ubi.planName, rgc.value;
";

$result = $conn->query($query);

echo "
<div class='col-sm-12'>
<div class='panel panel-hovered mb20 panel-primary'>
    <div class='panel-heading'>List Online User</div>
        <div class='panel-body'>
            <div class='md-whiteframe-z1 mb20 text-center' style='padding: 15px'>
            <div class='table-responsive'>
        <table class='table table-bordered table-condensed table-striped table_mobile'>
    <thead>
<tr>
    <th><center>Username</th>
    <th><center>Mac Address</th>
    <th><center>IP Address</th>
    <th><center>Profile</th>
    <th><center>Remaining</th>
    <th><center>Upload</th>
    <th><center>Download</th>
    <th><center>Total</th>
    <th><center>Actions</th>
</tr>
</thead>
<tbody> ";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $username = htmlspecialchars($row['username']);
        $usermac = htmlspecialchars($row['callingstationid']);	
        $ip = htmlspecialchars($row['framedipaddress']);
        $plan = htmlspecialchars($row['planName']);
        
        if (is_null($row['Max_All_Session'])) {
            $totalTime = "Unlimited";
        } else {
            $totalTime = time2str(($row['Max_All_Session']) - ($row['acctsessiontime']));
        }

        $upload = htmlspecialchars(toxbyte($row['acctinputoctets']));
        $download = htmlspecialchars(toxbyte($row['acctoutputoctets']));
        $traffic = htmlspecialchars(toxbyte($row['acctinputoctets'] + $row['acctoutputoctets']));

        echo"       
        <td><center>$username</td>
        <td><center>$usermac</td>
        <td><center>$ip</td>
        <td><center>$plan</td>
        <td><center>$totalTime</td>
        <td><center>$upload</td>
        <td><center>$download</td>
        <td><center>$traffic</td>
        <td>
            <center>
                <button class='btn btn-danger btn-xs' onclick=\"deleteUser('$username')\">
                    <span class='line-md--alert-loop glyphicon-alert' aria-hidden='true'></span>&nbsp;Disconnect
                </button>
            </center>
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
                    <a href='?page=" . max(1, $page - 1) . " class='page-link' aria-hidden='true' aria-label='Previous' " . ($page <= 1 ? "style='pointer-events: none; opacity: 0.5;'" : "") . ">
                    <span aria-hidden='true'>Prev</span>
                    </a>
                    </li>
                    <li class='active'>
                    <span class='page-link'>$page of $total_pages</span>
                    </li>
                    <li class='enabled'>
                    <a href='?page=" . min($total_pages, $page + 1) . " class='page-link' aria-hidden='true' aria-label='Next' " . ($page >= $total_pages ? "style='pointer-events: none; opacity: 0.5;'" : "") . ">
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
<script>
let deleteUserUsername = '';

function showConfirmPopup(message, username) {
    document.getElementById('confirmMessage').innerText = message;
    document.getElementById('overlay').classList.add('show');
    document.getElementById('confirmPopup').classList.add('show');
    deleteUserUsername = username;
}

function closeConfirmPopup(confirmed) {
    document.getElementById('overlay').classList.remove('show');
    document.getElementById('confirmPopup').classList.remove('show');
    if (confirmed) {
        if (deleteUserUsername) {
            window.location.href = `online_user.php?id=${encodeURIComponent(deleteUserUsername)}`;
        }
    }
}

document.getElementById('confirmYes').onclick = function() {
    closeConfirmPopup(true);
};

document.getElementById('confirmNo').onclick = function() {
    closeConfirmPopup(false);
};

function deleteUser(username) {
    showConfirmPopup(`Apakah Anda yakin ingin memutuskan pengguna ${username}?`, username);
}
</script>
</body>
</html>