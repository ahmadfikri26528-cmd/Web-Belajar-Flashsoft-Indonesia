<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Formulir Saran</title>
</head>
<body>

    <h2>Terima Kasih Atas Saran Anda!</h2>

    <?php
    // Mengecek apakah form benar-benar dikirim menggunakan POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Menangkap semua data berdasarkan atribut 'name' di HTML
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $saran = $_POST['saran'];
        
        // Mengecek apakah jenis saran sudah dipilih (berjaga-jaga jika kosong)
        if (isset($_POST['jenis_saran'])) {
            $jenis_saran = $_POST['jenis_saran'];
        } else {
            $jenis_saran = "Belum dipilih";
        }

        // Menampilkan hasil ke layar
        echo "<p><strong>Nama:</strong> " . $nama . "</p>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo "<p><strong>Kategori:</strong> " . $jenis_saran . "</p>";
        
        // Menggunakan nl2br() khusus untuk textarea
        echo "<p><strong>Isi Saran:</strong><br>" . nl2br($saran) . "</p>";

    } else {
        // Pesan jika halaman dibuka langsung tanpa melalui form
        echo "<p>Silakan isi formulir saran terlebih dahulu.</p>";
    }
    ?>

    <br>
    <a href="elemen_2_latihan.html">Kembali ke Formulir</a>

</body>
</html>