<?php
require_once 'config.php'; // Sertakan file konfigurasi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $wa = $_POST['wa'];
  $username = $_POST['username'];
  $item = $_POST['item'];
  $harga = $_POST['harga'];

  // Validasi input (opsional)

  // Buat link WhatsApp
  $pesan = "Pesanan baru:\nEmail: $email\nWhatsApp: $wa\nUsername TikTok: $username\nItem: $item\nHarga: $harga";
  $link_wa = "https://wa.me/$nomor_tujuan?text=" . urlencode($pesan); // Gunakan $nomor_tujuan dari config.php

  // Redirect ke link WhatsApp
  header("Location: $link_wa"); 
  exit();
}
?>