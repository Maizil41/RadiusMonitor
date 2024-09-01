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
    <title>RadiusMonitor | List Batch</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="../../dist/css/adminlte.css"><!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
    <link rel="stylesheet" href="../../dist/css/logo.css">
    <link rel="stylesheet" href="../../dist/css/bootstrap.css">
    <link rel="icon" href="../../dist/assets/img/favicon.svg" />
</head> <!--end::Head--> <!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper"> <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi mdi--menu-open"></i> </a> </li>
                </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
                    <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi mdi--fullscreen"></i> <i data-lte-icon="minimize" class="bi mdi--fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
                    <li class="nav-item"> <a class="nav-link" href="./logout.php" data-lte-toggle="logout"> <i data-lte-icon="logout" class="bi material-symbols--logout"></i></a>
                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header--> <!--begin::Sidebar-->
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
                        <li class="nav-item"> <a href="#" class="nav-link active"> <i class="nav-icon bi mdi--printer"></i>
                                <p>
                                    Print
                                    <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./print_user.php" class="nav-link"> <i class="nav-icon bi mingcute--user-add-fill"></i>
                                        <p>User</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./list_batch.php" class="nav-link active"> <i class="nav-icon bi material-symbols--group-add"></i>
                                        <p>Batch</p>
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
                                <li class="nav-item"> <a href="./php_admin.php" class="nav-link"> <i class="nav-icon bi phpmyadmin"></i>
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
<h3 class="mb-0">List Batch</h3>
</div> <!--end::Row-->
</div> <!--end::Container-->
<div class="col-sm-12">
<div class="panel panel-hovered mb20 panel-primary">
    <div class="panel-heading">List All Batch</div>
        <div class="panel-body">
            <div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
                <div class="col-md-8">
                    </div>
                        <a href="./add_batch.php" class="btn btn-primary btn-block">
                    <i class="ion ion--add"></i> New Batch </a>
                </div>&nbsp;
            <div class="table-responsive">
        <?php
        include ("data/db.php");
        
        $sql = "SELECT *FROM batch_history";
        // Jumlah batch yang ditampilkan per halaman
        $limit = 7;
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($page - 1) * $limit;

        // Query untuk menghitung jumlah total batch
        $sql_total = "SELECT COUNT(*) as total FROM batch_history";
        $result_total = $conn->query($sql_total);
        $row_total = $result_total->fetch_assoc();
        $total_batches = $row_total['total'];
        $total_pages = ceil($total_batches / $limit);

        // Query untuk menampilkan batch history terbaru dengan batasan offset dan limit
        $sql = "
        WITH UserCounts AS (
            SELECT 
                batch_id,
                COUNT(username) AS total_user
            FROM 
                userbillinfo
            GROUP BY 
                batch_id
        )
        SELECT 
            bh.id AS batch_id,
            bh.batch_name,
            bh.batch_description,
            bh.creationdate,
            bh.batch_status,
            bh.creationby,
            COALESCE(uc.total_user, 0) AS total_user,
            ui.planName,
            rug.groupname
        FROM 
            batch_history bh
        LEFT JOIN 
            UserCounts uc ON bh.id = uc.batch_id
        LEFT JOIN 
            userbillinfo ui ON bh.id = ui.batch_id
        LEFT JOIN 
            radusergroup rug ON ui.username = rug.username
        GROUP BY
            bh.id, bh.batch_name, uc.total_user, ui.planName, rug.groupname
        ORDER BY 
            bh.id DESC
        LIMIT $limit OFFSET $offset;
";

        $result = $conn->query($sql);

