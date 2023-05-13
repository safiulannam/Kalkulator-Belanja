<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Belanja</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="kalkulator">
    <h2 class="judul">Kalkulator Belanja</h2>
    <form method="post" action="">
        <input type="number" name="harga" placeholder="Masukkan harga barang">
        <input type="number" name="jumlah" placeholder="Masukkan jumlah barang">
        <input type="submit" name="hitung" value="Hitung" class="submit">
    </form>
    <?php
if (isset($_POST['hitung'])) {
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $total = $harga * $jumlah;
    if ($jumlah > 37) {
        $diskon = 0.1 * $total;
    } else {
        $diskon = 0.05 * $total;
    }
    $total_belanja = $total - $diskon;
    echo "Harga barang: " . $harga . "<br>";
    echo "Jumlah barang: " . $jumlah . "<br>";
    echo "Diskon: " . $diskon . "<br>";
    echo "Total belanja: " . $total_belanja . "<br>";
}
?>
</div>
</body>
</html>
