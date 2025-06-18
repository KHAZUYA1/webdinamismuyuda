<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include "db.php";

$id = $_GET['id'];
$koneksi->query("DELETE FROM produk WHERE id=$id");

header("Location: tampil.php");
