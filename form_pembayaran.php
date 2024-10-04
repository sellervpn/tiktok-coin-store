<!DOCTYPE html>
<html>
<head>
  <title>Form Pembayaran</title>
  <link rel="stylesheet" href="form_style.css"> 
</head>
<body>
  <div class="container">
    <h2>Form Pembayaran</h2>
    <form action="process_payment.php" method="post">
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" required><br><br>

      <label for="wa">No. WhatsApp:</label><br>
      <input type="tel" id="wa" name="wa" pattern="[0-9]+" required><br><br>

      <label for="username">Username TikTok:</label><br>
      <input type="text" id="username" name="username" required><br><br>

      <label for="item">Item yang dibeli:</label><br>
      <input type="text" id="item" name="item" readonly><br><br>

      <label for="harga">Harga:</label><br>
      <input type="text" id="harga" name="harga" readonly><br><br>

      <input type="submit" value="Bayar">
    </form>
  </div>
</body>
</html>