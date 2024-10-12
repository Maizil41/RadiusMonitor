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
    <title>RadiusMonitor | Add Batch</title><!--begin::Primary Meta Tags-->
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
<h3 class="mb-0">Add Batch</h3>
</div> <!--end::Row-->
</div> <!--end::Container-->
<div class="col-sm-12 col-md-12">
    <div class="panel panel-primary panel-hovered panel-stacked mb30">
        <div class="panel-heading">Add New Batch</div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" role="form" action="./add_batch.php">
                <div class="form-group">
                    <label for="planBatch" class="col-md-2 control-label">Select Plan</label>
                    <div class="col-md-6">
                        <select id="planBatch" name="planName" class="form-control" autocomplete="off">
                            <option value="">Select Plan</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="userCount" class="col-md-2 control-label">Number of Vouchers</label>
                    <div class="col-md-6">
                       <input type="number" id="userCount" class="form-control" name="userCount" value="1" min="1" max="250" autocomplete="off">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="stringType" class="col-md-2 control-label">Voucher Format</label>
                    <div class="col-md-6">
                        <select name="stringType" id="stringType" class="form-select" autocomplete="off">
                            <option value="alpha">Letters</option>
                            <option value="number" selected="selected">Number</option>
                            <option value="alphanumeric">Alphanumeric</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="prefix" class="col-md-2 control-label">Voucher Prefix</label>
                    <div class="col-md-6">
                        <input type="text" id="prefix" class="form-control" name="prefix" placeholder="RAD" value="" autocomplete="off">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="stringLength" class="col-md-2 control-label">Length Code</label>
                    <div class="col-md-6">
                        <input type="number" id="stringLength" class="form-control" name="stringLength" value="6" min="1" max="12" autocomplete="off">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="addBatch" value="top">Generate</button>
                        <a href="./list_batch.php" class="btn btn-default">Cancel</a>
                    </div>
                </div>
            </form>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {

        function generateRandomString(length) {
            const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            let result = '';
            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * chars.length);
                result += chars[randomIndex];
            }
            return result;
        }

        const randomBatchName = generateRandomString(4);
        const form = document.querySelector('form');
        const hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'batchName';
        hiddenInput.value = randomBatchName;
        form.appendChild(hiddenInput);

        fetch('../pages/api/radgroup.php')
            .then(response => response.json())
            .then(data => {
                let planDropdown = document.getElementById('planBatch');

                data.plans.forEach(item => {
                    let option = document.createElement('option');
                    option.value = item.planName;
                    option.textContent = item.planName;
                    planDropdown.appendChild(option);
                });
            })
            .catch(error => console.error('Error:', error));
    });
</script>
<?php
require './data/pdo_db.php';

function generate_random_string($stringLength = 6, $stringType = 'number', $prefix = '') {
    $characters = '';
    
    switch ($stringType) {
        case 'number':
            $characters = '0123456789';
            break;
        case 'alpha':
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            break;
        case 'alphanumeric':
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            break;
        default:
            $characters = '0123456789';
    }

    $random_string = '';
    $characters_length = strlen($characters);
    for ($i = 0; $i < $stringLength; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }

    return $prefix . $random_string;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['addBatch']) && $_POST['addBatch'] === 'top') {
        try {
            $batchName = isset($_POST['batchName']) ? trim($_POST['batchName']) : '';
            $planName = isset($_POST['planName']) ? trim($_POST['planName']) : '';
            $userCount = isset($_POST['userCount']) ? (int)$_POST['userCount'] : 0;
            $stringType = isset($_POST['stringType']) ? $_POST['stringType'] : 'number';
            $stringLength = isset($_POST['stringLength']) ? (int)$_POST['stringLength'] : 6;
            $prefix = isset($_POST['prefix']) ? $_POST['prefix'] : '';

            if (empty($batchName) || empty($planName) || $userCount <= 0) {
                throw new Exception('Batch name, plan name, and user count are required and must be valid.');
            }

            $conn = get_db_connection();
            if (!$conn) {
                throw new Exception('Database connection failed');
            }

            $conn->beginTransaction();

            $now = new DateTime();
            $timestamp = $now->format('Y-m-d H:i:s');

            $stmt = $conn->prepare("INSERT INTO batch_history (batch_name, batch_description, hotspot_id, batch_status, creationdate, creationby) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$batchName, $planName, '1', 'Pending', $timestamp, 'radmon']);
            
            $stmt = $conn->prepare("SELECT id FROM batch_history WHERE batch_name = ?");
            $stmt->execute([$batchName]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($row) {
                $batch_id = $row['id'];
            } else {
                throw new Exception("Batch not found");
            }

            for ($i = 0; $i < $userCount; $i++) {
                $number = generate_random_string($stringLength, $stringType, $prefix);
                
                $now_formatted = $now->format('Y-m-d H:i:s');

                $stmt = $conn->prepare("INSERT INTO radcheck (username, attribute, op, value) VALUES (?, ?, ?, ?)");
                $stmt->execute([$number, 'Auth-Type', ':=', 'Accept']);
                
                $stmt = $conn->prepare("INSERT INTO radusergroup (username, groupname, priority) VALUES (?, ?, ?)");
                $stmt->execute([$number, $planName, '0']);
                
                $stmt = $conn->prepare("INSERT INTO userinfo (username, firstname, lastname, email, department, company, workphone, homephone, mobilephone, address, city, state, country, zip, notes, changeuserinfo, portalloginpassword, creationdate, creationby) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([$number, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', $now_formatted, 'radmon']);
                
                $stmt = $conn->prepare("INSERT INTO userbillinfo (username, planName, contactperson, company, email, phone, address, city, state, country, zip, paymentmethod, cash, creditcardname, creditcardnumber, creditcardverification, creditcardtype, creditcardexp, notes, changeuserbillinfo, lead, coupon, ordertaker, billstatus, postalinvoice, faxinvoice, emailinvoice, batch_id, creationdate, creationby) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([$number, $planName, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', $batch_id, $now_formatted, 'radmon']);
            }

            $conn->commit();
            
            echo "<script>window.location.href = 'list_batch.php';</script>";
            
        } catch (Exception $e) {
            if (isset($conn)) {
                $conn->rollBack();
            }
            echo "<script>alert('Error: " . $e->getMessage() . "'); window.location.href = 'add_batch.php';</script>";
        }
    } else {
        echo "<script>alert('Invalid request'); window.location.href = 'add_batch.php';</script>";
    }
}
?>


</body>
</html>