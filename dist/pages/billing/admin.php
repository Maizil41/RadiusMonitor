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
    <title>RadiusMonitor | Print Users</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="../../../dist/css/adminlte.css"><!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
    <link rel="stylesheet" href="../../../dist/css/logo.css">
    <link rel="stylesheet" href="../../../dist/css/bootstrap.css">
    <link rel="icon" href="../../../dist/assets/img/favicon.svg" />
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
                    <li class="nav-item"> <a class="nav-link" href="../logout.php" data-lte-toggle="logout"> <i data-lte-icon="logout" class="bi material-symbols--logout"></i></a>
                </ul>                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header--> <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"><a href="../index.php" class="brand-link"><center>Radius Monitor</a></div>
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item"> <a href="../index.php" class="nav-link"> <i class="nav-icon bi tabler--device-laptop"></i>
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
                                <li class="nav-item"> <a href="../list_user.php" class="nav-link"> <i class="nav-icon bi mdi--user-group"></i>
                                        <p>All User</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../mac_binding.php" class="nav-link"> <i class="nav-icon bi eos-icons--role-binding-outlined"></i>
                                        <p>Mac Binding</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../online_user.php" class="nav-link"> <i class="nav-icon bi gis--globe-user"></i>
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
                                <li class="nav-item"> <a href="../list_plan.php" class="nav-link"> <i class="nav-icon bi mdi--scheduled-payment"></i>
                                        <p>Plans</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../list_bandwidth.php" class="nav-link"> <i class="nav-icon bi mdi--invoice-schedule"></i>
                                        <p>Bandwidth</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link active"> <i class="nav-icon bi payment"></i>
                                <p>
                                    Payment
                                    <span class="nav-badge badge text-bg-secondary me-3"></span> <i class="nav-arrow bi iconoir--nav-arrow-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="./admin.php" class="nav-link active"> <i class="nav-icon bi payment-clock"></i>
                                        <p>Request</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./balance.php" class="nav-link"> <i class="nav-icon bi wallet"></i>
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
                                <li class="nav-item"> <a href="../print_user.php" class="nav-link"> <i class="nav-icon bi mingcute--user-add-fill"></i>
                                        <p>User</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../list_batch.php" class="nav-link"> <i class="nav-icon bi material-symbols--group-add"></i>
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
                                <li class="nav-item"> <a href="../sys_info.php" class="nav-link"> <i class="nav-icon bi mdi--server-outline"></i>
                                        <p>Information</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../sys_db.php" class="nav-link"> <i class="nav-icon bi material-symbols--database"></i>
                                        <p>Database</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../client_tester.php" class="nav-link"> <i class="nav-icon bi ep--connection"></i>
                                        <p>Client Tester</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="../../../../phpmyadmin" target="_blank" class="nav-link"><i class="nav-icon bi phpmyadmin"></i>
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
<h3 class="mb-0">Topup Request</h3>
</div> <!--end::Row-->
</div> <!--end::Container-->
<!-- Overlay untuk popup -->
<div id="overlay" class="overlay"></div>
<!-- Popup konfirmasi -->
<div id="confirmPopup" class="confirm-popup">
    <div class="popup-content">
        <p id="confirmMessage">Apakah anda yakin?</p>
        <button id="confirmYes">Yes</button>
        <button id="confirmNo" class="cancel">No</button>
    </div>
</div>
<div class="col-sm-12">
    <div class="panel panel-hovered mb20 panel-primary">
        <div class="panel-heading">List Topup Request</div>
        <div class="panel-body">
            <div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
        </a>
    </div>
<div class="table-responsive">
<?php
require '../data/mysqli_db.php';

function money($number) {
    return "Rp " . number_format($number, 0, ',', '.');
}

$limit = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$sql_total = "SELECT COUNT(*) as total FROM topup WHERE status = 'pending' ";
$result_total = $conn->query($sql_total);
$row_total = $result_total->fetch_assoc();
$total_request = $row_total['total'];
$total_pages = ceil($total_request / $limit);

