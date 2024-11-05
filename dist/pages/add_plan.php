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
    <title>RadiusMonitor | Add Plans</title><!--begin::Primary Meta Tags-->
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
                                <li class="nav-item"> <a href="./list_plan.php" class="nav-link active"> <i class="nav-icon bi mdi--scheduled-payment"></i>
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
<h3 class="mb-0">Add Plan</h3>
</div> <!--end::Row-->
</div> <!--end::Container-->
<div id="overlay" class="overlay"></div>
<div id="errorPopup" class="confirm-popup">
    <center><p id="popupMessage"></p>
    <center><button onclick="closePopup()">OK</button>
</div>
<div class="col-sm-12 col-md-12">
    <div class="panel panel-primary panel-hovered panel-stacked mb30">
        <div class="panel-heading">Add New Plan</div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" role="form" action="./add_plan.php">
                <div class="form-group">
                    <label for="planName" class="col-md-2 control-label">Plan Name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="planName" name="planName" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="planCode" class="col-md-2 control-label">Plan Code</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" id="planCode" name="planCode" maxlength='6' required>
                    </div>
                
                    <label for="idleTimeout" class="col-md-2 control-label">Idle Timeout</label>
                    <div class="col-md-2">
                        <input type="number" class="form-control" id="idleTimeout" name="idleTimeout" min="0">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-2 control-label">Plan Type</label>
                    <div class="col-md-10">
                        <input type="radio" id="Unlimited" name="typebp" value="Unlimited" checked> Unlimited
                        <input type="radio" id="Limited" name="typebp" value="Limited"> Limited
                    </div>
                </div>
                
                <!-- Bagian untuk memilih Limit Type -->
                <div style="display:none;" id="Type">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Limit Type</label>
                        <div class="col-md-10">
                            <input type="radio" id="Time_Limit" name="limit_type" value="Time_Limit" checked> Time Limit
                            <input type="radio" id="Data_Limit" name="limit_type" value="Data_Limit"> Data Limit
                            <input type="radio" id="Both_Limit" name="limit_type" value="Both_Limit"> Both Limit
                        </div>
                    </div>
                </div>
                
                <!-- Bagian untuk Time Limit -->
                <div style="display:none;" id="TimeLimit">
                    <div class="form-group">
                        <label for="profileTimeBankInput" class="col-md-2 control-label">Plan Duration</label>
                        <div class="col-md-4">
                            <input type="number" class="form-control" id="profileTimeBankInput" name="profileTimeBankInput" value="0" min="0">
                        </div>
                        <div class="col-md-2">
                            <select class="form-select" id="profileTimeBankSelect" name="profileTimeBankSelect">
                            <option value="M">Menit</option>
                            <option value="H">Jam</option>
                            <option value="D">Hari</option>
                        </select>
                        </div>
                    </div>
                </div>
                
                <!-- Bagian untuk Data Limit -->
                <div style="display:none;" id="DataLimit">
                    <div class="form-group">
                        <label for="data_limit" class="col-md-2 control-label">Data Limit</label>
                        <div class="col-md-4">
                            <input type="number" class="form-control" id="data_limit" name="data_limit" value="0" min="0">
                        </div>
                        <div class="col-md-2">
                            <select class="form-select" id="data_unit" name="data_unit">
                                <option value="MB">MB</option>
                                <option value="GB">GB</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="bw_id" class="col-md-2 control-label">Bandwidth</label>
                    <div class="col-md-6">
                        <select id="bw_id" name="bw_id" class="form-select">
                            <option value="">Select Bandwidth...</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="planCost" class="col-md-2 control-label">Plan Cost</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">Rp.</span>
                            <input type="number" id="planCost" class="form-control" name="planCost" value="0" min="0" required>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="shared" class="col-md-2 control-label">Shared Users
                    </label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="shared" name="shared" value="1">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="planTimeBankInput" class="col-md-2 control-label">Plan Validity</label>
                    <div class="col-md-4">
                        <input type="number" class="form-control" id="planTimeBankInput" name="planTimeBankInput" min="0">
                    </div>
                    <div class="col-md-2">
                        <select class="form-select" id="planTimeBankSelect" name="planTimeBankSelect">
                        <option value="M">Menit</option>
                        <option value="H">Jam</option>
                        <option value="D">Hari</option>
                    </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input type="hidden" id="planTimeBank" name="planTimeBank">
                        <input type="hidden" id="profileTimeBank" name="profileTimeBank">
                        <input type="hidden" id="dataLimit" name="dataLimit">
                        <input type="hidden" id="rate_down" name="rate_down">
                        <input type="hidden" id="rate_up" name="rate_up">
                        <button class="btn btn-primary" type="submit" name="addbillplans" value="top">Submit</button>
                        <a href="./list_plan.php" class="btn btn-default">Cancel</a>
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
        function showPopup(message) {
            document.getElementById('popupMessage').innerText = message;
            document.getElementById('overlay').classList.add('show');
            document.getElementById('errorPopup').classList.add('show');
        }

        function closePopup() {
            document.getElementById('overlay').classList.remove('show');
            document.getElementById('errorPopup').classList.remove('show');
            window.location.href = 'add_plan.php';
        }

        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('error')) {
                const errorMessage = urlParams.get('error');
                showPopup(errorMessage);
            }
        }
    </script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    fetch('api/bandwidth.php')
        .then(response => response.json())
        .then(data => {
            let bwDropdown = document.getElementById('bw_id'); 

            if (Array.isArray(data.data)) {
                data.data.forEach(item => {
                    let option = document.createElement('option');
                    option.value = item.bw_id;
                    option.textContent = item.bw_name;
                    bwDropdown.appendChild(option);
                });

                bwDropdown.addEventListener('change', function() {
                    let selectedBw = bwDropdown.value;

                    let selectedItem = data.data.find(item => item.bw_id === selectedBw);

                    if (selectedItem) {
                        document.getElementById('rate_down').value = selectedItem.rate_down || '';
                        document.getElementById('rate_up').value = selectedItem.rate_up || '';
                        document.getElementById('bw_name').value = selectedItem.bw_name || '';
                    }
                });
            } else {
                console.error('Format tidak sesuai.');
            }
        })
        .catch(error => console.error('Error:', error));
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    function handlePlanTypeChange() {
        var planType = document.querySelector('input[name="typebp"]:checked');
        if (!planType) return;

        var planTypeValue = planType.value;
        var limitTypeSection = document.getElementById('Type');
        var timeLimitSection = document.getElementById('TimeLimit');
        var dataLimitSection = document.getElementById('DataLimit');

        if (planTypeValue === 'Limited') {
            limitTypeSection.style.display = 'block';

            var limitType = document.querySelector('input[name="limit_type"]:checked');
            if (!limitType) return;

            var limitTypeValue = limitType.value;

            if (limitTypeValue === 'Time_Limit') {
                timeLimitSection.style.display = 'block';
                dataLimitSection.style.display = 'none';
            } else if (limitTypeValue === 'Data_Limit') {
                timeLimitSection.style.display = 'none';
                dataLimitSection.style.display = 'block';
            } else if (limitTypeValue === 'Both_Limit') {
                timeLimitSection.style.display = 'block';
                dataLimitSection.style.display = 'block';
            }
        } else {
            limitTypeSection.style.display = 'none';
            timeLimitSection.style.display = 'none';
            dataLimitSection.style.display = 'none';
        }
    }

    document.querySelectorAll('input[name="typebp"]').forEach(function(radio) {
        radio.addEventListener('change', handlePlanTypeChange);
    });

    document.querySelectorAll('input[name="limit_type"]').forEach(function(radio) {
        radio.addEventListener('change', handlePlanTypeChange);
    });

    handlePlanTypeChange();

    document.getElementById('planTimeBankInput').addEventListener('input', function() {
        calculatePlanBank();
    });

    document.getElementById('planTimeBankSelect').addEventListener('change', function() {
        calculatePlanBank();
    });
    
    document.getElementById('profileTimeBankInput').addEventListener('input', function() {
        calculateProfileBank();
    });

    document.getElementById('profileTimeBankSelect').addEventListener('change', function() {
        calculateProfileBank();
    });

    document.getElementById('data_limit').addEventListener('input', function() {
        calculateDataLimit();
    });

    document.getElementById('data_unit').addEventListener('change', function() {
        calculateDataLimit();
    });

    function calculatePlanBank() {
        let timeValue = parseFloat(document.getElementById('planTimeBankInput').value);
        let timeUnit = document.getElementById('planTimeBankSelect').value;
        let convertedValue;

        if (isNaN(timeValue)) {
            console.log('Invalid input for planTimeBankInput:', timeValue);
            return;
        }

        if (timeUnit === "M") {
            convertedValue = timeValue * 60;
        } else if (timeUnit === "H") {
            convertedValue = timeValue * 3600;
        } else if (timeUnit === "D") {
            convertedValue = timeValue * 86400;
        } else {
            console.log('Invalid time unit for planTimeBankSelect:', timeUnit);
            return;
        }

        document.getElementById('planTimeBank').value = convertedValue;
        console.log('planTimeBank value set to:', convertedValue);
    }

    function calculateProfileBank() {
        let timeValue = parseFloat(document.getElementById('profileTimeBankInput').value);
        let timeUnit = document.getElementById('profileTimeBankSelect').value;
        let convertedValue;

        if (isNaN(timeValue)) {
            console.log('Invalid input for profileTimeBankInput:', timeValue);
            return;
        }

        if (timeUnit === "M") {
            convertedValue = timeValue * 60;
        } else if (timeUnit === "H") {
            convertedValue = timeValue * 3600;
        } else if (timeUnit === "D") {
            convertedValue = timeValue * 86400;
        } else {
            console.log('Invalid time unit for profileTimeBankSelect:', timeUnit);
            return;
        }

        document.getElementById('profileTimeBank').value = convertedValue;
        console.log('profileTimeBank value set to:', convertedValue);
    }

    function calculateDataLimit() {
        let dataValue = parseFloat(document.getElementById('data_limit').value);
        let dataUnit = document.getElementById('data_unit').value;
        let convertedValue;

        if (isNaN(dataValue)) {
            console.log('Invalid input for data_limit:', dataValue);
            return;
        }

        if (dataUnit === "MB") {
            convertedValue = dataValue * 1048576;
        } else if (dataUnit === "GB") {
            convertedValue = dataValue * 1073741824;
        } else {
            console.log('Invalid data unit for data_unit:', dataUnit);
            return;
        }

        document.getElementById('dataLimit').value = convertedValue;
        console.log('dataLimit value set to:', convertedValue);
    }

});
</script>
<?php
require './data/pdo_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addbillplans']) && $_POST['addbillplans'] === 'top') {
    try {
        $pdo = get_db_connection();
        if (!$pdo) {
            throw new Exception('Database connection failed');
        }
        
        $pdo->beginTransaction();

        $planName = isset($_POST['planName']) ? trim($_POST['planName']) : '';
        $planCode = isset($_POST['planCode']) ? trim($_POST['planCode']) : '';
        $planCost = isset($_POST['planCost']) ? trim($_POST['planCost']) : '';
        $planTimeBank = isset($_POST['planTimeBank']) ? trim($_POST['planTimeBank']) : '';
        $timeout = isset($_POST['idleTimeout']) ? trim($_POST['idleTimeout']) : '';

        $durasi = isset($_POST['profileTimeBank']) ? trim($_POST['profileTimeBank']) : '';
        $shared = isset($_POST['shared']) ? trim($_POST['shared']) : '';
        $down = isset($_POST['rate_down']) ? trim($_POST['rate_down']) : '';
        $up = isset($_POST['rate_up']) ? trim($_POST['rate_up']) : '';
        $bw = isset($_POST['dataLimit']) ? trim($_POST['dataLimit']) : '';
        $bw_name = isset($_POST['bw_name']) ? trim($_POST['bw_name']) : '';
        $bw_id = isset($_POST['bw_id']) ? trim($_POST['bw_id']) : '';
        
        if (empty($planName)) {
            throw new Exception('Plan name cannot be empty.');
        }

        $sql = "
            SELECT COUNT(*) FROM (
                SELECT 1 FROM billing_plans WHERE planName = ?
                UNION ALL
                SELECT 1 FROM radgroupcheck WHERE groupname = ?
                UNION ALL
                SELECT 1 FROM radgroupreply WHERE groupname = ?
            ) AS combined";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$planName, $planName, $planName]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            echo "<script>window.location.href = 'add_plan.php?error=Nama plan sudah terdaftar di database.';</script>";
            exit();
        }

        $planType = 'Prepaid';
        $planTimeType = 'Accumulative';
        $planTimeRefillCost = '';
        $planBandwidthUp = '';
        $planBandwidthDown = '';
        $planTrafficTotal = '';
        $planTrafficUp = '';
        $planTrafficDown = '';
        $planTrafficRefillCost = '';
        $planRecurring = 'No';
        $planRecurringPeriod = 'Never';
        $planRecurringBillingSchedule = 'Fixed';
        $planSetupCost = '';
        $planTax = '';
        $planCurrency = '';
        $planGroup = '';
        $planActive = 'yes';
        $creationby = 'radmon';
        $updateby = 'radmon';
        $now = new DateTime();
        $timestamp = $now->format('Y-m-d H:i:s');

        $stmt = $pdo->prepare("INSERT INTO billing_plans (
            id, planName, planId, planType, planTimeBank, planTimeType, planTimeRefillCost, 
            planBandwidthUp, planBandwidthDown, planTrafficTotal, planTrafficUp, planTrafficDown, 
            planTrafficRefillCost, planRecurring, planRecurringPeriod, planRecurringBillingSchedule, 
            planCost, planSetupCost, planTax, planCurrency, planGroup, planActive, creationdate, 
            creationby, updatedate, updateby, planCode
        ) VALUES (
            NULL, :planName, :planId, :planType, :planTimeBank, :planTimeType, :planTimeRefillCost, 
            :planBandwidthUp, :planBandwidthDown, :planTrafficTotal, :planTrafficUp, :planTrafficDown, 
            :planTrafficRefillCost, :planRecurring, :planRecurringPeriod, :planRecurringBillingSchedule, 
            :planCost, :planSetupCost, :planTax, :planCurrency, :planGroup, :planActive, :creationdate, 
            :creationby, :updatedate, :updateby, :planCode
        )");

        $stmt->bindParam(':planName', $planName);
        $stmt->bindParam(':planId', $planName);
        $stmt->bindParam(':planType', $planType);
        $stmt->bindParam(':planTimeBank', $planTimeBank);
        $stmt->bindParam(':planTimeType', $planTimeType);
        $stmt->bindParam(':planTimeRefillCost', $planTimeRefillCost);
        $stmt->bindParam(':planBandwidthUp', $planBandwidthUp);
        $stmt->bindParam(':planBandwidthDown', $planBandwidthDown);
        $stmt->bindParam(':planTrafficTotal', $planTrafficTotal);
        $stmt->bindParam(':planTrafficUp', $planTrafficUp);
        $stmt->bindParam(':planTrafficDown', $planTrafficDown);
        $stmt->bindParam(':planTrafficRefillCost', $planTrafficRefillCost);
        $stmt->bindParam(':planRecurring', $planRecurring);
        $stmt->bindParam(':planRecurringPeriod', $planRecurringPeriod);
        $stmt->bindParam(':planRecurringBillingSchedule', $planRecurringBillingSchedule);
        $stmt->bindParam(':planCost', $planCost);
        $stmt->bindParam(':planSetupCost', $planSetupCost);
        $stmt->bindParam(':planTax', $planTax);
        $stmt->bindParam(':planCurrency', $planCurrency);
        $stmt->bindParam(':planGroup', $planGroup);
        $stmt->bindParam(':planActive', $planActive);
        $stmt->bindParam(':creationdate', $timestamp);
        $stmt->bindParam(':creationby', $creationby);
        $stmt->bindParam(':updatedate', $timestamp);
        $stmt->bindParam(':updateby', $updateby);
        $stmt->bindParam(':planCode', $planCode);

        $stmt->execute();

        $query_check = "INSERT INTO radgroupcheck (groupname, attribute, op, value) VALUES ";
        $params_check = [];
        $values_check = [];
        
        $values_check[] = "(?, 'Auth-Type', ':=', 'Accept')";
        $params_check[] = $planName;
        
        if (!empty($planTimeBank)) {
            $stmt = $pdo->prepare("INSERT INTO radgroupcheck (groupname, attribute, op, value) VALUES (:planName, 'Access-Period', ':=', :planTimeBank)");
            $stmt->bindParam(':planName', $planName);
            $stmt->bindParam(':planTimeBank', $planTimeBank);
            $stmt->execute();
        }

        if (!empty($durasi)) {
            $values_check[] = "(?, 'Max-All-Session', ':=', ?)";
            $params_check[] = $planName;
            $params_check[] = $durasi;
        }

        if (!empty($shared)) {
            $values_check[] = "(?, 'Simultaneous-Use', ':=', ?)";
            $params_check[] = $planName;
            $params_check[] = $shared;
        }

        if (!empty($values_check)) {
            $query_check .= implode(", ", $values_check);
            $stmt = $pdo->prepare($query_check);
            $stmt->execute($params_check);
        }
        
        if (!empty($bw_id)) {
            $query_bw = "INSERT INTO radgroupbw (groupname, bw_id) VALUES (?, ?)";
            $stmt = $pdo->prepare($query_bw);
            $stmt->execute([$planName, $bw_id]);
        }

        $query_reply = "INSERT INTO radgroupreply (groupname, attribute, op, value) VALUES ";
        $params_reply = [];
        $values_reply = [];

        if (!empty($down)) {
            $values_reply[] = "(?, 'WISPr-Bandwidth-Max-Down', ':=', ?)";
            $params_reply[] = $planName;
            $params_reply[] = $down;
        }

        if (!empty($up)) {
            $values_reply[] = "(?, 'WISPr-Bandwidth-Max-Up', ':=', ?)";
            $params_reply[] = $planName;
            $params_reply[] = $up;
        }

        if (!empty($bw)) {
            $values_reply[] = "(?, 'ChilliSpot-Max-Total-Octets', ':=', ?)";
            $params_reply[] = $planName;
            $params_reply[] = $bw;
        }
        
        if (!empty($timeout)) {
            $values_reply[] = "(?, 'Idle-Timeout', ':=', ?)";
            $params_reply[] = $planName;
            $params_reply[] = $timeout;
        }

        $values_reply[] = "(?, 'Acct-Interim-Interval', ':=', '60')";
        $params_reply[] = $planName;

        if (!empty($values_reply)) {
            $query_reply .= implode(", ", $values_reply);
            $stmt = $pdo->prepare($query_reply);
            $stmt->execute($params_reply);
        }

        $pdo->commit();

        echo "<script>window.location.href = 'list_plan.php';</script>";
    } catch (Exception $e) {
        $pdo->rollBack();
        echo "<script>window.location.href = 'list_plan.php?error=Error: " . addslashes($e->getMessage()) . "';</script>";
        exit();
    }
}
?>
</body>
</html>