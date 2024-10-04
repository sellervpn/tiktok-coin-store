<?php require_once 'config.php'; ?> 

<!DOCTYPE html>
<html>
<head>
  <title>TikTok Coins</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Beli Koin</h1>
    <p>Dapatkan koin untuk mengirim Gift ke host TikTok LIVE di sini!</p>
  </header>

  <main>
    <section class="coin-package-list">
      <h2>Pilih Paket Koin</h2>
      <?php
        foreach ($packages as $i => $package) { // Gunakan $packages dari config.php
          $packageId = "package-" . $package['coins'];
          echo "<article class='coin-package' id='$packageId'>";
          echo "<img src='coin.webp' alt='TikTok Coin' class='coin-logo'>";
          echo "<div class='coin-amount'>".$package['coins']." Koin</div>";
          echo "<div class='coin-price'>".$package['price']."</div>";
          echo "<button class='buy-button' data-package-id='$packageId' 
                        data-coins='".$package['coins']."' 
                        data-price='".$package['price']."'>Beli Sekarang</button>";
          echo "</article>";
        }
      ?>
      <article class="coin-package custom">
        <input type="number" id="custom-coins" placeholder="Masukkan jumlah koin">
        <button class="buy-button" data-package-id="custom">Beli Sekarang</button>
      </article>
    </section>

    <aside class="payment-methods">
      <h2>Metode Pembayaran</h2>
      <div class="method">
        <img src="gopay.png" alt="GoPay">
      </div>
      <div class="method">
        <img src="dana.png" alt="Dana">
      </div>
      <div class="method">
        <img src="shopeepay.png" alt="ShopeePay">
      </div>
      <div class="method">
        <img src="visa.png" alt="Visa">
      </div>
      <div class="method">
        <img src="mastercard.png" alt="Mastercard">
      </div>
      <div class="method">
        <img src="qris.png" alt="QRIS">
      </div>
    </aside>
  </main>

  <footer>
    <p>&copy; 2024 TikTok</p>
    <p>
      <a href="#">Kebijakan Privasi</a> | 
      <a href="#">Syarat dan Ketentuan</a>
    </p>
  </footer>

  <script src="script.js"></script>
</body>
</html>