$query = "SELECT t.id, t.user_id, t.username, t.amount, t.status, t.date, c.whatsapp_number
FROM topup t
JOIN client c ON c.id = t.user_id
WHERE t.status = 'pending'
ORDER BY t.date
DESC LIMIT $limit OFFSET $offset";
$result = $conn->query($query);

echo '<table id="datatable" class="table table-bordered table-striped table-condensed">
        <thead>
            <tr>
                <th><center>Topup ID</center></th>
                <th><center>Username</center></th>
                <th><center>Whatsapp</center></th>
                <th><center>Amount</center></th>
                <th><center>Date</center></th>
                <th><center>Action</center></th>
            </tr>
        </thead>
    <tbody>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><center>" . htmlspecialchars($row["id"]) . "</center></td>";
        echo "<td><center>" . htmlspecialchars($row["username"]) . "</center></td>";
        echo "<td><center>" . htmlspecialchars($row["whatsapp_number"]) . "</center></td>";
        echo "<td><center>" . money($row["amount"]) . "</center></td>";
        echo "<td><center>" . htmlspecialchars($row["date"]) . "</center></td>";
        echo "<td><center>
            <button class='btn btn-success btn-sm accept-button' data-id='" . htmlspecialchars($row['id']) . "' data-username='" . htmlspecialchars($row['username']) . "' data-whatsapp='" . htmlspecialchars($row['whatsapp_number']) . "' data-amount='" . htmlspecialchars($row['amount']) . "'><i class='tick-mark'></i></button>
            <button class='btn btn-danger btn-sm reject-button' data-id='" . htmlspecialchars($row['id']) . "' data-username='" . htmlspecialchars($row['username']) . "' data-whatsapp='" . htmlspecialchars($row['whatsapp_number']) . "' data-amount='" . htmlspecialchars($row['amount']) . "'><i class='cross-mark'></i></button>
            </center></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'><center>Tidak ada data</center></td></tr>";
}
echo '</tbody></table>';

$conn->close();
?>
<?php
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
<footer class="app-footer">
    <div class="float-end d-none d-sm-inline">Themes by <a href="https://adminlte.io" target="_blank" class="text-decoration-none">AdminLTE.io</a></div>
    Radius Monitor by <a href="https://github.com/Maizil41" target="_blank" class="text-decoration-none">Maizil41</a>
</footer>
<!-- Script -->
<script src="../../../dist/js/adminlte.js"></script>
<script>
let formToSubmit = null;

function showConfirmPopup(message, action, id, username, whatsapp_number, amount) {
    document.getElementById('confirmMessage').innerText = message;
    document.getElementById('overlay').classList.add('show');
    document.getElementById('confirmPopup').classList.add('show');
    formToSubmit = { action, id, username, whatsapp_number, amount };
}

function closeConfirmPopup(confirmed) {
    document.getElementById('overlay').classList.remove('show');
    document.getElementById('confirmPopup').classList.remove('show');
    if (confirmed && formToSubmit) {
        let form = document.createElement('form');
        form.method = 'post';
        form.action = 'admin.php';
        
        let actionField = document.createElement('input');
        actionField.type = 'hidden';
        actionField.name = 'action';
        actionField.value = formToSubmit.action;
        form.appendChild(actionField);
        
        let idField = document.createElement('input');
        idField.type = 'hidden';
        idField.name = 'id';
        idField.value = formToSubmit.id;
        form.appendChild(idField);
        
        let usernameField = document.createElement('input');
        usernameField.type = 'hidden';
        usernameField.name = 'username';
        usernameField.value = formToSubmit.username;
        form.appendChild(usernameField);

        let whatsapp_numberField = document.createElement('input');
        whatsapp_numberField.type = 'hidden';
        whatsapp_numberField.name = 'whatsapp_number';
        whatsapp_numberField.value = formToSubmit.whatsapp_number;
        form.appendChild(whatsapp_numberField);
        
        let amountField = document.createElement('input');
        amountField.type = 'hidden';
        amountField.name = 'amount';
        amountField.value = formToSubmit.amount;
        form.appendChild(amountField);
        
        document.body.appendChild(form);
        form.submit();
    }
}