echo '<div class="table-responsive">
        <table id="datatable" class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <th><center>Batch Name</center></th>
                    <th><center>Batch Description</center></th>
                    <th><center>Plan Name</center></th>
                    <th><center>Status</center></th>
                    <th><center>Total Voucher</center></th>
                    <th><center>Creation Date</center></th>
                    <th><center>Created By</center></th>
                    <th><center>Action</center></th>
                </tr>
            </thead>
            <tbody>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $batch_id = $row['batch_id'];
        $batch_name = htmlspecialchars($row['batch_name']);
        $batch_description = htmlspecialchars($row['batch_description']);
        $creationdate = htmlspecialchars($row['creationdate']);
        $user_count = htmlspecialchars($row['total_user']);
        $plan_name = htmlspecialchars($row['planName']);
        
        $sql_accounts = "SELECT username, planName FROM userbillinfo WHERE batch_id = ?";
        $stmt = $conn->prepare($sql_accounts);
        $stmt->bind_param("i", $batch_id);
        $stmt->execute();
        $result_accounts = $stmt->get_result();
        
        $all_numbers = [];
        while ($row_accounts = $result_accounts->fetch_assoc()) {
            $all_numbers[] = $row_accounts['username'];
            $plan_name = $row_accounts['planName'];  // Asumsikan semua username memiliki planName yang sama
        }
        
        $accounts_str = '||' . implode('||', array_map(function($num) {
            return "$num,Accept";
        }, $all_numbers));
        
        $url = "data/printTickets.php?type=batch&plan=$plan_name&accounts=Username,Password$accounts_str";

        echo "<tr>";
        echo "<td><center>$batch_name</center></td>";
        echo "<td><center>$batch_description</center></td>";
        echo "<td><center>$plan_name</center></td>";
        echo "<td><center>" . htmlspecialchars($row["batch_status"]) . "</center></td>";
        echo "<td><center>$user_count</center></td>";
        echo "<td><center>$creationdate</center></td>";
        echo "<td><center>" . htmlspecialchars($row["creationby"]) . "</center></td>";
        echo "<td><center>
                <form action='list_batch.php' method='post' onsubmit='return confirm(\"Apakah Anda yakin ingin menghapus batch $batch_name ?\");'>
                    <input type='hidden' name='id' value='$batch_id'>
                    <input type='hidden' name='action' value='delete'>
                    <button type='submit' class='btn btn-danger btn-sm'><i class='fa6-solid--trash-can'></i></button>
                    <button type='button' class='btn btn-success btn-sm' onclick=\"window.open('$url', '_blank')\"><i class='ion-android-print'></i></button>
                </form>
            </center></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'><center>Tidak ada data</center></td></tr>";
}
echo"
    </tbody>
       </table>
         </div>
            <center>
               <nav aria-label='Page navigation pagination-sm'>
                 <ul class='pagination'>
                    <li class='enabled'>
                    <a href='?page=" . max(1, $page - 1) . "' class='page-link' aria-hidden='true' aria-label='Previous' " . ($page <= 1 ? "style='pointer-events: none; opacity: 0.5;'" : "") . ">
                    <span aria-hidden='true'>Prev</span>
                    </a>
                    </li>
                    <li class='active'>
                    <span class='page-link'>$page of $total_pages</span>
                    </li>
                    <li class='enabled'>
                    <a href='?page=" . min($total_pages, $page + 1) . "' class='page-link' aria-hidden='true' aria-label='Next' " . ($page >= $total_pages ? "style='pointer-events: none; opacity: 0.5;'" : "") . ">
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

<?php
try {
    $dsn = 'mysql:host=127.0.0.1;dbname=radius';
    $username = 'radius';
    $password = 'radius';
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $conn = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die('Koneksi gagal: ' . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && isset($_POST['action']) && $_POST['action'] === 'delete') {
    $batch_id = intval($_POST['id']);

    $response = ['success' => false, 'message' => ''];

    try {
        // Mulai transaksi
        $conn->beginTransaction();

        // Hapus dari tabel batch_history
        $stmt = $conn->prepare("DELETE FROM batch_history WHERE id = ?");
        $stmt->execute([$batch_id]);

        // Dapatkan daftar username dari tabel userbillinfo yang memiliki batch_id yang sama
        $stmt = $conn->prepare("SELECT username FROM userbillinfo WHERE batch_id = ?");
        $stmt->execute([$batch_id]);
        $usernames = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);

        if ($usernames) {
            $placeholders = implode(',', array_fill(0, count($usernames), '?'));

            $stmt = $conn->prepare("DELETE FROM radcheck WHERE username IN ($placeholders)");
            $stmt->execute($usernames);

            $stmt = $conn->prepare("DELETE FROM radacct WHERE username IN ($placeholders)");
            $stmt->execute($usernames);

            $stmt = $conn->prepare("DELETE FROM userinfo WHERE username IN ($placeholders)");
            $stmt->execute($usernames);

            $stmt = $conn->prepare("DELETE FROM radusergroup WHERE username IN ($placeholders)");
            $stmt->execute($usernames);

            $stmt = $conn->prepare("DELETE FROM userbillinfo WHERE batch_id = ?");
            $stmt->execute([$batch_id]);
        }

        $conn->commit();

        echo "<script>window.location.href = 'list_batch.php';</script>";
        
    } catch (Exception $e) {

        $conn->rollBack();
        
        echo "<script>window.location.href = 'list_batch.php';</script>";
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

$rows = [];
?>
</body>
</html>