<?php
$nama = $_POST['nama_pembeli'];
$email = $_POST['email_pembeli'];
$produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pembelian Selesai</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="form-card">
        <h1>🎉 Terima Kasih!</h1>
        <p><strong><?php echo htmlspecialchars($nama); ?></strong>, pembelian Anda untuk produk:</p>
        <p><strong><?php echo htmlspecialchars($produk); ?></strong></p>
        <p>Telah berhasil dengan total harga: <strong>Rp <?php echo number_format($harga); ?></strong></p>
        <p>Kami akan menghubungi Anda di email: <strong><?php echo htmlspecialchars($email); ?></strong></p>
    </div>
    <a href="tampil.php" class="lihat-link">← Kembali ke Produk</a>
</div>
</body>
</html>
