<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Luas Persegi Panjang</title>
</head>
<body>

    <h2>Hasil Perhitungan Luas Persegi Panjang</h2>

    <?php
    // Mengecek apakah halaman ini diakses melalui form (method POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Menangkap data 'panjang' dan 'lebar' dari form HTML
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];

        // Menghitung luas persegi panjang (panjang dikali lebar)
        $luas = $panjang * $lebar;

        // Menampilkan hasilnya ke layar
        echo "<p>Nilai Panjang: <b>" . $panjang . "</b></p>";
        echo "<p>Nilai Lebar: <b>" . $lebar . "</b></p>";
        echo "<p>Luas Persegi Panjang adalah: <b>" . $luas . "</b></p>";
        
    } else {
        // Pesan jika file PHP diakses langsung tanpa melalui form
        echo "<p>Silakan isi nilai pada form terlebih dahulu.</p>";
    }
    ?>

    <br>
    <a href="form_persegi_panjang.html">Kembali ke Form</a>

</body>
</html>