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
    <title>RadiusMonitor | System Information</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="../../dist/css/adminlte.css"><!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
    <link rel="stylesheet" href="../../dist/css/logo.css">
    <link rel="stylesheet" href="../../dist/css/bootstrap.css">
    <link rel="icon" href="../../dist/assets/img/favicon.svg" />
    <script>function deleteUser(username){if(confirm("Apakah Anda yakin ingin menghapus pengguna "+username+" ?")){window.location.href="list_user.php?id="+username}}</script>
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
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi fa6-solid--user-large"></i>
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
                        <li class="nav-item"> <a href="#" class="nav-link active"> <i class="nav-icon bi mdi--gear"></i>
                                <p>
                                    System
                                    <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./sys_info.php" class="nav-link active"> <i class="nav-icon bi mdi--server-outline"></i>
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
<h3 class="mb-0">System Info</h3>
</div> <!--end::Row-->
</div> <!--end::Container-->
<?php
function execute_command($command) {
    $output = shell_exec($command);
    return trim($output);
}

function extractUptime($uptimeString) {
    error_log("Uptime raw output: $uptimeString");

    $parts = explode('load average:', $uptimeString);
    if (count($parts) > 1) {
        $uptimePart = trim($parts[0]);
        
        if (preg_match('/^\d{2}:\d{2}:\d{2} up (.+)$/', $uptimePart, $matches)) {
            $uptime = $matches[1];
            $uptime = str_replace(',', '', $uptime);
            return $uptime;
        }
    }
    return 'Uptime format tidak dikenali';
}

function getUptime() {
    $uptime = shell_exec('uptime');
    $uptime = trim($uptime);
    return extractUptime($uptime);
}

$uptime = getUptime();

function check_service_status($service_name) {
    $status = execute_command("pgrep $service_name");
    return !empty($status) ? 'Running' : 'Not Running';
}

function get_ip_info() {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $json = curl_exec($ch);
    curl_close($ch);

    if ($json === FALSE) {
        return [];
    }
    $data = json_decode($json, true);
    return $data;
}

$ip_info = get_ip_info();

$ip = isset($ip_info['query']) ? $ip_info['query'] : 'N/A';
$city = isset($ip_info['city']) ? $ip_info['city'] : 'N/A';
$region = isset($ip_info['regionName']) ? $ip_info['regionName'] : 'N/A';
$country = isset($ip_info['country']) ? $ip_info['country'] : 'N/A';
$org_info = isset($ip_info['as']) ? $ip_info['as'] : 'N/A';

$org_parts = explode(" ", $org_info, 2);
$as_number = $org_parts[0];
$organization = isset($org_parts[1]) ? $org_parts[1] : 'N/A'; 

$hostname = execute_command("ubus call system board | jsonfilter -e '@.hostname'");
$firmware_version = execute_command("ubus call system board | jsonfilter -e '@.release.description'");
$kernel = execute_command("uname -r");
$model = execute_command("ubus call system board | jsonfilter -e '@.model'");
$local_time = execute_command("date");
$php_version = phpversion();

$radiusd_status = check_service_status('radiusd');
$mysql_status = check_service_status('mysqld');
$openclash_status = check_service_status('openclash');
$coova_chilli_status = check_service_status('chilli');

?>

