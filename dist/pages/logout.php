<?php
session_name('radmon_session');
session_start();
session_destroy();
header("Location: ./login.php");
exit();
?>
