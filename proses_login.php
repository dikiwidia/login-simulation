<?php
require_once("koneksi.php");
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

// di koneksikan ke database
// akan mencari username dan passwordnya.
// apabila ada ditemukan username dan passwordnya maka langsung dinyatakan OK
// setelah itu masuk ke dashboard / index.php

$count = $db->prepare("SELECT COUNT(*) FROM users WHERE email = ? AND password = ?");
$count->execute([$email, $password]);

if ($count->fetchColumn() > 0) {
    $_SESSION['status_login'] = true;
    header("location:index.php");
} else {
    header("location:login.php");
}
?>