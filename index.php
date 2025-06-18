<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk Digital</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🛍️ Tambah Produk Digital</h1>
        <form action="simpan.php" method="post" enctype="multipart/form-data" class="form-card">
            <label>Nama Produk:</label>
            <input type="text" name="nama" required>

            <label>Harga:</label>
            <input type="number" name="harga" required>

            <label>Deskripsi:</label>
            <textarea name="deskripsi" required></textarea>

            <label>Gambar Produk:</label>
            <input type="file" name="gambar" accept="image/*" required>

            <button type="submit">💾 Simpan Produk</button>
        </form>
        <a href="tampil.php" class="lihat-link">📦 Lihat Semua Produk</a>
    </div>
</body>
</html>
