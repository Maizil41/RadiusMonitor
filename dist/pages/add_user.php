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
    <title>RadiusMonitor | Add Users</title><!--begin::Primary Meta Tags-->
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
                        <li class="nav-item"> <a href="#" class="nav-link active"> <i class="nav-icon bi mdi--printer"></i>
                                <p>
                                    Print
                                    <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./print_user.php" class="nav-link active"> <i class="nav-icon bi mingcute--user-add-fill"></i>
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
<h3 class="mb-0">Add User</h3>
</div> <!--end::Row-->
</div> <!--end::Container-->
<div id="overlay" class="overlay"></div>
<div id="errorPopup" class="confirm-popup">
    <center><p id="popupMessage"></p>
    <center><button onclick="closePopup()">OK</button>
</div>
<div class="col-sm-12 col-md-12">
    <div class="panel panel-primary panel-hovered panel-stacked mb30">
        <div class="panel-heading">Add New User</div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" role="form" action="./add_user.php">
                <div class="form-group">
                    <label for="planDropup" class="col-md-2 control-label">Select Plan</label>
                    <div class="col-md-6">
                        <select id="planDropup" name="planName" class="form-select" autocomplete="off">
                            <option value="">Select Plan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="usernameTop" class="col-md-2 control-label">Voucher Code</label>
                    <div class="col-md-6">
                        <input type="text" id="usernameTop" class="form-control" name="username" placeholder="Voucher" maxlength="12" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="clientName" class="col-md-2 control-label">Client Name</label>
                    <div class="col-md-6">
                        <input type="text" id="clientName" class="form-control" name="clientName" placeholder="Name (Opsional)" maxlength="12">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Whatsapp_number" class="col-md-2 control-label">Client Phone</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">62</span>
                            <input type="number" id="Whatsapp_number" class="form-control" name="Whatsapp_number">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="addUser" value="top">Add</button>
                        <a href="./print_user.php" class="btn btn-default">Cancel</a>
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
        fetch('../pages/api/radgroup.php')
            .then(response => response.json())
            .then(data => {
                let planDropdown = document.getElementById('planDropup');

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
    <script>
        function showPopup(message) {
            document.getElementById('popupMessage').innerText = message;
            document.getElementById('overlay').classList.add('show');
            document.getElementById('errorPopup').classList.add('show');
        }

        function closePopup() {
            document.getElementById('overlay').classList.remove('show');
            document.getElementById('errorPopup').classList.remove('show');
            window.location.href = 'add_user.php';
        }

        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('error')) {
                const errorMessage = urlParams.get('error');
                showPopup(errorMessage);
            }
        }
    </script>
<?php
require './data/mysqli_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST['username'];
    $plan_name = isset($_POST['planName']) ? trim($_POST['planName']) : '';
    $client_name = isset($_POST['clientName']) ? trim($_POST['clientName']) : '';
    $client_phone = isset($_POST['Whatsapp_number']) && !empty(trim($_POST['Whatsapp_number'])) ? '62' . trim($_POST['Whatsapp_number']) : '';
    $now = date('Y-m-d H:i:s');

    if (!empty($code)) {
        $check_stmt = $conn->prepare("SELECT COUNT(*) FROM radcheck WHERE username = ?");
        $check_stmt->bind_param("s", $code);
        $check_stmt->execute();
        $check_stmt->bind_result($count);
        $check_stmt->fetch();
        $check_stmt->close();

        if ($count > 0) {
            echo "<script>window.location.href = 'add_user.php?error=Kode voucher sudah terdaftar di database.';</script>";
        } else {
            try {
                
                $conn->begin_transaction();

                if (isset($_POST['addUser']) && $_POST['addUser'] == 'top') {
                    $stmt = $conn->prepare("INSERT INTO radcheck (username, attribute, op, value) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("ssss", $code, $attribute, $op, $value);
                    $attribute = "Auth-Type";
                    $op = ":=";
                    $value = "Accept";
                    $stmt->execute();
                    $stmt->close();

                    $stmt = $conn->prepare("INSERT INTO radusergroup (username, groupname, priority) VALUES (?, ?, ?)");
                    $stmt->bind_param("sss", $code, $plan_name, $priority);
                    $priority = "0";
                    $stmt->execute();
                    $stmt->close();

                    $stmt = $conn->prepare("INSERT INTO userinfo (username, firstname, lastname, email, department, company, workphone, homephone, mobilephone, address, city, state, country, zip, notes, changeuserinfo, portalloginpassword, creationdate, creationby) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("sssssssssssssssssss", $code, $client_name, $lastname, $email, $department, $company, $workphone, $homephone, $client_phone, $address, $city, $state, $country, $zip, $notes, $changeuserinfo, $portalloginpassword, $now, $creationby);
                    $lastname = '';
                    $email = '';
                    $department = '';
                    $company = '';
                    $workphone = '';
                    $homephone = '';
                    $address = '';
                    $city = '';
                    $state = '';
                    $country = '';
                    $zip = '';
                    $notes = '';
                    $changeuserinfo = '0';
                    $portalloginpassword = '';
                    $creationby = 'radmon';
                    $stmt->execute();
                    $stmt->close();

                    $stmt = $conn->prepare("INSERT INTO userbillinfo (username, planName, contactperson, company, email, phone, address, city, state, country, zip, paymentmethod, cash, creditcardname, creditcardnumber, creditcardverification, creditcardtype, creditcardexp, notes, changeuserbillinfo, lead, coupon, ordertaker, billstatus, nextinvoicedue, billdue, postalinvoice, faxinvoice, emailinvoice, creationdate, creationby) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("sssssssssssssssssssssssssssssss", $code, $plan_name, $client_name, $company, $email, $client_phone, $address, $city, $state, $country, $zip, $paymentmethod, $cash, $creditcardname, $creditcardnumber, $creditcardverification, $creditcardtype, $creditcardexp, $notes, $changeuserbillinfo, $lead, $coupon, $ordertaker, $billstatus, $nextinvoicedue, $billdue, $postalinvoice, $faxinvoice, $emailinvoice, $now, $creationby);
                    $company = '';
                    $email = '';
                    $address = '';
                    $city = '';
                    $state = '';
                    $country = '';
                    $zip = '';
                    $paymentmethod = '';
                    $cash = '';
                    $creditcardname = '';
                    $creditcardnumber = '';
                    $creditcardverification = '';
                    $creditcardtype = '';
                    $creditcardexp = '';
                    $notes = '';
                    $changeuserbillinfo = '0';
                    $lead = '';
                    $coupon = '';
                    $ordertaker = '';
                    $billstatus = '';
                    $nextinvoicedue = '0';
                    $billdue = '0';
                    $postalinvoice = '';
                    $faxinvoice = '';
                    $emailinvoice = '';
                    $creationby = 'radmon';
                    $stmt->execute();
                    $stmt->close();

                    $conn->commit();

                    echo "<script>window.location.href = 'print_user.php';</script>";
                }

            } catch (Exception $e) {
                $conn->rollback();
                echo "<script>window.location.href = 'add_user.php?error=Error: " . addslashes($e->getMessage()) . "';</script>";
            }
        }
    } else {
        echo "<script>window.location.href = 'add_user.php?error=Semua data harus diisi.';</script>";
    }

    $conn->close();
}
?>
</body>
</html>