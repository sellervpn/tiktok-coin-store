const buyButtons = document.querySelectorAll('.buy-button');
const customCoinsInput = document.getElementById('custom-coins');

buyButtons.forEach(button => {
  button.addEventListener('click', () => {
    const packageId = button.dataset.packageId;
    let coins, price;

    if (packageId === 'custom') {
      coins = customCoinsInput.value;
      if (coins <= 0 || isNaN(coins)) {
        alert('Masukkan jumlah koin yang valid.');
        return;
      }
      price = `Rp${coins * 250}`;
    } else {
      coins = button.dataset.coins + " Koin";
      price = button.dataset.price;
    }

    // Buka formulir pembayaran di jendela baru
    const formWindow = window.open('form_pembayaran.php', '_blank', 'width=400,height=400');

    // Kirim data ke formulir di jendela baru
    formWindow.onload = function() {
      formWindow.document.getElementById('item').value = coins;
      formWindow.document.getElementById('harga').value = price;
    };
  });
});