<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Luas Lingkaran</title>
</head>
<body>

    <h2>Hasil Perhitungan Luas Lingkaran</h2>

    <?php
    // Mengecek apakah halaman ini diakses melalui form (method POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Menangkap data 'jari_jari' dari form HTML
        $jari_jari = $_POST['jari_jari'];

        // Menghitung luas lingkaran (pi x r x r)
        // Fungsi pi() adalah fungsi bawaan PHP untuk nilai 3.14159...
        $luas = pi() * $jari_jari * $jari_jari;

        // Menampilkan hasilnya ke layar
        echo "<p>Nilai Jari-jari: <b>" . $jari_jari . "</b></p>";
        
        // Menggunakan round() untuk membulatkan hasil menjadi 2 angka di belakang koma agar rapi
        echo "<p>Luas Lingkaran adalah: <b>" . round($luas, 2) . "</b></p>";
        
    } else {
        // Pesan jika file PHP diakses langsung tanpa melalui form
        echo "<p>Silakan isi form terlebih dahulu.</p>";
    }
    ?>

    <br>
    <a href="form_lingkaran.html">Kembali ke Form</a>

</body>
</html>