<div class='container'>
    <div class='row'>
        <!-- Kolom Kiri -->
        <div class='col-sm-6 d-flex flex-column'>
            <div class='panel panel-hovered mb20 panel-primary flex-fill'>
                <div class='panel-heading'>System Information</div>
                <div class='panel-body'>
                    <div class='md-whiteframe-z1 mb20 text-center' style='padding: 15px'>
                        <div class='table-responsive'>
                            <table class='table table-bordered table-condensed table-striped table_mobile'>
                                <thead>
                                    <tr>
                                        <th><center><span class='info-label'>Hostname:</span> <span class='status-running'><?php echo $hostname; ?></span></th>
                                    <tr>
                                        <th><center><span class='info-label'>Uptime:</span> <span class='status-running'><?php echo htmlspecialchars($uptime); ?></span></th>
                                    <tr>
                                        <th><center><span class='info-label'>Firmware Version:</span> <span class='status-running'><?php echo $firmware_version; ?></span></th>
                                    <tr>
                                        <th><center><span class='info-label'>Kernel Version:</span> <span class='status-running'><?php echo $kernel; ?></span></th>
                                    <tr>
                                        <th><center><span class='info-label'>Model:</span> <span class='status-running'><?php echo $model; ?></span></th>
                                    <tr>
                                        <th><center><span class='info-label'>Local Time:</span> <span class='status-running'><?php echo $local_time; ?></span></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan -->
        <div class='col-sm-6 d-flex flex-column'>
            <div class='panel panel-hovered mb20 panel-primary flex-fill'>
                <div class='panel-heading'>Service Status</div>
                <div class='panel-body'>
                    <div class='md-whiteframe-z1 mb20 text-center' style='padding: 15px'>
                        <div class='table-responsive'>
                            <table class='table table-bordered table-condensed table-striped table_mobile'>
                                <thead>
                                    <tr>
                                        <th><center><span class='info-label'>Radiusd:</span> <span class='info-value <?php echo $radiusd_status == 'Running' ? 'status-running' : 'status-not-running'; ?>'><?php echo $radiusd_status; ?></span></th>
                                    <tr>
                                        <th><center><span class='info-label'>MySQL:</span> <span class='info-value <?php echo $mysql_status == 'Running' ? 'status-running' : 'status-not-running'; ?>'><?php echo $mysql_status; ?></span></th>
                                    <tr>
                                        <th><center><span class='info-label'>Coova-Chilli:</span> <span class='info-value <?php echo $coova_chilli_status == 'Running' ? 'status-running' : 'status-not-running'; ?>'><?php echo $coova_chilli_status; ?></span></th>
                                    <tr>
                                        <th><center><span class='info-label'>OpenClash:</span> <span class='info-value <?php echo $openclash_status == 'Running' ? 'status-running' : 'status-not-running'; ?>'><?php echo $openclash_status; ?></span></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Panjang di Bawah -->
    <div class='row'>
        <div class='col-sm-12'>
            <div class='panel panel-hovered mb20 panel-primary'>
                <div class='panel-heading'>Network Information</div>
                <div class='panel-body'>
                    <div class='md-whiteframe-z1 mb20 text-center' style='padding: 15px'>
                        <div class='table-responsive'>
                            <table class='table table-bordered table-condensed table-striped table_mobile'>
                                <thead>
                                <tbody>
                                    <tr>
                                        <th><center><span class='info-label'>IP Address:</span> <span class='status-running''><?php echo $ip; ?></span></th>
                                    <tr>
                                        <th><center><span class='info-label'>City:</span> <span class='status-running''><?php echo $city; ?></span></th>
                                    <tr>
                                        <th><center><span class='info-label'>Region:</span> <span class='status-running''><?php echo $region; ?></span></th>
                                    <tr>
                                        <th><center><span class='info-label'>Country:</span> <span class='status-running''><?php echo $country; ?></span></th>
                                    <tr>
                                        <th><center><span class='info-label'>As:</span> <span class='status-running''><?php echo $as_number; ?></span></th>
                                    <tr>
                                        <th><center><span class='info-label'>Org:</span> <span class='status-running''><?php echo $organization; ?></span></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>
<footer class="app-footer"> <!--begin::To the end-->
<div class="float-end d-none d-sm-inline">Themes by <a href="https://adminlte.io" target="_blank" class="text-decoration-none">AdminLTE.io</a></div>
Radius Monitor by 
<a href="https://github.com/Maizil41" target="_blank" class="text-decoration-none">Maizil41</a>
</strong>
<!--end::Copyright-->
</footer> <!--end::Footer-->
</div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
<script src="../../dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->

</body>
</html>