document.querySelectorAll('.accept-button').forEach(button => {
    button.onclick = function() {
        let id = this.getAttribute('data-id');
        let username = this.getAttribute('data-username');
        let whatsapp_number = this.getAttribute('data-whatsapp');
        let amount = this.getAttribute('data-amount');
        showConfirmPopup(`Apakah Anda yakin ingin mengonfirmasi top-up untuk ${username}?`, 'accept', id, username, whatsapp_number, amount);
    };
});

document.querySelectorAll('.reject-button').forEach(button => {
    button.onclick = function() {
        let id = this.getAttribute('data-id');
        let username = this.getAttribute('data-username');
        let whatsapp_number = this.getAttribute('data-whatsapp');
        let amount = this.getAttribute('data-amount');
        showConfirmPopup(`Apakah Anda yakin ingin menolak top-up untuk ${username}?`, 'reject', id, username, whatsapp_number, amount);
    };
});

document.getElementById('confirmYes').onclick = function() {
    closeConfirmPopup(true);
};

document.getElementById('confirmNo').onclick = function() {
    closeConfirmPopup(false);
};
</script>
<?php
require '../data/mysqli_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'], $_POST['id'], $_POST['username'], $_POST['whatsapp_number'], $_POST['amount'])) {
    
    $action = $_POST['action'];
    $id = $_POST['id'];
    $username = $_POST['username'];
    $amount = floatval($_POST['amount']);
    $whatsapp_number = $_POST['whatsapp_number'];
    
    if ($action === 'accept') {
        $query = 'UPDATE client SET balance = balance + ? WHERE username = ?';
        $stmt = $conn->prepare($query);
        if ($stmt === false) {
            die('Error prepare statement: ' . $conn->error);
        }
        $stmt->bind_param('ds', $amount, $username);
        $stmt->execute();
        $stmt->close();

        $query = 'UPDATE topup SET status = "Accept" WHERE id = ? AND amount = ? AND status = "Pending"';
        $stmt = $conn->prepare($query);
        if ($stmt === false) {
            die('Error prepare statement: ' . $conn->error);
        }
        $stmt->bind_param('sd', $id, $amount);
        $stmt->execute();
        $stmt->close();

        $message = "▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n*▬▬▬   TOPUP INVOICE  ▬▬▬*\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n*Nama : $username*\n*Nomor : $whatsapp_number*\n*Jumlah : Rp.$amount*\n*Topup ID : $id*\n*Status : SUKSES*\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬ ";
        kirimPesanWhatsApp($whatsapp_number, $message);

    } elseif ($action === 'reject') {
        $query = 'UPDATE topup SET status = "Reject" WHERE id = ? AND amount = ? AND status = "Pending"';
        $stmt = $conn->prepare($query);
        if ($stmt === false) {
            die('Error prepare statement: ' . $conn->error);
        }
        $stmt->bind_param('sd', $id, $amount);
        $stmt->execute();
        $stmt->close();

        $message = "▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n*▬▬▬   TOPUP INVOICE  ▬▬▬*\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n*Nama : $username*\n*Nomor : $whatsapp_number*\n*Jumlah : Rp.$amount*\n*Topup ID : $id*\n*Status : GAGAL*\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬ ";
        kirimPesanWhatsApp($whatsapp_number, $message);

    } else {
        echo "<script>window.location.href = './admin.php';</script>";
        exit();
    }
    
    echo "<script>window.location.href = './admin.php';</script>";
    exit();
}

$conn->close();

function kirimPesanWhatsApp($whatsapp_number, $message) {
    $url = 'http://localhost:3000/send-message';
    $data = [
        'to' => $whatsapp_number,
        'message' => $message,
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($ch);
    if ($response === false) {
        die('cURL Error: ' . curl_error($ch));
    }

    curl_close($ch);
    return $response;
}
?>
</body>
</html>