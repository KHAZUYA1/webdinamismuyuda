<?php
include "db.php";
$id = $_GET['id'];
$produk = $koneksi->query("SELECT * FROM produk WHERE id = $id")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Beli Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>🛒 Pembelian Produk</h1>

    <div class="form-card">
        <h2><?php echo $produk['nama']; ?></h2>
        <p><strong>Harga:</strong> Rp <?php echo number_format($produk['harga']); ?></p>
        <form action="selesai.php" method="post">
            <input type="hidden" name="produk_id" value="<?php echo $produk['id']; ?>">
            <input type="hidden" name="nama_produk" value="<?php echo $produk['nama']; ?>">
            <input type="hidden" name="harga" value="<?php echo $produk['harga']; ?>">

            <label>Nama Pembeli:</label>
            <input type="text" name="nama_pembeli" required>

            <label>Email Pembeli:</label>
            <input type="email" name="email_pembeli" required>

            <button type="submit">✅ Konfirmasi Beli</button>
        </form>
    </div>

    <a href="tampil.php" class="lihat-link">← Kembali ke Produk</a>
</div>
</body>
</html>
