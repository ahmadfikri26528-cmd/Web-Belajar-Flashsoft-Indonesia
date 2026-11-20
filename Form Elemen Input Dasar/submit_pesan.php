<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Formulir Pesan</title>
</head>
<body>

    <h2>Pesan Telah Diterima!</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Menangkap data dari form
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $subjek = $_POST['subjek'];
        $pesan = $_POST['pesan'];
        
        // Menampilkan data
        echo "<p><strong>Nama:</strong> " . $nama . "</p>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo "<p><strong>Subjek:</strong> " . $subjek . "</p>";
        
        // Menggunakan nl2br agar enter pada textarea terbaca
        echo "<p><strong>Pesan:</strong><br>" . nl2br($pesan) . "</p>";

    } else {
        echo "<p>Silakan isi formulir pesan terlebih dahulu.</p>";
    }
    ?>

    <br>
    <a href="atribut_latihan.html">Kembali ke Formulir</a>

</body>
</html>