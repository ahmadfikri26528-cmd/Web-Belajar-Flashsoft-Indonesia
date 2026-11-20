<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Luas Persegi</title>
</head>
<body>

    <h2>Hasil Perhitungan Luas Persegi</h2>

    <?php
    // Mengecek apakah halaman ini diakses melalui form (method POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Menangkap data 'sisi' yang dikirim dari form HTML
        $sisi = $_POST['sisi'];

        // Menghitung luas persegi (sisi dikali sisi)
        $luas = $sisi * $sisi;

        // Menampilkan hasilnya ke layar
        echo "<p>Panjang Sisi: <b>" . $sisi . "</b></p>";
        echo "<p>Luas Persegi adalah: <b>" . $luas . "</b></p>";
        
    } else {
        // Menampilkan pesan ini jika file php dibuka langsung tanpa lewat form
        echo "<p>Silakan isi nilai pada form terlebih dahulu.</p>";
    }
    ?>

    <br>
    <a href="form_persegi.html">Kembali ke Form</a>

</body>
</html>