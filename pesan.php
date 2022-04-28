<html>
<head>
<?php
// <!-- Setting Body menjadi Tersembunyi (Menyembunyikan Respon PHPMailer) -->
echo '<style>body {visibiliy: hidden;}</style>';
// Import connection.php dan mailer.php
include('connection.php');
include('mailer.php');

// Mendapat millisecond untuk ID Pemesasnan
function milliseconds() {
    $mt = explode(' ', microtime());
    return ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
}
// Mendapat Parameter POST dan DEklarasi Variabel
$code = milliseconds();
$name = $_POST['name'];
$mail = $_POST['mail'];
$tel = $_POST['no_telp'];
$loc = $_POST['alamat'];
$prod = $_POST['prod'];
$count = $_POST['count'];
$price = $_POST['price'];
$total_price = number_format($count * $price,2,',','.'); //Menghitung Harga Total

// Input Data Pemesanan Ke Database
$query = "INSERT INTO pesanan (kode, nama, email, no_telp, alamat, barang_pesanan, jumlah_pesanan, harga) VALUES ('$code', '$name', '$email','$tel', '$loc', '$prod', '$count', 'IDR $total_price')";
$conn->query($query);

// Mengirim Email Ke Penjual dan Pembeli
SellerMail($name, $mail, $loc, $prod, $count, $code, $price, $tel);
BuyerMail($name, $mail, $loc, $prod, $count, $code, $price, $tel);

// Mengalihkan User Ke Halaman Utama
echo '
<script>
    window.open("' . public_url('') . '", "_self")
</script>
';
?>
</head>
</html>