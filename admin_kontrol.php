<?php
session_start();
function adminKontrol() {
    if(!isset($_SESSION['admin'])) {
        header("Location: admin_login.php");
        exit();
    }
}
?> 