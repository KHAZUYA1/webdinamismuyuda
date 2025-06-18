<?php
$koneksi = new mysqli("localhost", "root", "", "db_produk");

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

// Proses upload gambar
$gambar = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];
$upload_path = "uploads/" . $gambar;

// Buat folder uploads jika belum ada
if (!file_exists("uploads")) {
    mkdir("uploads", 0777, true);
}

move_uploaded_file($tmp_name, $upload_path);

$sql = "INSERT INTO produk (nama, harga, deskripsi, gambar) VALUES ('$nama', '$harga', '$deskripsi', '$gambar')";
$koneksi->query($sql);

echo "Produk berhasil disimpan. <a href='tampil.php'>Lihat Produk</a>";
?>
