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
    <title>RadiusMonitor | Add Bandwidth</title><!--begin::Primary Meta Tags-->
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
                        <li class="nav-item"> <a href="#" class="nav-link active"> <i class="nav-icon bi ic--baseline-add-card"></i>
                                <p>
                                    Billing
                                    <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./list_plan.php" class="nav-link"> <i class="nav-icon bi mdi--scheduled-payment"></i>
                                        <p>Plans</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./list_bandwidth.php" class="nav-link active"> <i class="nav-icon bi mdi--invoice-schedule"></i>
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
<h3 class="mb-0">Edit Bandwidth</h3>
</div> <!--end::Row-->
</div> <!--end::Container-->
<?php
require './data/mysqli_db.php';

if (!isset($_GET['id'])) {
    echo "<script>alert('Bandwidth ID is missing!'); window.location.href = 'list_bandwidth.php';</script>";
    exit();
}

$bw_id = $_GET['id'];

$stmt = $conn->prepare("SELECT name, rate_down, rate_up FROM bandwidth WHERE id = ?");
$stmt->bind_param("i", $bw_id);
$stmt->execute();
$result = $stmt->get_result();
$bw = $result->fetch_assoc();

if (!$bw) {
    echo "<script>alert('Bandwidth not found!'); window.location.href = 'list_bandwidth.php';</script>";
    exit();
}

$rate_down_bps = $bw['rate_down'];
$rate_up_bps = $bw['rate_up'];

if ($rate_down_bps >= 1048576) {
    $rate_down = round($rate_down_bps / 1048576, 2);
    $rate_down_unit = "Mbps";
} else {
    $rate_down = round($rate_down_bps / 1000, 2);
    $rate_down_unit = "Kbps";
}

if ($rate_up_bps >= 1048576) {
    $rate_up = round($rate_up_bps / 1048576, 2);
    $rate_up_unit = "Mbps";
} else {
    $rate_up = round($rate_up_bps / 1000, 2);
    $rate_up_unit = "Kbps";
}
?>
<div id="overlay" class="overlay"></div>
<div id="errorPopup" class="confirm-popup">
    <center><p id="popupMessage"></p>
    <center><button onclick="closePopup()">OK</button>
</div>
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-primary panel-hovered panel-stacked mb30">
    <div class="panel-heading">Edit Bandwidth</div>
<div class="panel-body">

<form class="form-horizontal" method="post" role="form" action="./update_bw.php">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($bw_id); ?>">
    <div class="form-group">
        <label for="name" class="col-md-2 control-label">Bandwidth Name</label>
        <div class="col-md-6">
            <input type="text" class="form-control" id="name" name="name" autocomplete="name" value="<?php echo htmlspecialchars($bw['name']); ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label for="rate_down" class="col-md-2 control-label">Rate Download</label>
        <div class="col-md-4">
            <input type="number" class="form-control" id="rate_down" name="rate_down" value="<?php echo htmlspecialchars($rate_down); ?>" required>
        </div>
        <div class="col-md-2">
            <select class="form-select" id="rate_down_unit" name="rate_down_unit">
                <option value="Kbps" <?php echo $rate_down_unit == 'Kbps' ? 'selected' : ''; ?>>Kbps</option>
                <option value="Mbps" <?php echo $rate_down_unit == 'Mbps' ? 'selected' : ''; ?>>Mbps</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="rate_up" class="col-md-2 control-label">Rate Upload</label>
        <div class="col-md-4">
            <input type="number" class="form-control" id="rate_up" name="rate_up" value="<?php echo htmlspecialchars($rate_up); ?>" required>
        </div>
        <div class="col-md-2">
            <select class="form-select" id="rate_up_unit" name="rate_up_unit">
                <option value="Kbps" <?php echo $rate_up_unit == 'Kbps' ? 'selected' : ''; ?>>Kbps</option>
                <option value="Mbps" <?php echo $rate_up_unit == 'Mbps' ? 'selected' : ''; ?>>Mbps</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button class="btn btn-primary" type="submit" name="updatebw" value="top">Update</button>
            <a href="./list_bandwidth.php" class="btn btn-default">Cancel</a>
        </div>
    </div>
</form>
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