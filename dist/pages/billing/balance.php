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
                                <li class="nav-item"> <a href="./admin.php" class="nav-link"> <i class="nav-icon bi payment-clock"></i>
                                        <p>Request</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="./balance.php" class="nav-link active"> <i class="nav-icon bi wallet"></i>
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
<h3 class="mb-0">User Balance</h3>
</div> <!--end::Row-->
</div> <!--end::Container-->
<div id="overlay" class="overlay"></div>
<div id="confirmPopup" class="confirm-popup">
    <p id="confirmMessage"></p>
    <button id="confirmYes">Yes</button>
    <button id="confirmNo" class="cancel">No</button>
</div>

<div id="NotifPopup" class="confirm-popup">
    <p id="NotifMessage"></p>
    <button id="confirmOk">OK</button>
</div>

<!-- Modal Popup -->
<div id="chatModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <center><h2>Kirim Pesan ke <span id="chatUsername"></span></h2></center>
    <textarea id="messageText" rows="4" placeholder="Masukkan pesan"></textarea>
    <br>
    <button class="modal-button" onclick="sendMessage()">Kirim</button>
  </div>
</div>
<div class="col-sm-12">
    <div class="panel panel-hovered mb20 panel-primary">
        <div class="panel-heading">
            List User Balance
        </div>
    <div class="panel-body">
<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
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

$sql_total = "SELECT COUNT(*) as total FROM client";
$result_total = $conn->query($sql_total);
$row_total = $result_total->fetch_assoc();
$total_users = $row_total['total'];
$total_pages = ceil($total_users / $limit);

$query = "SELECT id, username, password, balance, whatsapp_number, telegram_id FROM client ORDER BY username DESC LIMIT $limit OFFSET $offset";
$result = $conn->query($query);

echo '<table id="datatable" class="table table-bordered table-striped table-condensed">
        <thead>
            <tr>
                <th><center>Username</center></th>
                <th><center>Password</center></th>
                <th><center>Telegram</center></th>
                <th><center>Whatsapp</center></th>
                <th><center>Balance</center></th>
                <th><center>Action</center></th>
            </tr>
        </thead>
    <tbody>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $username = htmlspecialchars($row["username"]);
        $id = htmlspecialchars($row["id"]);
        $password = htmlspecialchars($row["password"]);
        $telegram_id = htmlspecialchars($row["telegram_id"]);
        $whatsapp_number = htmlspecialchars($row["whatsapp_number"]);
        $balance = money($row["balance"]);
        
        echo "<tr>";
        echo "<td><center>$username</center></td>";
        echo "<td><center>$password</center></td>";
        echo "<td><center>$telegram_id</center></td>";
        echo "<td><center>$whatsapp_number</center></td>";
        echo "<td><center>$balance</center></td>";
        echo "<td><center>
            <form data-confirm action='./balance.php' method='post'>
                <input type='hidden' name='id' value='$id'>
                <input type='hidden' name='username' value='$username'>
                <input type='hidden' name='action' value='delete'>
                <a href='edit.php?id=$id' class='btn btn-warning btn-sm'><i class='tabler--edit'></i></a>
                <button type='submit' class='btn btn-danger btn-sm'><i class='fa6-solid--trash-can'></i></button>
                <button type='button' class='btn btn-success btn-sm' onclick='openChatPopup(\"$username\", \"$whatsapp_number\")'><i class='whatsapp'></i></button>
            </form>
            </td>
        </tr>";
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
let actionUrl = '';

function showConfirmPopup(message, form) {
    document.getElementById('confirmMessage').innerText = message;
    document.getElementById('overlay').classList.add('show');
    document.getElementById('confirmPopup').classList.add('show');
    formToSubmit = form;
}

function closeConfirmPopup(confirmed) {
    document.getElementById('overlay').classList.remove('show');
    document.getElementById('confirmPopup').classList.remove('show');
    if (confirmed && formToSubmit) {
        formToSubmit.submit();
    }
}

document.getElementById('confirmYes').onclick = function() {
    closeConfirmPopup(true);
};

document.getElementById('confirmNo').onclick = function() {
    closeConfirmPopup(false);
};

document.querySelectorAll('form[data-confirm]').forEach(form => {
    form.onsubmit = function(event) {
        event.preventDefault();
        showConfirmPopup(
            `Apakah Anda yakin ingin menghapus user ${form.querySelector('input[name="username"]').value}?`,
            form
        );
    };
});

function showNotifPopup(message) {
    document.getElementById('NotifMessage').innerText = message;
    document.getElementById('overlay').classList.add('show');
    document.getElementById('NotifPopup').classList.add('show');
}

function closeNotifPopup() {
    document.getElementById('overlay').classList.remove('show');
    document.getElementById('NotifPopup').classList.remove('show');
}

document.getElementById('confirmOk').onclick = function() {
    closeNotifPopup();
};

function openChatPopup(username, whatsapp_number) {
    document.getElementById("chatUsername").textContent = username;
    document.getElementById("chatModal").style.display = "block";
    window.currentwhatsapp_number = whatsapp_number;
}

var modal = document.getElementById("chatModal");
var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
  modal.style.display = "none";
  document.getElementById("messageText").value = "";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    document.getElementById("messageText").value = "";
  }
}

function sendMessage() {
    var message = document.getElementById("messageText").value;
    var whatsapp_number = window.currentwhatsapp_number;

    if (message === "") {
        showNotifPopup("Pesan tidak boleh kosong! Silakan masukkan pesan.");
        modal.style.display = "none";
        return;
    }
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "message.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                showNotifPopup("Pesan berhasil dikirim!");
                modal.style.display = "none";
                document.getElementById("messageText").value = "";
            } else {
                showNotifPopup("Terjadi kesalahan saat mengirim pesan.");
            }
        }
    };

    var params = "whatsapp_number=" + encodeURIComponent(whatsapp_number) + "&message=" + encodeURIComponent(message);
    xhr.send(params);
}
</script>
<?php
require '../data/pdo_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && isset($_POST['action']) && $_POST['action'] === 'delete') {
    $id = intval($_POST['id']);
    
    $pdo = get_db_connection();
    
    if ($pdo) {
        try {
            $pdo->beginTransaction();
            
            $stmt_billing = $pdo->prepare("DELETE FROM client WHERE id = ?");
            $stmt_billing->execute([$id]);
            
            $pdo->commit();
            
            if ($stmt_billing->rowCount() > 0 || $stmt_reply->rowCount() > 0 || $stmt_check->rowCount() > 0) {
                echo "<script>window.location.href = './balance.php';</script>";
            } else {
                echo "<script>window.location.href = './balance.php?error=No records found with the provided ID';</script>";
            }
        } catch (PDOException $e) {
            $pdo->rollBack();
            echo "<script>window.location.href = './balance.php?error=Error: " . addslashes($e->getMessage()) . "';</script>";
        }
    } else {
        echo "<script>window.location.href = './balance.php?error=Failed to connect to the database.';</script>";
    }
    exit();
}
?>
</body>
</html>