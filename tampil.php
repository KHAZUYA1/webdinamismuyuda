<?php
include "db.php";
session_start();
$produk = $koneksi->query("SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RiverBlue Store</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <style>
    :root {
      --blue: #3a7ca5;
      --blue-dark: #2e5a81;
      --bg: #f0f4fa;
      --shadow: rgba(0, 0, 0, 0.1);
    }
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: var(--bg);
    }
    header {
      background: var(--blue);
      color: white;
      padding: 1rem 2rem;
      font-size: 1.8rem;
      font-weight: bold;
      box-shadow: 0 4px 12px var(--shadow);
    }
    .produk-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      padding: 2rem;
      max-width: 1200px;
      margin: auto;
    }
    .produk-card {
      background: white;
      border-radius: 16px;
      padding: 1rem;
      box-shadow: 0 6px 18px var(--shadow);
      transition: transform 0.2s ease;
    }
    .produk-card:hover {
      transform: translateY(-8px);
    }
    .produk-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 12px;
    }
    .produk-card h2 {
      font-size: 1.2rem;
      margin: 0.5rem 0;
    }
    .harga {
      color: var(--blue);
      font-weight: bold;
      font-size: 1rem;
    }
    .deskripsi {
      font-size: 0.95rem;
      color: #555;
      margin-bottom: 1rem;
    }
    .beli-btn {
      display: inline-block;
      padding: 0.5rem 1rem;
      background: var(--blue);
      color: white;
      border: none;
      border-radius: 8px;
      text-decoration: none;
      transition: background 0.3s ease;
      margin-right: 5px;
    }
    .beli-btn:hover {
      background: var(--blue-dark);
    }
    .hapus-btn {
      background: #ff4444;
    }
    .back-link {
      display: block;
      margin: 1rem 2rem;
      color: var(--blue);
      text-decoration: none;
    }
  </style>
</head>
<body>
<header>🛍️ KAZUYA DIGITAL MARKET(YUDA PAMUNGKAS_20240200017)</header>

  <main class="produk-container">
    <?php while ($row = $produk->fetch_assoc()) { ?>
      <div class="produk-card">
        <img src="uploads/<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama']; ?>" />
        <h2><?php echo $row['nama']; ?></h2>
        <p class="harga">Rp <?php echo number_format($row['harga']); ?></p>
        <p class="deskripsi"><?php echo $row['deskripsi']; ?></p>
        <a href="beli.php?id=<?php echo $row['id']; ?>" class="beli-btn">🛒 Beli</a>
        <?php if (isset($_SESSION['login'])): ?>
          <a href="hapus.php?id=<?php echo $row['id']; ?>" class="beli-btn hapus-btn">🗑️ Hapus</a>
        <?php endif; ?>
      </div>
    <?php } ?>
  </main>
  <a href="index.php" class="back-link">+ Tambah Produk Baru</a>
</body>
</html>
