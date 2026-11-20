<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Perhitungan</title>
</head>
<body>

    <h2>Hasil Perhitungan Luas Segitiga</h2>

    <?php
    // Mengecek apakah ada data yang dikirim menggunakan method POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Menangkap data 'alas' dan 'tinggi' dari form HTML
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        // Rumus luas segitiga: 1/2 x alas x tinggi
        $luas = 0.5 * $alas * $tinggi;

        // Menampilkan hasil ke layar
        echo "<p>Nilai Alas: <b>" . $alas . "</b></p>";
        echo "<p>Nilai Tinggi: <b>" . $tinggi . "</b></p>";
        echo "<p>Luas Segitiga adalah: <b>" . $luas . "</b></p>";
        
    } else {
        // Pesan error jika file PHP diakses langsung tanpa melalui form
        echo "<p>Silakan isi form terlebih dahulu.</p>";
    }
    ?>

    <br>
    <a href="form_segitiga.html">Kembali ke Form</a>

</body>
</html>